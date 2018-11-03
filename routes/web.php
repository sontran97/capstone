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
use App\nhanvien;
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('sontran',function(){
//   echo "html";
// });
//
// //
Route::get('demo',function(){
  return view('layouts.admin.master');
});
// Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
//
Route::get('nhanvien/create','MyController@create')->name('nhanvien.add'); // show view
//duong dan khi submit thong tin
Route::post('nhanvien/create','MyController@store')->name('nhanvien.add'); //vnhan gia tri tu client
//
Route::get('nhanvien','MyController@index')->name('nhanvien.index');
//duong dan den form edit user
Route::get('nhanvien/{id}/edit','MyController@edit')->name('nhanvien.edit');

//duong dan khi submit edit
Route::post('nhanvien/update','MyController@update')->name('nhanvien.update');

//duong dan khi delete user
Route::get('nhanvien/{id}/delete','MyController@destroy')->name('nhanvien.delete');
