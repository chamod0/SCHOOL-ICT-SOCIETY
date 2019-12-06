<?php

Route::prefix('admin')->group(function() {
    Auth::routes();
    Route::middleware('auth:admin')->group(function() {

Route::get('/', 'DashboardController@index');


Route::resource('/manageSISAccount', 'SISAccountController');

Route::get('/confirm/{id}','SISAccountController@confirm')->name('SIS.confirm');
Route::get('/pendig/{id}','SISAccountController@Pending')->name('SIS.Pending');
Route::get('/shpw/{id}','SISAccountController@show')->name('SIS.show');


Route::get('/logout','AdminUserController@logout');

});

Route::get('/login','AdminUserController@index')->name('login');
Route::post('/login', 'AdminUserController@store');

});

Route::get('/', 'Front\HomeController@index');

Route::get('/SISRegister', 'Front\SISRegisterController@index');
Route::post('/SISRegister', 'Front\SISRegisterController@SISRegister');