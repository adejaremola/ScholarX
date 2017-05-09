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

Route::get('/applicants', 'SponsorApplicationController@index');
Route::get('/apply', 'SponsorApplicationController@create');
Route::post('/apply', 'SponsorApplicationController@store');

Route::get('/verify', 'SponsorApplicationController@verify');
Route::post('verify/{application}', 'SponsorApplicationController@postVerify');
Route::post('reject/{application}', 'SponsorApplicationController@reject');

Route::get('/profile', 'AcademicProfileController@create');
Route::post('/profile', 'AcademicProfileController@store');
Route::put('/profile/{profile}', 'AcademicProfileController@edit');

