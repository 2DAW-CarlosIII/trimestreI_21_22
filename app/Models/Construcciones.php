<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construcciones extends Model
{
    use HasFactory;

    public function propietario()
    {
        return $this->hasOne(Propietario::class, 'idPropietario');
    }

}
