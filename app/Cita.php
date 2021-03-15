<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'fecha',
        'horario',
        'nota',
        'medico_id',
        'cliente_id',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
    public function getFechadmyAttribute($value){
        return Carbon::parse($this->fecha)->format('d/m/Y');
    }

    public function setnotaAttribute($value)
    {
        $this->attributes['nota'] = strtoupper($value);
    }
}
