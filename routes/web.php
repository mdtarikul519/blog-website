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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','App\Http\Controllers\Frontend\FrontenController@index');
Route::get('/about_us','App\Http\Controllers\Frontend\FrontenController@aboutUs')->name('about.us');
Route::get('/contact_us','App\Http\Controllers\Frontend\FrontenController@contactUs')->name('contact.us');
Route::get('/news-events/details/{id}','App\Http\Controllers\Frontend\FrontenController@newsDetails')->name('news.event.details');
Route::get('/our/mission','App\Http\Controllers\Frontend\FrontenController@mission')->name('our.mission');
Route::get('/our/vision','App\Http\Controllers\Frontend\FrontenController@vision')->name('our.vision');
Route::get('/news/events','App\Http\Controllers\Frontend\FrontenController@newsEvents')->
  name('our.news.events');
Route::post('/contact/store','App\Http\Controllers\Frontend\FrontenController@store')->name('contact.store');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('users')->group(function(){
Route::get('/view','App\Http\Controllers\backend\userController@view')->name('user.view')->middleware('test');
Route::get('/add','App\Http\Controllers\backend\userController@add')->name('user.add');
Route::post('/store','App\Http\Controllers\backend\userController@store')->name('user.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\userController@edit')->name('user.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\userController@update')->name('user.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\userController@delete')->name('user.delete');
});
Route::prefix('profiles')->group(function(){
Route::get('/view','App\Http\Controllers\backend\ProfileController@view')->name('profiles.view');
Route::get('/edit','App\Http\Controllers\backend\ProfileController@edit')->name('profiles.edit');
Route::post('/store','App\Http\Controllers\backend\ProfileController@update')->name('profiles.update');
Route::get('/passowrd/view','App\Http\Controllers\backend\ProfileController@passwordView')->name('profiles.passowrd.view');
Route::post('/passowrd/update','App\Http\Controllers\backend\ProfileController@passwordUpdate')->name('profiles.passowrd.update');
});
Route::prefix('logos')->group(function(){
Route::get('/view','App\Http\Controllers\backend\LogoController@view')->name('logos.view');
Route::get('/add','App\Http\Controllers\backend\LogoController@add')->name('logos.add');
Route::post('/store','App\Http\Controllers\backend\LogoController@store')->name('logos.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\LogoController@edit')->name('logos.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\logoController@update')->name('logos.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\LogoController@delete')->name('logos.delete');
});
Route::prefix('sliders')->group(function(){ 
Route::get('/view','App\Http\Controllers\backend\sliderController@view')->name('sliders.view');
Route::get('/add','App\Http\Controllers\backend\sliderController@add')->name('sliders.add');
Route::post('/store','App\Http\Controllers\backend\sliderController@store')->name('sliders.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\sliderController@edit')->name('sliders.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\sliderController@update')->name('sliders.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\sliderController@delete')->name('sliders.delete');
});
Route::prefix('missions')->group(function(){
Route::get('/view','App\Http\Controllers\backend\MissionController@view')->name('missions.view');
Route::get('/add','App\Http\Controllers\backend\MissionController@add')->name('missions.add');
Route::post('/store','App\Http\Controllers\backend\MissionController@store')->name('missions.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\MissionController@edit')->name('missions.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\MissionController@update')->name('missions.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\MissionController@delete')->name('missions.delete');
});
Route::prefix('vissions')->group(function(){
Route::get('/view','App\Http\Controllers\backend\VissionController@view')->name('vissions.view');
Route::get('/add','App\Http\Controllers\backend\VissionController@add')->name('vissions.add');
Route::post('/store','App\Http\Controllers\backend\VissionController@store')->name('vissions.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\VissionController@edit')->name('vissions.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\VissionController@update')->name('vissions.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\VissionController@delete')->name('vissions.delete');
});
Route::prefix('news_events')->group(function(){
Route::get('/view','App\Http\Controllers\backend\NewsEventController@view')->name('news_events.view');
Route::get('/add','App\Http\Controllers\backend\NewsEventController@add')->name('news_events.add');
Route::post('/store','App\Http\Controllers\backend\NewsEventController@store')->name('news_events.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\NewsEventController@edit')->name('news_events.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\NewsEventController@update')->name('news_events.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\NewsEventController@delete')->name('news_events.delete');
});
Route::prefix('services')->group(function(){
Route::get('/view','App\Http\Controllers\backend\ServiceController@view')->name('services.view');
Route::get('/add','App\Http\Controllers\backend\ServiceController@add')->name('services.add');
Route::post('/store','App\Http\Controllers\backend\ServiceController@store')->name('services.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\ServiceController@edit')->name('services.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\ServiceController@update')->name('services.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\ServiceController@delete')->name('services.delete');
});
Route::prefix('contacts')->group(function(){
Route::get('/view','App\Http\Controllers\backend\ContactController@view')->name('contacts.view');
Route::get('/add','App\Http\Controllers\backend\ContactController@add')->name('contacts.add');
Route::post('/store','App\Http\Controllers\backend\ContactController@store')->name('contacts.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\ContactController@edit')->name('contacts.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\ContactController@update')->name('contacts.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\ContactController@delete')->name('contacts.delete');
Route::get('/communicate','App\Http\Controllers\backend\ContactController@communicate')->name('communicate');
Route::get('/communicate/delete/{id}','App\Http\Controllers\backend\ContactController@deletCommunicate')->name('contacts.communicate.delete');

});
Route::prefix('abouts')->group(function(){
Route::get('/view','App\Http\Controllers\backend\AboutController@view')->name('abouts.view');
Route::get('/add','App\Http\Controllers\backend\AboutController@add')->name('abouts.add');
Route::post('/store','App\Http\Controllers\backend\AboutController@store')->name('abouts.store');
Route::get('/edit/{id}','App\Http\Controllers\backend\AboutController@edit')->name('abouts.edit');
Route::post('/update/{id}','App\Http\Controllers\backend\AboutController@update')->name('abouts.update');
Route::get('/delete/{id}','App\Http\Controllers\backend\AboutController@delete')->name('abouts.delete');
});


Route::get('/password_recover','App\Http\Controllers\backend\userController@view_sent_mail_page');
Route::post('/sent_mail','App\Http\Controllers\backend\userController@sent_mail');
Route::post('/reset_pass','App\Http\Controllers\backend\userController@reset_pass');
Route::post('/update_pass','App\Http\Controllers\backend\userController@update_pass');