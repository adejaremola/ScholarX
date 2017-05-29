<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsorPayment extends Model
{
    protected $fillable = [
        'user_id', 'amount', 'sponsor_application_id'
    ];

    
    public static $rules = array(
		'amount' => 'required',
		);

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function application()
    {
        return $this->belongsTo('App\SponsorApplication');
    }
}
