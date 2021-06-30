<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow text-white widget-visitor-card">
                                <div class="card-block-small text-center">
                                    <h2 class="f-w-900"><?= rupiah($pemasukan); ?></h2>
                                    <h6>Total Pemasukan</h6>
                                    <i class="fa fa-money"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-lite-green text-white widget-visitor-card">
                                <div class="card-block-small text-center">
                                    <h2 class="f-w-900"><?= rupiah($pemasukan_bulan) ?></h2>
                                    <h6>Pemasukan Bulan <strong><?= getBulan(date('m')) ?></strong></h6>
                                    <i class="icofont icofont-money"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-green text-white widget-visitor-card">
                                <div class="card-block-small text-center">
                                    <h2 class="f-w-900"><?= $jumlah_akun; ?></h2>
                                    <h6>Jumlah Pengguna</h6>
                                    <i class="feather icon-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-simple-c-pink text-white widget-visitor-card">
                                <div class="card-block-small text-center">
                                    <h2 class="f-w-900"><?= $jumlah_tema ?></h2>
                                    <h6>Tema</h6>
                                    <i class="ti-palette"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card social-card bg-simple-c-blue">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-mail f-34 text-c-blue social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">Mail</h6>
                                            <p>231.568 Balasan </p>
                                            <p class="m-b-0">Mari Hubungi kami seperti anda butuh relasi sosial</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.youtube.com/watch?v=BK3uGeoLMak" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card social-card bg-simple-c-pink">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-twitter f-34 text-c-pink social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">twitter</h6>
                                            <p>251.568 Pengikut </p>
                                            <p class="m-b-0">Mari Hubungi kami seperti anda butuh relasi sosial</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://twitter.com/elonmusk" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-12">
                            <div class="card social-card bg-simple-c-green">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <i class="feather icon-instagram f-34 text-c-green social-icon"></i>
                                        </div>
                                        <div class="col">
                                            <h6 class="m-b-0">Instagram</h6>
                                            <p>231.568 Pengikut </p>
                                            <p class="m-b-0">Mari Hubungi kami seperti anda butuh relasi sosial</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://www.instagram.com/propstore20/" class="download-icon"><i class="feather icon-arrow-down"></i></a>
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <!-- social download  end -->
                        <div class="col-xl-5 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Tema Terfavorit</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover  table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="chk-option">
                                                            <div class="checkbox-fade fade-in-primary">
                                                                <label class="check-task">
                                                                    <i class="fa fa-sort-numeric-asc"></i>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        Nama Tema
                                                    </th>
                                                    <th class="text-center">Total Dipakai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tema as $key => $value) { ?>
                                                    <tr>
                                                        <td>
                                                            <div class="chk-option">
                                                                <div class="checkbox-fade fade-in-primary">
                                                                    <label class="check-task">
                                                                        <strong><?= $key + 1 ?></strong>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="d-inline-block align-middle">
                                                                <h6><?= $value->nama_thema ?></h6>
                                                                <p class="text-muted m-b-0"><?= $value->view_thema ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="text-c-pink text-center"> <?= $value->jumlah_tema ?> User</td>
                                                    </tr>
                                                <?php } ?>


                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            <a href="<?= base_url('Admin/Tema'); ?>" class=" b-b-primary text-primary">Lihat Semua Tema</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- TABEL PEMBAYARAN -->
                        <div class="col-xl-7 col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Transaksi Terakhir</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="fa fa-window-maximize full-card"></i></li>
                                            <li><i class="fa fa-minus minimize-card"></i></li>
                                            <li><i class="fa fa-refresh reload-card" onClick="window.location.reload();"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-borderless text-center">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Tipe Transaksi</th>
                                                    <th class="text-center">Undangan</th>
                                                    <th class="text-center">Total</th>
                                                    <th class="text-center">Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 0;
                                                foreach ($transaksi as $key => $value) if ($i++ <= 5) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php

                                                            if ($value->status_code == 'pending') {
                                                                echo '<label class="label label-inverse">Pending</label>';
                                                            } elseif ($value->status_code == 'settlement') {
                                                                echo '<label class="label label-success">Lunas</label>';
                                                            } elseif ($value->status_code == 'cancel') {
                                                                echo '<label class="label label-danger">Cancel</label>';
                                                            } elseif ($value->status_code == 'expire') {
                                                                echo '<label class="label label-warning">Kadaluwarsa</label>';
                                                            } else {
                                                                echo '<label class="label label-danger">Gagal</label>';
                                                            }
                                                            ?>

                                                        </td>
                                                        <td><?= $value->tipe_transaksi == 'Undangan' ? '<p class="text-custom">Undangan</p>' : '<p class="text-pink">Hadiah</p>' ?></td>
                                                        <td><a class="text-custom" href="<?= base_url('Admin/Undangan/Detail/') . $value->kode_undangan ?>"><?php echo $value->kode_undangan ?></a></td>
                                                        <td class="f-w-900"><?= rupiah($value->gross_amount) ?></td>
                                                        <td><?php
                                                            $time = strtotime($value->transaction_time);
                                                            $hari = date('D', $time);

                                                            echo getHari($hari) . ', ' . tgl_indo($value->transaction_time);
                                                            ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
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