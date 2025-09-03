<?php
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;


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
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
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

Route::get('/mySecrete/page', function(){
    echo "This is my atm pin: 7777";
})->middleware('myCustom')->name('mySecrete');

// Route to resend email verification
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('success', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Route to log in user with id 1
Route::get('/login-user', function () {
    Auth::loginUsingId(87);
    return 'Logged in as user 1';
});

// Route to log out current user
Route::get('/logout-user', function () {
    Auth::logout();
    return 'Logged out';
});


// Example route protected by auth middleware
Route::get('/middleware', function () {
    echo "<pre>";
    print_r("HEllow World");
    echo "</pre>";
})->middleware('auth');

Route::get('/xxx', function () {
    $user = Auth::user();
    $user->name = 'Rani Pari';
    $user->save();
    dd($user->toArray());
    echo "<pre>";
    print_r("HEllow World xxx");
    echo "</pre>";
})->middleware(['auth', 'verified']);


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

Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
?>

