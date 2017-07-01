<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\AcademicProfile;

use App\User;

use App\SponsorApplication;

use Image;

use Auth;

class VillageController extends Controller
{

//profile actions
    public function create()
    {
        $user = Auth::user();
        if ($user->profile) {
            return redirect('student/village/apply');
        }
        return view('village.students.profile.update')
                ->with('user', $user);
    }

    public function store(User $user, Request $request)
    {    
        $this->validate($request, AcademicProfile::$rules);
        
        $image = $request->pic_url;
        $imagename = time()."-".$image->getClientOriginalName();
        Image::make($image->getRealPath())->resize(200, 200)->save(public_path().'/image/'. $imagename);

        $profile = new AcademicProfile;
        $profile->user_id = $user->id;
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
            return redirect('student/village/apply')->with('message', 'Profile created successfully!');
        }
        else {
             return back()->withInput()
                          ->with('message', 'Unsuccessful!, retry later.');
        }
    }

    public function edit(AcademicProfile $profile)
    {
        $user = Auth::user();
        return view('village.students.profile.update')
                    ->with('user', $user);
    }

    public function postEdit(AcademicProfile $profile, Request $request)
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
            return redirect('student/village/apply')
                        ->with('message', 'Profile Update successful!');
        }
        else {
             return back()->withInput();
        }
    }
//profile requests end




//Sponsor Applications requests
    //Index - All applications of the user
    public function index(AcademicProfile $profile)
    {   
        $applications = SponsorApplication::where('academic_profile_id', '=', $profile->id )
                                                  ->get();
        return view('village.students.applications.index')
                ->with('profile', $profile)
                ->with('applications', $applications)
                ->with('user', Auth::user());
    }

    //This redirects to the application page, for new application
    public function apply(SponsorApplication $application)
    {
        if(Auth::user()->profile){
            return view('village.students.applications.edit')
                        ->with('user', Auth::user())
                        ->with('method', 'create');
        }
        return redirect('student/village/profile/create');
    }

    //This post-function handles the logic in creating the new application
    public function postApply(AcademicProfile $profile, Request $request)
    {
        $this->validate($request, SponsorApplication::$rules);

        $application = new SponsorApplication;
        $application->amount = $request->amount;
        $application->profile = $request->profile;
        $application->academic_profile_id = $profile ->id;
        $application->sponsor_id = '';
        $application->status = 0;
        $application->save();

        if ($application) {
            return redirect('student/village/'.$profile->id.'/index')
                                ->with('message', 'Application successfully created!');
        }else{
            return back()->withInput()
                         ->with('message', 'Unsuccessful application, retry later.');
        }
    }

    //Rredirectss to editing an old application page
    public function editApplication(SponsorApplication $application)
    {
        return view('village.students.applications.edit')
                    ->with('application', $application)
                    ->with('user', Auth::user())       
                    ->with('method', 'edit');        
    }

    //Logic for editing a pre-existing application
    public function postEditApplication(SponsorApplication $application, Request $request)
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
            return redirect('student/village/'.$application->profiler->id.'/index')
                        ->with('message', $message);
        }
        else {
            $message = 'Application failed, please retry later.';
            return back()->withInput()
                        ->withErrors( $message);
        }
    }

    //logic for deleting an existing application, note that this has no page
    public function deleteApplication(SponsorApplication $application)
    {
        $id = $application->profiler->id;
        $application->delete();
        if ($application->delete()) {
            return redirect('/student/village/'.$id.'/index')
                    ->with('message', 'Application successfully deleted!');
        } else {
            return redirect('/student/village/'.$id.'/index')
                    ->withErrors('Delete unsuccessful, please try again later!');
        }
    }

//Sponsor Application requests end here

}



// @getProfile
// @postProfile
// @postApplication
// @createApplication
// @updateApplication