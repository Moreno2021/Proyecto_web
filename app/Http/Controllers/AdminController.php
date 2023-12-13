<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Asesore;
use App\Models\Proyecto;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        // ...
        $Usuarios = User::all();
        $cantidadUsuarios = $Usuarios->count();
        $usuariosDes = User::where('status', 0)->get();
        $usuariosDesabilitados = $usuariosDes->count();
        $proyectos = Proyecto::where('Progreso', 0)->get();
        $proyectostotales = Proyecto::all()->count();
        $cantidadProyectos = $proyectos->count(); // Obtén la cantidad de proyectos
        $proyectosTerminados = Proyecto::where('Progreso', 100)->get();
        $cantidadProyectosTerminados = $proyectosTerminados->count();

        // Crea un gráfico de barras

        $chart = [
            'chart' => [
                'type' => 'pie',
            ],
            'title' => [
                'text' => 'Estado de Proyectos',
            ],
            'plotOptions' => [
                'pie' => [
                    'innerSize' => '60%',
                    'dataLabels' => [
                        'enabled' => true,
                        'format' => '<b>{point.name}</b>: {point.y}',
                    ],
                ],
            ],
            'series' => [
                [
                    'name' => 'Proyectos',
                    'data' => [
                        ['Proyectos totales', $proyectostotales],
                        ['Proyectos en ejecución', $cantidadProyectos],
                        ['Proyectos terminados', $cantidadProyectosTerminados],
                    ],
                ],
            ],
        ];
        
        
        
        // Devuelve la vista con los datos de proyectos y otras variables necesarias
        return view('admin.index', [
            'cantidadUsuarios' => $cantidadUsuarios,
            'usuariosDesabilitados' => $usuariosDesabilitados,
            'cantidadProyectos' => $cantidadProyectos, // Pasa la cantidad de proyectos a la vista
            'cantidadProyectosTerminados' => $cantidadProyectosTerminados, // Pasa la cantidad de asesores a la vista
            'chart' => $chart, // Pasa el gráfico a la vista
        ]);
    }
}