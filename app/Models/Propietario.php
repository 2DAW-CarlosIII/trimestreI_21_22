<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $fillable = [
        'idPropietario',
        'dni',
        'nombre',
        'apellidos'
    ];

    public function construcciones()
    {
        return $this->hasMany(Construccion::class, 'id');
    }
}
