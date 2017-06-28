<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne('App\AcademicProfile');
    }

    public function sponsor()
    {
        return $this->hasMany('App\SponsorPayment');
    }

    /* role{
        0 = 'applicant'
        1 = 'sponsor'
        2 = 'admin'
     }
     */
}
