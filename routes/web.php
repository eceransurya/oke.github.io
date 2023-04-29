<?php

use App\Http\Controllers\LatihController;
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

Route::get('/',[LatihController::class,'welcome']);
Route::get('showtext',[LatihController::class,'showtext']);
Route::get('showtext',[LatihController::class,'showvar']);
Route::get('showtext',[LatihController::class,'showarray']);
Route::get('showtext',[LatihController::class,'showtext']);
Route::get('showtext',[LatihController::class,'showtextformat']);
Route::get('showtext',[LatihController::class,'showbiodata']);
Route::get('showProgramer', [LatihController::class,'showProgramer']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/Dashbord', function() {
    return view('home');
});

Route::resource('admin/User', 'App\Http\Controllers\Userontroller');
Route::post('restore/user',[App\Http\Controllers\Userontroller::class, 'restore'])->name('restore');
// Route::post('restore/user', [Userontroller::class, 'restore'])->name('restore');
Route::resource('projek', 'App\Http\Controllers\ProjekController');