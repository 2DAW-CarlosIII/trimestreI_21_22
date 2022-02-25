<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Construccion;

class Propietario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'dni',
        'nombre',
        'apellidos',
    ];

    public function construcciones(){
        return $this->hasMany(Construccion::class, 'refCatastral');
    }
}
