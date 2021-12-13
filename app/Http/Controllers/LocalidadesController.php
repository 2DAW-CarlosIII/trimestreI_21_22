<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    public function getIndex($municipios_id)
    {
        $localidades = Localidad::where('localidades', $municipios_id)->get();

        return view(
            'municipios',
            array('localidades' => $localidades)
        );

    }
}
