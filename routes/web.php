<?php

use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('request-order', [RequestController::class, 'orderRequest']);
Route::post('request-consultation', [RequestController::class, 'consultationRequest']);
Route::post('request-mailing', [RequestController::class, 'mailingRequest']);
Route::post('request-suggestion', [RequestController::class, 'suggestionRequest']);