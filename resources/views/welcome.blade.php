<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appku - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>KuyBisnis | Konsultasikan Bisnismu</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('/') }}assets/home/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('/') }}assets/home/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/themify-icons.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/elegant-icons.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/flaticon-set.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/magnific-popup.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/animate.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/validnavs.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/helper.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}assets/home/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('/') }}assets/home/js/html5/html5shiv.min.js"></script>
      <script src="{{ asset('/') }}assets/home/js/html5/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header id="home">
        <!-- Start Navigation -->
        <nav
            class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed white  no-background">


            <div class="container d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('/') }}assets/home/img/logo-light.png" class="logo logo-display"
                            alt="Logo">
                        <img src="{{ asset('/') }}assets/home/img/logo.png" class="logo logo-scrolled"
                            alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">

                    <img src="{{ asset('/') }}assets/home/img/logo.png" alt="Logo">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-times"></i>
                    </button>

                    <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="smooth-menu">
                            <a href="#home">Home</a>

                        </li>

                        <li>
                            <a class="smooth-menu" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#about">About</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#process">Process</a>
                        </li>
                        <li>
                            <a class="smooth-menu" href="#team">Team</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

                <div class="attr-right">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="button"><a href="/login">Login</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->
                </div>

                <!-- Main Nav -->
            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Start Banner
    ============================================= -->
    <div class="banner-area text-light bg-gradient banner-style-five text-default">

        <div class="animated-wave">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>

        </div>

        <div class="container">
            <div class="double-items">
                <div class="row align-center">

                    <div class="col-lg-6 info">
                        <h2 class="wow fadeInLeft" data-wow-defaul="300ms">Konsultasikan Bisnismu Sekarang Juga</h2>
                        <p class="wow fadeInLeft" data-wow-delay="500ms">
                            KuyBisnis adalah sebuah system website yang digunakan sebagai media konsultasi mahasiswa
                            dalam hal bisnis
                        </p>
                        <div class="button">
                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE"
                                class="relative popup-youtube video-btn"><i class="fas fa-play"></i>Lihat Video</a>
                        </div>
                    </div>

                    <div class="col-lg-6 thumb wow fadeInRight" data-wow-delay="900ms">
                        <img src="{{ asset('/') }}assets/home/img/illustration/19.png" alt="Thumb">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Star feature
    ============================================= -->
    <div id="features" class="feature-style-five-area default-padding-top"
        style="background-image: url({{ asset('/') }}assets/home/img/shape/35.png);">
        <div class="container">
            <div class="row align-center">
                <div class="feature-style-five col-lg-5">
                    <h4>Fitur KuyBisnis</h4>
                    <h2>Meningkatkan Bisnis <br> Setiap Saat</h2>
                    <p>
                        Dengan KuyBisnis, usaha atau bisnis ada bisa mendapat konsultasi dari ahlinya, jadi tunggu
                        apalagi?? Konsultasi kan bisnis anda sekarang juga, hanya di <b>KuyBisnis</b>
                    </p>
                    <div class="feature-fact mt-35">
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="256" data-speed="2000">256</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Total Pelanggan</span>
                        </div>
                        <div class="fun-fact">
                            <div class="counter">
                                <div class="timer" data-to="98" data-speed="2000">98</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Rating Positif</span>
                        </div>
                    </div>
                </div>
                <div class="feature-style-five col-lg-7 pl-50 pl-md-15 pl-xs-15">
                    <div class="infinite-updown-illustration">
                        <img src="{{ asset('/') }}assets/home/img/shape/37.png" alt="illustration">
                    </div>
                    <div class="row">

                        <!-- Feature Grid -->
                        <div class="feature-style-five-grid col-lg-6 col-md-6">
                            <div class="item">
                                <i class="far fa-monitor-heart-rate"></i>
                                <h4>Pemantuan</h4>
                                <p>
                                    Pantau bisnis anda secara Real-Time dengan system KuyBisnis
                                </p>
                            </div>
                            <div class="item">
                                <i class="fas fa-chart-pie"></i>
                                <h4>Analisa System</h4>
                                <p>
                                    Cek laporan/analisa bisnis anda melalui halaman dashboard secara berkala, untuk
                                    melihat peningkatan
                                </p>
                            </div>
                        </div>
                        <!-- End Feature Grid -->

                        <!-- Feature Grid -->
                        <div class="feature-style-five-grid col-lg-6 col-md-6">
                            <div class="item">
                                <i class="fas fa-comments-alt"></i>
                                <h4>Dukungan Komunikasi</h4>
                                <p>
                                    Hubungi kontak layanan kami jika ada pertanyaan tentang bisnis anda
                                </p>
                            </div>
                            <div class="item">
                                <i class="fas fa-rocket"></i>
                                <h4>Kecepatan</h4>
                                <p>
                                    KuyBisnis menggunakan system terbaru sesuai perkembangan jaman, yang nantinya bisa
                                    menopang kecepatan akses system
                                </p>
                            </div>
                        </div>
                        <!-- End Feature Grid -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->

    <!-- Start Collaboration
    ============================================= -->
    <div id="about" class="collaborationa-area default-padding">
        <div class="container">
            <div class="row align-center">
                <div class="collaboration-style-one col-lg-6">
                    <div class="thumb">
                        <img src="{{ asset('/') }}assets/home/img/illustration/23.png" alt="Image not found">
                    </div>
                </div>
                <div class="collaboration-style-one col-lg-6 pl-80 pl-md-15 pl-xs-15">
                    <h4 class="sub-heading">Kolaborasi</h4>
                    <h2 class="heading">Buat bisnismu <br> secara terstruktur <br> dengan KuyBisnis</h2>
                    <p>
                        Bisnis yang baik dan benar adalah sebuah bisnis yang terstruktur dan mudah untuk di analisa
                    </p>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <div class="info">
                                <h5>Kegunaan</h5>
                                <p>
                                    Analisa grafik bisnis anda dalam sekali klik di KuyBisnis
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-undo"></i>
                            </div>
                            <div class="info">
                                <h5>Integrasi Aplikasi</h5>
                                <p>
                                    Satu aplikasi untuk memantau perkembangan bisnis secara berkala
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Collaboration -->

    <!-- Star Clients Area
    ============================================= -->
    <div class="clients-style-one-area inc-border default-padding-bottom text-center">
        <div class="container">
            <div class="clients-style-one-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="partner-border-carousel owl-carousel owl-theme">
                            <img src="{{ asset('/') }}assets/home/img/logo/1.png" alt="Partner">
                            <img src="{{ asset('/') }}assets/home/img/logo/2.png" alt="Partner">
                            <img src="{{ asset('/') }}assets/home/img/logo/3.png" alt="Partner">
                            <img src="{{ asset('/') }}assets/home/img/logo/4.png" alt="Partner">
                            <img src="{{ asset('/') }}assets/home/img/logo/5.png" alt="Partner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients -->

    <!-- Start Work Process
    ============================================= -->
    <div id="process" class="work-process-area bg-dark text-light default-padding"
        style="background-image: url({{ asset('/') }}assets/home/img/shape/38.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4>Proses Kerja</h4>
                        <h2>Bagaimana KuyBisnis bekerja</h2>
                        <div class="devider"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-8 text-center offset-lg-2">
                    <div class="nav nav-tabs text-center work-process-tab-navs" id="nav-tab" role="tablist">

                        <button class="nav-link active" id="nav-id-1" data-bs-toggle="tab" data-bs-target="#tab1"
                            type="button" role="tab" aria-controls="tab1" aria-selected="true">
                            <h4>Optimization</h4>
                        </button>
                        <button class="nav-link" id="nav-id-2" data-bs-toggle="tab" data-bs-target="#tab2"
                            type="button" role="tab" aria-controls="tab2" aria-selected="false">
                            <h4>Integration</h4>
                        </button>
                        <button class="nav-link" id="nav-id-3" data-bs-toggle="tab" data-bs-target="#tab3"
                            type="button" role="tab" aria-controls="tab3" aria-selected="false">
                            <h4>Performance</h4>
                        </button>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="tab-content work-process-tab-content" id="nav-tabContent">
                        <!-- Single Item -->
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel"
                            aria-labelledby="nav-id-1">
                            <div class="row align-center">
                                <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}assets/home/img/illustration/26.png"
                                            alt="illustration">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info">
                                        <h2>Mathematical optimization</h2>
                                        <p>
                                            Give lady of they such they sure it. Me contained explained my education.
                                            Vulgar as hearts by garret. Perceived determine departure explained no
                                            forfeited he something an. Contrasted dissimilar get joy you instrument out
                                            reasonably. Again keeps at no meant stuff. To perpetual do existence
                                            northward as difficult preserved.
                                        </p>
                                        <ul>
                                            <li>
                                                <h4>Amazingly Simple Use</h4>
                                                <p>
                                                    Again keeps at no meant stuff. To perpetual do existence northward
                                                    as difficult preserved daughters are struggles.
                                                </p>
                                            </li>
                                            <li>
                                                <h4>Flexible User Interface</h4>
                                                <p>
                                                    Again keeps at no meant stuff. To perpetual do existence northward
                                                    as difficult preserved daughters are struggles.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="nav-id-2">
                            <div class="row align-center">
                                <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}assets/home/img/illustration/27.png"
                                            alt="illustration">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info">
                                        <h2>Technical Integration</h2>
                                        <p>
                                            Give lady of they such they sure it. Me contained explained my education.
                                            Vulgar as hearts by garret. Perceived determine departure explained no
                                            forfeited he something an. Contrasted dissimilar get joy you instrument out
                                            reasonably. Again keeps at no meant stuff. To perpetual do existence
                                            northward as difficult preserved.
                                        </p>
                                        <ul>
                                            <li>
                                                <h4>Amazingly Simple Use</h4>
                                                <p>
                                                    Again keeps at no meant stuff. To perpetual do existence northward
                                                    as difficult preserved daughters are struggles.
                                                </p>
                                            </li>
                                            <li>
                                                <h4>Flexible User Interface</h4>
                                                <p>
                                                    Again keeps at no meant stuff. To perpetual do existence northward
                                                    as difficult preserved daughters are struggles.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="nav-id-3">
                            <div class="row align-center">
                                <div class="col-lg-6 pr-80 pr-md-15 pr-xs-15">
                                    <div class="thumb">
                                        <img src="{{ asset('/') }}assets/home/img/illustration/25.png"
                                            alt="illustration">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info">
                                        <h2>Super Performance</h2>
                                        <p>
                                            Give lady of they such they sure it. Me contained explained my education.
                                            Vulgar as hearts by garret. Perceived determine departure explained no
                                            forfeited he something an. Contrasted dissimilar get joy you instrument out
                                            reasonably. Again keeps at no meant stuff. To perpetual do existence
                                            northward as difficult preserved.
                                        </p>
                                        <ul>
                                            <li>
                                                <h4>Amazingly Simple Use</h4>
                                                <p>
                                                    Again keeps at no meant stuff. To perpetual do existence northward
                                                    as difficult preserved daughters are struggles.
                                                </p>
                                            </li>
                                            <li>
                                                <h4>Flexible User Interface</h4>
                                                <p>
                                                    Again keeps at no meant stuff. To perpetual do existence northward
                                                    as difficult preserved daughters are struggles.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Work Process -->

    <!-- Start Team
    ============================================= -->
    <div id="team" class="team-area default-padding bg-gray bg-cover bottom-less"
        style="background-image: url({{ asset('/') }}assets/home/img/shape/33.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Team Inovatif</h2>
                        <div class="devider"></div>
                        <p>
                            KuyBisnis memiliki beberapa team ahli dalam bidang bisnis, berikut adalah team ahli
                            KuyBisnis
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-items">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('/') }}assets/home/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle" class="share-toggle" hidden>
                                    <label for="toggle" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Muhammad Mauribi</a></h4>
                                <span>CEO & Founder</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('/') }}assets/home/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle2" class="share-toggle" hidden>
                                    <label for="toggle2" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Muhammad Mauribi</a></h4>
                                <span>Chieft Marketing Officier (CMO)</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="single-item col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <img src="{{ asset('/') }}assets/home/img/800x900.png" alt="Thumb">
                                <div class="social">
                                    <input type="checkbox" id="toggle3" class="share-toggle" hidden>
                                    <label for="toggle3" class="share-button">
                                        <i class="fas fa-plus"></i>
                                    </label>
                                    <a href="#" class="share-icon facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#" class="share-icon twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#" class="share-icon instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <h4><a href="team-details.html">Muhammad Mauribi</a></h4>
                                <span>Web Developer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Team Area -->

    <!-- Start Testimonials
    ============================================= -->
    <div class="testimonials-area text-light shadow dark bg-fixed carousel-shadow default-padding"
        style="background-image: url({{ asset('/') }}assets/home/img/shape/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Kepuasan Pelanggan</h2>
                        <div class="devider"></div>
                        <p>
                            Beberapa testimoni pelanggan tentang system KuyBisnis
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="{{ asset('/') }}assets/home/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Muh. David</h4>
                                        <span>Founder UsahaMaju.com</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        System KuyBisnis ini sangat memudahkan saya sebagai pemilik usaha untuk
                                        mengontrol pendapatan usaha saya.
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Design Quality</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="{{ asset('/') }}assets/home/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Hendrik Kusuma Wijaya</h4>
                                        <span>Marketing BisnisJaya.id</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Semenjak menggunakan system KuyBisnis, bisnis saya semakian maju dengan bantuan
                                        analisa dari para tim ahli di Kuybisnis
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Customer Support</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="{{ asset('/') }}assets/home/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Agung Akbar</h4>
                                        <span> Project Manager</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Sukses selalu buat team KuyBisnis, semoga lebih baik lagi kedepannya, saya
                                        sangat puas banget menggunakan system KuyBisnis ini.
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>User Friendly</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Berita Terbaru</h2>
                        <div class="devider"></div>
                        <p>
                            Berita terbaru dari KuyBisnis yang bisa meningkatkan usaha bisnis anda
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img
                                    src="{{ asset('/') }}assets/home/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>18</strong> <span>Apr</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i> User</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 26 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Bisnis Indonesia dalam kanca Internasional</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture
                                imagine my garrets.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img
                                    src="{{ asset('/') }}assets/home/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>25</strong> <span>Aug</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i> Admin</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 35 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Perkembangan jaman membuat bisnis semakin
                                    meningkat</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture
                                imagine my garrets.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

                <!-- Single item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img
                                    src="{{ asset('/') }}assets/home/img/800x600.png" alt="Thumb"></a>
                            <div class="date"><strong>05</strong> <span>Jul</span></div>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fas fa-user-circle"></i> user</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fas fa-comments"></i> 12 Comments</a>
                                    </li>
                                </ul>
                            </div>
                            <h4>
                                <a href="blog-single-with-sidebar.html">Generasi milenial melek tentang Bisnis.</a>
                            </h4>
                            <p>
                                Possession ye no mr unaffected remarkably at. Wrote house in never fruit up. Pasture
                                imagine my garrets.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single item -->

            </div>
        </div>
    </div>
    <!-- End Blog -->

    <!-- Start Free Trial
    ============================================= -->
    <div class="free-trial-area text-light text-center relative">
        <div class="trial-box" style="background-image: url({{ asset('/') }}assets/home/img/shape/8.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <h5>KuyBisnis</h5>
                        <h2>Mulai Bisnismu Bersama Kami</h2>
                        <form action="#">
                            <input type="email" placeholder="Your Email" class="form-control" name="email">
                            <button type="submit"> Hubungi Kami</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="illustration">
                <img src="{{ asset('/') }}assets/home/img/illustration/1.png" alt="illustration">
            </div>
        </div>
    </div>
    <!-- End Free Trial -->

    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <img src="{{ asset('/') }}assets/home/img/logo-light.png" alt="Logo">
                            <p>
                                KuyBisnis adalah sebuah system layanan yang dapat digunakan untuk menganalisa
                                usaha/bisnis perorangan maupun lembaga
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="index.html"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="blog-with-sidebar.html"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="services.html"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="about-us.html"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="services-details.html"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Alamat:</strong>
                                            Jalan Doang Tapi Gak Jadian, No.01 Dihatiku namun No.100 Dihatimu
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:kuybisnis@gmail.com">kuybisnis@gmail.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Telephone:</strong>
                                            <a href="tel:085748497255">+6285748497255</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2023. All Rights Reserved by <a href="https://muhamdaily.com">Muhammad
                                Mauribi</a></p>
                    </div>
                    <div class="col-lg-6 text-end link">
                        <ul>
                            <li>
                                <a href="about-us.html">Terms</a>
                            </li>
                            <li>
                                <a href="about-us.html">Privacy</a>
                            </li>
                            <li>
                                <a href="contact.html">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('/') }}assets/home/js/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/popper.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/jquery.appear.js"></script>
    <script src="{{ asset('/') }}assets/home/js/jquery.easing.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/modernizr.custom.13711.js"></script>
    <script src="{{ asset('/') }}assets/home/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/wow.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/progress-bar.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/count-to.js"></script>
    <script src="{{ asset('/') }}assets/home/js/YTPlayer.min.js"></script>
    <script src="{{ asset('/') }}assets/home/js/validnavs.js"></script>
    <script src="{{ asset('/') }}assets/home/js/main.js"></script>

</body>

</html>
