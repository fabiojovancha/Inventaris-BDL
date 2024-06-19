<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TipeBarangController;
use App\Http\Controllers\FJController;
use App\Http\Controllers\FBController;
use App\Http\Controllers\FJDetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\logBarangController;


Route::get('/', [LoginController::class,'index'])->name('loginPage');
Route::post('/session/login', [LoginController::class,'login']);
Route::get('/session/logout', [LoginController::class,'logout'])->name('logout');

#Home
Route::get('/home', [HomeController::class,'index']);

#barang
Route::get('/barang', [BarangController::class,'index'])->name('listBarang');
Route::get('/barang/create_barang', [BarangController::class,'create'])->name('createBarang');
Route::post('/barang/create_barang', [BarangController::class,'store'])->name('storeBarang');
Route::get('/barang/{idBarang}', [BarangController::class,'edit'])->name('editBarang');
Route::put('/barang/{idBarang}', [BarangController::class,'update'])->name('updateBarang');
Route::delete('/barang/delete_barang/{idBarang}', [BarangController::class, 'destroy'])->name('deleteBarang');

Route::get('/barang/tipe', [BarangController::class,'brg'])->name('barangPerTipe');

#tipe barang
Route::get('/tipebarang', [TipeBarangController::class,'index'])->name('listTipeBarang');
Route::get('/tipebarang/create_tipebarang', [TipeBarangController::class,'create'])->name('createTipeBarang');
Route::post('/tipebarang/create_tipebarang', [TipeBarangController::class,'store'])->name('storeTipeBarang');
Route::get('/tipebarang/{idTipeBarang}', [TipeBarangController::class,'edit'])->name('editTipeBarang');
Route::put('/tipebarang/{idTipeBarang}', [TipeBarangController::class,'update'])->name('updateTipeBarang');
Route::delete('/tipebarang/delete_tipebarang/{idTipeBarang}', [TipeBarangController::class,'destroy'])->name('deleteTipeBarang');

#fj
Route::get('/fj', [FJController::class,'index'])->name('listFJ');
Route::get('/fj/filter', [FJController::class,'filter'])->name('filterFJ');
Route::get('/fj/create_fj', [FJController::class,'create'])->name('createFJ');
Route::post('/fj/create_fj', [FJController::class,'store'])->name('storeFJ');
Route::get('/fj/{idFJ}', [FJController::class,'edit'])->name('editFJ');
Route::put('/fj/{idFJ}', [FJController::class,'update'])->name('updateFJ');
Route::delete('/fj/delete_fj/{idFJ}', [FJController::class, 'destroy'])->name('deleteFJ');

#fj
Route::get('/FB', [FBController::class,'index'])->name('listFB');
Route::get('/FB/filter', [FBController::class,'filter'])->name('filterFB');
Route::get('/FB/create_FB', [FBController::class,'create'])->name('createFB');
Route::post('/FB/create_FB', [FBController::class,'store'])->name('storeFB');
Route::get('/FB/{idFB}', [FBController::class,'edit'])->name('editFB');
Route::put('/FB/{idFB}', [FBController::class,'update'])->name('updateFB');
Route::delete('/FB/delete_FB/{idFB}', [FBController::class, 'destroy'])->name('deleteFB');

#FBDet
Route::get('/FBdet/{idFB}', [FBController::class, 'show'])->name('showFB');
Route::get('/FBdet/{idFB}/create_FBdet', [FBController::class, 'create'])->name('addFBDet');
Route::get('/FBdet/create_FBdet', [FBController::class, 'store'])->name('storeFBDet');

#FJDet
Route::get('/fjdet/{idFJ}', [FJController::class, 'show'])->name('showFJ');
Route::get('/fjdet/create_FJDet', [FJController::class, 'createFJDet'])->name('createFJDet');
Route::get('/fjdet/create_fjdet', [FJController::class, 'store'])->name('storeFJDet');


#pelanggan
Route::get('/pelanggan', [PelangganController::class,'index'])->name('listPelanggan');
Route::get('/pelanggan/create_pelanggan', [PelangganController::class,'create'])->name('createPelanggan');
Route::post('/pelanggan/create_pelanggan', [PelangganController::class,'store'])->name('storePelanggan');
Route::get('/pelanggan/{idPelanggan}', [PelangganController::class,'edit'])->name('editPelanggan');
Route::put('/pelanggan/{idPelanggan}', [PelangganController::class,'update'])->name('updatePelanggan');
Route::delete('/pelanggan/delete_pelanggan/{idPelanggan}', [PelangganController::class, 'destroy'])->name('deletePelanggan');

#Supplier
Route::get('/Supplier', [SupplierController::class,'index'])->name('listSupplier');
Route::get('/Supplier/create_Supplier', [SupplierController::class,'create'])->name('createSupplier');
Route::post('/Supplier/create_Supplier', [SupplierController::class,'store'])->name('storeSupplier');
Route::get('/Supplier/{idSupplier}', [SupplierController::class,'edit'])->name('editSupplier');
Route::put('/Supplier/{idSupplier}', [SupplierController::class,'update'])->name('updateSupplier');
Route::delete('/Supplier/delete_Supplier/{idSupplier}', [SupplierController::class, 'destroy'])->name('deleteSupplier');

#LogBarang
Route::get('/LogBarang', [logBarangController::class,'index'])->name('listLogBarang');
