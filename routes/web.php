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

    // Route to store a new contact
    Route::post('/Katalogas', [KDKController::class, 'store'])->middleware('auth')->name('Katalogas.store');

    // Route to display a specific contact
    Route::get('/{id}/edit', [KDKController::class, 'edit'])->name('Katalogas.edit');

    // Route to update a contact
    Route::put('/{id}', [KDKController::class, 'update'])->middleware('auth')->name('Katalogas.update');

    Route::delete('/{id}', [KDKController::class, 'destroy'])->middleware('auth')->name('Katalogas.destroy');
    Route::get('Katalogas/trashed', [KDKController::class, 'trashed'])->name('Katalogas.trashed');
    Route::post('Katalogas/{id}/restore', [KDKController::class, 'restore'])->name('Katalogas.restore');
    Route::delete('Katalogas/{id}/forceDelete', [KDKController::class, 'forceDelete'])->name('Katalogas.forceDelete');
    Route::resource('Katalogas', KDKController::class);

});

