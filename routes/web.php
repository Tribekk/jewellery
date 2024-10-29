<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoneModelController;
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
    return view('welcome');
})->name('index');

//Каталог камней
Route::prefix('/stone')->group(function () {
    Route::get('/', [StoneModelController::class, 'index'])->name('stone');
});

//Камни и украшения
Route::prefix('decorations')->group(function () {
    Route::get('/', function () {
        return view('StonesAndDecorations.StonesAndDecorations');
    })->name('StonesAndDecorations');
});

//Каталог ювелирных изделий

Route::prefix('jewelry-catalog')->group(function () {
    Route::get('/', function () {
        return view('JewelryCatalog.JewelryCatalog');
    })->name('JewelryCatalog');
});

//О нас

Route::prefix('about')->group(function () {
    Route::get('/', function () {
        return view('about.about');
    })->name('about');
});

//Блог

Route::prefix('blog')->group(function () {
    Route::get('/', function () {
        return view('blog.blog');
    })->name('blog');
});

//Энциклопедия

Route::prefix('encyclopedia')->group(function () {
    Route::get('/', function () {
        return view('encyclopedia.encyclopedia');
    })->name('encyclopedia');
});

//Корзина

Route::prefix('cart')->group(function () {
    Route::get('/', function () {
        return view('cart.cart');
    })->name('cart');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
