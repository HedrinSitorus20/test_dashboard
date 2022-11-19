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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function() {
    return view('login');
} );

Route::get('/dashboard', function() {
    return view('dashboard');
});

Route::get('/about', function(){
    return view('about', [
        "name" => "Hedrin Sitorus",
        "email" => "muahwaaa@del.ac.id",
        "image" => "01.png"
    ]);
});

Route::get('/profil', function() {
    return (' Welcome Profile ');
});