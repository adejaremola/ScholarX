<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SponsorApplication;

use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    	$applications = SponsorApplication::all();
    	return view('admin.village.applications.index')
    				->with('applications', $applications)
                    ->with('user', Auth::user());
    }

    public function show(SponsorApplication $application)
    {
        return view('admin.village.applications.show')
                    ->with('application', $application)
                    ->with('user', Auth::user());
    }

    public function edit(SponsorApplication $application, Request $request)
    {
    	$application->status = $request->status;
        $application->update();

        if ($application->update()) {
            return back()->with('message', "Status changed to '".$application->getStatus()."' successfully!");
        } else {
            return back()->with('message', 'Status change error, please try again later.');
        }
    }
}
