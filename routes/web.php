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
Route::get('/welcome', function(){
    return view('welcome');
});
Route::get('/', 'PortfolioController@index')->name('portfolio');
Route::get('/posts', 'PostController@index')->name('blog.posts.index');
Route::get('/posts/category/technologie', 'PostController@technologie_cat')->name('blog.posts.technologie');
Route::get('/posts/category/Windows', 'PostController@windows_cat')->name('blog.posts.windows');
Route::get('/posts/category/Programmation', 'PostController@programmation_cat')->name('blog.posts.programmation');
Route::get('/posts/{id}', 'PostController@show')->name('blog.posts.show');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/admin', 'HomeController@index')->name('dashboard');
    Route::resource('/admin/posts', 'ManagePostController');
    Route::resource('/admin/portfolios', 'ManagePortfolioController');
});







Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
