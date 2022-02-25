<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $table = 'propietarios';
    protected $fillable = [
        'id',
        'dni',
        'nombre',
        'apellidos'
    ];
    public function construcciones(){
        return $this->hasMany(Construccion::class, 'propietarios');
    }

    public function isPropietario(User $user){
        if($user->id == $this->id){
            return true;
        }else{
            return false;
        }
    }
}
