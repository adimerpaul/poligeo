<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificaciones extends Model
{
    protected $fillable=['nombre','estado','contenido'];

    public function tiponotificaciones()
    {
        return $this->belongsTo('App\Tiponotificaciones');
    }

}
