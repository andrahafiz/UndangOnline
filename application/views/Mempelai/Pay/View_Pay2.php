<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <?php if ($status && $data_akun['Status_akun'] == "2") { ?>
                        <div class="row">
                            <div class="col-xl-12 col-md-12 ">
                                <div class="card user-card-full  z-depth-bottom-3 ">
                                    <div class="row m-l-0 m-r-0">
                                        <div class="col-sm-4 bg-c-pink user-profile">
                                            <div class="card-block text-center text-white">
                                                <div class="m-b-25">
                                                    <img src="<?= base_url(); ?>assets\Mempelai\images\money2.png" class="img-radius">
                                                </div>

                                                <em>Username</em>
                                                <h2 class="f-w-600"><?= $this->session->userdata('Username') ?></h2>

                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="card-block">
                                                <h2 class=" b-b-default text-center mt-5 f-52">Transaksi Berhasil</h2>
                                                <p class="text-muted text-center f-20">Transaksi anda sudah terdaftar di dalam sistem kami, mohon menunggu
                                                    <br>lakukan pembayaran!!!<br>
                                                    <a href="<?= $status->pdf_url ?>" class="text-center">Panduan Transfer</a>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->

<!-- MODAL INPUTA DATA TAMU -->
<?php if ($status  && $data_akun['Status_akun'] == "1") { ?>
    <div class="modal fade md-show" id="Modal-P" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-center" role="document">
            <div class="row">
                <div class="col-xl-12 col-md-12 ">
                    <div class="card user-card-full  z-depth-bottom-3 ">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-pink user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25">
                                        <img src="<?= base_url(); ?>assets\Mempelai\images\money2.png" class="img-radius">
                                    </div>
                                    <em>Username</em>
                                    <h2 class="f-w-600"><?= $this->session->userdata('Username') ?></h2>

                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="card-block">
                                    <h2 class=" b-b-default text-center mt-5 f-52">Dalam proses....</h2>
                                    <p class="text-muted text-center f-20">Transaksi anda sudah terdaftar di dalam sistem kami, mohon menunggu
                                        <br>lakukan pembayaran!!!<br>
                                        <a href="<?= $status->pdf_url ?>" class="text-center">Panduan Transfer</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php  } elseif ($status == false && $data_akun['Status_akun'] == "1") { ?>
    <div class="modal fade md-show" id="Modal-P" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-center" role="document">
            <!-- <div class="modal-content"> -->

            <!-- <div class="modal-body"> -->
            <div class="row">
                <div class="col-xl-12 col-md-12 ">
                    <div class="card user-card-full  z-depth-bottom-3 ">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-pink user-profile">
                                <div class="card-block text-center text-white">
                                    <form id="payment-form" method="post" action="<?= base_url() ?>/snap/finish">
                                        <input type="hidden" name="result_type" id="result-type" value="">
                                        <input type="hidden" name="result_data" id="result-data" value="">
                                        <input type="hidden" name="kode_undangan" id="result-data" value="<?= $this->session->userdata('ID_Undangan') ?>">
                                        <div class="m-b-25">
                                            <img src="<?= base_url(); ?>assets\Mempelai\images\money2.png" class="img-radius">
                                        </div>
                                        <em>Username</em>
                                        <h2 class="f-w-600"><?= $this->session->userdata('Username') ?></h2>

                                </div>
                            </div>
                            <div class="col-sm-8 m-t-10">
                                <div class="card-block">
                                    <h2 class="m-b-20 p-b-5 b-b-default f-w-600">Infomasi</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h5 class="m-b-10 f-w-600">Email</h5>
                                            <input type="text" name="nama" id="nama" class=" text-muted f-w-400 border-0" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="m-b-10 f-w-600">ID Akun</h5>
                                            <input type="text" name="jenis_kelamin" id="jenis_kelamin" class=" text-muted f-w-400 border-0" readonly value="<?= $this->session->userdata('ID_Akun') ?>"></input>
                                        </div>

                                    </div>
                                    <div class="row m-t-25">
                                        <div class="col-sm-6">
                                            <h5 class="m-b-10 f-w-600">No Handphone</h5>
                                            <input type="text" name="jml_bayar" id="jml_bayar" class=" text-muted f-w-400 border-0" readonly value="100000"></input>
                                            <!-- <h6 class="text-muted f-w-400"><?= format_nohp($data_akun['NoHp_akun']) ?></h6> -->
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="m-b-10 f-w-600">Tanggal Buat</h5>
                                            <h6 class="text-muted f-w-400">

                                                <?= tgl_indo(date('Y-m-d', $data_akun['Created_akun'])); ?>
                                                <!-- <?= $this->session->userdata('ID_Akun') ?> -->
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="row m-t-25 m-b-10">
                                        <div class="col-sm-12">
                                            <button class="btn btn-block btn-round bg-c-pink p-15" id="pay-button"><i class="icofont icofont-check-circled"></i><b>Bayar</b></button>
                                            <!-- <button class="btn  btn-disabled btn-round disabled">Disabled Button</button> -->
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>