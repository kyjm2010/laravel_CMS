<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/post/{post}','PostController@show')->name('post');

Route::middleware('auth')->group(function(){
    
    Route::get('/admin','AdminsController@index')->name('admin.index');
    
    Route::get('/adminpost', 'PostController@index')->name('post.index');
    
    Route::get('/create_post', 'PostController@create')->name('post.create');

    Route::post('/adminpost', 'PostController@store')->name('post.store');
    
    Route::delete('/adminpost/{post}/destroy', 'PostController@destroy')->name('post.destroy');
    

    Route::patch('/adminpost/{post}/update', 'PostController@update')->name('post.update');


    Route::get('/adminpost/{post}/edit', 'PostController@edit')->name('post.edit');

    Route::get('/users/{user}/profile', 'UserController@show')->name('user.profile.show');
    Route::put('/users/{user}/update', 'UserController@update')->name('user.profile.update');
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::delete('/users/{user}/destroy', 'UserController@destroy')->name('users.destroy');

});

Route::middleware('role:admin')->group(function(){
    Route::get('/users', 'UserController@index')->name('users.index');
});



