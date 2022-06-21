<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAuthController;
use App\Http\Controllers\RegisterAuthController;
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
    return view('index');
});

//Login
Route::get('/login', [LoginAuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginAuthController::class, 'authentication']);
Route::post('/logout', [LoginAuthController::class, 'out']);

//Register
Route::get('/register', [RegisterAuthController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterAuthController::class, 'store']);

//Home
Route::get('/home', [HomeController::class, 'homepage'])->middleware('auth');

//Ebooks
Route::get('/collection', [HomeController::class, 'collectionview'])->middleware('auth');
Route::get('/details/{id}', [HomeController::class, 'ebookmore'])->middleware('auth');

//About Website
Route::get('/about', [HomeController::class, 'about']);

//Profile Settings
Route::get('/dashboard', [HomeController::class, 'profilesettings'])->middleware('auth');

//Admin Button
Route::get('/adminhomepage', [HomeController::class, 'adminhome'])->middleware('auth');

Route::get('/cart', [HomeController::class, 'cart'])->middleware('auth');

// Admin Controller
Route::get('/usermanagement', [AdminController::class, 'userview'])->middleware('auth');
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

Route::get('/addebooks',[admincontroller::class, "newebooks"]); 
Route::post('/ebookpost',[admincontroller::class, "postebooks"]);

Route::get('/ebookcollection',[admincontroller::class, "ebookcollection"]);
Route::get('/deleteebooks/{id}',[admincontroller::class, "deleteebooks"]);
Route::get('/updateoldebooks/{id}',[admincontroller::class, "updateoldebooks"]);
Route::post('/updateebooks/{id}',[admincontroller::class, "updatenewebooks"]);

Route::get('/updateroles/{id}',[admincontroller::class, "newroles"]);
Route::post('/updatenewroles/{id}',[admincontroller::class, "updatenewroles"]);
