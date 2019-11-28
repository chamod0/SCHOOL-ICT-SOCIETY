<?php


Route::get('/admin', 'DashboardController@index');


Route::resource('/admin/manageSISAccount', 'SISAccountController');

Route::get('/admin/confirm/{id}','SISAccountController@confirm')->name('SIS.confirm');
Route::get('/admin/pendig/{id}','SISAccountController@Pending')->name('SIS.Pending');
Route::get('/admin/shpw/{id}','SISAccountController@show')->name('SIS.show');