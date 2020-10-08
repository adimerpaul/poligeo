<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policeplan extends Model
{
    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }
    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }
}
