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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Facebook Socialite Routes
Route::get('login/facebook','Auth\LoginController@redirectToFacebookProvider')->name('facebookLogin');
Route::get('login/facebook/callback','Auth\LoginController@handleFacebookProviderCallback');

//Twitter Socialite Routes
Route::get('login/twitter','Auth\LoginController@redirectToTwitterProvider')->name('twitterLogin');
Route::get('login/twitter/callback','Auth\LoginController@handleTwitterProviderCallback');

//Google Socialite Routes
Route::get('login/google','Auth\LoginController@redirectToGoogleProvider')->name('googleLogin');
Route::get('login/google/callback','Auth\LoginController@handleGoogleProviderCallback');

//Google Maps API
Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index'])->name('gmaps');

//Route de Envíos
Route::get('/sends','GmapsController@directions')->name('sends');
