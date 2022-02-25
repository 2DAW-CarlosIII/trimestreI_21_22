<?php

namespace Database\Seeders;

use App\Models\Propietario;
use Illuminate\Database\Seeder;

class PropietariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$propietarios as $propietario) {
            $propietarioObj = new Propietario;
            $propietarioObj->dni = $propietario['dni'];
            $propietarioObj->nombre = $propietario['nombre'];
            $propietarioObj->apellido = $propietario['apellidos'];
            $propietarioObj->save();
        }
    }
    private static $propietarios = array(
        array('idPropietario' => '1','dni' => '42171365Z','apellidos' => 'Antequera Guerra','nombre' => 'Pablo Antonio'),
        array('idPropietario' => '2','dni' => '45450776Q','apellidos' => 'Arvelo Martín','nombre' => 'Francisco Javier'),
        array('idPropietario' => '3','dni' => '42161295H','apellidos' => 'Díaz Perdomo','nombre' => 'Josefina'),
        array('idPropietario' => '4','dni' => '42161840B','apellidos' => 'Díaz Pérez','nombre' => 'José Luis'),
        array('idPropietario' => '5','dni' => '42178497Q','apellidos' => 'Fernández Hernández','nombre' => 'Ester María'),
        array('idPropietario' => '6','dni' => '42169476B','apellidos' => 'Hernández Bravo','nombre' => 'Ricardo'),
        array('idPropietario' => '7','dni' => '42159971M','apellidos' => 'Hernández Jorge','nombre' => 'José Ignacio'),
        array('idPropietario' => '8','dni' => '42170561S','apellidos' => 'Martín Rodríguez','nombre' => 'Ricardo Manuel'),
    );

}
