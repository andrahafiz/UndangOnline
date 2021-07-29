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
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets\Mempelai\css\style.css">

    <style>
        @media print {
            @page {
                size: landscape
            }
        }
    </style>
    <script>
        window.print();
    </script>
</head>

<body style="background-color: #fff">
    <!-- JIKA REQUEST HADIAH SUDAH DI ACC-->
    <!-- <div class="d-print-none">Screen Only (Hide on print only)</div>
    <div class="d-none d-print-block">Print Only (Hide on screen only)</div>
    <div class="d-none d-lg-block d-print-block">Hide up to large on screen, but always show on print</div> -->

    <div class="text-center">
        <div class="d-inline p-2 middle">
            <img src="<?= base_url(); ?>assets\Mempelai\images\money2.png" class="img-50 ">

        </div>
        <div class="d-inline p-2 middle">
            <span class="f-w-900 f-40 m-t-5">Bukti Pembayaran</span>
        </div>
    </div>
    <hr>
    <div class="row m-b-25">
        <div class="col-sm-6">
            <h5 class="f-w-600">Username</h5>
            <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
            <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Username') ?>"></input>
        </div>
        <div class="col-sm-6">
            <h5 class="f-w-600">Email</h5>
            <!-- <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input> -->
            <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
        </div>
    </div>
    <div class="row m-b-25">
        <div class="col-sm-6">
            <h5 class="f-w-600">Total Uang Ditarik</h5>
            <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" readonly value="<?= rupiah($dana_tarik) ?>"></input>
        </div>
        <div class="col-sm-6">
            <h5 class="f-w-600">Bank Transfer</h5>
            <img class="img-80" src='<?php echo getimagebank($status->bank) ?>'>
        </div>

    </div>

    <div class="row m-b-25">
        <div class="col-sm-6">
            <h5 class="f-w-600">Tanggal Diterima</h5>
            <input type="text" class="form-control-lg text-muted border-0" readonly value=" <?= tgl_indo(date('Y-m-d', $status_tarik->Acc_Time)) ?>"></input>
        </div>
        <div class="col-sm-6">
            <h5 class="f-w-600">Tanggal Pengajuan</h5>
            <input type="text" class="form-control-lg text-muted border-0" readonly value=" <?= tgl_indo(date('Y-m-d', $status_tarik->Request_Time)) ?>"></input>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h5 class=" f-w-600">Nama Admin</h5>
            <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" value='<?= $status_tarik->Username_Admin . ' (' .  $status_tarik->ID_Admin . ')' ?>' readonly>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm">
            <p class="f-w-600 f-30 m-t-5">Terima Kasih</p>
            <p class="text-muted m-t-5"><?= tgl_indo(date('Y-m-d')) ?></p>

        </div>
    </div>
    <!-- END-->

    <script type=" text/javascript" src="<?= base_url(); ?>assets\Mempelai\bower_components\jquery\js\jquery.min.js"></script>

</body>

</html>