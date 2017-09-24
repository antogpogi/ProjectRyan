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

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('blog/{slug}',['as' => 'blog.single','uses' => 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');
Route::get('slug-course/{slug}',['as' => 'slug-course.single','uses' => 'BlogController@getCourse'])->where('slug', '[\w\d\-\_]+');
Route::get('slug-news/{slug}',['as' => 'slug-news.single','uses' => 'BlogController@getNews'])->where('slug', '[\w\d\-\_]+');
Route::get('/','PagesController@getIndex');
Route::get('admission','PagesController@getAdmission');
Route::get('frontFaculty','PagesController@getFaculty');
Route::get('history','PagesController@getHistory');
Route::get('board','PagesController@getBoard');
Route::get('pta','PagesController@getBoard');
Route::get('pta-front','PagesController@getPtaFront');
//Route::get('blog',['uses' => 'BlogController@getIndex','as'=>'blog.index']);
Route::resource('announcement','AnnouncementController');
Route::resource('frontend','frontController');
Route::resource('events','EventsController');
Route::group(['middleware' => 'guest'], function() {
  Route::resource('section', 'SectionController');
});
Route::resource('course','CourseController');
Route::resource('news','NewsController');
Route::resource('staff','StaffController');
Route::resource('faculty','FacultyController');
Route::resource('pta','PtaController');
Route::resource('admin','AdminController');
Route::resource('discount','DiscountController');
Route::resource('tuition','TuitionController');



Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');
