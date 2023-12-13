<?php

namespace App\Http\Resources;

use App\Http\Resources\ClienteResource;
use App\Http\Resources\AsesoreResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProyectoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'idProyecto' => $this->idProyecto,
            'Nombre' => $this->Nombre,
            'Riesgos' => $this->Riesgo,
            'Progreso' => $this->Progreso,
            'Cliente' => $this->cliente->nombre_cliente,
            'Asesor' => $this->asesore->nombre_asesor,
        ];
    }
}
