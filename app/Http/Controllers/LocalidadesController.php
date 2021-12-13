<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadesController extends Controller
{
    public function getIndex($id)
    {
        $localidades = Localidad::where('municipio_id', $id)->get();
        return view(
            'localidades',
            array('arrayLocalidades' => $localidades)
        );
    }
}
