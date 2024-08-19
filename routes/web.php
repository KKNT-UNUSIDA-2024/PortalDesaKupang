<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\BumdesWisataController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index'])->name('home');

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

Route::prefix('admin')->group(function () {
    Route::resource('/bumdes-wisata', BumdesWisataController::class)->names([
        'index' => 'admin.bumdes-wisata.index',
        'create' => 'admin.bumdes-wisata.create',
        'store' => 'admin.bumdes-wisata.store',
        'show' => 'admin.bumdes-wisata.show',
        'edit' => 'admin.bumdes-wisata.edit',
        'update' => 'admin.bumdes-wisata.update',
        'destroy' => 'admin.bumdes-wisata.destroy',
    ]);
});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('profildesa/edit', [ProfildesaController::class, 'edit'])->name('admin.profildesa.edit');
    Route::patch('profildesa/update', [ProfildesaController::class, 'update'])->name('admin.profildesa.update');
});


require __DIR__.'/auth.php';


// Front End
Route::get('/profile/edit', [ProfilDesaController::class, 'edit'])->name('profile.edit');


Route::get('/katalog', [KatalogController::class, 'publicIndex'])->name('katalog.index');
Route::get('/katalog/{katalog}', [KatalogController::class, 'publicShow'])->name('katalog.show');

Route::get('/bumdes', [KatalogController::class, 'publicIndex'])->name('bumdes.public.index');
Route::get('/profile', [KatalogController::class, 'publicIndex'])->name('profile.public.index');

Route::get('/profile-desa', [ProfilDesaController::class, 'show'])->name('profile-desa.show');
