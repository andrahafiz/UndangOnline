<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 ">
                            <div class="card user-card-full  z-depth-bottom-3 ">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-green user-profile">
                                        <div class="card-block text-center text-white">

                                            <div class="m-b-25">
                                                <img src="<?= base_url(); ?>assets\Mempelai\images\money2.png" class="img-radius" alt="User-Profile-Image">
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
                                                    <input type="text" class=" text-muted f-w-400 border-0" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="m-b-10 f-w-600">ID Akun</h5>
                                                    <input type="text" class=" text-muted f-w-400 border-0" readonly value="<?= $this->session->userdata('ID_Akun') ?>"></input>
                                                </div>

                                            </div>
                                            <div class="row m-t-25">
                                                <div class="col-sm-6">
                                                    <h5 class="m-b-10 f-w-600">No Handphone</h5>
                                                    <h6 class="text-muted f-w-400"><?= format_nohp($data_akun['NoHp_akun']) ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5 class="m-b-10 f-w-600">Tanggal Buat</h5>
                                                    <h6 class="text-muted f-w-400">

                                                        <?= tgl_indo(date('Y-m-d', $data_akun['Created_akun'])); ?>
                                                        <!-- <?= $this->session->userdata('ID_Akun') ?> -->
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row m-t-35 m-b-5">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-block btn-round bg-c-green p-15 btn-disabled" disabled><i class="icofont icofont-check-circled"></i><b>Bayar</b></button>
                                                    <!-- <button class="btn  btn-disabled btn-round disabled">Disabled Button</button> -->
                                                </div>
                                                <div class="col-sm-12 text-center m-t-15">
                                                    <small class="text-muted ">
                                                        *Transaksi ini harus di lakukan agar dapat menikmati fasilitas
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>