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

Route::get('/recruiterProfile', 'ProfileController@showHirer');

Route::get('/editProfile', 'ProfileEditController@showEdit');

Route::post('/editProfile/edit', 'ProfileEditController@edit')->name('edit');

Route::post('/editProfile/editRecruiter', 'ProfileEditController@editRecruiter')->name('edit_rec');

Route::post('/registration/submitEmployee', 'RegistrationController@registerEmployee')->name('employee_reg');

Route::post('/registration/submitHirer', 'RegistrationController@registerHirer')->name('hirer_reg');

Route::get('/addVacancy', 'VacancyController@showAdd');

Route::post('/addVacancy/submit', 'VacancyController@addVacancy')->name('vacancy_add');

Route::get('/company/{id}/vacancies', 'VacancyController@showCompanyVacancies');
