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

//Route::get('productsbycategory', function () {
//    return view('productsbycategory');
//});
Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/contactus', 'WelcomeController@contactus')->name('contactus');
Route::get('/aboutus', 'WelcomeController@aboutus')->name('aboutus');

Route::get('/productsbycategory/{id}', 'WelcomeController@productsbycategory')->name('productsbycategory');

Auth::routes();

Route::get('/home', 'CategoryController@index')->name('home');


Route::resource('managers','ManagerController');

Route::resource('categories','CategoryController');

Route::resource('products','ProductController');

Route::get('profile', 'ProfileController@index')->name('profile');
Route::get('profile/edit', ['uses' => 'ProfileController@edit', 'as' => 'profile.edit']);
Route::post('profile/update', ['uses' => 'ProfileController@update', 'as' => 'profile.update']);
