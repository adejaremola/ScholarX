<?php

namespace App;

use App\AcademicProfile;

use Illuminate\Database\Eloquent\Model;

class SponsorApplication extends Model
{

    public function getStatus()
    {
        switch ($this->status) {
            case 0: 
                return 'pending';
                break;

            case 1: 
                return 'approved';
                break;

            case 2: 
                return 'in_fund';
                break;

            case 3: 
                return 'funded';
                break;

            case 4: 
                return 'rejected';
                break;
        }
    }
    
    protected $fillable = [
        'academic_profile_id', 'sponsor_id', 'amount', 'charge', 'total', 'profile', 'status'
    ];
    
    public static $rules = array(
		'amount' => 'required',
    	'profile' => 'required',
		);
    
    public function sponsor()
    {
    	return $this->hasMany('App\SponsorPayment');
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
