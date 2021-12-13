<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    public function getIndex()
    {
        $municipios = Municipio::all();
        return view('municipios', array(
            'municipios' => $municipios
        ));
    }

    public function getEdit($municipio_id)
    {
        $municipios = Municipio::findOrFail($municipio_id);
        return view('editMunicipio',
        array(
            'ArrayMunicipios' => $municipios)
        );
    }

    public function putEdit(Request $request, $municipio_id)
    {
        $municipios = Municipio::findOrFail($municipio_id);
        $municipios->nombre = $request->input('nombre');
        $municipios->poblacion= $request->input('poblacion');
        $municipios->save();
        return redirect(url('/municipios'));
    }
}
