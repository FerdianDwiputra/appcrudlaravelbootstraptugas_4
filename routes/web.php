<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('produk')->controller(ProdukController::class)->group(function () {
    Route::get('/', 'index')->name('produk.index');
    Route::get('/create', 'create')->name('produk.create');
    Route::post('/proses', 'proses')->name('produk.proses');
    Route::get('/{id}', 'read')->name('produk.read');
    Route::get('/{id}/edit', 'edit')->name('produk.edit');
    Route::put('/{id}/update', 'update')->name('produk.update');
    Route::delete('/{id}/delete', 'delete')->name('produk.delete');
});
