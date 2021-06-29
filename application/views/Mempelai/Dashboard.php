<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <?php
                    if (validation_errors()) {
                        echo "<div class='alert alert-warning icons-alert'> 
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                    <i class='icofont icofont-close-line-circled'></i>
                    </button> <p><strong>Gagal!</strong>" . validation_errors() . "</p>
                    </div>";
                    };
                    ?>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <!-- Card Tamu Undangan -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="feather icon-user bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-900 f-20">Tamu Undangan

                                    </span>
                                    <h1 class="m-t-20"> <?= $jml_tamu ?> Orang</h1>
                                </div>
                                <a href="<?= base_url("Mempelai/Tamu"); ?>">
                                    <div class="card-footer bg-c-blue">
                                        <div class="row align-items-center  text-left">
                                            <div class="col">
                                                <p class="text-white m-b-0">Lihat Detail</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-arrow-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Card Tamu Undangan -->
                        <!-- Card Total Hadiah -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <!-- <i class="feather icon-cast bg-c-green card1-icon"></i> -->
                                    <i class="fa fa-money  bg-c-green card1-icon"></i>
                                    <span class="text-c-blue f-w-900 f-20">Total Hadiah</span>
                                    <h1 class="m-t-20"><?= rupiah($total_hadiah) ?></h1>
                                </div>
                                <a href="<?= base_url("Mempelai/Hadiah"); ?>">
                                    <div class="card-footer bg-c-green">
                                        <div class="row align-items-center text-left ">
                                            <div class="col">
                                                <p class="text-white m-b-0">Lihat Detail</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-arrow-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- End Card Total Hadiah -->
                        <!-- Card ????? -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="fa fa-gears bg-c-pink card1-icon"></i>
                                    <!-- <i class="fa fa-gears"></i> -->
                                    <span class="text-c-blue f-w-900 f-20">URL Setting</span>
                                    <div class="row m-t-20 m-b-10">
                                        <div class="col-10">
                                            <form action="<?= base_url('Mempelai/Dashboard') ?>" method="POST">
                                                <input type="text" class="form-control form-control" id="url_input" name="url_input" placeholder="URL Undangan" value="<?= $url_undangan ?>" <?= !empty($url_undangan) ? 'readonly' : '' ?>>
                                                <?= form_error('url_input', '<span class="text-pink error f-12">', '</span>'); ?>
                                        </div>
                                        <div class="col-2">
                                            <div class="icon-btn">
                                                <div class="div">
                                                    <?php
                                                    if (empty($url_undangan)) {
                                                        echo '<button class="btn btn-sm btn-primary"><i class="fa fa-save"></i></button>';
                                                    } else {
                                                        echo '<button class="btn btn-sm btn-success btn-disabled"><i class="fa fa-check-circle"></i></button>';
                                                    }

                                                    ?>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="div text-left">
                                        <span class="text-muted f-12 m-t-"><?= base_url('') ?>Undangan/<strong id="target"><?= $url_undangan ?></strong></span>
                                    </div>
                                    <!-- <span class="text-muted"><?= base_url('Undangan/') ?></span> -->
                                </div>
                                <div class="card-footer bg-c-pink">

                                </div>
                            </div>
                        </div>
                        <!-- End Card ????? -->
                    </div>
                    <div class="row">
                        <!--  TABEL TAMU  -->
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <h3 class="f-w-900">Data Tamu Undangan</h3>
                                    <hr>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="table-tamu-ds" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nomor Whatsapp</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tamu as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= $key + 1 ?></td>
                                                        <td><?= $value->Nama_Tamu ?></td>
                                                        <td><?= $value->Wa_Tamu ?></td>
                                                        <td><?= $value->Email_Tamu ?></td>
                                                    </tr>
                                                <?php } ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Nomor Whatsapp</th>
                                                    <th>Email</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- HTML5 Export Buttons end -->
                        </div>
                        <!-- END TABEL TAMU  -->


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>