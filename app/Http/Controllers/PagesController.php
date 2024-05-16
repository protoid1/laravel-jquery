<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PagesController extends Controller
{
    public function showImage()
    {
        $imageUrls = [];
        $imageFolder = public_path('assets/img/portfolio/fullsize');

        // Cek apakah folder gambar ada
        if (File::exists($imageFolder)) {
            $images = File::files($imageFolder);

            foreach ($images as $image) {
                $imageUrls[] = asset('assets/img/portfolio/fullsize/' . $image->getFilename());
            }
        }

        return view('pages', ['imageUrls' => $imageUrls]);

    }
}
