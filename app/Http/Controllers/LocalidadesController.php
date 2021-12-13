<?php

namespace App\Http\Controllers;

use App\Models\Localidad;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    public function index($id)
    {
        $localidades = Localidad::where('municipio_id', $id)->get();

        return view('localidades',
        array(
            'ArrayLocalidades' => $localidades)
        );
    }
}
