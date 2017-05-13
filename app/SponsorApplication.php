<?php

namespace App;

use App\AcademicProfile;

use Illuminate\Database\Eloquent\Model;

class SponsorApplication extends Model
{
    protected $fillable = [
        'academic_profile_id', 'sponsor_id', 'amount', 'profile', 'status'
    ];
    
    public static $rules = array(
		'amount' => 'required',
	'profile' => 'required',
		);

    /*
    *public function sponsor()
    *{
    *	return $this->belongsTo('App\Sponsor');
    *}
    */

    public function profiler()
    {
    	return $this->belongsTo(AcademicProfile::class, 'academic_profile_id');
    }
}
