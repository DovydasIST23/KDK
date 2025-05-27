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
/*
Route::prefix('Katalogas')->group(function () {

    // Route to display the index of Katalogas
    Route::get('/', function () {
        $Katalogas = kdk::all(); // Fetch all kdk records
        return view('Katalogas.index', compact('Katalogas')); // Pass the variable to the view
    })->name('Katalogas.index');

    // Route to display the create form
    Route::get('/create', function () {
        return view('Katalogas.create'); // Ensure this view exists
    })->name('kdk.create');

});
*/
Route::prefix('Katalogas')->group(function () {
    // Route to display the index of Katalogas
    Route::get('/', [KDKController::class, 'index'])->name('Katalogas.index');

    // Route to display the create form
    Route::get('/create', [KDKController::class, 'create'])->name('Katalogas.create');

    // Route to store a new contact
    Route::post('/Katalogas', [KDKController::class, 'store'])->middleware('auth')->name('Katalogas.store');
});

