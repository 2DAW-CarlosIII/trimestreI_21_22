<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Construccion;

class Propietario extends Model
{
    use HasFactory;
    protected $fillable = [
        "dni", "nombre", "apellidos"
    ];

    public function contruccion()
    {
        return $this->hasMany(Construccion::class);
    }
}
