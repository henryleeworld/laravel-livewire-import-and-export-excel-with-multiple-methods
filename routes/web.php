<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Exports
    Route::get('export/array', [ExportController::class, 'array'])->name('export.array');
    Route::get('export/excel', [ExportController::class, 'excel'])->name('export.excel');
    Route::get('export/spatie', [ExportController::class, 'spatie'])->name('export.spatie');
    Route::get('export/fast-excel', [ExportController::class, 'fastExcel'])->name('export.fast-excel');

    // Imports
    Route::post('import/array', [ImportController::class, 'array'])->name('import.array');
    Route::post('import/excel', [ImportController::class, 'excel'])->name('import.excel');
    Route::post('import/spatie', [ImportController::class, 'spatie'])->name('import.spatie');
    Route::post('import/fast-excel', [ImportController::class, 'fastExcel'])->name('import.fast-excel');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
