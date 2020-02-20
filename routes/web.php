<?php
use App\Mail\sendMail;

// Site
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

// Email
Route::post('/send-email', 'Email\EmailController@email')->name('email');

// Login
Route::get('/admin', 'WorkController@index')->name('admin');
Route::get('/admin/login', 'AuthController@showLoginForm')->name('admin.login');
Route::get('/admin/logout', 'AuthController@logout')->name('admin.logout');
Route::post('/admin/login/do', 'AuthController@login')->name('admin.login.do');

// Gerenciamento de obras
Route::resource('/obra', 'WorkController')->names('work')->parameters(['obra' => 'works']);

// Gerenciamento de usuários
Route::resource('/usuarios', 'UserController')->names('user')->parameters(['usuarios' => 'user']);




