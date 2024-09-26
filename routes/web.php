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

Route::get('/', 'DashboardController@index')->name('home');

Auth::routes();

Route::group(['prefix' => 'user'], function(){
Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');
Route::get('/', 'DashboardController@index')->name('home');
Route::resource('dashboard', 'DashboardController');
Route::resource('manageclass', 'ClassroomController');
Route::resource('manageteacher', 'TeacherController');
Route::resource('managestudent', 'StudentController');
Route::resource('managelist', 'ListController');
Route::get('pdf/{id}', 'ListController@pdf')->name('pdf');
});