<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\SponsorApplication;

use Auth;

class VillageController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $pending = SponsorApplication::where('status', 0)->get();
        $approved = SponsorApplication::where('status', 1)->get();
        $open = SponsorApplication::where('status', 2)->get();
        $funded = SponsorApplication::where('status', 3)->get();
    	$rejected = SponsorApplication::where('status', 4)->get();

        return view('admin.village.applications.index', ['pending' => $pending,
                                                            'approved' => $approved,
                                                            'open' => $open,
                                                            'funded' => $funded,
                                                            'rejected' => $rejected]);
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
