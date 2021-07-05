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
                                        <h5 class="f-w-600">Username</h5>
                                        <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
                                        <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Username') ?>"></input>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600">Email</h5>
                                        <input type="hidden" name="id_undangan" value="<?= $this->session->userdata('ID_Undangan') ?>"></input>
                                        <input type="text" class="form-control-lg text-muted border-0 w-100" readonly value="<?= $this->session->userdata('Email_Akun') ?>"></input>
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
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5 class="f-w-600">Bank Transfer</h5>
                                        <img class="img-80" src='<?php echo getimagebank($status->bank) ?>'>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>