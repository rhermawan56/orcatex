<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// User Controller
Route::resource('/orca/login', LoginController::class);
// End User Controller

// Main Controller
Route::resource('/orca/useraccount', UserController::class);
Route::GET('/orca/user/useraccount', [UserController::class, 'useraccount']);
Route::resource('/orca/main', MainController::class);
// End Main Controller