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
                                    <h1 class="f-w-900">Acara</h1>
                                    <p>Silahkan isi detail acara yang akan diselenggrakan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <?php
                if (validation_errors()) {
                    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
                }
                ?>
                <!-- Page-header end -->

                <div class="page-body">
                    <!-- <form class="form-group"> -->
                    <?php echo form_open_multipart('Mempelai/Acara'); ?>
                    <div class="form-group">
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
                                                <input type="date" id="tgl_akad" class="form-control form-control-round m-b-10">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Mulai</p>
                                                <input type="time" id="ts_akad" class="form-control form-control-round m-b-10">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Berakhir</p>
                                                <input type="time" id="tf_akad" class="form-control form-control-round m-b-10">
                                            </div>
                                        </div>
                                        <p class="f-w-600 m-b-5">Tempat</p>
                                        <input type="text" id="tpt_akad" class="form-control  form-control-round m-b-10">
                                        <p class="f-w-600 m-b-5">Alamat</p>
                                        <textarea id="alamat_akad" class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"></textarea>
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
                                                <input type="date" id="tgl_resepsi" class="form-control form-control-round m-b-10">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Mulai</p>
                                                <input type="time" id="ts_resepsi" class="form-control form-control-round m-b-10">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Waktu Berakhir</p>
                                                <input type="time" id="tf_resepsi" class="form-control form-control-round m-b-10">
                                            </div>
                                        </div>
                                        <p class="f-w-600 m-b-5">Tempat</p>
                                        <input type="text" id="tpt_resepsi" class="form-control  form-control-round m-b-10">
                                        <p class="f-w-600 m-b-5">Alamat</p>
                                        <textarea id="alamat_resepsi" class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="f-right">
                                    <button type="reset" class="btn btn-primary btn-outline-primary z-depth-bottom-3"><i class="icofont icofont-close-circled "></i>Batal</button>
                                    <button type="submit" class="btn btn-primary z-depth-bottom-3 "><i class="icofont icofont-check-circled"></i>Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>