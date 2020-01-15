<?php

Route::get('/', function () {
    return view('layouts/content');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('lists',function (){
    return view('blog/lists');
});