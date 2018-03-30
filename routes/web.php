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
    return view('welcome');
});

Auth::routes();


Route::get('/profile','AddController@getUsersOnes')->name('profile');

Route::get('/home', 'AddController@getAll')->name('home');

Route::post('/advertisment/add', 'AddController@add')->name('advertisement');
Route::get('/advertisment/add',function(){
    return view('create_add');
})->name('create_add');
Route::get('advertisement/{id}','AddController@getById')->name('advertisement.get');

Route::get('/addver_image/{image_path}',[
    'uses' => 'ImageController@getImage',
    'as' => 'advertisement.image'
]);

/*Route::get('/home', 'HomeController@index')->name('home');*/

