<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function atenciones()
    {
        return $this->hasMany('App\Atencion');
    }
}
