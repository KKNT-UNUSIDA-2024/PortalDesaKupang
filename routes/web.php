<?php


use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\BumdesWisataController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\DusunController;
use App\Http\Controllers\HomeController;
use App\Models\Post; // Pastikan untuk mengimpor model Post

// Route untuk halaman depan
Route::get('/', [HomeController::class, 'index']);

Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');



Route::middleware(['auth'])->prefix('admin/dashboard')->name('admin.')->group(function () {
    Route::resource('posts', PostController::class);
    Route::post('posts/upload', [PostController::class, 'upload'])->name('posts.upload');
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

// Rute untuk mengunduh PDF
Route::get('/bumdes-wisata/download/pdf', [BumdesWisataController::class, 'downloadPDF'])->name('admin.bumdes-wisata.download.pdf');

// Rute untuk mengunduh Excel
Route::get('/bumdes-wisata/download/excel', [BumdesWisataController::class, 'downloadExcel'])->name('admin.bumdes-wisata.download.excel');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('profildesa/edit', [ProfildesaController::class, 'edit'])->name('admin.profildesa.edit');
    Route::patch('profildesa/update', [ProfildesaController::class, 'update'])->name('admin.profildesa.update');
});

// Route untuk admin
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dusun', [DusunController::class, 'index'])->name('admin.dusun.index'); // Menampilkan daftar dusun
    Route::get('dusun/create', [DusunController::class, 'create'])->name('admin.dusun.create'); // Form untuk menambah dusun
    Route::post('dusun', [DusunController::class, 'store'])->name('admin.dusun.store'); // Menyimpan dusun baru
    Route::get('dusun/{id}/edit', [DusunController::class, 'edit'])->name('admin.dusun.edit'); // Form untuk mengedit dusun
    Route::put('dusun/{id}', [DusunController::class, 'update'])->name('admin.dusun.update'); // Mengupdate dusun
    Route::delete('dusun/{id}', [DusunController::class, 'destroy'])->name('admin.dusun.destroy'); // Menghapus dusun
});


require __DIR__.'/auth.php';


// Front End
Route::get('/profile/edit', [ProfilDesaController::class, 'edit'])->name('profile.edit');


Route::get('/katalog', [KatalogController::class, 'publicIndex'])->name('katalog.index');
Route::get('/katalog/{katalog}', [KatalogController::class, 'publicShow'])->name('katalog.show');

Route::get('/bumdes', [KatalogController::class, 'publicIndex'])->name('bumdes.public.index');
Route::get('/profile', [KatalogController::class, 'publicIndex'])->name('profile.public.index');

Route::get('/profile-desa', [ProfilDesaController::class, 'show'])->name('profile-desa.show');

Route::get('/dusun', [DusunController::class, 'showForVisitors'])->name('dusun.visitors');

Route::get('/{slug}', [DusunController::class, 'show'])->name('dusun.show');


