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

// Rotta che si collega alla View "home.blade.php"
Route::get('/', function () {
    return view('home');
});

// Rotta che si collega alla View "contacts.blade.php"
Route::get('/contacts', function () {
    return view('contacts');
});

// Rotta che si collega alla View "services.blade.php"
Route::get('/services', function () {
    return view('services');
});
