<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <?= $this->session->flashdata('message'); ?>
                    <?php if ($status_tarik->Status_Req == 0) { ?>

                        <!-- JIKA BELUM MELAKUKAN REQUEST HADIAH -->
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
                                                <h2 class="f-w-900 text-center mt-5 f-50 m-b-">Tarik Hadiah</h2>
                                                <hr>
                                                <form method="post" action="<?= base_url('Mempelai/TarikHadiah/tambahdata') ?>">
                                                    <div class="row m-t-25">
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Email</h5>
                                                            <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
                                                            <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Bank Transfer</h5>
                                                            <img class="img-80" src='<?php echo getimagebank($status->bank) ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-25 m-b-15">

                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Total Uang Ditarik</h5>
                                                            <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" readonly value="<?= rupiah($dana_tarik) ?>"></input>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Status Pengambilan</h5>
                                                            <button type="button" class="btn btn-success">Belum Di Ambil
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="row m-t-25">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-primary btn-round btn-block m-b-15">Request Hadiah</button>
                                                        </div>
                                                        <!-- <div class="col-sm-6">
                                                    <h5 class="m-b-10 f-w-600">Tanggal Pembayaran</h5>
                                                    <input type="text" class="form-control-lg text-muted f-w-600 border-0" readonly value="<?php
                                                                                                                                            $time = strtotime($status->transaction_time);
                                                                                                                                            $hari = date('D', $time);
                                                                                                                                            echo getHari($hari) . ', ' . tgl_indo($status->transaction_time);
                                                                                                                                            ?>"></input>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="m-b-10 f-w-600">Total Pembayaran</h5>
                                                    <input type="text" class="form-control-lg text-muted border-0" readonly value="<?= rupiah($dana_tarik) ?>"></input>
                                                </div> -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END -->
                    <?php } elseif ($status_tarik->Status_Req == 1) { ?>
                        <!-- JIKA REQUEST HADIAH SUDAH DI ACC-->
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
                                                <h2 class="f-w-900 text-center mt-5 f-50 m-b-">Tarik Hadiah</h2>
                                                <hr>
                                                <form method="post" action="<?= base_url('Mempelai/TarikHadiah/tambahdata') ?>">
                                                    <div class="row m-t-25">
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Email</h5>
                                                            <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
                                                            <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Bank Transfer</h5>
                                                            <img class="img-80" src='<?php echo getimagebank($status->bank) ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-25 m-b-15">

                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Total Uang Ditarik</h5>
                                                            <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" readonly value="<?= rupiah($dana_tarik) ?>"></input>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Tanggal Pengajuan</h5>
                                                            <input type="text" class="form-control-lg text-muted border-0" readonly value=" <?= tgl_indo(date('Y-m-d', $status_tarik->Request_Time)) ?>"></input>
                                                        </div>
                                                    </div>

                                                    <div class="row m-t-40 text-center">
                                                        <div class="col-sm">
                                                            <h5 class="m-b-10 f-w-600">Status Pengambilan</h5>
                                                            <button type="button" class="btn btn-warning btn-block" style="cursor: no-drop">Sedang dalam proses...
                                                            </button>
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
                    <?php } else { ?>
                        <!-- JIKA REQUEST HADIAH SUDAH DI ACC-->
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
                                                <h2 class="f-w-900 text-center mt-5 f-50 m-b-">Tarik Hadiah</h2>
                                                <hr>
                                                <form method="post" action="<?= base_url('Mempelai/TarikHadiah/tambahdata') ?>">
                                                    <div class="row m-t-25">
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Email</h5>
                                                            <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
                                                            <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Bank Transfer</h5>
                                                            <img class="img-80" src='<?php echo getimagebank($status->bank) ?>'>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-25 m-b-15">
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Total Uang Ditarik</h5>
                                                            <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" readonly value="<?= rupiah($dana_tarik) ?>"></input>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Tanggal Pengajuan</h5>
                                                            <input type="text" class="form-control-lg text-muted border-0" readonly value=" <?= tgl_indo(date('Y-m-d', $status_tarik->Request_Time)) ?>"></input>
                                                        </div>
                                                    </div>

                                                    <div class="row m-t-25">
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Tanggal Diterima</h5>
                                                            <input type="text" class="form-control-lg text-muted border-0" readonly value=" <?= tgl_indo(date('Y-m-d', $status_tarik->Acc_Time)) ?>"></input>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h5 class="m-b-10 f-w-600">Nama Admin</h5>
                                                            <input type="text" name="total" id="total" class="form-control-lg text-muted border-0" value='<?= $status_tarik->Username_Admin . ' (' .  $status_tarik->ID_Admin . ')' ?>' readonly>
                                                        </div>
                                                    </div>
                                                    <div class="row m-t-40 text-center">
                                                        <div class="col-sm">
                                                            <h5 class="m-b-10 f-w-600">Status Pengambilan</h5>
                                                            <button type="button" class="btn btn-danger btn-block " style="cursor: no-drop">Dana sudah diambil
                                                            </button>
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
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>