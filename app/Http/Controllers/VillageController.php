<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorApplication;

class VillageController extends Controller
{
    public function index()
    {
    	$applications = SponsorApplication::where('status', 1)->take(10)->get();
    	return view('welcome')->with('applications', $applications);
    }
}
