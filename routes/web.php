<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\LandingPage;
use App\Livewire\Vents\Index;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', LandingPage::class);
// Route::get('/vents/index/{id}/{name}', function ($id, $name) {
//     return view('livewire.vents.index', compact('id', 'name'))->layout('layouts.app');
// });
Route::get('/index', Index::class)->name('index');

// Route::get('/vents/index/{id}/{name}', Index::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
