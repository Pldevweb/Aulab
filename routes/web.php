<?php

use App\Models\User;
use App\Models\Product;
use App\Models\Categorie;
use TCG\Voyager\Facades\Voyager;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\EmailVerificationController;

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
    return view('home');
})->name('home');

Route::view('editprofile', 'editprofile')
->name('editprofile');

Route::view('about', 'about')
->name('about');

Route::get('/blog', [ArticleController::class, 'index'])
->name('blog');

Route::view('contact', 'contact')
->name('contact');

Route::view('partners', 'partners')
->name('partners');

Route::view('shoppingCart', 'shoppingCart')
->name('shoppingCart');

Route::get('produits-pour-chiens/{categorie}', [ProductController::class, 'showProductsByCategorie'])->name('productsbycategorie');

Route::get('produits-pour-chiens/{categorie}/{name}', [ProductController::class, 'showProductDetails'])->name('productDetails');


Route::resource('produits-pour-chiens', ProductController::class);

Route::get('/product-search', [ProductController::class, 'search'])->name('productSearch');

Route::resource('cart', CartController::class);

Route::post('/cart/update-quantity/{cartProduct}', [CartController::class, 'updateQuantity'])
->name('cart.update-quantity');

Route::put('/update-cart-total/{cartId}', [CartController::class, 'updateTotalCost'])->name('update.cart.total');


Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::resource('/avatar', AvatarController::class);


