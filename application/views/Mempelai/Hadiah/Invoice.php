<html lang="en">

<head>
    <title>Cetak Invoice</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\feather\css\feather.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\icon\font-awesome\css\font-awesome.min.css">
    <!-- jquery file upload Frame work -->
    <link href="<?= base_url(); ?>assets\Mempelai\pages\jquery.filer\css\jquery.filer.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets\Mempelai\pages\jquery.filer\css\themes\jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet">
    <!-- themify-icons line icon -->
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-bs4\css\dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\pages\data-table\css\buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\pages\data-table\extensions\buttons\css\buttons.dataTables.min.css">
    <!-- hover-effect.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\pages\hover-effect\normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\pages\hover-effect\set2.css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\pages\j-pro\css\demo.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\pages\j-pro\css\font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\pages\j-pro\css\j-pro-modern.css">
    <!-- light-box css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\ekko-lightbox\css\ekko-lightbox.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\bower_components\lightbox2\css\lightbox.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\css\style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\css\jquery.mCustomScrollbar.css">

    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-6NV2MTOLU1VB-kDR"></script>
    <style>
        @media print {
            @page {
                size: landscape
            }
        }
    </style>
</head>

<body>
    <!-- JIKA REQUEST HADIAH SUDAH DI ACC-->
    <div class="row">
        <div class="col-xl-1 col-md-1 ">
            <div class="card user-card-full  z-depth-bottom-3 ">
                <div class="row m-l-0 m-r-0">
                    <div class="col-sm-4 bg-c-pink user-profile">
                        <div class="card-block text-center text-white">
                            <div class="">
                                <img src="<?= base_url(); ?>assets\Mempelai\images\money2.png" class="img-radius w-10 h-10">
                            </div>
                            <em>Username</em>
                            <h2 class="f-w-600"><?= $this->session->userdata('Username') ?></h2>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="card-block">
                            <!-- <h2 class="f-w-900 text-center mt-5 f-50 m-b-">Tarik Hadiah</h2>
                            <hr> -->
                            <form method="post" action="<?= base_url('Mempelai/TarikHadiah/tambahdata') ?>">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600" style="color :red">Username</h5>
                                        <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
                                        <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Username') ?>"></input>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600">Email</h5>
                                        <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
                                        <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600">Bank Transfer</h5>
                                        <img class="img-80" src='<?php echo getimagebank($status->bank) ?>'>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600">Total Uang Ditarik</h5>
                                        <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" readonly value="<?= rupiah($dana_tarik) ?>"></input>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600">Tanggal Pengajuan</h5>
                                        <input type="text" class="form-control-lg text-muted border-0" readonly value=" <?= tgl_indo(date('Y-m-d', $status_tarik->Request_Time)) ?>"></input>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600">Tanggal Diterima</h5>
                                        <input type="text" class="form-control-lg text-muted border-0" readonly value=" <?= tgl_indo(date('Y-m-d', $status_tarik->Acc_Time)) ?>"></input>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class=" f-w-600">Nama Admin</h5>
                                        <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" value='<?= $status_tarik->Username_Admin . ' (' .  $status_tarik->ID_Admin . ')' ?>' readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END-->

    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery\js\jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-ui\js\jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\popper.js\js\popper.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap\js\bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery-slimscroll\js\jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\modernizr\js\modernizr.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\modernizr\js\css-scrollbars.js"></script>
    <!-- data-table js -->
    <script src="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\js\jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\js\pdfmake.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\js\vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\extensions\buttons\js\dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\extensions\buttons\js\buttons.flash.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\extensions\buttons\js\jszip.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\extensions\buttons\js\vfs_fonts.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\extensions\buttons\js\buttons.colVis.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>
    <!-- light-box js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\ekko-lightbox\js\ekko-lightbox.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\lightbox2\js\lightbox.js"></script>

    <!-- j-pro js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\pages\j-pro\js\jquery.ui.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\pages\j-pro\js\jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\pages\j-pro\js\jquery.j-pro.js"></script>

    <!-- Custom js -->
    <!-- <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\pages\advance-elements\swithces.js"></script> -->
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\js\data-table-custom.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\pages\data-table\extensions\buttons\js\extension-btns-custom.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\js\pcoded.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\js\vartical-layout.min.js"></script>
    <script src="<?= base_url(); ?>assets\Mempelai\js\jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\js\script.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\js\custom.js"></script>

    <!-- Tags js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap-tagsinput\js\bootstrap-tagsinput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.10.4/typeahead.bundle.min.js"></script>

    <!-- jquery file upload js -->
    <script src="<?= base_url(); ?>assets\Mempelai\pages\jquery.filer\js\jquery.filer.min.js"></script>
    <!-- <script src="<?= base_url(); ?>assets\Mempelai\pages\filer\custom-filer.js" type="text/javascript"></script> -->
    <!-- <script src="<?= base_url(); ?>assets\Mempelai\pages\filer\jquery.fileuploads.init.js" type="text/javascript"></script> -->

    <!-- Max-length js -->
    <script type="text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\bootstrap-maxlength\js\bootstrap-maxlength.js"></script>
    <script>
        window.print();
    </script>
</body>

</html>