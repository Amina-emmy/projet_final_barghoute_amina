<?php

use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
//* VIEWS
Route::get('/',[HomeController::class,"index"])->name("home.index");
Route::get('/products',[ProductController::class,"index"])->name("products.index");
Route::get('/contact',[ContactController::class,"index"])->name("contact.index");
Route::get('/loginRegister',[LoginRegisterController::class,"index"])->name("loginRegister.index");
Route::get('/showSingleProduct/{product}',[ProductController::class,"showProduct"])->name("products.showProduct");
Route::get('/panier',[PanierController::class,"index"])->name("panier.index");
// Route::get('/products/category/{categoryClicked}',[ProductController::class,"categoryClicked"])->name("products.categoryClicked");

//* FUNCTIONS
//? mailNewsLetter
Route::post('/home/mailNewsLetter',[HomeController::class,"mailNewsLetter"])->name('home.mailNewsLetter');

//^ ADMIN ONLY
Route::get('/backoffice',[BackofficeController::class,'index'])->middleware(['auth', 'verified','role:admin'])->name('backoffice');
//? USERS
Route::put('/backoffice/changeRole/{user}',[BackofficeController::class,'changeRole'])->name('backoffice.changeRole');
Route::delete('/backoffice/destroyUser/{user}',[BackofficeController::class,'destroyUser'])->name('backoffice.destroyUser');
//? Products
Route::post('/backoffice/addProduct',[ProductController::class,'addProduct'])->name('backoffice.addProduct');
Route::put('/backoffice/updateProduct/{product}',[ProductController::class,'updateProduct'])->name('backoffice.updateProduct');
Route::delete('/backoffice/destroyProduct/{product}',[ProductController::class,'destroyProduct'])->name('backoffice.destroyProduct');











//& AUTH Routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
