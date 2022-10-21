<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\AboutController;

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

Route::get('/lang/{code}', [LangController::class, 'lang']);

Route::middleware('locale')->group(function() {
    Route::get('/', function () {
        return view('Home');
    });

    Route::middleware('auth')->group(function() {
        Route::get('/listing', [ListController::class, 'index']);
        Route::get('/list_table', [ListController::class, 'table']);
        Route::get('/edit/{id}', [ListController::class, 'edit']);
        Route::patch('/update/{id}', [ListController::class, 'update']);
        Route::get('/create', [PersonController::class, 'index']);
        Route::get('/list/{id}', [ListController::class, 'showCard']);
        Route::get('/delete/{id}', [CrudController::class, 'destroy']);
    });
    
    Route::get('/main', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'test']);
    Route::post('/store', [PersonController::class, 'store']);
    Route::get('/test', [PersonController::class, 'succ']);
    Route::get('/signin', [AuthController::class, 'signinForm'])->name('login');
    Route::post('/signin', [AuthController::class, 'signin']);
    Route::get('/register', [AuthController::class, 'registerForm']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/signout', [AuthController::class, 'signout']);
    Route::get('/fail', [PersonController::class, 'fail']);
    Route::get('/about', [AboutController::class, 'about']);
});