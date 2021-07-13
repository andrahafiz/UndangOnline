<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get Married</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url(); ?>assets\Mempelai\assets\images\favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap\css\bootstrap.min.css">

    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\themify-icons\themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\icofont\css\icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\css\style.css">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- <form class="md-float-material form-material"> -->
                    <form class="md-float-material form-material form-group" action=<?= base_url('Mempelai/Auth/register'); ?> method="POST">
                        <div class="text-center">
                            <!-- <img src="<?= base_url(); ?>assets\Mempelai\assets\images\logo.png" alt="logo.png"> -->
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Daftar Akun</h3>
                                    </div>
                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <!-- Inputan Username -->
                                <div class="row m-b-15">
                                    <div class="col-lg-12">
                                        <div class="input-group m-b-0">
                                            <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                            <input type="text" id="username" name="username" class="form-control form-control-round" placeholder="Username" autofocus value="<?= set_value('username'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12"><?= form_error('username', '<span class="text-pink error m-l-40">', '</span>'); ?></div>
                                </div>
                                <!-- <p class="text-pink error m-l-40 m-b-10">Repeat password can't be blank</p> -->
                                <!-- End Inputan Username -->

                                <!-- Inputan Email -->
                                <div class="row m-b-15">
                                    <div class="col-lg-12">
                                        <div class="input-group m-b-0">
                                            <span class="input-group-addon round-left  "><i class="icofont icofont-email"></i></span>
                                            <input type="email" id="email" name="email" class="form-control form-control-round" placeholder="Email" value="<?= set_value('email'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12"><?= form_error('email', '<span class="text-pink error m-l-40">', '</span>'); ?></div>
                                </div>
                                <!-- End Inputan Email -->

                                <!-- Inputan Nomor Wa -->
                                <div class="row m-b-15">
                                    <div class="col-lg-12">
                                        <div class="input-group m-b-0">
                                            <span class="input-group-addon round-left "><i class="icofont icofont-brand-whatsapp"></i></span>
                                            <input type="number" id="wa" name="wa" class="form-control form-control-round" placeholder="No. Whatsapp" value="<?= set_value('wa'); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12"><?= form_error('wa', '<span class="text-pink error m-l-40">', '</span>'); ?></div>
                                </div>
                                <!-- End Inputan Nomor Wa -->

                                <div class="row">
                                    <!-- Inputan Password -->
                                    <div class="col-sm-6">
                                        <div class="input-group m-b-5">
                                            <span class="input-group-addon round-left "><i class="icofont icofont-key"></i></span>
                                            <input type="password" id="password" name="password" class="form-control form-control-round" placeholder="Password">
                                        </div>
                                    </div>
                                    <!--End Inputan Password -->

                                    <!-- Inputan Konfrimasi Password -->
                                    <div class="col-sm-6">
                                        <div class="input-group m-b-5">
                                            <!-- <span class="input-group-addon"><i class="icofont icofont-brand-whatsapp"></i></span> -->
                                            <input type="password" id="conf_password" name="conf_password" class="form-control form-control-round" placeholder="Konfirmasi Password">
                                        </div>
                                    </div>
                                    <!-- End Inputan Konfrimasi Password -->

                                </div>
                                <?= form_error('password', '<p class="text-pink error m-l-40 m-b-10">', '</p>'); ?>
                                <!-- <p class="text-pink error m-l-40 m-b-10">Repeat password can't be blank</p> -->

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20 form-control-round">Daftar</button>
                                        <p class="text-center">Sudah punya akun ? <a href="<?= base_url('Mempelai/Auth'); ?>" class="f-w-900">Silahkan Login di sini</a></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-25">Terima Kasih</p>
                                        <p class="text-inverse text-left"><a href="index-1.htm"><b class="f-w-600">Kembali Ke Website</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <!-- <img src="<?= base_url(); ?>assets\Mempelai\assets\images\auth\Logo-small-bottom.png" alt="small-logo.png"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\i18next\js\i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-i18next\js\jquery-i18next.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\js\common-pages.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
</body>

</html>