<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $fillable = [
        'fechaContratacion', 'especialidad', 'valorConsulta',
    ];

    public function users()
    {
        return $this->morphMany('App\User', 'usertable');
    }

    public function atenciones()
    {
        return $this->hasMany('App\Atencion');
    }
}
