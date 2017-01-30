<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();
//Override Register link to prevent users from creating accounts
//Route::get('/register', function (){
//    return redirect('/');
//});

Route::group(["middleware" => "auth"], function () {
    //Logged-in Views
    Route::group(["middleware" => "admin"], function () {
        //Admin Views
        Route::post('/news/post', 'HomeController@post');
        Route::post('/news/post/{post}/edit', 'HomeController@editPost');
        Route::get('/news/create', 'HomeController@create')->name('news.create');
        Route::get('/news', 'HomeController@newsList')->name('news.manage');
        Route::get('/news/post/{post}', 'HomeController@newsEdit')->name('news.edit');
    });
});

//Public Views
Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', function() {
    return view('pages.about');
})->name('about');

//Route::get('/profile', function() {
//    $user = Auth::user();
//    return view('pages.profile',compact('user'));
//})->name('profile');

