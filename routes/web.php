<?php


Route::get('/', function () {
    $users = 'ram';

    return view('welcome', compact('users'));

})->name('home');
// 9801169146



Route::get('about', function () {


    return view('about');

})->name('about');


Route::get('news', function () {

    return view('news');

})->name('contact');