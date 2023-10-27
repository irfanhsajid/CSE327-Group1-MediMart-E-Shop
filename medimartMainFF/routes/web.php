<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\medimart_controllers\UserController;
use App\Http\Controllers\medimart_controllers\HomepageController;
use App\Http\Controllers\medimart_controllers\ProductController;
use App\Http\Controllers\Admin_controllers\addProductController;

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

// Route::get('/', function () {
//     return view('viewHomepage');
// });
Route::get('/',[HomepageController::class,'viewHomepage']);

Route::get('/dashboard', function () { 
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/user_register',[UserController::class,'view'])->name('user_register');
Route::post('/submit',[UserController::class,'insert']);
Route::get('/user_login',[UserController::class,'viewLogin'])->name('user_login');
Route::POST('/successfully_login',[UserController::class,'validateData'])->name('successfully_login');
Route::get('/product_page',[ProductController::class,'viewProductPage']);
Route::get('/add_product_page',[addProductController::class,'viewAdminProductPage']);
Route::Post('/add_book/submit',[addProductController::class,'addBooks'])->name('/add_book/submit');
require __DIR__.'/auth.php';
