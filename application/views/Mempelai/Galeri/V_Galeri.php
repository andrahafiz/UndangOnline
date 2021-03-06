<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>File Upload</h4>
                                    <div class="card-header-right">
                                        <button type="button" onClick="window.location.reload();" class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="bottom" data-original-title="Refresh">
                                            <i class="fa fa-refresh" style="color: white;"></i>
                                        </button>
                                    </div>


                                    <!-- <a href="<?= base_url('Mempelai/Galeri/add_foto'); ?>">asd</a> -->
                                    <!-- <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div> -->
                                </div>
                                <div class="card-block">
                                    <div class="col-lg-12 col-xl-12">

                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#uploadfoto" role="tab"><i class="fa fa-image"></i> Upload Foto</a>
                                                <div class="slide"></div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#uploadvideo" role="tab"><i class="fa fa-video-camera"></i> Upload Video</a>
                                                <div class="slide"></div>
                                            </li>

                                        </ul>
                                        <!-- Tab Upload -->
                                        <div class="tab-content card-block">
                                            <!-- Upload Gambar -->
                                            <div class="tab-pane active" id="uploadfoto" role="tabpanel">
                                                <?php if ($jml_foto < 9) { ?>
                                                    <form enctype="multipart/form-data" action=<?= base_url('Mempelai/Galeri/add_foto'); ?> method="POST" class="form-group">
                                                        <input type="file" name="files[]" id="filer_input1" multiple="multiple">
                                                    </form>
                                                    <span class="text-muted">* Terupload <strong><?= $jml_foto ?> foto</strong>, anda hanya bisa mengupload <strong> <?= 9 - $jml_foto ?> foto</strong> lagi</span>
                                                <?php } else { ?>
                                                    <div class="text-center">
                                                        <h1><strong>Limit sudah habis</strong></h1>
                                                        <h6>Anda hanya bisa mengupload 9 foto saja, jika ingin upload lagi harap di hapus beberapa foto</h6>
                                                        <span class="text-muted">Terima kasih telah mengerti</span>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <!-- End Upload Gambar -->

                                            <!-- Upload Video -->
                                            <div class="tab-pane" id="uploadvideo" role="tabpanel">
                                                <form action="<?php echo base_url('Mempelai/Galeri/add_video'); ?>" method="post">
                                                    <div class="row ">
                                                        <div class="col-lg-6">
                                                            <!-- MODAL TUTORIAL -->
                                                            <div class="modal fade" id="tutorial-Modal" tabindex="-1" role="dialog">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Panduan Mengisi URL Youtube</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <ol>
                                                                                <li>Cari video yang ingin di upload</li>
                                                                                <li>Klik tombol <b>"Bagikan"</b></li>
                                                                                <div class="text-center m-3">
                                                                                    <img src="<?= base_url(); ?>assets\Mempelai\images\tutorial\tutorial1.png" class="text-center img-thumbnail " width="50%" height="50%">
                                                                                </div>
                                                                                <li>Klik <b>"Sematkan"</b></li>
                                                                                <div class="text-center m-3">
                                                                                    <img src="<?= base_url(); ?>assets\Mempelai\images\tutorial\tutorial2.png" class="text-center img-thumbnail " width="50%" height="50%">
                                                                                </div>
                                                                                <li>Copy paste isi dari <b>"src"</b></li>
                                                                                <div class="text-center m-3">
                                                                                    <img src="<?= base_url(); ?>assets\Mempelai\images\tutorial\tutorial3.png" class="text-center img-thumbnail" width="50%" height="50%">
                                                                                </div>
                                                                                <li>Masukan ke dalam inputan</li>
                                                                                <div class="text-center m-3">
                                                                                    <img src="<?= base_url(); ?>assets\Mempelai\images\tutorial\tutorial4.png" class="text-center img-thumbnail" width="50%" height="50%">
                                                                                </div>
                                                                                <li><b>Selesai</b></li>
                                                                            </ol>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-primary waves-effect waves-light " data-dismiss="modal">Keluar</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- END MODAL TUTORIAL -->
                                                            <div class=" input-group input-group-button">
                                                                <input type="text" name="judul_video" required class="form-control" placeholder="Judul video // Tekan tanda tanya untuk melihat panduan">
                                                                <button type="button" class="input-group-addon" data-toggle="modal" data-target="#tutorial-Modal">
                                                                    <span class=""><i class="fa fa-question-circle"></i></span>
                                                                </button>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class=" input-group input-group-button">
                                                                <input type="text" name="youtube_url" required class="form-control" placeholder="Link Youtube ex: www.youtube.com">
                                                                <button type="submit" class="input-group-addon">
                                                                    <span class=""><i class="icofont icofont-check"></i>Simpan</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h4 class="sub-title">List Video</h4>
                                                        <ul>
                                                            <?php
                                                            if (count($data_video) > 0) {
                                                                foreach ($data_video as $key => $value) { ?>
                                                                    <li>
                                                                        <i class="icofont icofont icofont-social-youtube-play text-danger"></i>
                                                                        <strong><?= $value->Judul_Media ?></strong>
                                                                        <a href="<?= $value->Link_Media ?>" target="blank" class="text-muted">(<?= $value->Link_Media ?>)</a>
                                                                    </li>
                                                            <?php }
                                                            } else {
                                                                echo ' <li>
                                                                <i class="icofont icofont icofont-social-youtube-play text-danger"></i>
                                                                <strong>Belum ada video diupload</strong>
                                                            </li>';
                                                            }; ?>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Upload Video -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- File upload card end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Galeri</h4>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row ">
                                    <div class="col-lg-4 col-md-12 col-xl col-sm-6">
                                        <!-- <div class="badge-box"> -->
                                        <div class="sub-title">Foto</div>
                                        <div class="grid">
                                            <div class="row">
                                                <?php
                                                if (count($data_foto) > 0) {
                                                    foreach ($data_foto as $key => $value) { ?>
                                                        <div class="col-lg-4 col-md-12">
                                                            <!-- <figure class="effect-winston  text-center" style="height:55%;">
                                                                <img src="<?= base_url(); ?>assets\Mempelai\images\gallery\<?= $value->Link_Media ?>" style="height:1600;width:1070px;  object-fit: cover;" lt="img30">
                                                                <figcaption>
                                                                    <h2><span><?= $value->Judul_Media ?></span></h2>
                                                                    <p>
                                                                        <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
                                                                        <a href="#"><i class="fa fa-fw fa-star"></i></a>
                                                                        <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
                                                                    </p>
                                                                </figcaption>
                                                            </figure> -->
                                                            <figure class="effect-winston" style="height: 215px;">
                                                                <center>
                                                                    <img src="<?= base_url(); ?>assets\Mempelai\images\gallery\<?= $value->Link_Media ?>" alt="img30" style="height: 215px;">
                                                                </center>
                                                                <figcaption>
                                                                    <h2><span><?= $value->Judul_Media ?></span></h2>
                                                                    <p>
                                                                        <a href=""><i class="fa fa-fw fa-star-o"></i></a>
                                                                        <a href="<?= base_url('Mempelai/Galeri/delete_media/' . $value->ID_Media); ?>"><i class="fa fa-fw fa-trash-o"></i></a>
                                                                    </p>
                                                                </figcaption>
                                                            </figure>
                                                        </div>
                                                <?php }
                                                } else {
                                                    echo '<center><h1><strong> Foto Tidak Ada </strong> </h1></center>';
                                                }; ?>
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-lg-4 col-xl col-sm-6">
                                        <!-- <div class="badge-box"> -->
                                        <div class="sub-title">Video</div>
                                        <div class="grid">
                                            <div class="row">
                                                <?php
                                                if (count($data_video) > 0) {
                                                    foreach ($data_video as $key => $value) { ?>
                                                        <div class="col-lg-4 ">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item" src="<?= $value->Link_Media ?>" allowfullscreen></iframe>
                                                            </div>
                                                            <a href="<?= base_url('Mempelai/Galeri/delete_media/' . $value->ID_Media); ?>">
                                                                <button class="btn btn-primary btn-round m-3"> <i class="fa fa-trash"></i>Hapus Video</button>
                                                            </a>
                                                        </div>
                                                <?php }
                                                } else {
                                                    echo '    <div class="col-lg-4 "> <center><h1><strong> Foto Tidak Video </strong> </h1></center></div>';
                                                }; ?>

                                                <!-- </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- File upload card end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>