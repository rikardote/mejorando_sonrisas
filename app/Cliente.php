<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'direccion',
        'nombre',
        'email',
        'telefono_1',
        'telefono_2',
        'responsable',
        'ocupacion',
        'gender',
        'refer_id',
        'fecha_nacimiento',
        'ultima_visita'
    ];

    public function cita()
    {
        return $this->hasMany(Cita::class);
    }

    public function historia_clinica()
    {
        return $this->hasOne(ClinicHistory::class);
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function setnombreAttribute($value)
    {
        $this->attributes['nombre'] = strtoupper($value);
    }
    public function setocupacionAttribute($value)
    {
        $this->attributes['ocupacion'] = strtoupper($value);
    }
    public function setemailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
    public function setresponsableAttribute($value)
    {
        $this->attributes['responsable'] = strtoupper($value);
    }
    public function setdireccionAttribute($value)
    {
        $this->attributes['direccion'] = strtoupper($value);
    }
    public function getNacimientoAttribute($value){
        return Carbon::parse($this->fecha_nacimiento)->format('d/m/Y');
    }
    public function getUltimaAttribute($value){
        return Carbon::parse($this->ultima_visita)->format('d/m/Y');
    }

}
