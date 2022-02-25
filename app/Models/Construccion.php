<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construccion extends Model
{
    use HasFactory;

    protected $table = "construcciones";

    protected $fillable = [
        'refCatastral',
        'direccion',
        'uso',
        'tipoAyuda',
        'habitual',
        'seguro',
        'propietario',
    ];

    public function propietarios(){
        return $this->hasOne(Propietario::class);
    }
}
