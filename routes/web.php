<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'Dashboard')->name('dashboard');
    
    
});

Route::controller(TransactionController::class)->prefix('transactions')->name('transactions.')->group(function (){
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
});


require __DIR__.'/settings.php';
