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
    return view('index');
});
Route::get('list','CourseController@getList')->name('getList');
Route::get('index','CourseController@getIndex')->name('getIndex');
Route::get('add','CourseController@getAdd')->name('getAdd');
Route::post('add','CourseController@postAdd')->name('postAdd');
Route::get('edit/{id}','CourseController@getEdit')->name('getEdit');
Route::post('edit/{id}','CourseController@PostEdit')->name('PostEdit');
Route::get('delete/{id}','CourseController@getDelete')->name('getDelete');