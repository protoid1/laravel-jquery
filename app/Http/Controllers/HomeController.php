<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class HomeController extends Controller
{
    public function showGallery()
    {
        $imageUrls = [];
        $imageFolder = public_path('assets');
        

        // Cek apakah folder gambar ada
        if (File::exists($imageFolder)) {
            $images = File::files($imageFolder);

            foreach ($images as $image) {
                $imageUrls[] = asset('assets/' . $image->getFilename());
            }
        }

        return view('Home', ['imageUrls' => $imageUrls]);
    }
}
