<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UpinController;

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
    return view('welcome');
});

Route::prefix('unipin')->group(function () {
    Route::get('/dashboard', [UpinController::class, 'index'])->name('unipin-dashboard');
    Route::prefix('master')->group(function () {
        Route::get('/supplier', [UpinController::class, 'showMasterSupplier'])->name('unipin-master-supplier');
        Route::get('/part', [UpinController::class, 'showMasterPart'])->name('unipin-master-part');
        Route::get('/user', [UpinController::class, 'showMasterUser'])->name('unipin-master-user');
    });
    Route::get('/purchase-order', [UpinController::class, 'showPurchaseOrderList'])->name('unipin-purchase-order');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
