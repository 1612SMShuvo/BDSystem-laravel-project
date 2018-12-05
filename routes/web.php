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
Route::get('/Admin','Simplecontroller@adminpage');
Route::get('/Donor','Simplecontroller@donorpage');
Route::post('/donorlogin','SimpleController@donorlogin');
Route::get('/Search','Simplecontroller@searchpage')->name('Search');
Route::get('/Registration','Simplecontroller@registrationpage');
Route::get('/profile','Simplecontroller@profilepageview');
Route::get('/DonorShow','Simplecontroller@donorshowpage');
Route::get('/Show','Simplecontroller@showpage');

Route::post('/adminlogin','Simplecontroller@adminshowpage');
Route::post('/Create','Simplecontroller@Create');
Route::post('/ProfileCreate','Simplecontroller@ProfileCreate');

Route::get('/Profileedit/{id}','Simplecontroller@ProfileEdit');
Route::post('/updateProfile/{id}','Simplecontroller@updateProfileinfo');
Route::get('/EditProfile/{email}','Simplecontroller@Editprofile');
Route::post('/Update/{email}','Simplecontroller@updateProfile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/Searchshow/{bgroup}','Simplecontroller@searchshowpage');
Route::get('/searchshow','Simplecontroller@searchshow');
