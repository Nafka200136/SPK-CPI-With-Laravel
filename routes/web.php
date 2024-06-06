<?php

use App\Http\Controllers\backend\AlternatifController;
use App\Http\Controllers\backend\CriteriaController;
use App\Http\Controllers\backend\KinerjaController;
use App\Http\Controllers\frontend\CandidateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckCriteriaWeights;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/candidates', [CandidateController::class, 'showCpiProcess'])->name('candidates');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('alternatif', AlternatifController::class);
    Route::resource('kriteria', CriteriaController::class)->middleware(CheckCriteriaWeights::class);
    Route::resource('kinerja', KinerjaController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
