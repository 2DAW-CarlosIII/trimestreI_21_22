<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class localidadesController extends Controller
{
    public function getIndex($municipio_id)
    {
        $localidad = Localidad::where('municipio_id', $municipio_id);
        return view('getIndex',
        array(
            'arrayMunicipios' => $municipio_id));
    }
}
