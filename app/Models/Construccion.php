<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construccion extends Model
{
    use HasFactory;

    protected $table = 'construcciones';

    protected $fillable = [
        'refCatastral',
        'direccion',
        'uso',
        'tipoAyuda',
        'habitual',
        'seguro',
        'propietario',
        'fechaAdquisicion',
        'actividad',
        'codigoCNAE',
        'cultivo',
    ];

    public function propietarios()
    {
        return $this->hasMany(Propietario::class, 'id');
    }
}
