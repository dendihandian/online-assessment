<?php

use App\Http\Controllers\Admin\HomeController;
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
    return redirect()->route('admin.dashboard');
});

Route::get('/home', function () {
    return redirect()->route('admin.dashboard');
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/', function(){ return redirect()->route('admin.dashboard'); });
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard'); // admin.dashboard
});