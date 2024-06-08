<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
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
Route::resource('useraccount', LoginController::class);
Route::GET('/orca/users/useraccount', [LoginController::class, 'useraccount']);
// End User Controller

// Main Controller
Route::resource('dashboard', MainController::class);
// End Main Controller