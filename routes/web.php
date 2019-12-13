<?php

Route::prefix('admin')->group(function() {
    Auth::routes();
    Route::middleware('auth:admin')->group(function() {

Route::get('/', 'DashboardController@index');


Route::resource('/manageSISAccount', 'SISAccountController');

Route::get('/confirm/{id}','SISAccountController@confirm')->name('SIS.confirm');
Route::get('/pendig/{id}','SISAccountController@Pending')->name('SIS.Pending');
Route::get('/shpw/{id}','SISAccountController@show')->name('SIS.show');
Route::get('/live_search/action', 'SISAccountController@action')->name('live_search.action');

Route::get('/logout','AdminUserController@logout');

});

Route::get('/login','AdminUserController@index')->name('login');
Route::post('/login', 'AdminUserController@store');

});



Route::get('/', 'Front\HomeController@index');

Route::get('/SISRegister', 'Front\SISRegisterController@index');
Route::post('/SISRegister', 'Front\SISRegisterController@SISRegister');

Route::get('/SISLogin', 'Front\SISLoginController@index');
Route::post('/SISLogin', 'Front\SISLoginController@store');


Route::get('/SISLogout', 'Front\SISLoginController@logout');
Route::get('/SISProfile', 'Front\SISProfileController@index');

Route::get('/mentor', 'Front\MentorController@index');
Route::post('/mentor', 'Front\MentorController@MentorRegister');



Route::get('/viwelistall', 'Front\SISProfileController@list');

Route::get('/viwelist/{id}','Front\SISProfileController@check');


Route::get('/AmbassadorRegister', 'Front\AmbassadorController@index');
Route::post('/AmbassadorRegister', 'Front\AmbassadorController@AmbassadorRegister');