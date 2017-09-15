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
Route::get('blog/{slug}',['as' => 'blog.single','uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('slug-course/{slug}',['as' => 'slug-course.single','uses' => 'BlogController@getCourse'])->where('slug', '[\w\d\-\_]+');
Route::get('slug-news/{slug}',['as' => 'slug-news.single','uses' => 'BlogController@getNews'])->where('slug', '[\w\d\-\_]+');
Route::get('/','PagesController@getIndex');
Route::get('admission','PagesController@getAdmission');
Route::get('frontFaculty','PagesController@getFaculty');
Route::get('history','PagesController@getHistory');
Route::get('board','PagesController@getBoard');
Route::post('login/login', 'LoginController@login')->name('login.login');
Route::get('login','LoginController@index')->name('login');
//Route::get('blog',['uses' => 'BlogController@getIndex','as'=>'blog.index']);
Route::resource('admin','AdminController');
Route::resource('announcement','AnnouncementController');
Route::resource('frontend','frontController');
Route::resource('events','EventsController');
Route::resource('course','CourseController');
Route::resource('news','NewsController');
Route::resource('staff','StaffController');
Route::resource('faculty','FacultyController');
Route::resource('pta','PtaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
