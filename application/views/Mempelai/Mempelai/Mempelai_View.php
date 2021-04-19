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
                <?php
                if (validation_errors()) {
                    echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
                }
                ?>
                <!-- Page-header end -->

                <div class="page-body">
                    <!-- <form class="form-group"> -->
                    <?= $this->session->flashdata('message'); ?>
                    <?php
                    // echo form_open_multipart('Mempelai/Mempelai/edit'); 
                    ?>
                    <form enctype="multipart/form-data" action=<?= base_url('Mempelai/Mempelai/testupload'); ?> method="POST" class="form-group">
                        <!-- <div class="form-group"> -->
                        <div class="row">
                            <div class="col-sm-6 ">
                                <div class="card ">
                                    <div class="card-header">
                                        <h3 class="f-w-600">Mempelai Pria</h3>
                                        <span>Data diri memepelai pria</span>

                                        <input type="hidden" name="id_mempelai" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->ID_Mempelai; ?>">
                                    </div>
                                    <div class="card-block ">
                                        <div class="text-center">
                                            <img src="<?= base_url(); ?>assets\Mempelai\images\mempelai\<?= $data_mempelai->Foto_MPria == null ? 'user_pria.png' : $data_mempelai->Foto_MPria; ?>" alt="" id="prev_pria" class="img-fluid img-thumbnail w-75 h-75 form-control-round m-b-30 z-depth-bottom-0">
                                        </div>
                                        <input type="file" id="foto_mpria" name="foto_MPria" class="form-control  form-control-round m-b-10 " onchange="tampilkanPreview(this,'prev_pria')">
                                        <p class="f-w-600 m-b-5">Nama Lengkap</p>
                                        <input type="text" id="nama_mpria" name="nama_mpria" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->Nama_MPria; ?>">
                                        <p class="f-w-600 m-b-5">Nama Panggilan</p>
                                        <input type="text" id="namal_mpria" name="namal_mpria" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->Panggilan_MPria; ?>">
                                        <p class="f-w-600 m-b-5">Nama Orang Tua ( Ayah )</p>
                                        <input type="text" id="namaortuayah_mpria" name="namaortuayah_mpria" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->NamaOrtu_Ayah_MPria; ?>">
                                        <p class="f-w-600 m-b-5">Nama Orang Tua ( Ibu )</p>
                                        <input type="text" id="namaortuibu_mpria" name="namaortuibu_mpria" class="form-control  form-control-round m-b-10" value="<?= $data_mempelai->NamaOrtu_Ibu_MPria; ?>">
                                        <p class="f-w-600 m-b-5">Nomor HP</p>
                                        <input type="text" id="nohp_mpria" name="nohp_mpria" class="form-control  form-control-round m-b-10" value="<?= $data_mempelai->NoHp_MPria; ?>">
                                        <p class="f-w-600 m-b-5">Alamat</p>
                                        <textarea id="alamat_mpria" name="alamat_mpria" class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"><?= $data_mempelai->Alamat_MPria; ?></textarea>
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
                                            <img src="<?= base_url(); ?>assets\Mempelai\images\mempelai\<?= $data_mempelai->Foto_MPria == null ? 'user_wanita.png' : $data_mempelai->Foto_MPria; ?>" alt="" id="prev_wanita" class="img-fluid img-thumbnail w-75 h-75 form-control-round m-b-30 z-depth-bottom-0">
                                        </div>
                                        <!-- <input type="file" class="custom-file-input" name="image_pria" id="file_pria"> -->
                                        <!-- <input type="file" class="custom-file-input" name="image_wanita" id="file_wanita" onchange="tampilkanPreview(this,'preview_2')"> -->
                                        <input type="file" id="foto_mwanita" name="foto_MPwanita" class="form-control  form-control-round m-b-10 " onchange="tampilkanPreview(this,'prev_wanita')">
                                        <p class="f-w-600 m-b-5">Nama Lengkap</p>
                                        <input type="text" id="nama_mwanita" name="nama_mwanita" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->Nama_MWanita; ?>">
                                        <p class="f-w-600 m-b-5">Nama Panggilan</p>
                                        <input type="text" id="namal_mwanita" name="namal_mwanita" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->Panggilan_MWanita; ?>">
                                        <p class="f-w-600 m-b-5">Nama Orang Tua ( Ayah )</p>
                                        <input type="text" id="namaortuayah_mwanita" name="namaortuayah_mwanita" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->NamaOrtu_Ayah_MWanita; ?>">
                                        <p class="f-w-600 m-b-5">Nama Orang Tua ( Ibu )</p>
                                        <input type="text" id="namaortuibu_mwanita" name="namaortuibu_mwanita" class="form-control form-control-round m-b-10" value="<?= $data_mempelai->NamaOrtu_Ibu_MWanita; ?>">
                                        <p class="f-w-600 m-b-5">Nomor HP</p>
                                        <input type="text" id="nohp_mwanita" name="nohp_mwanita" class="form-control  form-control-round m-b-10" value="<?= $data_mempelai->NoHp_MWanita; ?>">
                                        <p class="f-w-600 m-b-5">Alamat</p>
                                        <textarea id="alamat_mwanita" name="alamat_mwanita" class="form-control max-textarea form-control-round p-20" maxlength="255" rows="4"><?= $data_mempelai->Alamat_MWanita; ?></textarea>

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
        <script>
            function tampilkanPreview(gambar, idpreview) {
                //                membuat objek gambar
                var gb = gambar.files;

                //                loop untuk merender gambar
                for (var i = 0; i < gb.length; i++) {
                    //                    bikin variabel
                    var gbPreview = gb[i];
                    var imageType = /image.*/;
                    var preview = document.getElementById(idpreview);
                    var reader = new FileReader();

                    if (gbPreview.type.match(imageType)) {
                        //                        jika tipe data sesuai
                        preview.file = gbPreview;
                        reader.onload = (function(element) {
                            return function(e) {
                                element.src = e.target.result;
                            };
                        })(preview);
                        //                    membaca data URL gambar
                        reader.readAsDataURL(gbPreview);
                    } else {
                        //                        jika tipe data tidak sesuai
                        alert("Type file tidak sesuai. Khusus image.");
                    }
                }
            }
        </script>