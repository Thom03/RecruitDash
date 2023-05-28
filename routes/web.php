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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addrecruitdata', [\App\Http\Controllers\HomeController::class, 'add_recruitdata'])->name('add_recruitdata');
Route::post('insert_recruitdata', [\App\Http\Controllers\HomeController::class, 'insert_recruitdata'])->name('insert_recruitdata');
Route::get('view_recruitdata/{id}', [\App\Http\Controllers\HomeController::class, 'view_recruitdata'])->name('view_recruitdata');
Route::delete('delete_recruitdata/{id}', [\App\Http\Controllers\HomeController::class, 'delete_recruitdata'])->name('delete_recruitdata');
