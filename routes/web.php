<?php
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Auth\CompanyController;
use App\Http\Controllers\Auth\AgentController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);


// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@index');
});

// User Routes
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', 'UserController@index');
});

// Company Routes
Route::middleware(['auth', 'role:company'])->group(function () {
    Route::get('/company/dashboard', 'CompanyController@index');
});

// Agent Routes
Route::middleware(['auth', 'role:agent'])->group(function () {
    Route::get('/agent/dashboard', 'AgentController@index');
});