<?php

use Illuminate\Http\Request;
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
    Route::get('/', function () {
        $myData = [
            'name' => "Sachin Sarola"
        ];
        return view('red_store.home', $myData);
    })->name('home');

    Route::get('/about', function () {
        return view('red_store.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('red_store.contact');
    })->name('contact');

    Route::get('/accounts', function () {
        return view('red_store.accounts');
    })->name('accounts');

    Route::get('/cart', function () {
        return view('red_store.cart');
    })->name('cart');

    Route::get('/product_details', function () {
        return view('red_store.product_details');
    })->name('product_details');

    Route::get('/products', function () {
        return view('red_store.products');
    })->name('products');
});


Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});