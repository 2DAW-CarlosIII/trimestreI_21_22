<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConstruccionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "refCatastral" => $this->refCatastral,
            "direccion" => $this->direccion,
            "uso" => $this->uso,
            "tipoAyuda" => $this->tipoAyuda,
            "habitual" => $this->habitual,
            "seguro" => $this->seguro,
            "propietario" => new PropietarioResource($this->propietario),
            "fechaAdquisicion" => $this->fechaAdquisicion,
            "actividad" => $this->actividad,
            "codigoCNAE" => $this->codigoCNAE,
            "cultivo" => $this->cultivo
        ];
}
