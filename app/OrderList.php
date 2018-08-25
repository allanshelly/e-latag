<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    //
    protected $fillable = [
    	'order_id',
    	'product_id',
    	'quantity'
    ];
}
