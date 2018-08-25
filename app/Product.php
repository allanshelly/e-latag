<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    const AVAILABLE = 'available';
    const UNAVAILABLE = 'unavailable';

    protected $fillable = [
    	'product_id',
    	'seller_id',
    	'status',
    	'price',
    	'quantity'
    ];

    public produce(){
        return $this->hasOne(Produce::class);
    }
    
}
