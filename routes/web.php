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

Route::get('/bulkmsg', function () {
    return view('BulkMsg');
});

Route::get('/singlemsg', function () {
    return view('BulkMsg');
});

Route::get('/userlist', function () {
    return view('UserList');
});

Route::get('/', function () {
    return view('AddEnterprise');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(array('prefix'=>'admin','middleware' => ['auth']), function ()
{
    Route::get('/',function(){

        return "Welcome to Administration";
    });

    Route::get('dashboard',function(){
        return "Welcome to Administration";
    });
});

Route::group(array('prefix'=>'user','middleware' => ['auth']), function ()
{
    Route::get('/',function(){

        return "Welcome to User";
    });

    Route::get('dashboard',function(){
        return "Welcome to Administration";
    });
});
