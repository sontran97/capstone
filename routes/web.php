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
// Route::get('post',function(){
//   return view('bangnv');
// });
// Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
//
Route::get('nhanvien/create','MyController@create');
//duong dan khi submit thong tin
Route::post('nhanvien/create','MyController@store');
//
Route::get('nhanvien','MyController@index');
//duong dan den form edit user
Route::get('nhanvien/{id}/edit','MyController@edit');

//duong dan khi submit edit
Route::post('nhanvien/update','MyController@update');

//duong dan khi delete user
Route::get('nhanvien/{id}/delete','MyController@destroy');
