<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(ContactController::class)->group(function (){
    Route::get('contact-us', 'index');
    Route::post('contact-us', 'store')->name('contact.us.store');
});