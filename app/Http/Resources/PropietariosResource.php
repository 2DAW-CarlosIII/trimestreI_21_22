<?php

namespace App\Http\Resources;

use App\Models\Construccion;
use Illuminate\Http\Resources\Json\JsonResource;

class PropietariosResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            //'id' => $this->id,
            "dni" => $this->dni,
            "nombre" => $this->nombre,
            "apellidos" => $this->apellidos,
            "construciones" => new ConstruccionesResource($this->construcciones)
        ];
    }
}
