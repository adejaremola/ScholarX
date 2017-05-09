<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorApplication extends Model
{
    protected $fillable = [
        'sponsor_id', 'academic_profile_id', 'amount', 'profile', 'status'
    ];

    
    public static $rules = array(
		'sponsor_id' => 'required|integer',
		'academic_profile_id' => 'required|integer',
		'amount' => 'required',
		'profile' => 'required',
		'status' => 'integer|in:0,1,2,3'
		);
}
