<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <!-- Card Tamu Undangan -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="feather icon-user bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-900 f-20">Tamu Undangan

                                    </span>
                                    <h3 class="m-t-15"> <?= $jml_tamu ?> Orang</h3>
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
                                    <h3 class="m-t-15">Rp. 1.000.000.000</h3>
                                </div>
                                <a href="<?= base_url("Hadiah"); ?>">
                                    <div class="card-footer bg-c-green">
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
                        <!-- End Card Total Hadiah -->
                        <!-- Card ????? -->
                        <div class="col-md-12 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="feather icon-user bg-c-pink card1-icon"></i>
                                    <span class="text-c-blue f-w-900 f-20">Total Hadiah</span>
                                    <h3 class="m-t-15">100 Orang</h3>
                                </div>
                                <a href="<?= base_url("Mempelai"); ?>">
                                    <div class="card-footer bg-c-pink">
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