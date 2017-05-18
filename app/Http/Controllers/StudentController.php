<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AcademicProfile;

use App\SponsorApplication;

use Image;

use Auth;

class StudentController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function redirect()
    {
        return redirect('user/profile/create');
    }

    public function index(AcademicProfile $profile)
    {   
        $applications = SponsorApplication::where('academic_profile_id', '=', $profile->id )
                                                  ->get();
        return view('student.index')
                ->with('profile', $profile)
                ->with('applications', $applications);
    }

    public function create()
    {
        $user = Auth::user();
        $profile = $user->profile;
    	return view('student.profile')
                ->with('user', $user)
                ->with('profile', $profile);
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

        $profile->user_id = Auth::user()->id;
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
            return redirect('/profile/create')
                        ->with('message', 'Profile Update successful!');
        }
        else {
             return back()->withInput();
        }
    }

    public function apply(SponsorApplication $application)
    {
        $profile = $application->profiler;
        $method = 'apply';
        return view('student.edit_application')
                    ->with('application', $application)
                    ->with('profile', $application)
                    ->with('method', $method);
    }

    public function postApply(AcademicProfile $profile, Request $request)
    {
        # code...
    }

    public function editApplication(SponsorApplication $application)
    {
        $profile = $application->profiler;
        $method = 'edit';
        return view('student.edit_application')
                    ->with('application', $application)
                    ->with('profile', $application)
                    ->with('method', $method);
    }

    public function postEditApplication(Request $request, SponsorApplication $application)
    {
        $this->validate($request, SponsorApplication::$rules);
        
        $application->academic_profile_id = Auth::user()->profile->id;
        $application->sponsor_id = '';
        $application->amount = $request->amount;
        $application->profile = $request->profile;
        $application->status = 0;
        $application->update();

        if ($application->update()) {
            $message = 'Update successful!';
            return redirect('/user/'.$application->profiler->id.'/index')
                        ->with('message', $message);
        }
        else {
            $message = 'Application failed, please retry later.';
            return back()->withInput()
                        ->withErrors( $message);
        }
    }

    public function deleteApplication(SponsorApplication $application)
    {
        $id = $application->profiler->id;
        $application->delete();

        if ($application->delete()) {
            return redirect('/user/'.$id.'/index')
                    ->with('message', 'Application successfully deleted!');
        } else {
            return redirect('/user/'.$id.'/index')
                    ->withErrors('Delete unsuccessful, please try again later!');
        }
    }

}



// @getProfile
// @postProfile
// @postApplication
// @createApplication
// @updateApplication