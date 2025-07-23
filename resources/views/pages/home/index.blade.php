<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Tes Polri JILC Kendari</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('landing/assets/img/logo.png')}}" rel="icon">
    <link href="{{ asset('landing/assets/img/logo.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('landing/assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('landing/assets/img/logo.png') }}" alt="" style="width:3rem">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Beranda</a></li>
                    <li><a href="#trial-test">Trial Test</a></li>
                    <li><a href="#pricing">Paket</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <a class="btn-getstarted" href="index.html">Daftar</a>


        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">

                            <h1 class="mb-4">
                                Website Latihan <br>
                                Calon Polisi <br>
                                <span class="accent-text">JILC Kediri</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                Website ini adalah sarana latihan bagi kalian yang ingin menguji kemampuan menjawab tes akademik serta tes psikologi dalam Seleksi Penerimaan Polri.
                            </p>

                            <div class="hero-buttons">
                                <a href="#trial-test" class="mx-1 btn btn-primary me-0 me-sm-2">Daftar</a>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="mt-2 btn btn-link mt-sm-0 glightbox">
                                    <i class="bi bi-box-arrow-in-right me-1"></i>
                                    Login
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('landing/assets/img/3d-jilc.png') }}" alt="Hero Image" class="img-fluid">

                        </div>
                    </div>
                </div>

                <div class="mt-5 row stats-row gy-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-4 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Trusted</h4>
                                <p class="mb-0">Terpercaya disetiap Tahunnya</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Updated</h4>
                                <p class="mb-0">Soal Terupdate tiap Tahun</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Verified</h4>
                                <p class="mb-0">Ribuan siswa JILC lulus</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- trial-test Section -->
        <section id="trial-test" class="trial-test section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <h1 class="trial-test-title">Trial Test Kecermatan</h1>
                        <p class="trial-test-description">Kamu bisa mencoba simulasi Tes Kecermatan di website kami secara GRATIS.
                            Persiapan mengikuti tes psikologi dalam Seleksi Penerimaan Polri.</p>


                        <div class="info-wrapper">
                            <div class="row gy-4">
                                <div class="col-lg-12 ">
                                    <div class="hero-buttons">

                                        <a href="/trial-test" class=" btn btn-warning me-0 me-sm-2" style="background-color: var(--accent-color);
                                                border-color: var(--accent-color);
                                                color: var(--contrast-color);
                                                padding: 0.75rem 2.5rem;
                                                border-radius: 50px;
                                                font-weight: 500;
                                                transition: all 0.3s ease;">Mulai Tes!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="{{ asset('landing/assets/img/memory-test.png') }}" alt="Business Meeting" class="img-fluid main-image rounded-4">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /trial-test Section -->


        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Paket</h2>
                <p>Tersedia Paket pembelian untuk anda yang ingin mendapatkan simulasi Tes Polri</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 justify-content-center">

                    <!-- Basic Plan -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-card">
                            <h3>Basic</h3>
                            <div class="price">
                                <span class="currency">Rp.</span>
                                <span class="amount">25.000</span>
                                <span class="period">/ bulan</span>
                            </div>
                            <p class="description">Paket basic adalah paket standar yang akan anda dapatkan bagi anda yang baru ingin mencoba untuk mendaftar.</p>

                            <h4>Benefit :</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Akses Tes Akademik 250x
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Psikologi Test
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Materi Akademik
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary">
                                Dapatkan Sekarang
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Standard Plan -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card popular">
                            <div class="popular-badge">Most Popular</div>
                            <h3>Pro</h3>
                            <div class="price">
                                <span class="currency">Rp. </span>
                                <span class="amount">40.000</span>
                                <span class="period">/ bulan</span>
                            </div>
                            <p class="description">Paket pro adalah paket premium yang akan anda dapatkan untuk anda yang benar benar serius ingin dafta Polri.</p>

                            <h4>Benefit:</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Akses Tes Akademik 500x
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Pembahasan Soal
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Psikologi Test
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Materi Akademik
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Layanan Konsultasi 24 jam
                                </li>
                            </ul>

                            <a href="#" class="btn btn-light">
                                Dapatkan Sekarang
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Premium Plan -->


                </div>

            </div>

        </section><!-- /Pricing Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Kontak</h2>
                <p>Tuliskan tanggapan atau saran kalian.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Contact Person</h3>
                            <p>Kalian masih binggung? Silahkan hubungi CS kami melalui Contact Person dibawah!</p>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <p>Jl. Bunggasi, Poros Anduonohu & Jl. M.T. Haryono No.109 Wua-wua</p>
                                    <p>Kendari, Indonesia</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Nomor Telepon</h4>
                                    <p>+628 1292 9133 17</p>
                                    <p>+628 2291 2579 74</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Social Media</h4>
                                    <p>@bimbel_jilc_kendari</p>
                                    <p>Bimbel Jilc Kendari</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Kirim Pesan</h3>
                            <p>Kirim pesan kepada Customer Service.</p>

                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Nama" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Perihal" required="">
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
                                    </div>

                                    <div class="text-center col-12">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Pesan kamu telah terkirim. Terima kasih!</div>

                                        <button type="submit" class="btn">Kirim Pesan</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-trial-test">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">JILC KENDARI</span>
                    </a>
                    <div class="pt-3 footer-contact">
                        <p>Jl. Bunggasi, Poros Anduonohu</p>
                        <p>Jl. M.T. Haryono No.109 Wua-wua</p>
                        <p>Kendari, Indonesia</p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>+628 2291 2579 74</span></p>
                        <p><strong>Email:</strong> <span>jilckendari@gmail.com</span></p>
                    </div>
                    <div class="mt-4 social-links d-flex">
                        <a href="https://www.instagram.com/bimbel_jilc_kendari/"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/bimbel_jilc_kendari/"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#trial-test">Trial Test</a></li>
                        <li><a href="#pricing">Paket</a></li>
                        <li><a href="#contact">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>Program Kami</h4>
                    <ul>
                        <li><a href="#">Kelas Reguler (SD, SMP, SMA)</a></li>
                        <li><a href="#">Kelas UTBK</a></li>
                        <li><a href="#">Kelas Kedinasan</a></li>
                        <li><a href="#">Kelas TNI/Polri</a></li>
                        <li><a href="#">Kelas CPNS</a></li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="container mt-4 text-center copyright">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">JILC KENDARI</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://www.instagram.com/m.yatt_/">Muhammad Hidayat</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/php-email-form/validate.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('landing/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('landing/assets/js/main.js')}}"></script>

</body>

</html>