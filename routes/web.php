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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/projects', 'ProjectController')->middleware('auth');
Route::resource('/admin/technologies', 'TechnologyController')->middleware('auth');

Route::get('/', 'PageController@index')->name('main');
Route::post('/contact', 'PageController@contactForm')->name('backHome');
Route::get('/projects', 'PageController@projects')->name('projects');
Route::get('/project/{project}', 'PageController@modal')->name('modal');