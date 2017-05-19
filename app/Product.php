<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name','price','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }


    public function shop()
    {
        return $this->belongsToMany('App\Shop', 'product_shop', 'product_id', 'shop_id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token'
    ];
}
