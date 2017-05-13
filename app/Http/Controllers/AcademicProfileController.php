<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AcademicProfile;

use Image;

class AcademicProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function create()
    {
    	return view('profile.create');
    }

    public function store(Request $request)
    {    
        $this->validate($request, AcademicProfile::$rules);
        
        $image = $request->pic_url;
        $imagename = time()."-".$image->getClientOriginalName();
        Image::make($image->getRealPath())->resize(200, 200)->save('/'.public_path().'/images/'. $imagename);

        $profile = new AcademicProfile;
        $profile->user_id = $request->user_id;
        $profile->institution = $request->institution;
        $profile->faculty = $request->faculty;
        $profile->department = $request->department;
        $profile->level = $request->level;
        $profile->matric_no = $request->matric_no;
        $profile->cgpa = $request->cgpa;
        $profile->category = $request->category;
        $profile->pic_url = 'images/'.$imagename;
        $profile->save();

        if ($profile) {
	        return redirect('/apply');
        }
        else {
        	 return back()->withInput();
        }

    }

    public function edit(AcademicProfile $profile, Request $request)
    {
        $this->validate($request, AcademicProfile::$rules);
        
        $image = $request->pic_url;
        $imagename = time()."-".$image->getClientOriginalName();
        Image::make($image->getRealPath())->resize(200, 200)->save(public_path().'/images/'. $imagename);

        $profile->user_id = $request->user_id;
        $profile->institution = $request->institution;
        $profile->faculty = $request->faculty;
        $profile->department = $request->department;
        $profile->level = $request->level;
        $profile->matric_no = $request->matric_no;
        $profile->cgpa = $request->cgpa;
        $profile->category = $request->category;
        $profile->pic_url = 'images/'.$imagename;
        $profile->update();

        if ($profile->update()) {
            return back();
        }
        else {
             return back()->withInput();
        }
    }
}
