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

///front end
Route::get('/', function () {
    return view('layouts/main-layout');
});

Route::get('/about', function () {
    return view('sections/about');
});


///admin
Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

///admin projects
Route::get('/admin/projects', 'admin\ProjectsController@index');

Route::get('/admin/projects/add', 'admin\ProjectsController@create');

Route::get('/admin/projects/edit', 'admin\ProjectsController@edit');

Route::get('/admin/projects/delete', 'admin\ProjectsController@delete');

///admin settings
Route::get('/admin/settings', function () {
    return view('admin/settings/general');
});

Route::get('/admin/settings/seo', function () {
    return view('admin/settings/seo');
});

Route::get('/admin/settings/social', function () {
    return view('admin/settings/social');
});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
