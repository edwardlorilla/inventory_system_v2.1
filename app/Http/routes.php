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
Route::post('admin/borrows/{id?}','AdminBorrowsController@postBorrow')->name('admin.borrows.postBorrow');
Route::post('admin/equipments/', 'AdminEquipmentsController@store')->name('admin.equipment.store');;
Route::delete('admin/equipments/', 'AdminEquipmentsController@destroy')->name('admin.equipment.delete');;
Route::auth();

Route::get('/home', 'HomeController@index');
