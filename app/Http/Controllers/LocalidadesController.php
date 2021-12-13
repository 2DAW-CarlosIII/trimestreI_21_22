<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadesController extends Controller
{
    public function getIndex($municipio_id){
        $localidades = Localidad::all();
        return view('localidades', array(
            'localidades' => $localidades
        ));
    }
}
