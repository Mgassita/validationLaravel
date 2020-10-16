<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;



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

Route::get('/', [NavController::class, 'welcome']);
Route::get('/add', [NavController::class, 'add']);
Route::post('/add', [ActionController::class, 'add']);
Route::get('/show', [NavController::class, 'show']);
Route::post('/del', [ActionController::class, 'del']);
Route::post('/modify', [ActionController::class, 'modify']);
Route::post('/update', [ActionController::class, 'update']); 


