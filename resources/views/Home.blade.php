<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .thumbnail {
            display: inline-block;
            margin: 10px;
            cursor: pointer;
            position: relative; /* Menjadikan posisi thumbnail sebagai referensi */
            width: 200px; /* Lebar thumbnail */
            height: 150px; /* Tinggi thumbnail */
            overflow: hidden; /* Mencegah gambar melebihi batas thumbnail */
        }

        .thumbnail img {
            width: 100%; /* Mengisi lebar thumbnail */
            height: auto; /* Mengatur tinggi sesuai proporsi gambar */
        }

        .thumbnail-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 30px;
            color: rgba(255, 255, 255, 0.8);
            z-index: 1;
        }

        .popup-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 999;
            overflow: auto;
            padding-top: 60px;
        }

        .popup-img {
            display: block;
            margin: auto;
            max-width: 80%;
            max-height: 80%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Pusatkan gambar di tengah popup */
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Style tambahan untuk tombol Next/Previous */
        .prev-btn, .next-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 30px;
            color: white;
            cursor: pointer;
            z-index: 1000; /* Agar tombol navigasi di atas gambar */
        }

        .prev-btn {
            left: 20px;
        }

        .next-btn {
            right: 20px;
        }
    </style>
</head>
<body>
    @foreach ($imageUrls as $index => $imageUrl)
        <div class="thumbnail">
            <img src="{{ $imageUrl }}" alt="Thumbnail Image">
        </div>
        <div id="popup{{ $index }}" class="popup-container">
            <span class="close-btn">&times;</span>
            <span class="prev-btn">&#10094;</span>
            <span class="next-btn">&#10095;</span>
            <img src="{{ $imageUrl }}" alt="..." class="popup-img">
        </div>

        <!-- Popup untuk gambar ke-{{ $index + 1 }} -->
     
    @endforeach

</body>
</html>

<script>
        $(document).ready(function(){
            var currentPopupIndex = null; // Indeks popup yang sedang ditampilkan
            var index = null; // Indeks popup yang sedang ditampilkan

            // Fungsi untuk menampilkan popup berdasarkan indeksnya
            function showPopup(index) {
                $(".popup-container").fadeOut(); // Menyembunyikan semua popup yang sedang aktif
                $("#popup" + index).fadeIn(); // Menampilkan popup dengan ID sesuai indeks
                currentPopupIndex = index; // Menyimpan indeks popup yang sedang ditampilkan
            }

            // Menampilkan Popup saat Thumbnail diklik
            $(".thumbnail").click(function(){
                var index = $(".thumbnail").index(this); // Mengambil indeks thumbnail yang diklik
                showPopup(index); // Menampilkan popup berdasarkan indeksnya
            });

            // Tombol Close pada setiap Popup
            $(".popup-container .close-btn").click(function(){
                $(this).closest(".popup-container").fadeOut(); // Menyembunyikan popup yang sedang aktif
                currentPopupIndex = null; // Menghapus indeks popup yang sedang ditampilkan
            });

            // Tombol Next pada setiap Popup
            $(".popup-container .next-btn").click(function(){
                var nextIndex = currentPopupIndex + 1; // Menghitung indeks popup berikutnya
                showPopup(nextIndex % {{ count($imageUrls) }}); // Menampilkan popup berikutnya
            });

            // Tombol Previous pada setiap Popup
            $(".popup-container .prev-btn").click(function(){
                var prevIndex = currentPopupIndex - 1; // Menghitung indeks popup sebelumnya
                if (prevIndex < 0) {
                    prevIndex = {{ count($imageUrls) }} - 1; // Jika indeks negatif, atur ke indeks terakhir
                }
                showPopup(prevIndex); // Menampilkan popup sebelumnya
            });

            // Menutup Popup saat area di luar Popup diklik
            $(window).click(function(event) {
                if (event.target.classList.contains("popup-container")) {
                    $(".popup-container").fadeOut(); // Menyembunyikan popup jika area di luar popup diklik
                    currentPopupIndex = null; // Menghapus indeks popup yang sedang ditampilkan
                }
            });
        });
    </script>