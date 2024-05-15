<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Home', [HomeController::class, 'showGallery']);

Route::get('/pages', function () {
    return view('pages');
});
