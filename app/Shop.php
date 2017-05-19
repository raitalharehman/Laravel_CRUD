<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //

    protected $fillable = [
        'shop_name'
    ];


    protected $hidden = [
        'remember_token'
    ];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_shop', 'shop_id', 'product_id');

    }

}
