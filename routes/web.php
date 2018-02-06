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
    return view('auth/login');
})->middleware('auth','admin');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::group(array('prefix'=>'admin','middleware' => ['auth','admin']), function ()
//{
//    Route::get('/',function(){
//
//        return view('UserDashboard');
//    });
//
//    Route::resource('enterprise','EnterpriseController');
//
//    Route::get('/log', function () {
//        return view('BulkMsg');
//    });
//});
//
//Route::group(array('prefix'=>'user','middleware' => ['auth','admin']), function ()
//{
//    Route::get('/',function(){
//
//        return view('UserDashboard');
//    });
//
//    Route::get('/bulkmsg', function () {
//        return view('BulkMsg');
//    });
//
//    Route::get('/singlemsg', function () {
//        return view('BulkMsg');
//    });
//
//    Route::get('/userlist', function () {
//        return view('UserList');
//    });
//});



Route::group(array('prefix'=>'admin','middleware' => ['auth','checkAdmin']), function ()
{
    Route::get('/',function(){

        return view('AddEnterprise');
    });

//    Route::get('/enterprise', function () {
//        return view('AddEnterprise');
//    });

//    Route::get('/register-enterprise', function () {
//        return view('CreateUser');
//    });

    Route::get('/log', function () {
        return view('BulkMsg');
    });

    Route::resource('customer','CustomerController');

    Route::resource('enterprise','EnterpriseController');

}) ;

Route::group(array('prefix'=>'user','middleware' => ['auth','checkUser']), function ()
{
    Route::get('/',function(){

        return view('UserDashboard');
    });

    Route::get('/bulkmsg', function () {
        return view('BulkMsg');
    });

    Route::get('/singlemsg', function () {
        return view('IndividualMsg');
    });

    Route::get('/userlist', function () {
        return view('UserList');
    });


});


