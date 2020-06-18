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
    return view('welcome');
});

 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/jobs', 'jobsController@getJobs')->name('jobs');

Route::get('/admin/Admin', 'admin\AdminController@getAdmin')->name('admin');
Route::post('/vacancy/insert', 'admin\AdminController@insertVacancy')->name('vacancy_insert');
Route::get('/vacancy', 'admin\AdminController@getVacancy')->name('vacancy_get');
Route::post('/vacancy/delete/{id}', 'admin\AdminController@deleteVacancy')->name('job_update_get');
Route::post('/vacancy/update/{id}', 'admin\AdminController@updateVacancy')->name('job_update_get');
Route::get('/vacancy/update/{id}', 'admin\AdminController@getUpdateVacancy')->name('job_update_get');
