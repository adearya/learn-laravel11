<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);
Route::get('/user', [Controllers\UserController::class, 'index']);
Route::get('/user/create', [Controllers\UserController::class, 'create']);

// Route::view('/', 'welcome');

// Route::get('/users', function() {
//     $users = [
//         ['id'=> 1, 'name' => "Ade Arya"],
//         ['id'=> 2, 'name' => "Bimantara"],
//     ];
//     return view('users.index', compact('users'));
// });

//Route::get('/', function () {
//    return view('welcome');
//});
