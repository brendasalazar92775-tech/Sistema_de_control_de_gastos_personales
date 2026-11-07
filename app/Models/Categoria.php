<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'user_id',
        'nombre',
        'tipo',
        'descripcion'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
