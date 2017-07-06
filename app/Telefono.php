<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    protected $fillable = [
        'paciente_id', 'telefono',
    ];

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }

}
