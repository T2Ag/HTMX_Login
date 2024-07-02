<?php

use App\Http\Controllers\AuthManagerController;
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

Route::get('/login', [AuthManagerController::class, 'login'])->name('login');
Route::post('/login', [AuthManagerController::class, 'loginPost'])->name('login.post');