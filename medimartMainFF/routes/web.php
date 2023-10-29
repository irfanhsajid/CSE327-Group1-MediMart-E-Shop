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
Route::get('/',[HomepageController::class,'viewHomepage'])->name('viewHomepage');

Route::get('/dashboard', function () { 
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* This line of code is defining a GET route that maps the URL "/user_register" to the "view" method of
the "UserController" class. It also assigns the name "user_register" to this route, which can be
used to generate URLs or redirect to this route using the route's name instead of the URL. */
Route::get('/user_register',[UserController::class,'view'])->name('user_register');


/* The code `Route::post('/submit',[UserController::class,'insert']);` is defining a POST route that
maps the URL "/submit" to the "insert" method of the "UserController" class. This route is used to
handle form submissions and insert data into the database. */

Route::post('/submit',[UserController::class,'insert']);


/* This code is defining a GET route that maps the URL "/user_login" to the "viewLogin" method of the
"UserController" class. It also assigns the name "user_login" to this route, which can be used to
generate URLs or redirect to this route using the route's name instead of the URL. */

Route::get('/user_login',[UserController::class,'viewLogin'])->name('user_login');



/* This line of code is defining a POST route that maps the URL "/successfully_login" to the
"validateData" method of the "UserController" class. It also assigns the name "successfully_login"
to this route, which can be used to generate URLs or redirect to this route using the route's name
instead of the URL. This route is used to handle the login form submission and validate the user's
login credentials. */
Route::POST('/successfully_login',[UserController::class,'validateData'])->name('successfully_login');


/* The code `Route::get('/product_page',[ProductController::class,'viewProductPage']);` is defining a
GET route that maps the URL "/product_page" to the "viewProductPage" method of the
"ProductController" class. This route is used to display the product page, where users can view the
available products. */

Route::get('/product_page',[ProductController::class,'viewProductPage'])->name('viewProductPage');;


/* The code `Route::get('/add_product_page',[addProductController::class,'viewAdminProductPage']);` is
defining a GET route that maps the URL "/add_product_page" to the "viewAdminProductPage" method of
the "addProductController" class. This route is used to display the admin product page, where the
admin can add new products to the system. */

Route::get('/add_product_page',[addProductController::class,'viewAdminProductPage']);


/* The code
`Route::Post('/add_book/submit',[addProductController::class,'addBooks'])->name('/add_book/submit');`
is defining a POST route that maps the URL "/add_book/submit" to the "addBooks" method of the
"addProductController" class. This route is used to handle the form submission for adding a new book
to the system. The `name('/add_book/submit')` assigns the name "/add_book/submit" to this route,
which can be used to generate URLs or redirect to this route using the route's name instead of the
URL. */

Route::Post('/add_book/submit',[addProductController::class,'addBooks'])->name('/add_book/submit');
require __DIR__.'/auth.php';
