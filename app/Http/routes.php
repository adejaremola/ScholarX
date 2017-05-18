<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();


Route::get('/dash', 'StudentController@redirect');

Route::get('/applicants', 'SponsorApplicationController@index');
Route::get('/applicants/{applicant}', 'SponsorApplicationController@details');
Route::get('/applicants/{applicant}/fund', 'SponsorApplicationController@fund');

Route::get('/apply', 'SponsorApplicationController@create');
Route::post('/apply', 'SponsorApplicationController@store');

Route::get('/verify', 'SponsorApplicationController@verify');
Route::post('verify/{application}', 'SponsorApplicationController@postVerify');
Route::post('reject/{application}', 'SponsorApplicationController@reject');

Route::get('/user/profile/create', 'StudentController@create');
Route::put('/user/{profile}/profile', 'StudentController@edit');
Route::post('user/{profile}/profile', 'StudentController@store');

Route::get('/user/{profile}/index', 'StudentController@index');

Route::get('/user/{profile}/apply', 'StudentController@apply');
Route::post('/user/{profile}', 'StudentController@postApply');


Route::get('/application/{application}/edit', 'StudentController@editApplication');
Route::put('/application/{application}', 'StudentController@postEditApplication');

Route::delete('/application/{application}/delete', 'StudentController@deleteApplication');

Route::get('/sponsor/index', 'SponsorController@index');
Route::get('/sponsor/{application}/details', 'SponsorController@details');

Route::get('/sponsor/{application}/fund', 'SponsorController@fund');


















