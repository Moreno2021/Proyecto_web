<?php

namespace App\Http\Controllers;

use App\Models\Cliente; // Asegúrate de importar el modelo Cliente
use App\Http\Resources\ClienteResource;
use App\Http\Resources\AsesoreResource;
use App\Http\Resources\ProyectoResource;
use App\Models\Asesore;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Obtener todos los clientes.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getClientes()
    {
        $clientes = Cliente::all(); // Obtener todos los clientes desde la base de datos

        // Transformar la colección de clientes utilizando ClienteResource
        $clientesResource = ClienteResource::collection($clientes);

        // Responder con la colección transformada como JSON
        return response()->json($clientesResource, 200);
    }
    public function getAsesores()
    {
        $asesores = Asesore::all(); // Obtener todos los clientes desde la base de datos

        // Transformar la colección de clientes utilizando ClienteResource
        $asesoresResource = AsesoreResource::collection($asesores);

        // Responder con la colección transformada como JSON
        return response()->json($asesoresResource, 200);
    }
    public function getProyectos()
    {
        $proyectos = Proyecto::all(); // Obtener todos los clientes desde la base de datos

        // Transformar la colección de clientes utilizando ClienteResource
        $proyectosResource = ProyectoResource::collection($proyectos);

        // Responder con la colección transformada como JSON
        return response()->json($proyectosResource, 200);
    }
}
