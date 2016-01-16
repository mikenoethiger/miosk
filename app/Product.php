<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Get the categories for the product.
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function getSaleInPercentage()
    {
        if ($this->sale_price == null)
        {
            return null;
        }
        return 100-100/$this->price*$this->sale_price;
    }
}