<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::redirect('/', '/contacts');

Route::resource('contacts', ContactController::class);
Route::get('contacts/import', [ContactController::class, 'show'])->name('contacts.import');
Route::post('contacts/import', [ContactController::class, 'import'])->name('contacts.import');