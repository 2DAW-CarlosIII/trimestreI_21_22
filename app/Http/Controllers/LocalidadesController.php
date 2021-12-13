<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipio;
class LocalidadesController extends Controller {
    public function getIndex($id){
        $localidad = Municipio::findOrFail($id);
        return view('localidades', array('localidad'=>$localidad));
    }
}
