<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Creative - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> --}}
    <!-- Google fonts-->
    {{-- <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" /> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" /> --}}
    <!-- SimpleLightbox plugin CSS-->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" /> --}}
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href=" {{ asset('css/styles.css') }}" rel="stylesheet" />
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Waroeng</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 h-100">
            <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <img class="img-fluid" src="assets/img/waroeng21.png"> </img>
                </div>

                <div class="col-lg-6 align-self-baseline">
                    {{-- <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the
                        Bootstrap framework! Just download a theme and start customizing, no strings attached!</p> --}}
                    <p class="text-white-75 mb-12">Waroeng Jajanan Kita</p>
                    <a class="btn btn-primary-custom1 btn-xl" href="#about">Cari tahu Yuk</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section bg-primary-custom1" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white-75 mt-0">Perjalanan Si Waroeng</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Bearawal dari dapur kecil pada tahun 2021,Seorang dengan kecintaan pada
                        makanan memulai petualangan kulinernya. </p>
                    {{--
                    <hr class="divider divider-light" /> --}}
                    <p class="text-white-75 mb-4">Meskipun kecil, dapur Waroeng21 penuh dengan cita rasa dan
                        kreativitas. Setiap hidangan dibuat dengan sepenuh hati, menggunakan bahan-bahan segar dan
                        berkualitas tinggi. Tak heran, mereka dengan cepat menarik perhatian para pecinta kuliner. </p>
                    <a class="btn btn-light btn-xl" href="#services">Ayo Kita Mulai !</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Pelayanan Kami</h2>
            <hr class="divider-custom" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-house fs-1 text-primary1"></i></div>
                        <h3 class="h4 mb-2">Produksi Rumahan</h3>
                        <!-- <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi bi-hand-thumbs-up fs-1 text-primary1"></i></div>
                        <h3 class="h4 mb-2">Bahan Berkualitas</h3>
                        <!-- <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-primary1"></i></div>
                        <h3 class="h4 mb-2">Dibuat Sepenuh Hati</h3>
                        <!-- <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-primary1"></i></div>
                        <h3 class="h4 mb-2">Layanan Online</h3>
                        <!-- <p class="text-muted mb-0">Is it really open source if it's not made with love?</p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <div id="portfolio">
        <div class="container-fluid p-0">
            <div class="row g-0">
                @foreach ($imageUrls as $index => $imageUrl)
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-box" title="Project Name">
                            <img class="img-landscape" src="{{ $imageUrl['url'] }}" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">{{ $imageUrl['nameFile'] }}</div>
                            </div>
                        </div>
                    </div>
                    <div id="popup{{ $index }}" class="popup-container">
                        <span class="close-btn">&times;</span>
                        <span class="prev-btn">&#10094;</span>
                        <span class="next-btn">&#10095;</span>
                        <img src="{{ $imageUrl['url'] }}" alt="..." class="popup-img">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <!-- <section class="page-section bg-dark text-white">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
            <a class="btn btn-light btn-xl" href="https://startbootstrap.com/theme/creative/">Download Now!</a>
        </div>
    </section> -->
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="mt-0">Ayo Hubungi Kami!</h2>
                    <hr class="divider-custom" />
                    <p class="text-muted mb-5">Mau coba jadi member dan dapat keuntungan menarik? isi form di bawah dan jangan lupa isi keterangan review nya ya </p>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                            </div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text"
                                placeholder="Enter your message here..." style="height: 10rem"
                                data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary-custom1 btn-xl disabled" id="submitButton"
                                type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
     <!-- Ikon WhatsApp -->
     <a href="https://wa.me/6285697790134?text=Hai%20aku%20mau%20pesan%20jajananya%20dong%20kak%20%3AD" class="whatsapp-icon" target="_blank">
        <i class="bi bi-whatsapp"></i>
    </a>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container px-4 px-lg-5">
            <div class="small text-center text-muted">Copyright &copy; 2024 - Waroeng</div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- SimpleLightbox plugin JS-->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script> --}}
    <!-- Core theme JS-->
    <script src="{{ asset('js/script.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    {{-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> --}}
    <script>
        $(document).ready(function () {
            var currentPopupIndex = null; // Indeks popup yang sedang ditampilkan
            var index = null; // Indeks popup yang sedang ditampilkan
            var indexing = $(this).data('imageUrl');

            // Fungsi untuk menampilkan popup berdasarkan indeksnya
            function showPopup(index) {
                $(".popup-container").fadeOut(); // Menyembunyikan semua popup yang sedang aktif
                $("#popup" + index).fadeIn(); // Menampilkan popup dengan ID sesuai indeks
                currentPopupIndex = index; // Menyimpan indeks popup yang sedang ditampilkan
            }

            // Menampilkan Popup saat Thumbnail diklik
            $(".portfolio-box").click(function () {
                
                var index = $(".portfolio-box").index(this); // Mengambil indeks thumbnail yang diklik
                // alert(index);
                showPopup(index); // Menampilkan popup berdasarkan indeksnya
            });

            // Tombol Close pada setiap Popup
            $(".popup-img .close-btn").click(function () {
                $(this).closest(".popup-container").fadeOut(); // Menyembunyikan popup yang sedang aktif
                currentPopupIndex = null; // Menghapus indeks popup yang sedang ditampilkan
            });

            // Tombol Next pada setiap Popup
            $(".popup-container .next-btn").click(function(){
                var nextIndex = currentPopupIndex + 1; // Menghitung indeks popup berikutnya
                showPopup(nextIndex % {{count($imageUrls)}}); // Menampilkan popup berikutnya
            });

            // Tombol Previous pada setiap Popup
            $(".popup-container .prev-btn").click(function(){
                var prevIndex = currentPopupIndex - 1; // Menghitung indeks popup sebelumnya
                if (prevIndex < 0) {
                    prevIndex = {{count($imageUrls)}} - 1; // Jika indeks negatif, atur ke indeks terakhir
                }
                showPopup(prevIndex); // Menampilkan popup sebelumnya
            });

            // Menutup Popup saat area di luar Popup diklik
            $(window).click(function (event) {
                if (event.target.classList.contains("popup-container")) {
                    $(".popup-container").fadeOut(); // Menyembunyikan popup jika area di luar popup diklik
                    currentPopupIndex = null; // Menghapus indeks popup yang sedang ditampilkan
                }
            });
        });
    </script>
</body>

</html>