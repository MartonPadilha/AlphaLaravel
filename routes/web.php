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
    return view('site/home');
})->name('site.home');

Route::get('/servicos', function () {
    return view('site/service');
})->name('site.service');

Route::get('/obras', 'WorkController@viewWorks')->name('site.work');

Route::get('/contato', function () {
    return view('site/contact');
})->name('site.contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin', 'WorkController@index')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');

Route::resource('/obra', 'WorkController')->names('work')->parameters(['obra' => 'works']);



