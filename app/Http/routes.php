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
Route::auth();

Route::get('/', function () {
    return view('welcome');
});


//profile creation  create profile before applying      
Route::get('/user/profile/create', 'StudentController@create');
Route::post('user/{user}/profile', 'StudentController@store');

//You can also edit profile, you're free to.
Route::get('/user/{profile}/edit', 'StudentController@edit');
Route::put('/user/{profile}/profile', 'StudentController@postEdit');


//after profile creation, APPLY!!
Route::get('/user/apply', 'StudentController@apply');
Route::post('/user/{profile}', 'StudentController@postApply');


//after succesful application, view in index of your applications
Route::get('/user/{profile}/index', 'StudentController@index');


//Edit Applications
Route::get('/application/{application}/edit', 'StudentController@editApplication');
Route::put('/application/{application}', 'StudentController@postEditApplication');


//Delete Applications
Route::delete('/application/{application}/delete', 'StudentController@deleteApplication');




//Sponsor Routes
//index of all applications needing scholarships
Route::get('/applications/index', 'SponsorController@index');

//Details of a single application
Route::get('/applications/{application}/details', 'SponsorController@details');

//Funding route
Route::get('/applications/{application}/fund', 'SponsorController@fund');
Route::post('/applications/{application}', 'SponsorController@postFund');
























