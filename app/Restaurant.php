<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'nombre', 
        'direccion',
        'ciudad',
        'pais',
        'telefono'
    ];

    public function entrantes(){
        return $this->hasMany(Entrante::class, 'restaurant_id', 'id');
    }
}
