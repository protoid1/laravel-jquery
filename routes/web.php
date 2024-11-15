<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

class Service{ //tambahan
//
public $hello ='<h1>Test</h1>';

};

Route::get('/test',function(Service $service){
    // return($service->hello);
    die($service::class);
});
// Route::get('/Home', [HomeController::class, 'showGallery']);

Route::get('/', [PagesController::class , 'showImage']);
