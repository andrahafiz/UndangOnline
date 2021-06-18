<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?= base_url('assets/Tema/Tema1/') ?>css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?= base_url('assets/Tema/Tema1/') ?>css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= base_url('assets/Tema/Tema1/') ?>css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?= base_url('assets/Tema/Tema1/') ?>css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="<?= base_url('assets/Tema/Tema1/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/Tema/Tema1/') ?>css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?= base_url('assets/Tema/Tema1/') ?>css/style.css">

    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="<?= base_url('assets/Tema/Tema1/') ?>js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <!-- <audio src="http://www.jplayer.org/audio/mp3/Miaow-snip-Stirring-of-a-fool.mp3" autoplay="autoplay" hidden="hidden"></audio> -->
    <audio src="<?= base_url('assets/Music/') ?>music.mp3" autoplay="autoplay" hidden="hidden"></audio>
    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="fh5co-logo"><a href="index.html">Wedding<strong>.</strong></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="#">Home</a></li>
                            <li class="">
                                <button class="btn btn-primary btn-outline-primary" type="button" data-toggle="modal" data-target="#kirimhadiah">
                                    <i class="icon-heart"></i> Kirim Hadiah</button>
                            </li>

                            <!-- <li><a href="#fh5co-event">Story</a></li>
                            <li class="has-dropdown">
                                <a href="">Services</a>
                                <ul class="dropdown">
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Branding</a></li>
                                    <li><a href="#">API</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="gallery.html">Gallery</a>
                                <ul class="dropdown">
                                    <li><a href="#">HTML5</a></li>
                                    <li><a href="#">CSS3</a></li>
                                    <li><a href="#">Sass</a></li>
                                    <li><a href="#">jQuery</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li> -->
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(<?= base_url('assets/Tema/Tema1/') ?>images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h2>Pernikahan Kami</h2>
                                <h1><?= $data_undangan->Nama_MPria ?> &amp; <?= $data_undangan->Nama_MWanita ?></h1>
                                <div class="simply-countdown simply-countdown-one"></div>
                                <!-- <p><a href="#" class="btn btn-default btn-sm">Save the date</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="fh5co-couple">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <h2>Hallo!</h2>
                        <h3><?= getBulan(date('m', $data_undangan->TglAkad)) . " " . date('d', $data_undangan->TglResepsi); ?>, <?= date('Y', $data_undangan->TglResepsi) ?></h3>
                        <p>Kami mengundang anda untuk merayakan pernikahan kami</p>
                    </div>
                </div>
                <div class="couple-wrap animate-box">
                    <div class="couple-half">
                        <div class="groom">
                            <img src="<?= base_url('assets/Mempelai/images/mempelai/') . $data_undangan->Foto_MPria ?>" alt="Mempelai Pria" class="img-responsive">
                        </div>
                        <div class="desc-groom">
                            <h1><?= $data_undangan->Nama_MPria ?></h1>
                            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
                        </div>
                    </div>
                    <p class="heart text-center"><i class="icon-heart2"></i></p>
                    <div class="couple-half">
                        <div class="bride">
                            <img src="<?= base_url('assets/Mempelai/images/mempelai/') . $data_undangan->Foto_MWanita ?>" alt="Mempelai Wanita" class="img-responsive">
                        </div>
                        <div class="desc-bride">
                            <h1> <?= $data_undangan->Nama_MWanita ?></h1>
                            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <!-- <span>Our Special Events</span> -->
                        <h2>Acara Pernikahan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Akad Nikah</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span><?= date('H:i', $data_undangan->WaktuMulaiAkad); ?> WIB</span>
                                            <span><?= date('H:i', $data_undangan->WaktuSelesaiAkad); ?> WIB</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span><?= getHari(date('D', $data_undangan->TglAkad)); ?> <?= date('d', $data_undangan->TglAkad); ?></span>
                                            <span><?= getBulan(date('m', $data_undangan->TglAkad)) . ", " . date('Y', $data_undangan->TglAkad); ?></span>
                                        </div>
                                        <p><strong><?= $data_undangan->TempatAkad ?></strong><br><?= $data_undangan->AlamatAkad ?></p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 text-center">
                                    <div class="event-wrap animate-box">
                                        <h3>Resepsi</h3>
                                        <div class="event-col">
                                            <i class="icon-clock"></i>
                                            <span><?= date('H:i', $data_undangan->WaktuMulaiResepsi); ?> WIB</span>
                                            <span><?= date('H:i', $data_undangan->WaktuSelesaiResepsi); ?> WIB</span>
                                        </div>
                                        <div class="event-col">
                                            <i class="icon-calendar"></i>
                                            <span><?= getHari(date('D', $data_undangan->TglResepsi)); ?> <?= date('d', $data_undangan->TglResepsi); ?></span>
                                            <span><?= getBulan(date('m', $data_undangan->TglResepsi)) . ", " . date('Y', $data_undangan->TglResepsi); ?></span>
                                        </div>
                                        <p><strong><?= $data_undangan->TempatResepsi ?></strong><br><?= $data_undangan->AlamatResepsi ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-gallery" class="fh5co-section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
                        <!-- <span>M</span> -->
                        <h2>Galeri</h2>
                        <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
                    </div>
                </div>
                <div class="row row-bottom-padded-md">
                    <div class="col-md-12">
                        <ul id="fh5co-gallery-list">
                            <?php foreach ($data_foto as $key => $value) { ?>
                                <li class="one-third animate-box fadeIn animated-fast" data-animate-effect="fadeIn" style="background-image: url(<?= base_url('assets/Mempelai/images/gallery/') . '' . $value->Link_Media; ?>); ">
                                    <a href="<?= base_url('assets/Mempelai/images/gallery/') . '' . $value->Link_Media; ?>">
                                        <div class="case-studies-summary">
                                            <!-- <span>14 Photos</span> -->
                                            <h2><?= $value->Judul_Media; ?></h2>
                                        </div>
                                    </a>
                                </li>
                            <?php } ?>
                            <!--                           -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="fh5co-counter" class="fh5co-bg fh5co-counter" style="background-image:url(images/img_bg_5.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="display-t">
                        <div class="display-tc">
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-users"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="500" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Estimated Guest</span>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-user"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="1000" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">We Catter</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-calendar"></i>
                                    </span>
                                    <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Events Done</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 animate-box">
                                <div class="feature-center">
                                    <span class="icon">
                                        <i class="icon-clock"></i>
                                    </span>

                                    <span class="counter js-counter" data-from="0" data-to="2345" data-speed="5000" data-refresh-interval="50">1</span>
                                    <span class="counter-label">Hours Spent</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div id="fh5co-testimonial">
            <div class="container">
                <div class="row">
                    <div class="row animate-box">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <span>Harapan Mereka</span>
                            <h2>Ucapan Selamat</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <div class="wrap-testimony">
                                <div class="owl-carousel-fullwidth">
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics"</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
                                            <blockquote>
                                                <p>"Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, at the coast of the Semantics, a large language ocean."</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="testimony-slide active text-center">
                                            <h2>John Doe, via <a href="#" class="twitter">Twitter</a></h2>
                                            <blockquote>
                                                <p>"Far far away, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean."</p>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div id="fh5co-services" class="fh5co-section-gray">
            <div class="container">

                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>We Offer Services</h2>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                                <i class="icon-calendar"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>We Organized Events</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                            </div>
                        </div>

                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                                <i class="icon-image"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Photoshoot</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                            </div>
                        </div>

                        <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
                            <span class="icon">
                                <i class="icon-video"></i>
                            </span>
                            <div class="feature-copy">
                                <h3>Video Editing</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6 animate-box">
                        <div class="fh5co-video fh5co-bg" style="background-image: url(images/img_bg_3.jpg); ">
                            <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video2"></i></a>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>


            </div>
        </div> -->
    </div>


    <!-- <footer id="fh5co-footer" role="contentinfo">
            <div class="container">

                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p>
                            <small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small>
                            <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
                        </p>
                        <p>
                        <ul class="fh5co-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        </ul>
                        </p>
                    </div>
                </div>

            </div>
        </footer> -->
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

    <div class="sendgift js-top">
        <a href="index.html" data-toggle="modal" data-target="#kirimhadiah"> Kirim Hadiah</a>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="kirimhadiah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Form Ucapan Selamat</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/jquery.waypoints.min.js"></script>
    <!-- Carousel -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/jquery.countTo.js"></script>

    <!-- Stellar -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/magnific-popup-options.js"></script>

    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="<?= base_url('assets/Tema/Tema1/') ?>js/main.js"></script>

    <script>
        var d = new Date(new Date().getTime() + 10 * 120 * 120 * 2000);

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>

</body>

</html>