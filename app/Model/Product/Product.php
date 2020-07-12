<?php

namespace App\Model\Product;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Model\Category\Category');
    }

    public function brand()
    {
        return $this->belongsTo('App\Model\Brand\Brand');
    }
}
