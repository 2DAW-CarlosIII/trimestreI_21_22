<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropietarioResource;
use App\Models\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PropietarioResource::collection(Propietario::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $propietario = json_decode($request->getContent(), true);

        $propietario = Propietario::create($propietario);

        return new PropietarioResource($propietario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function show(Propietario $propietario)
    {
        return new PropietarioResource($propietario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        $this->authorize('update', Propietario::class);

        $propietarioData = json_decode($request->getContent(), true);
        $propietario->update($propietarioData);

        return new PropietarioResource($propietario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario)
    {
        $propietario->delete();
    }

    public function aulavirtual(){
        $response = Http::asForm()->post('https://my.api.mockaroo.com/owners/id.json', [
            'key' => '65658a10',
        ]);
    }
}
