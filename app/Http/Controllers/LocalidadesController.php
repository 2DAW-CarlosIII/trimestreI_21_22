<?php

namespace App\Http\Controllers;

use app\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    public function getIndex() {

        $localidad = Localidad::all();
        return view('localidad', array(
            'localidad' => $localidad
        ));

    }
}
