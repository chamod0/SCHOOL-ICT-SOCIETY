<?php


Route::get('/', 'DashboardController@index');


Route::resource('/manageSISAccount', 'SISAccountController');