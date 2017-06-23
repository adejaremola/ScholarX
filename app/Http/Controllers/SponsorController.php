<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorApplication;

class SponsorController extends Controller
{
    public function index()
    {
        $applications = SponsorApplication::whereBetween('status', [1, 2])->get();
        
        $approved = SponsorApplication::where('status', 1)->get();

        $in_fund = SponsorApplication::where('status', 2)->get();

        $secondary = $applications->filter(function ($application) {
            if ($application->profiler->category == 1) {
                return true;
            }        
        });

        $tertiary = $applications->filter(function ($application) {
            if ($application->profiler->category == 2) {
                return true;
            }        
        });

    	return view('village.sponsors.applications.index', ['applications' => $applications,
                                                            'approved' => $approved,
                                                            'in_fund' => $in_fund,
                                                            'secondary' => $secondary,
                                                            'tertiary' => $tertiary]);
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
