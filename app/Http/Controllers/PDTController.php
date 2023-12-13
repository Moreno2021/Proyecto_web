<?php

namespace App\Http\Controllers;

use App\Models\Plandetrabajo;
use App\Models\Asesore;
use App\Models\Proyecto;
use App\Models\Archivo;
use App\Models\Carpeta;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PDTController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $plandework = Plandetrabajo::all();
        $proyectos = Proyecto::all();
        $asesores = Asesore::all();
        return view('sistema.plandework.index', compact('plandework', 'proyectos', 'asesores'));
    }

    public function redireccionarAManual()
    {
        return view('sistema.manuales.manualPDT');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        session(['idProyecto' => $id]);
        $asesores = Asesore::all();
        return view('sistema.proyectos.plandework.create', compact('asesores'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idProyectos' => 'required',
            'idAsesores' => 'required',
            'NombreActividad' => 'required',
            'FechaInicio' => 'required',
            'FechaFin' => 'required',
        ]);

        $plandework = new Plandetrabajo;
        $plandework->id_proyecto = $request->input('idProyectos'); // Asigna el proyecto a partir de la sesión
        $plandework->id_Asesor = $request->input('idAsesores');
        $plandework->nombre_actividad = $request->input('NombreActividad');
        $plandework->fecha_inicio = $request->input('FechaInicio');
        $plandework->fecha_fin = $request->input('FechaFin');
        $plandework->save();

        // Recalcula el progreso del proyecto
        $proyectos = Proyecto::find($plandework->id_proyecto);
        $actividades = Plandetrabajo::where('id_proyecto', $proyectos->idProyecto)->get();
        $actividadesTerminadas = $actividades->where('estado', 'Terminado')->count();
        $proyectos->Progreso = ($actividadesTerminadas / $actividades->count()) * 100;
        $proyectos->save();

        return redirect()->back();
    }


    public function cambiarEstado($id)
    {
        $plandework = Plandetrabajo::find($id);

        if (!$plandework) {
            return response()->json(['message' => 'No se encontró la actividad'], 404);
        }

        $plandework->estado = 'Terminado';
        $plandework->save();

        // Recalcula el progreso del proyecto
        $proyectos = Proyecto::find($plandework->id_proyecto);
        $actividades = Plandetrabajo::where('id_proyecto', $proyectos->idProyecto)->get();
        $actividadesTerminadas = $actividades->where('estado', 'Terminado')->count();
        $proyectos->Progreso = ($actividadesTerminadas / $actividades->count()) * 100;
        $proyectos->save();

        return response()->json(['message' => 'Actividad marcada como terminada']);
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $plandework = Plandetrabajo::find($id);
        $proyectos = Proyecto::all();
        $carpetas = $plandework->carpetas;
        return view('sistema.plandework.show', compact('plandework', 'proyectos', 'carpetas'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plandework = Plandetrabajo::findOrFail($id);
        return view('Evidencia.edit', compact('evidencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'idProyectosE' => 'required',
            'idAsesoresE' => 'required',
            'NombreActividadE' => 'required',
            'FechaInicioE' => 'required',
            'FechaFinE' => 'required',
        ]);

        $plandework = Plandetrabajo::find($id);
        $plandework->id_proyecto = $request->input('idProyectosE'); // Asigna el proyecto a partir de la sesión
        $plandework->id_Asesor = $request->input('idAsesoresE');
        $plandework->nombre_actividad = $request->input('NombreActividadE');
        $plandework->fecha_inicio = $request->input('FechaInicioE');
        $plandework->fecha_fin = $request->input('FechaFinE');
        $plandework->update();
        return redirect()->back();
    }
    public function verificarArchivos($idPDT)
    {
        $plandework = Plandetrabajo::find($idPDT);

        if (!$plandework) {
            return response()->json(['tieneArchivos' => false]);
        }

        $tieneArchivos = $plandework->archivos->isNotEmpty();

        return response()->json(['tieneArchivos' => $tieneArchivos]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plandework = Plandetrabajo::find($id);

        if (!$plandework) {
            return response()->json(['message' => 'No se encontró la actividad'], 404);
        }

        $idProyecto = $plandework->id_proyecto; // Guarda el ID del proyecto antes de eliminar la actividad

        $plandework->delete();

        // Recalcula el progreso del proyecto
        $proyectos = Proyecto::find($idProyecto);
        $actividades = Plandetrabajo::where('id_proyecto', $proyectos->idProyecto)->get();
        $actividadesTerminadas = $actividades->where('estado', 'Terminado')->count();
        if ($actividades->count() > 0) {
            $proyectos->Progreso = ($actividadesTerminadas / $actividades->count()) * 100;
        } else {
            $proyectos->Progreso = 0; // Si no hay actividades, el progreso es 0
        }
        $proyectos->save();

        return response()->json(['message' => 'Actividad eliminada exitosamente']);
    }
}
