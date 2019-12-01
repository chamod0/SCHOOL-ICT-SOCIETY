<?php

Route::prefix('admin')->group(function() {



Route::get('/', 'DashboardController@index');


Route::resource('/manageSISAccount', 'SISAccountController');

Route::get('/confirm/{id}','SISAccountController@confirm')->name('SIS.confirm');
Route::get('/pendig/{id}','SISAccountController@Pending')->name('SIS.Pending');
Route::get('/shpw/{id}','SISAccountController@show')->name('SIS.show');
Route::get('/login','AdminUserController@index');
Route::post('/login', 'AdminUserController@store');

});