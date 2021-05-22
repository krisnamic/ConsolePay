<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\BarangCRUDController;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'userHome'])->name('userHome');

Route::get('/login', [LoginController::class, 'loginPage'])->name('login');

Route::post('/postlogin', [LoginController::class, 'postLogin'])->name('postlogin');
Route::get('/refresh-captcha', [LoginController::class, 'refreshCaptcha'])->name('refreshcaptcha');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/savedata', [LoginController::class, 'saveData'])->name('savedata');
Route::group(['middleware' => ['auth', 'checkrole:admin']], function () {
    Route::get('/barang', [BarangCRUDController::class, 'index'])->name('barang');
});
Route::group(['middleware' => ['auth', 'checkrole:user']], function () {
    // Route::get('/addToShoppingCart/{id}', [UserController::class, 'addToShoppingCart'])->name('addToShoppingCart');
    Route::post('/addToShoppingCart', [UserController::class, 'addToShoppingCart'])->name('addToShoppingCart');
    Route::get('/viewShoppingCart', [UserController::class, 'viewShoppingCart'])->name('viewShoppingCart');
    Route::post('/deleteItemFromCart', [UserController::class, 'deleteItemFromCart'])->name('deleteItemFromCart');
    Route::post('/addOrder', [UserController::class, 'addOrder'])->name('addOrder');
    Route::get('/viewOrder', [UserController::class, 'viewOrder'])->name('viewOrder');
    Route::post('/ubahStatusPemesanan', [UserController::class, 'ubahStatusPemesanan'])->name('ubahStatusPemesanan');
});
Route::get('/{id}', [UserController::class, 'detailBarang'])->name('detailBarang');



Route::group(['middleware' => ['auth', 'checkrole:admin,user']], function () {
    Route::get('/barang', [BarangCRUDController::class, 'index'])->name('barang');
});

//datatables
Route::resource('barang', BarangCRUDController::class);
Route::post('delete-barang', [BarangCRUDController::class, 'destroy']);
