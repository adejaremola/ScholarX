<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SponsorApplication;

use App\SponsorPayment;

use Paystack;

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
        session([ 'id' => $application->id ]);
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
        $sponsor->save();
    	return view('sponsor.application.payment')
    				->with('application', $application);
    }


    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $payment = new SponsorPayment;
        $payment->amount = $paymentDetails['data']['amount'];
        $payment->reference = $paymentDetails['data']['reference'];
        $payment->sponsor_application_id = Session('id');
        $payment->save();

        if ($payment) {
            return redirect('/applications/index')->with('message', 'Thanks!!');
        }
        else {
             return back()->withInput()
                          ->with('message', 'Unsuccessful!, retry later.');
        }

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
