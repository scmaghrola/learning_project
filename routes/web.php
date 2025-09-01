<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsDetailsController;

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

Route::get('/user/insert', function () {

    return view('user.register_form');
})->name('insert-user');

Route::get('/', function () {

    $user = [
        'name' => "Subhash",
        'city' => "Samdhiyala",
        'age' => 21,
    ];
    return view('welcome', ['user' => $user, 'city' => 'Barwala']);
})->name('home');

Route::get('user/dashboard/', function () {

    $user = [
        'name' => "Subhash",
        'city' => "Samdhiyala",
        'age' => 21,
    ];
    return view('welcome', ['user' => $user, 'city' => 'Barwala']);
})->name('dashboard');


Route::get('/myfile', function (Request $request) {
    // dd(route('dashboard'));

    return view('myfile');
});

Route::redirect('/sachin',  url('myfile'));

// -------------------------------------


Route::prefix('red_store')->name('red_store.')->group(function () {
    Route::get('/', [HomeController::class,'index'])->name('home');

    Route::get('/about',[AboutController::class,'index'])->name('about');

    Route::get('/contact',[ContactController::class,'index'])->name('contact');

    Route::get('/accounts', [AccountsController::class,'index'])->name('accounts');

    Route::get('/cart', [CartController::class,'index'])->name('cart');

    Route::get('/product_details',[ProductsDetailsController::class,'index'])->name('product_details');

    Route::get('/products',[ProductsController::class,'index'])->name('products');
});


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});

Route::get('/user/xyz', [UserController::class, 'sachin']);
Route::post('/user/xyz', [UserController::class, 'storeData'])->name('insert.user');

Route::get('/user/{id}', [UserController::class, 'show']);

Route::resource('photos', PhotoController::class);

Route::resource('redstore', MyController::class);


Route::resource('users', UserController::class);

Route::resource('students', StudentController::class);