<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $fillable=['nombre','categoria_id'];
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    public function user()
    {
        return $this->hasMany('App\User');
    }
}
