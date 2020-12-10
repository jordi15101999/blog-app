<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home1');
});
Route::post('/', 'ContactController@sendMail');

Auth::routes(['register' => false]);

// Route::get('/home', 'HomeController@index')->name('home');
Route::redirect('/admin', '/admin/dashboard');
Route::get('/admin/dashboard', 'AdminController@index')->middleware('auth');
Route::get('/admin/createpost', 'AdminController@index')->middleware('auth');
Route::get('/admin/allposts', 'AdminController@index')->middleware('auth');
Route::get('/admin/allcategories', 'AdminController@index')->middleware('auth');
Route::get('/admin/createcategory', 'AdminController@index')->middleware('auth');
Route::get('/admin/editpost/{any}/edit', 'AdminController@index')->middleware('auth');
Route::get('/admin/editcategory/{any}/edit', 'AdminController@index')->middleware('auth');
Route::get('/Sidehome', 'AdminController@index')->middleware('auth');
Route::get('/getHomepagePosts', 'PostController@getHomepagePosts');
// Route::resource('admin', 'AdminController');
Route::get('/read/{any}', function () {
    return view('/home1');
})->where('any', '.*');
Route::post('/read/{any}', 'ContactController@sendMail');

Route::get('/about', function () {
    return view('/home1');
});
Route::post('/about', 'ContactController@sendMail');

// Route::get('/contact', function () {
//     return view('/home1');
// });

Route::get('/category/{any}', function () {
    return view('/home1');
});
Route::post('/category/{any}', 'ContactController@sendMail');
