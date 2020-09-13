<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipomemo extends Model
{
protected $fillable=['nombre','estado','memo_id'];
    public function memo()
    {
        return $this->belongsTo('App\Memo');
    }
}
