<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Propietario;

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
        'idClaveAjena',
    ];

    public function propietarios(){
        return $this->hasOne(Propietario::class, 'id');
    }
}
