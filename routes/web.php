<?php

use Illuminate\Support\Facades\Route;

Route::view('/home', 'home');

Route::view('/about', 'about');

Route::view('/contact', 'contact');

Route::view('/gallery', 'gallery');

Route::view('/', 'welcome');

Route::get('/users', function() {
    $users = [
        ['id'=> 1, 'name' => "Ade Arya"],
        ['id'=> 2, 'name' => "Bimantara"],
    ];
    return view('users.index', compact('users'));
});

//Route::get('/', function () {
//    return view('welcome');
//});
