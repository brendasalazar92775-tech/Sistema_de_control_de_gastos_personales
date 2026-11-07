<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'nombre',
        'email',
        'password',
    ];



    public function categorias()
    {
        return $this->hasMany(Categoria::class, 'categoria_id');
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class, 'movimiento_id');
    }


}
