<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\CheckRole;
use PHPUnit\TextUI\XmlConfiguration\Group;

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


Route::get('/login', [LoginController::class,'loginPage'])->name('login');
Route::post('/postlogin', [LoginController::class,'postLogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/register', [LoginController::class,'register'])->name('register');
Route::post('/savedata', [LoginController::class,'saveData'])->name('savedata');

Route::group(['middleware' => ['auth','checkrole:admin,user']], function(){
Route::get('/home', [HomeController::class,'index'])->name('home');
});