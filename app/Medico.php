<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function setnombreAttribute($value)
    {
        $this->attributes['nombre'] = strtoupper($value);
    }
}
