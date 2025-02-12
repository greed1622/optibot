<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\LandingPage;
use App\Livewire\Vents\Index;
use App\Livewire\AddPatient;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/vents/index/{id}/{name}', function ($id, $name) {
//     return view('livewire.vents.index', compact('id', 'name'))->layout('layouts.app');
// });

// Route::get('/vents/index/{id}/{name}', Index::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', LandingPage::class)->name('landing.page');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/index', Index::class)->name('index');
    Route::get('/add-patient', AddPatient::class)->name('add.patient');

});

require __DIR__.'/auth.php';
