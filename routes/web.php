<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    'uses' => 'MainController@index',
]);

Route::get('/contact', [
    'uses' => 'ContactController@index',
]);

Route::post('/contact/submit', 'MessagesController@submit');

Auth::routes();

Route::get('/home', ['middleware' => 'auth', 'uses'=>'ApplicationController@index']);

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/index', 'Backend\PageController@index');
Route::post('/store', 'Backend\PageController@store');

Route::get('/create', 'Backend\PageController@create');
Route::get('/edit/{id}', 'Backend\PageController@show')->name('edit');
Route::put('/edit/{id}', 'Backend\PageController@update')->name('edit');

Route::get('/delete/{id}', 'Backend\PageController@destroy')->name('delete');
Route::delete('/delete/{id}', 'Backend\PageController@destroy')->name('delete');

Route::get('/analytics', 'Backend\GeneralController@edit')->name('analytics');
Route::put('/analytics', 'Backend\GeneralController@update')->name('analytics');



Route::get('/metacontact', 'Backend\MetaContactController@edit')->name('metacontact');
Route::put('/metacontact', 'Backend\MetaContactController@update')->name('metacontact');

Route::get('/metahome', 'Backend\MetaHomeController@edit')->name('metahome');
Route::put('/metahome', 'Backend\MetaHomeController@update')->name('metahome');

Route::get('/contactedit', 'Backend\ContactController@edit')->name('contactedit');
Route::put('/contactedit', 'Backend\ContactController@update')->name('contactedit');;


Route::post('/home', [
    'uses' => 'Backend\GeneralController@index',
]);





