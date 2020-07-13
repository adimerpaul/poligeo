<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiponotificaciones extends Model
{
    protected $fillable=['nombre','color'];

    public function notificaciones()
    {
        return $this->hasMany('App\Notificaciones');
    }
}
