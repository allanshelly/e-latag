<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
    	'name'
    ];



    public produces(){
    	return $this->hasMany(Produce::class);
    }
}
