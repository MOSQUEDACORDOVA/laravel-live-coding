<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOfferController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/job-offers', [JobOfferController::class, 'index']);
Route::post('/job-offers/load-more', [JobOfferController::class, 'loadMore']);