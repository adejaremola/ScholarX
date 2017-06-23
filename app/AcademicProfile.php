<?php

namespace App;

use App\User;

use App\SponsorApplication;

use Illuminate\Database\Eloquent\Model;

class AcademicProfile extends Model
{
    protected $fillable = [
        'user_id', 'institution', 'faculty', 'department', 'level', 'cgpa', 'pic_url', 'category', 'matric_no'
    ];

    
    public static $rules = array(
		'user_id' => 'numeric',
		'institution' => 'required',
		'level' => 'required|alpha_num',
        'faculty' => '',
        'department' => '',
        'matric_no' => 'required',
		'cgpa' => 'numeric',
		'pic_url' => 'required',
		'category' => 'required|in:1,2'
		);

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function application()
    {
        return $this->hasOne(SponsorApplication::class);
    }

    // category
    // tertiary == 2
    // primary == 1

}
