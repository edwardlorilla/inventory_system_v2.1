<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('admin/users/','AdminUsersController');
Route::resource('admin/equipments/', 'AdminEquipmentsController');
Route::resource('admin/borrows','AdminBorrowsController');
Route::resource('admin/borrower/{id}','AdminBorrowsController@getBorrow');