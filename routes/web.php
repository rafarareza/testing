<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // // Route::get('/', function () {
    // // // return view('welcome');
// // // });
Auth::routes(['verify' => true, 'register' => false]);
Auth::routes(['register' => false]);
Route::get('oke', function(){
    return redirect('/');
});

Route::get('/', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');
Route::get('signup_blinkzap', 'Auth\RegisterController@showRegistrationForm');

Route::group(['middleware' => ['auth']], function() {
	Route::get('dashboard', 'DashboardController@index');
	Route::get('campaign/create', 'CampaignController@create');
	Route::post('campaign', 'CampaignController@store');

});


















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
