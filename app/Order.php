<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = array('destination', 'message', 'user_id');

    /**
     * The products that belong to the order.
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}