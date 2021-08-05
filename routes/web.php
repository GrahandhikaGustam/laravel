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

Route::get('/me', [AuthController::class, 'index']);
return [
    "NIS" => 3103119081,
    "Name" => "Grahandhika Gustam Awansyah Putra",
    "Gender" => "Laki-laki",
    "Phone" => 6281225936018,
    "Class" => "XII RPL 3",
];
