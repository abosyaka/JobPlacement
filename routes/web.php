<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});


Route::get('/registration', 'RegistrationController@show');

Route::get('/login', 'LogInController@login');

Route::post('/login/auth','LogInController@authenticate')->name('login_form');

Route::post('/logout', 'LogInController@logout')->name('logout');

Route::get('/admin', function (){
    return view('adminPanel');
});

Route::get('/employeeProfile', 'ProfileController@showEmployee');

Route::get('/editProfile', 'ProfileEditController@showEdit');

Route::post('/editProfile/edit', 'ProfileEditController@edit')->name('edit');

Route::post('/registration/submit', 'RegistrationController@registerEmployee')->name('employee_reg');