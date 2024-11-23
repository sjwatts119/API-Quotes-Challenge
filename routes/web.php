<?php

use Illuminate\Support\Facades\Route;
use App\Services\QuoteService;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard')
            ->with('quotes', app(QuoteService::class)->getQuotes(5));
    })->name('dashboard');
});
