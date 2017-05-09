<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicProfile extends Model
{
    protected $fillable = [
        'user_id', 'institution', 'faculty', 'department', 'level', 'cgpa', 'pic_url', 'category'
    ];

    
    public static $rules = array(
		'user_id' => 'required|integer',
		'institution' => 'required',
		'level' => 'required|alpha_num',
		'cgpa' => 'integer',
		'pic_url' => 'required',
		'category' => 'required|in:1,2'
		);
}
