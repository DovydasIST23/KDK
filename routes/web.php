<?php

use Illuminate\Support\Facades\Route;
use App\Models\kdk;
use App\Http\Controllers\KDKController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::prefix('Katalogas')->group(function () {
    // Route to display the index of Katalogas
    Route::get('/', [KDKController::class, 'index'])->name('Katalogas.index');

    // Route to display the create form
    Route::get('/create', [KDKController::class, 'create'])->name('Katalogas.create');

    // Route to store a new Katalogas entry
    Route::post('/', [KDKController::class, 'store'])->middleware('auth')->name('Katalogas.store');

    // Route to display a specific Katalogas entry for editing
    Route::get('/{id}/edit', [KDKController::class, 'edit'])->name('Katalogas.edit');

    // Route to update a Katalogas entry
    Route::put('/{id}', [KDKController::class, 'update'])->middleware('auth')->name('Katalogas.update');

    // Route to delete a Katalogas entry
    Route::delete('/{id}', [KDKController::class, 'destroy'])->middleware('auth')->name('Katalogas.destroy');

    // Route to display trashed Katalogas entries
    Route::get('/trashed', [KDKController::class, 'trashed'])->name('Katalogas.trashed');

    // Route to restore a trashed Katalogas entry
    Route::post('/{id}/restore', [KDKController::class, 'restore'])->middleware('auth')->name('Katalogas.restore');

    // Route to force delete a Katalogas entry
    Route::delete('/{id}/forceDelete', [KDKController::class, 'forceDelete'])->middleware('auth')->name('Katalogas.forceDelete');
});


