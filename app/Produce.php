<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    //
    protected $fillable = [
    	'name',
    	'category_id',
    	'season',
    	'duration'
    ];

    public category() {
    	return $this->belongsTo(Category::class);
    }
}
