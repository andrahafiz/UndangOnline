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
                                    <h1 class="f-w-900">Data Diri Mempelai</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- Page-header end -->

                <div class="page-body">
                    <!-- <form class="form-group"> -->
                    <?php echo form_open_multipart('User/edit'); ?>
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="card ">
                                <div class="card-header">
                                    <h3 class="f-w-600">Mempelai Pria</h3>
                                    <span>Data diri memepelai pria</span>
                                </div>
                                <div class="card-block ">
                                    <div class="text-center">
                                        <img src="<?= base_url(); ?>assets\images\user_pria.png" alt="" class="img-fluid img-thumbnail w-75 h-75 form-control-round m-b-30 z-depth-bottom-0">
                                    </div>
                                    <input type="file" id="foto_mpria" class="form-control  form-control-round m-b-10 ">
                                    <p class="f-w-600 m-b-5">Nama Lengkap</p>
                                    <input type="text" id="namal_mpria" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Panggilan</p>
                                    <input type="text" id="namal_mpria" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Orang Tua ( Ayah )</p>
                                    <input type="text" id="namaortuayah_mpria" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Orang Tua ( Ibu )</p>
                                    <input type="text" id="namaortuibu_mpria" class="form-control  form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Orang Tua ( Ibu )</p>
                                    <input type="text" id="namaortuibu_mpria" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Alamat</p>
                                    <textarea class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 ">
                            <div class="card z-depth-5">
                                <div class="card-header">
                                    <h3 class="f-w-600">Mempelai Wanita</h3>
                                    <span>Data diri memepelai wanita</span>
                                </div>
                                <div class="card-block">
                                    <div class="text-center">
                                        <img src="<?= base_url(); ?>assets\images\user_wanita.png" alt="" class="img-fluid img-thumbnail w-75 h-75 form-control-round m-b-30 z-depth-bottom-0">
                                    </div>
                                    <input type="file" id="foto_mwanita" class="form-control  form-control-round m-b-10 ">
                                    <p class="f-w-600 m-b-5">Nama Lengkap</p>
                                    <input type="text" id="namal_mwanita" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Panggilan</p>
                                    <input type="text" id="namal_mwanita" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Orang Tua ( Ayah )</p>
                                    <input type="text" id="namaortuayah_mwanita" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Orang Tua ( Ibu )</p>
                                    <input type="text" id="namaortuibu_mwanita" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Nama Orang Tua ( Ibu )</p>
                                    <input type="text" id="namaortuibu_mwanita" class="form-control form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Alamat</p>
                                    <textarea class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="f-right">
                                <button class="btn btn-primary z-depth-bottom-3 "><i class="icofont icofont-check-circled"></i>Simpan</button>
                                <button class="btn btn-primary btn-outline-primary z-depth-bottom-3"><i class="icofont icofont-close-circled "></i>Batal</button>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>