<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorApplication;

class SponsorController extends Controller
{
    public function index()
    {
    	$applications = SponsorApplication::whereBetween('status', [1, 2])
    													->get();
    	return view('village.sponsors.applications.index')
    				->with('applications', $applications);												
    }

    public function details(SponsorApplication $application)
    {
        return view('village.sponsors.applications.show')
                    ->with('application', $application);
    }

    public function fund(SponsorApplication $application)
    {
        return view('village.sponsors.applications.pay')
                    ->with('application', $application);
    }

    public function postFund(SponsorApplication $application, Request $request)
    {
        $this->validate($request, SponsorPayment::$rules);

        $sponsor = new SponsorPayment;
        $sponsor->amount = $request->amount;
        $sponsor->sponsor_application_id = $application->id;
        $sponsor->comment = $request->comment;
        $sponsor->sponsor_id = Auth::user()->id;
        $sponsor->save();
    	return view('sponsor.application.payment')
    				->with('application', $application);
    }
}
