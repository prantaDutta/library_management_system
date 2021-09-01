<?php

use App\Http\Controllers\AuthController;
use App\Http\Livewire\Pages\Home;
use App\Http\Livewire\Pages\Login;
use App\Http\Livewire\Pages\Register;
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

Route::get('/', Home::class);
Route::get('/home', Home::class);

Route::get('/login', Login::class);
Route::get('/register', Register::class);

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
