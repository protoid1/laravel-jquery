<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class PagesTest extends TestCase
{
    public function testShowImage()
    {
        // Path ke folder gambar
        $imageFolder = public_path('assets/img/portfolio/fullsize');

        // Cek apakah folder gambar ada
        $this->assertTrue(File::exists($imageFolder), 'Folder gambar tidak ditemukan.');

        // Ambil semua file gambar di folder
        $images = File::files($imageFolder);

        // Buat array nama file yang diharapkan
        $expectedFilenames = [];
        foreach ($images as $image) {
            $expectedFilenames[] = $image->getFilename();
        }

        // Panggil route atau metode controller
        $response = $this->get('/pages'); // Ganti dengan route yang sesuai

        // Pastikan response OK
        $response->assertStatus(200);

        // Ambil data dari response
        $responseData = $response->original->getData();

        // Buat array URL yang diharapkan
        $expectedUrls = [];
        foreach ($expectedFilenames as $filename) {
            $expectedUrls[] = asset('assets/img/portfolio/fullsize/' . $filename);
        }

        // Cek apakah URL gambar di response sama dengan URL yang diharapkan
        $this->assertEquals($expectedUrls, $responseData['imageUrls']);
    }
}
