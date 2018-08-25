<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
    	'buyer_id',
    	'unionAccount'
    ];


    public orderLists() {
    	return $this->hasMany(OrderList::class);
    }
}
