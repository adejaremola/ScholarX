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
    	return view('sponsor.application.index')
    				->with('applications', $applications);												
    }

    public function details(SponsorApplication $application)
    {
    	return view('sponsor.application.details')
    				->with('application', $application);
    }
}
