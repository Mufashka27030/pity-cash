<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/AllLayout/login', function () {
    return view('AllLayout/login');
});
Route::get('/AllLayout/contentpemasukan', function () {
    return view('AllLayout/contentpemasukan');
});
Route::get('/AllLayout/content', function () {
    return view('AllLayout/content');
});

