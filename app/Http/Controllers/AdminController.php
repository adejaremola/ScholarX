<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SponsorApplication;

use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$applications = SponsorApplication::all();
    	return view('admin.village.applications.index')
    				->with('applications', $applications)
                    ->with('user', Auth::user());
    }

    public function getApplication(SponsorApplication $application)
    {
        //dd($application->toArray());
        return view('admin.village.applications.show')
                    ->with('application', $application)
                    ->with('user', Auth::user());
    }

    public function updateApplication()
    {
    	
    }
}
