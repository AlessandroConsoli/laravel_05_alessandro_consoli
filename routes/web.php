<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');

Route::post('contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');