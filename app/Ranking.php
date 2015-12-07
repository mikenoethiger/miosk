<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
