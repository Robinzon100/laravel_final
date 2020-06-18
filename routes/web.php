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
Route::post('/admin/jobs/insert', 'admin\AdminController@insertJobs')->name('job_inser');
Route::post('/admin/jobs/delete', 'admin\AdminController@deleteJobs')->name('job_delete');

Route::get('/admin/jobs/update/{id}', 'admin\AdminController@getUpdateJobs')->name('job_update_get');
Route::post('/admin/jobs/updateJobs', 'admin\AdminController@updateJob')->name('job_update');
