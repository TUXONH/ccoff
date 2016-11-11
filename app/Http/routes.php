<?php
Route::get('/', 'FrontController@index');
Route::get('admin', 'AdminController@index');

Route::resource('user','UserController');
Route::resource('costumer','CostumerController');
Route::resource('reservations','ReservationController');
Route::resource('log', 'LogController');
Route::resource('logout', 'LogController@logout');
Route::get('/callsearch', 'ReservationController@AutoEmail');