<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorApplication;

use App\AcademicProfile;

use Auth;

class SponsorApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
        $applicants = SponsorApplication::where('status', '=', 0)->get();
        return view('application.index')
                    ->with('applicants', $applicants);
    }

    public function details(AcademicProfile $applicant)
    {
        return view('pages.details')
                    ->with('applicant', $applicant);
    }

    public function create()
    {
        $academic_profile = Auth::user()->academicProfile;
    	if(Auth::user()->academicProfile){
	    	return view('application.application')
                        ->with('academic_profile', $academic_profile);
    	}

    	return redirect('/profile');
    }

    public function store(Request $request)
    {
        $this->validate($request, SponsorApplication::$rules);
        
        $application = new SponsorApplication;
        $application->academic_profile_id = Auth::user()->id;
        $application->sponsor_id = '';
        $application->amount = $request->amount;
        $application->profile = $request->profile;
        $application->status = 0;
        $application->save();

        if ($application) {
            $message = 'You have successfully applied.';
            return redirect('/')
                        ->with('message', $message);
        }
        else {
            $message = 'Application failed, please retry later.';
            return back()->withInput()
                        ->with('message', $message);
        }
    }

    
    public function verify()
    {
        $applicants = SponsorApplication::where('status', '=', 0)->get();
        return view('application.verify')
                    ->with('applicants', $applicants);
    }

    public function fund(AcademicProfile $applicant)
    {
        return view('pages.payment')
                    ->with('applicant', $applicant);
    }

    public function postVerify(SponsorApplication $application)
    {
        $application->status = 1;
        $application->save();

        if ($application->save()) {
            return back();
        }
        else {
            return back();
        }
    }

    public function reject(SponsorApplication $application)
    {
        $application->status = 2;
        $application->save();

        if ($application->save()) {
            return back();
        }
        else {
            return back();
        }
    }

}
