<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;

Route::get('/', function () {
    return view('index');
});

Route::get('admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/admin/profile/', [ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});


Route::prefix('admin')->group(function () {
    Route::resource('/katalog', KatalogController::class)->names([
        'index' => 'admin.katalog.index',
        'create' => 'admin.katalog.create',
        'store' => 'admin.katalog.store',
        'show' => 'admin.katalog.show',
        'edit' => 'admin.katalog.edit',
        'update' => 'admin.katalog.update',
        'destroy' => 'admin.katalog.destroy',
    ]);
});



require __DIR__.'/auth.php';


// Front End

Route::get('/katalog', [KatalogController::class, 'publicIndex'])->name('katalog.index');
Route::get('/katalog/{katalog}', [KatalogController::class, 'publicShow'])->name('katalog.show');

Route::get('/bumdes', [KatalogController::class, 'publicIndex'])->name('bumdes.public.index');
Route::get('/profile', [KatalogController::class, 'publicIndex'])->name('profile.public.index');