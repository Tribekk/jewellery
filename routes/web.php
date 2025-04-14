<?php

use App\Http\Controllers\B2BController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\EncyclopediaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SemiPreciousStonesController;
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
    Route::get('/{type}/{color?}', [StoneModelController::class, 'filter'])->where(['type' => '[a-zA-ZА-Яа-я]+', 'color' => '[a-zA-ZА-Яа-я]+'])->name('stones.filter');
    Route::get('/{article}', [StoneModelController::class, 'show'])->where('article', '[a-zA-Z0-9-]+')->name('stones.item');
});

//Полудрагоценные камни
Route::prefix('decorations')->group(function () {
    Route::get('/', [SemiPreciousStonesController::class, 'index'])->name('StonesAndDecorations');
    Route::get('/{article}', [SemiPreciousStonesController::class, 'show'])->where('article', '[a-zA-Z0-9-]+')->name('StonesAndDecorations.item');
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
    Route::get('/', [BlogsController::class, 'index'])->name('blog');
    Route::get('/{page}', [BlogsController::class, 'viewPage'])->name('blogPage');
});

//ПУБЛИЧНАЯ ОФЕРТА
Route::prefix('offer')->group(function (){
   Route::get('/', function (){
      return view('offer.offer');
   })->name('offer');
});

//Энциклопедия

Route::prefix('encyclopedia')->group(function () {
    Route::get('/', [EncyclopediaController::class, 'index'])->name('encyclopedia');
    Route::get('/{page}/{dopPage?}', [EncyclopediaController::class, 'viewPage'])->name('view-page-encyclopedia');
});

//Корзина

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart');
    Route::get('/add/{article}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/remove/{article}', [CartController::class, 'remove'])->name('cart.remove');
});
// B2B
Route::prefix('partners')->group(function (){
   Route::get('/', [B2BController::class, 'index'])->name('B2B');
});

// Контакты
Route::prefix('contact')->group(function (){
    Route::get('/', [ContactController::class, 'index'])->name('contact');
});

//Сертификация
Route::prefix('certification')->group(function (){
    Route::get('/', [CertificationController::class, 'index'])->name('certification');
});

//Заказ
Route::prefix('order')->group(function (){
    Route::get('/create', [OrderController::class, 'index'])->name('create.order');
    Route::post('/create', [OrderController::class, 'create']);
});

//Оплата и доставка
Route::prefix('delivery')->group(function (){
    Route::get('/', [DeliveryController::class, 'index'])->name('delivery');
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
