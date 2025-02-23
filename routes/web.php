<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'index'])->name('admin.dashboard');
Route::get('/admin-buku',[AdminController::class,'buku'])->name('admin.buku');
Route::get('/admin-member',[AdminController::class,'member'])->name('admin.member');
Route::get('/admin-transaksi-peminjaman',[AdminController::class,'peminjaman'])->name('admin.transaksi.peminjaman');
Route::get('/admin-transaksi-pengembalian',[AdminController::class,'pengembalian'])->name('admin.transaksi.pengembalian');
Route::get('/admin-laporan-peminjaman',[AdminController::class,'laporan_peminjaman'])->name('admin.laporan.peminjaman');
Route::get('/admin-laporan-pengembalian',[AdminController::class,'laporan_pengembalian'])->name('admin.laporan.pengembalian');
Route::get('/admin-laporan-denda',[AdminController::class,'laporan_denda'])->name('admin.laporan.denda');
Route::get('/profile',[AdminController::class,'profile'])->name('admin.profile');
Route::get('/admin',[AdminController::class,'admin'])->name('admin.homepage');
Route::get('/logout',[AdminController::class,'login'])->name('logout');