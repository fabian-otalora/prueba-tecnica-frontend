<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CoctelesController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('home', [AuthController::class, 'home']); 
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('list-api', [CoctelesController::class, 'viewListAPI']);
Route::get('list-api-two', [CoctelesController::class, 'viewTwoListAPI']);
Route::get('list-db', [CoctelesController::class, 'viewListDB']);
Route::get('listDB', [CoctelesController::class, 'listDB']);

Route::post('saveDrink', [CoctelesController:: class, 'saveDrink']);
Route::post('delete', [CoctelesController:: class, 'delete']);