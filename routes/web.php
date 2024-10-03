<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::with(['category', 'images'])->get();
    $groupedProducts = $products->groupBy(function ($product) {
        return $product->category->title;
    });

    return view('user.index', [
        'products' => $groupedProducts
    ]);
//    return request()->json(Product::with(['images'])->get());

});

Route::get('/{title}', [ProductController::class, 'show']);

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::get('/register', [RegisteredUserController::class, 'index']);
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::middleware(['role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
});
