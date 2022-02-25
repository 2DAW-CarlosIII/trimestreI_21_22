<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Propietario;
use App\Http\Resources\PropietarioResource;
use Illuminate\Support\Facades\Http;

class PropietarioController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Propietario::class, 'propietario');
    }

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
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        $propietarioData = json_decode($request->getContent(), true);
        $propietario->update($propietarioData);

        return new PropietarioResource($propietario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario)
    {
        $propietario->delete();
    }

    public function mostrarCursos(){
        $id = count(Propietario::all());

        $response = Http::get('https://my.api.mockaroo.com/owners/'.$id.'.json', [
            'key' => '65658a10',
        ]);

        return Propietario::create([
            'id' => $response['id'],
            'dni' => $response['dni'],
            'nombre' => $response['first_name'],
            'apellidos' => $response['last_name'],
        ]);
    }

}
