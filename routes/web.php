<?php

use App\Http\Controllers\AssetDetailController;
use App\Http\Controllers\AssetsController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PenanggungJawabController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\SewaDetailController;
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
    return view('dashboard');
});


Route::prefix("penanggung-jawab")->as('pj.')->group(function () {
    Route::get("/", [PenanggungJawabController::class, 'index'])->name('index');
    Route::get("/edit/{penanggungJawab}", [PenanggungJawabController::class, 'edit'])->name('edit');
    Route::post("/store", [PenanggungJawabController::class, 'store'])->name('store');
    Route::put("/update/{penanggungJawab}", [PenanggungJawabController::class, 'update'])->name('update');
    Route::delete("/delete/{penanggungJawab}", [PenanggungJawabController::class, 'destroy'])->name('delete');
});

Route::prefix("asset")->as('asset.')->group(function () {
    Route::get("/", [AssetsController::class, 'index'])->name('index');
    Route::get("/detail/{assets}", [AssetsController::class, 'show'])->name('detail');
    Route::get("/edit/{assets}", [AssetsController::class, 'edit'])->name('edit');
    Route::post("/store", [AssetsController::class, 'store'])->name('store');
    Route::put("/update/{assets}", [AssetsController::class, 'update'])->name('update');
    Route::delete("/delete/{assets}", [AssetsController::class, 'destroy'])->name('delete');
});

Route::prefix("asset-detail")->as('asset-detail.')->group(function () {
    Route::get("/edit/{assetDetail}", [AssetDetailController::class, 'edit'])->name('edit');
    Route::post("/store", [AssetDetailController::class, 'store'])->name('store');
    Route::put("/update/{assetDetail}", [AssetDetailController::class, 'update'])->name('update');
    Route::delete("/delete/{assetDetail}", [AssetDetailController::class, 'destroy'])->name('delete');
});

Route::prefix("sewa")->as('sewa.')->group(function () {
    Route::get("/", [SewaController::class, 'index'])->name('index');
    Route::get("/detail/{sewa}", [SewaController::class, 'show'])->name('detail');
    Route::get("/edit/{sewa}", [SewaController::class, 'edit'])->name('edit');
    Route::post("/store", [SewaController::class, 'store'])->name('store');
    Route::put("/update/{sewa}", [SewaController::class, 'update'])->name('update');
    Route::delete("/delete/{sewa}", [SewaController::class, 'destroy'])->name('delete');
});

Route::prefix("sewa-detail")->as('sewa-detail.')->group(function () {
    Route::get("/edit/{sewaDetail}", [SewaDetailController::class, 'edit'])->name('edit');
    Route::post("/store", [SewaDetailController::class, 'store'])->name('store');
    Route::put("/update/{sewaDetail}", [SewaDetailController::class, 'update'])->name('update');
    Route::delete("/delete/{sewaDetail}", [SewaDetailController::class, 'destroy'])->name('delete');
});

Route::prefix("jabatan")->as('jabatan.')->group(function () {
    Route::get("/", [JabatanController::class, 'index'])->name('index');
    Route::get("/edit/{jabatan}", [JabatanController::class, 'edit'])->name('edit');
    Route::post("/store", [JabatanController::class, 'store'])->name('store');
    Route::put("/update/{jabatan}", [JabatanController::class, 'update'])->name('update');
    Route::delete("/delete/{jabatan}", [JabatanController::class, 'destroy'])->name('delete');
});

Route::prefix("kategori")->as('kategori.')->group(function () {
    Route::get("/", [KategoriController::class, 'index'])->name('index');
    Route::get("/edit/{kategori}", [KategoriController::class, 'edit'])->name('edit');
    Route::post("/store", [KategoriController::class, 'store'])->name('store');
    Route::put("/update/{kategori}", [KategoriController::class, 'update'])->name('update');
    Route::delete("/delete/{kategori}", [KategoriController::class, 'destroy'])->name('delete');
});

Route::prefix("jenis")->as('jenis.')->group(function () {
    Route::get("/", [JenisController::class, 'index'])->name('index');
    Route::get("/edit/{jenis}", [JenisController::class, 'edit'])->name('edit');
    Route::post("/store", [JenisController::class, 'store'])->name('store');
    Route::put("/update/{jenis}", [JenisController::class, 'update'])->name('update');
    Route::delete("/delete/{jenis}", [JenisController::class, 'destroy'])->name('delete');
});
