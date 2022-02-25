<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $fillable = [
        'dni',
        'nombre',
        'apellido',
    ];
    public function Construcciones()
    {
        return $this->hasMany(Construccion::class);
    }
}
