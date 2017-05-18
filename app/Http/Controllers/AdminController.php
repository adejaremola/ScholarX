<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SponsorApplication;

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
    				->with('applications', $applications);
    }

    public function getApplication()
    {
    	
    }

    public function updateApplication()
    {
    	
    }
}
