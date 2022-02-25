<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Propietario extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'dni',
        'nombre',
        'apellidos'
    ];

    public function construcciones()
    {
        return $this->hasMany(Construccion::class, 'propietario');
    }
}
