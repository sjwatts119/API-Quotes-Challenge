<?php

use App\Http\Controllers\Api\V1\QuoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')
    ->name('v1.')
    ->group(function () {
        Route::name('quotes.')
            ->controller(QuoteController::class)
            ->group(function () {
                Route::get('/quotes', 'index')->name('index');
            });
    });
