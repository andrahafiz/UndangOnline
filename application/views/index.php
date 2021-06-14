<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Get Married</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/LandingPage/images/favicon.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/animate.css">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/LineIcons.css">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/font-awesome.min.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/LandingPage/css/style.css">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="<?= base_url(); ?>assets/LandingPage/images/logo.svg" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#tema">Tema</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#statistik">Statistik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#harga">Harga</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimoni">Testimoni</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?= base_url('Demo') ?>">Demo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="<?= base_url('Mempelai') ?>">Login</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="<?= base_url('Register') ?>">Buat Undangan</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover" style="background-image: url(<?= base_url(); ?>assets/LandingPage/images/banner-bg.jpg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">Website</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Undangan Pernikahan Online</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Undang orang-orang terdekatmu, dengan menggunakan undangan pernikahan online yang praktis di GET MARRIED.</p>
                            <a href="<?= base_url('Demo') ?>" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Demo</a>
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img src="<?= base_url(); ?>assets/LandingPage/images/undangan-banner.png" alt="hero">
                        </div> <!-- header hero image -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div id="particles-1" class="particles"></div>
        </div> <!-- header hero -->
    </header>

    <!--====== CARI UNDANGAN ======-->
    <div class="brand-area pt-90">
        <div class="container">
            <div class="line"></div>
            <div class="col-lg-12">
                <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="undangan-content mt-65">
                                <h2 class="undangan-title">Cari undangan</h2>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="undangan-form mt-50">
                                <form action="#" id="form_id" method="post">
                                    <input type="text" id="kode_undangan" placeholder="Masukan kode undangan">

                                    <button type="button" id="btn_id" class="main-btn" onclick="submit_by_id()">Cari</button>
                                </form>
                                <!-- <form action="#" method="post" name="form_name" id="form_id" class="form_class">
                                    <h2>Javascript Form Submit Example</h2>
                                    <label>Name :</label>
                                    <input type="text" name="name" id="name" placeholder="Name" />
                                    <label>Email :</label>
                                    <input type="text" name="email" id="email" placeholder="Valid Email" />
                                    <input type="button" name="submit_id" id="btn_id" value="Submit by Id" />
                                    <form id="input" method="post">
                                    <input type="text" name="input" placeholder="Input Data...">
                                    <a href="#" onclick="document.getElementById('input').submit();">INPUT DATA</a>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="line mt-5"></div>
        </div> <!-- container -->
    </div>
    <!--====== END CARI UNDANGAN ======-->

    <!--====== TEMA PART START ======-->
    <section id="tema" class="about-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-30">
                        <h3 class="title mb-2">Tema Terfavorit Di <span> Getmarried</span></h3>
                        <div class="line m-auto"></div>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <?php foreach ($tema_favorite as $key => $value) { ?>

                    <div class="col-lg-4 col-md-7 col-sm-8">
                        <div class="single-team text-center mt-30 wow fadeIn shadow bg-white rounded-lg" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="team-image">
                                <img src="<?= base_url() . "assets/Tema/" . $value->image_thema . "" ?> " alt="Team" class="" style="height:300px; width:370px; object-fit:contain;">

                                <div class="social">
                                    <ul>
                                        <li> <a href="<?= base_url('Demo') ?>"><i class="lni lni-search"></i><strong>&nbsp;&nbsp;Preview</strong> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h5 class="holder-name "><a href="#"><span class="text-uppercase"><?= $value->nama_thema ?></span> </a></h5>
                                <p class="text"><?= $value->jumlah_tema ?> <i class="lni lni-star-filled text-warning"></i></p>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-2">
            <img src="<?= base_url(); ?>assets/LandingPage/images/about-shape-2.svg" alt="shape">
        </div>
    </section>
    <!--====== TEMA PART ENDS ======-->

    <!--====== STATISTIC  ======-->
    <section id="statistik" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="<?= base_url(); ?>assets/LandingPage/images/dots.svg" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="<?= base_url(); ?>assets/LandingPage/images/video.jpg" width="50%" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=_GUEOfnm8u8" class="video-popup"><i class="lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">Data Statistik<span> Website Getmarried Kami.</span></h3>
                            </div> <!-- section title -->
                            <p class="text">Berikut anda dapat melihat statistik website getmarried dibawah ini.</p>
                        </div> <!-- counter content -->
                        <div class="row no-gutters">

                            <div class="col-6">
                                <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter"><?= $jml_akun ?></span></span>
                                        <p class="text">Pengguna Web</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>

                            <div class="col-6">
                                <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter"><?= $jml_tema ?></span></span>
                                        <p class="text">Tema</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <!-- <div class="col-4">
                                <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">4.8</span></span>
                                        <p class="text">User Rating</p>
                                    </div>
                                </div> 
                            </div> -->
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-1">
            <img src="<?= base_url(); ?>assets/LandingPage/images/about-shape-1.svg" alt="shape">
        </div>
    </section>
    <!--====== STATISTIC ENDS ======-->

    <!--====== HARGA  ======-->
    <section id="harga" class="about-area pt-120">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeftBig;">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Harga &amp; Paket<span><br> untuk undangan yang sudah disediakan dibawah ini.</span></h3>
                        </div> <!-- section title -->
                        <ul class="text">
                            <li>- 100 Tema</li>
                            <li>- 10 Gambar Upload</li>
                            <li>- 3 Video Upload</li>
                        </ul>
                        <a href="#" class="main-btn">Buat Undangan</a>
                    </div> <!-- about content -->
                </div>

                <div class="col-lg-5 col-md-12 col-sm-12 ">

                    <div class="single-services text-center mt-30 wow fadeIn shadow-lg " data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="<?= base_url(); ?>assets/LandingPage/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="<?= base_url(); ?>assets/LandingPage/images/services-shape-2.svg" alt="shape">
                            <i class="lni lni-diamond-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h5>Harga</h5>
                            <h class="services-title ">Rp. 100.000</h>
                        </div>
                    </div> <!-- single services -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-shape-2">
            <img src="<?= base_url(); ?>assets/LandingPage/images/about-shape-2.svg" alt="shape">
        </div>
    </section>
    <!--====== END HARGA  ======-->



    <!--====== Testimoni PART START ======-->

    <section id="testimoni" class="testimonial-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Apa Kata Meraka Tentang<span> Get Married</span></h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <?php foreach ($testimoni as $key => $value) { ?>
                    <div class="col-lg-4">
                        <div class="single-testimonial">
                            <div class="testimonial-review d-flex align-items-center justify-content-between">
                                <div class="quota">
                                    <i class="lni-quotation"></i>
                                </div>
                                <div>
                                    <h5 class="holder-name"><?= $value->Username ?></a></h5>
                                </div>
                            </div>
                            <div class="testimonial-text">
                                <p class="text"><?= $value->Testimoni ?></p>
                            </div>
                            <div class="testimonial-author d-flex align-items-center">
                                <div class="author-image">
                                    <img class="shape" src="<?= base_url(); ?>assets/LandingPage/images/textimonial-shape.svg" alt="shape">
                                    <img class="author" src="<?= base_url(); ?>assets/LandingPage/images/author-2.png" alt="author">
                                </div>
                                <div class="author-content media-body">
                                    <h3 class="holder-name">Hardana</h3>
                                </div>
                            </div>
                        </div> <!-- single testimonial -->
                    </div>
                <?php } ?>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div>
                                <h5 class="holder-name">@GetMarried</a></h5>
                            </div>
                            <!-- <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Baru kali ini ada platform undangan pernikahan online yang gratis dan simple. Terimakasih</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="<?= base_url(); ?>assets/LandingPage/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="<?= base_url(); ?>assets/LandingPage/images/author-2.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Hardana</h6>
                                <p class="text">Wirausahawan</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div>
                                <h5 class="holder-name">@GetMarried</a></h5>
                            </div>
                            <!-- <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Baru kali ini ada platform undangan pernikahan online yang gratis dan simple. Terimakasih</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="<?= base_url(); ?>assets/LandingPage/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="<?= base_url(); ?>assets/LandingPage/images/author-2.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Hardana</h6>
                                <p class="text">Wirausahawan</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div>
                                <h5 class="holder-name">@GetMarried</a></h5>
                            </div>
                            <!-- <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Baru kali ini ada platform undangan pernikahan online yang gratis dan simple. Terimakasih</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="<?= base_url(); ?>assets/LandingPage/images/textimonial-shape.svg" alt="shape">
                                <img class="author" src="<?= base_url(); ?>assets/LandingPage/images/author-2.png" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Hardana</h6>
                                <p class="text">Wirausahawan</p>
                            </div>
                        </div>
                    </div> <!-- single testimonial -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== TESTIMONIAL PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="row">
                    <div class="col-lg">
                        <div class="pricing-page feature-area section-padding" id="features">
                            <div class="container">
                                <div class="row mb-5">
                                    <div class="col-lg-12">
                                        <div class="section-title text-center">
                                            <h3>Berikut beberapa keunggulan website undangan pernikahan online Datengdong :</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--50 mt--60 text-center">
                                        <img src="<?php echo base_url('assets/LandingPage/images/') . 'money.png' ?>"></img>
                                        <h6 class="title">1. Undangan Pernikahan Hemat</h6>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--50 mt--60 text-center">
                                        <img src="<?php echo base_url('assets/LandingPage/images/') . 'simple.png' ?>"></img>
                                        <!-- <i class="fal fa-user-friends"></i> -->
                                        <h6 class="title">2. Undangan Pernikahan Simple</h6>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--50 mt--60 text-center">
                                        <img src="<?php echo base_url('assets/LandingPage/images/') . 'efektif.png' ?>"></img>
                                        <!-- <i class="fal fa-calendar-check"></i> -->
                                        <h6 class="title">3. Undangan Pernikahan Efektif</h6>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--50 mt--60 text-center">
                                        <img src="<?php echo base_url('assets/LandingPage/images/') . 'fitur.png' ?>"></img>
                                        <h6 class="title">4. Undangan Pernikahan Fitur Terlengkap</h6>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-sm-6 mt-lg--50 mt--60 text-center">
                                        <img src="<?php echo base_url('assets/LandingPage/images/') . 'kekinian.png' ?>"></img>
                                        <!-- <i class="fal fa-map-marker-check"></i> -->
                                        <h6 class="title">5. Undangan Pernikahan Kekinian</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-widget pb-100">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="<?= base_url(); ?>assets/LandingPage/images/logo.svg" alt="Logo">
                            </a>
                            <p class="text">Getmarried adalah platform yang diciptakan untuk memudahkan setiap pasangan yang ingin membuat website undangan pernikahan online secara mandiri.
                                Jika dulu kita selalu memanfaatkan kertas untuk difungsikan sebagai media penyebaran kabar pernikahan, kini sudah tersedia Getmarried yang hadir sebagai solusi hemat, efektif, efisien dan tentunya sangat praktis untuk digunakan.</p>
                            <ul class="social">
                                <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-5 ">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                            <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Menu</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#home">Beranda</a></li>
                                    <li><a href="#harga">Harga</a></li>
                                    <li><a href="#statistik">Statistik</a></li>
                                    <li><a href="#tema">Tema</a></li>
                                    <li><a href="#tema">Testimoni</a></li>
                                    <li><a href="#tema">Demo</a></li>

                                </ul>

                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Contact Us</h4>
                            </div>
                            <ul class="contact">
                                <li>+62812345678</li>
                                <li>getmarried@gmail.com</li>
                                <li>www.getmarried.com</li>
                                <li>Buah batu, bojongsoang,<br> Kota Bandung</li>
                            </ul>
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">© <?= date('Y') ?> getmarried. <a href="https://uideck.com" rel="nofollow">Made by in team PCR</a></p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div>
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->
    <script>
        function submit_by_id() {
            var kode_undangan = document.getElementById("kode_undangan").value;

            document.getElementById("form_id").submit(); //form submission
            // alert(kode_undangan);
            window.location = '<?= base_url('Undangan/') ?>' + kode_undangan;
        }
    </script>

    <!--====== Jquery js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url(); ?>assets/LandingPage/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/LandingPage/js/bootstrap.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/plugins.js"></script>

    <!--====== Slick js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/slick.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/ajax-contact.js"></script>

    <!--====== Counter Up js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/LandingPage/js/jquery.counterup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/jquery.magnific-popup.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/LandingPage/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url(); ?>assets/LandingPage/js/main.js"></script>

</body>

</html>