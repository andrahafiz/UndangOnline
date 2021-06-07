<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h1 class="f-w-900">Detail Undangan</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- Page-header end -->

                <div class="page-body">
                    <!-- <form class="form-group"> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="f-w-600">Identitas Undangan</h3>
                                    </div>
                                    <div class="card-block ">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="sub-title">Mempelai Pria

                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="sub-title">Mempelai Wanita

                                                </div>
                                            </div>
                                        </div>

                                        <?= $detail_data->ID_Undangan; ?>
                                        <?= $detail_data->ID_akun; ?>
                                        <?= $detail_data->Username; ?>
                                        <?= $detail_data->Email_akun; ?>
                                        <?= $detail_data->NoHp_akun; ?>
                                        <?= $detail_data->Created_akun; ?>
                                        <?= $detail_data->Status_akun; ?>
                                        <?= $detail_data->ID_Mempelai; ?>
                                        <?= $detail_data->Nama_MPria; ?>
                                        <?= $detail_data->Nama_MWanita; ?>
                                        <?= $detail_data->NoHp_MPria; ?>
                                        <?= $detail_data->NoHp_MWanita; ?>
                                        <?= $detail_data->Alamat_MPria; ?>
                                        <?= $detail_data->Alamat_MWanita; ?>
                                        <?= $detail_data->Panggilan_MPria; ?>
                                        <?= $detail_data->Panggilan_MWanita; ?>
                                        <?= $detail_data->NamaOrtu_Ayah_MPria; ?>
                                        <?= $detail_data->NamaOrtu_Ibu_MPria; ?>
                                        <?= $detail_data->NamaOrtu_Ayah_MWanita; ?>
                                        <?= $detail_data->NamaOrtu_Ibu_MWanita; ?>
                                        <?= $detail_data->Foto_MPria; ?>
                                        <?= $detail_data->Foto_MWanita; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="f-w-600">Mempelai</h3>
                                    </div>
                                    <div class="card-block ">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="sub-title">Mempelai Pria

                                                </div>
                                                <dl class="dl-horizontal row">
                                                    <dt class="col-sm-3">Description lists</dt>
                                                    <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                                                    <dt class="col-sm-3">Euismod</dt>
                                                    <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                                    <dd class="col-sm-12 col-sm-offset-3">Donec id elit non mi porta gravida at eget metus.</dd>
                                                    <dt class="col-sm-3">Malesuada porta</dt>
                                                    <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                                                    <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                                    <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                                </dl>
                                            </div>
                                            <div class="col-6">
                                                <div class="sub-title">Mempelai Wanita

                                                </div>
                                            </div>
                                        </div>

                                        <?= $detail_data->ID_Undangan; ?>
                                        <?= $detail_data->ID_akun; ?>
                                        <?= $detail_data->Username; ?>
                                        <?= $detail_data->Email_akun; ?>
                                        <?= $detail_data->NoHp_akun; ?>
                                        <?= $detail_data->Created_akun; ?>
                                        <?= $detail_data->Status_akun; ?>
                                        <?= $detail_data->ID_Mempelai; ?>
                                        <?= $detail_data->Nama_MPria; ?>
                                        <?= $detail_data->Nama_MWanita; ?>
                                        <?= $detail_data->NoHp_MPria; ?>
                                        <?= $detail_data->NoHp_MWanita; ?>
                                        <?= $detail_data->Alamat_MPria; ?>
                                        <?= $detail_data->Alamat_MWanita; ?>
                                        <?= $detail_data->Panggilan_MPria; ?>
                                        <?= $detail_data->Panggilan_MWanita; ?>
                                        <?= $detail_data->NamaOrtu_Ayah_MPria; ?>
                                        <?= $detail_data->NamaOrtu_Ibu_MPria; ?>
                                        <?= $detail_data->NamaOrtu_Ayah_MWanita; ?>
                                        <?= $detail_data->NamaOrtu_Ibu_MWanita; ?>
                                        <?= $detail_data->Foto_MPria; ?>
                                        <?= $detail_data->Foto_MWanita; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="f-w-600">Akad</h3>
                                    </div>
                                    <div class="card-block ">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Tanggal</p>
                                                <input type="date" id="tgl_akad" name="tgl_akad" class="form-control form-control-round m-b-10" value='<?= empty($detail_data->TglAkad) ? 'hh/bb/tttt' : date('Y-m-d', $detail_data->TglAkad); ?>'>
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Mulai</p>
                                                <input type="time" id="ts_akad" name="ts_akad" class="form-control form-control-round m-b-10" value="<?= empty($detail_data->WaktuMulaiAkad) ? null : date('H:i', $detail_data->WaktuMulaiAkad); ?>">
                                            </div>
                                            <div class=" col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Berakhir</p>
                                                <input type="time" id="tf_akad" name="tf_akad" class="form-control form-control-round m-b-10" value="<?= empty($detail_data->WaktuSelesaiAkad) ? null : date('H:i', $detail_data->WaktuSelesaiAkad); ?>">
                                            </div>
                                        </div>
                                        <p class="f-w-600 m-b-5">Tempat</p>
                                        <input type="text" id="tpt_akad" name="tpt_akad" class="form-control  form-control-round m-b-10" value="<?= $detail_data->TempatAkad; ?>">
                                        <p class="f-w-600 m-b-5">Alamat</p>
                                        <textarea id="alamat_akad" name="alamat_akad" class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"><?= $detail_data->AlamatAkad; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 ">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="f-w-600">Resepsi</h3>
                                    </div>
                                    <div class="card-block ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Tanggal</p>
                                                <input type="date" id="tgl_resepsi" name="tgl_resepsi" class="form-control form-control-round m-b-10" value="<?= empty($detail_data->TglResepsi) ? null : date('Y-m-d', $detail_data->TglResepsi); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Mulai</p>
                                                <input type="time" id="ts_resepsi" name="ts_resepsi" class="form-control form-control-round m-b-10" value="<?= empty($detail_data->WaktuMulaiResepsi) ? null : date('H:i', $detail_data->WaktuMulaiResepsi); ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Berakhir</p>
                                                <input type="time" id="tf_resepsi" name="tf_resepsi" class="form-control form-control-round m-b-10" value="<?= empty($detail_data->WaktuSelesaiResepsi) ? null : date('H:i', $detail_data->WaktuSelesaiResepsi); ?>">
                                            </div>
                                        </div>
                                        <p class="f-w-600 m-b-5">Tempat</p>
                                        <input type="text" id="tpt_resepsi" name="tpt_resepsi" class="form-control  form-control-round m-b-10" value="<?= $detail_data->TempatResepsi; ?>">
                                        <p class="f-w-600 m-b-5">Alamat</p>
                                        <textarea id="alamat_resepsi" name="alamat_resepsi" class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"><?= $detail_data->AlamatResepsi; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md">
                                <div class="f-right">
                                    <button type="reset" class="btn btn-primary btn-outline-primary z-depth-bottom-3"><i class="icofont icofont-close-circled "></i>Batal</button>
                                    <button type="submit" class="btn btn-primary z-depth-bottom-3 "><i class="icofont icofont-check-circled"></i>Simpan</button>
                                </div>
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>