<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $fillable = [
        'user_id'
    ];

     protected $casts = [
        'user_id' => 'int',
    ];

    protected $table = 'sponsors';

    
    public static $rules = array(
		'user_id' => 'required|integer'
		);

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function application()
    {
    	return $this->hasMany('App\SponsorApplication', 'sponsor_id');
    }
}
