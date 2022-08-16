<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Models\Controllers\Users;
use App\Http\Controllers\PageController;
use App\Models\Puestovotacion;
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
    return view('admin.dashboard');
});

// Route::resource('user', UsersController::class);

Route::get('/user',[UsersController::class,'index'])->name('user');
    
Route::post('/login',[UsersController::class,'login'])->name('login');

Route::get('/chart',[PageController::class,'chart'])->name('chart');
