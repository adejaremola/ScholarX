<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'user_id'
    ];

    
    public static $rules = array(
		'user_id' => 'required|integer'
		);
}
