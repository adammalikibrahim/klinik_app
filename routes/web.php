<?php


use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Auth::routes();


// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware('isAdmin')->group(function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('produk', ProductController::class);
    Route::resource('transaksi', TransactionController::class);
});

Route::prefix('owner')->middleware('isOwner')->group(function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('karyawan', EmployeeController::class);
    Route::resource('produk', ProductController::class);
    Route::resource('transaksi', TransactiioController::class);
});





// Route::get('/owner', function () {
//     return view('owner');
// })->middleware('isOwner');

// Route::get('/admin', function () {
//     return view('admin');
// })->middleware('isAdmin');


