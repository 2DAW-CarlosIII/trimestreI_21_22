<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    //

    public function  index($municipio_id=1)
    {
        $localidades = Localidad::where('municipio_id', $municipio_id)->get();
        return view('localidades', array('localidades' => $localidades));
    }

}
