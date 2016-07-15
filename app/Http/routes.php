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
    return redirect('/admin');
    return view('welcome');
});

Route::group(['as' => 'admin::', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {

    Route::group(['middleware' => 'auth'], function() {
        Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

        Route::resource('account', 'AccountController');
        Route::post('account/{account}/download', ['as' => 'admin.account.download', 'uses' => 'AccountController@download']);
        Route::resource('user', 'UserController');
        Route::resource('recording', 'RecordingController');
    });


    Route::get('/', function() {
        return redirect('/admin/dashboard');
    });

    $this->get('login', 'Auth\AuthController@showLoginForm');
    $this->post('login', 'Auth\AuthController@login');
    $this->get('logout', 'Auth\AuthController@logout');

// Registration Routes...
//$this->get('register', 'Auth\AuthController@showRegistrationForm');
//$this->post('register', 'Auth\AuthController@register');

// Password Reset Routes...
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Auth\PasswordController@reset');


});


Route::get('auth', ['as' => 'auth', 'uses' => 'AuthenticationController@postLogin']);
Route::post('auth', ['as' => 'auth', 'uses' => 'AuthenticationController@postLogin']);
//Route::auth();
//$this->get('login', 'Auth\AuthController@showLoginForm');
//$this->post('login', 'Auth\AuthController@login');
//$this->get('logout', 'Auth\AuthController@logout');
//
//// Registration Routes...
////$this->get('register', 'Auth\AuthController@showRegistrationForm');
////$this->post('register', 'Auth\AuthController@register');
//
//// Password Reset Routes...
//$this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
//$this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
//$this->post('password/reset', 'Auth\PasswordController@reset');


Route::get('/home', 'HomeController@index');
