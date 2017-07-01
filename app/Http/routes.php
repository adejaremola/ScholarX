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

Route::get('/', function ()
{
	return redirect('/village');
});

Route::get('/village', 'VillageController@index');

Route::group(['prefix' => 'admin/village', 'middleware' => ['auth']], function () {
	//Admin Routes
	//index of all applications (all categories)
	Route::get('/applications', ['as' => 'applications', 'uses' => 'Admin\VillageController@index']);

	//Details of a single application
	Route::get('/applications/{application}', ['as' => 'applicant', 'uses' => 'Admin\VillageController@show']);

	//Update of an application
	Route::put('/applications/{application}', ['as' => 'edit_applicant', 'uses' => 'Admin\VillageController@edit']);
});

Route::group(['prefix' => 'student/village', 'middleware' => ['auth']], function (){
	//profile creation  create profile before applying      
	Route::get('/profile/create', ['as' => 'create_profile', 'uses' => 'Student\VillageController@create']);
	Route::post('/{user}/profile', ['as' => 'profile_created', 'uses' => 'Student\VillageController@store']);

	//You can also edit profile, you're free to.
	Route::get('/{profile}/edit', ['as' => 'edit_profile', 'uses' => 'Student\VillageController@edit']);
	Route::put('/{profile}/profile', ['as' => 'profile_edited', 'uses' => 'Student\VillageController@postEdit']);

	//after profile creation, APPLY!!
	Route::get('/apply', ['as' => 'apply', 'uses' => 'Student\VillageController@apply']);
	Route::post('/{profile}', ['as' => 'applied', 'uses' => 'Student\VillageController@postApply']);


	//after succesful application, view in index of your applications
	Route::get('/{profile}/index', ['as' => 'my_applications', 'uses' => 'Student\VillageController@index']);


	//Edit Applications
	Route::get('/{application}/edit', ['as' => 'edit_application', 'uses' => 'Student\VillageController@editApplication']);
	Route::put('/{application}', ['as' => 'application_edited', 'uses' => 'Student\VillageController@postEditApplication']);


	//Delete Applications
	Route::delete('/{application}/delete', ['as' => 'deleted', 'uses' => 'Student\VillageController@deleteApplication']);
});




Route::group(['prefix' => 'sponsor/village'], function (){

	//Sponsor Routes
	//index of all applications needing scholarships
	Route::get('/index', ['as' => 'index', 'uses' => 'Sponsor\VillageController@index']);

	//Details of a single application
	Route::get('/{application}/details', ['as' => 'details', 'uses' => 'Sponsor\VillageController@details']);

	Route::post('/pay', [
	    'uses' => 'Sponsor\VillageController@redirectToGateway',
	    'as' => 'pay'
	]);

	Route::get('/payment/callback', 'Sponsor\VillageController@handleGatewayCallback');
});



