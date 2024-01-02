<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/feedback', function () {
    return view('contact');
})->name('contact');


// Route::post('/check', [UserController::class, 'check']);
Route::post('/check', 'App\Http\Controllers\UserController@check');
Route::get('/contact/all', 'App\Http\Controllers\UserController@allData')->name("contact-data");
Route::get('/contact/all/{id}', 'App\Http\Controllers\UserController@showOneMessage')->name("contact-data-one");
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\UserController@updateMessage')->name("contact-update");
Route::post('/contact/all/{id}/update', 'App\Http\Controllers\UserController@updateMessageSubmit')->name("contact-update-submit");
Route::get('/contact/all/{id}/delete', 'App\Http\Controllers\UserController@deleteMessage')->name("contact-delete");
/*
Route::post('/check', function () {
    return view('check');
});
Route::post('/check',
    'App\Http\Controllers\ContController@updateMessageSubmit'
)->name('contact-update-submit');
*/
// Route::post('/check', function () {return view('check', ['id' => '0']);})->name('check');
