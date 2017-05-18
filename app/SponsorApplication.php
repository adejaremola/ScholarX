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

    
    public function sponsor()
    {
    	return $this->hasMany('App\Sponsor');
    }
    

    public function profiler()
    {
    	return $this->belongsTo(AcademicProfile::class, 'academic_profile_id');
    }

    /* STATUS FLAGS AND INDICATIONS
    * 0 => 'pending',
    * 1 => 'approved',
    * 2 => 'in_fund',
    * 3 => 'funded',
    * 4 => 'rejected',
    */
}
