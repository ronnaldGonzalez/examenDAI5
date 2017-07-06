<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'fechaNacimiento', 'sexo', 'direccion',
    ];

    public function users()
    {
        return $this->morphMany('App\User', 'usertable');
    }

    public function atenciones()
    {
        return $this->hasMany('App\Atencion');
    }

    public function telefonos()
    {
        return $this->hasMany('App\Telefono');
    }

    public function setDireccionAttribute($direccion)
    {
        $this->attributes['direccion'] = bcrypt($direccion);
    }
}
