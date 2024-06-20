<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/Home', [HomeController::class, 'showGallery']);

Route::get('/', [PagesController::class , 'showImage']);
