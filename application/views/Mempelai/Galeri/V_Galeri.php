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
                                    <h5>File Upload</h5>

                                    <!-- <a href="<?= base_url('Mempelai/Galeri/add_foto'); ?>">asd</a> -->
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                            <li><i class="feather icon-trash-2 close-card"></i></li>
                                        </ul>
                                    </div>
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
                                                <form enctype="multipart/form-data" action=<?= base_url('Mempelai/Galeri/add_foto'); ?> method="POST" class="form-group">
                                                    <input type="file" name="files[]" id="filer_input1" multiple="multiple">
                                                </form>
                                            </div>
                                            <!-- End Upload Gambar -->

                                            <!-- Upload Video -->
                                            <div class="tab-pane" id="uploadvideo" role="tabpanel">
                                                <form action="<?php echo base_url('Mempelai/Galeri/add_video'); ?>" method="post">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class=" input-group input-group-button">
                                                                <input type="text" name="judul_video" required class="form-control" placeholder="Judul video">
                                                                <span type="" class="input-group-addon">
                                                                    <span class=""></span>
                                                                </span>
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
                                                            if (count($data_video) > 1) {
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
                                <h5>File Upload</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="feather icon-maximize full-card"></i></li>
                                        <li><i class="feather icon-minus minimize-card"></i></li>
                                        <li><i class="feather icon-trash-2 close-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="grid">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <figure class="effect-winston">
                                                <img src="<?= base_url(); ?>assets\Mempelai\images\light-box\l1.jpg" alt="img30">
                                                <figcaption>
                                                    <h2>Jolly <span>Winston</span></h2>
                                                    <p>
                                                        <a href="#"><i class="fa fa-fw fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <div class="col-lg-4">
                                            <figure class="effect-winston">
                                                <img src="<?= base_url(); ?>assets\Mempelai\images\light-box\l1.jpg" alt="img30">
                                                <figcaption>
                                                    <h2>Jolly <span>Winston</span></h2>
                                                    <p>
                                                        <a href="#"><i class="fa fa-fw fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-lg-4">
                                            <figure class="effect-winston">
                                                <img src="<?= base_url(); ?>assets\Mempelai\images\light-box\l1.jpg" alt="img30">
                                                <figcaption>
                                                    <h2>Jolly <span>Winston</span></h2>
                                                    <p>
                                                        <a href="#"><i class="fa fa-fw fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-lg-4">
                                            <figure class="effect-winston">
                                                <img src="<?= base_url(); ?>assets\Mempelai\images\light-box\l1.jpg" alt="img30">
                                                <figcaption>
                                                    <h2>Jolly <span>Winston</span></h2>
                                                    <p>
                                                        <a href="#"><i class="fa fa-fw fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
                                        </div>
                                        <div class="col-lg-4">
                                            <figure class="effect-winston">
                                                <img src="<?= base_url(); ?>assets\Mempelai\images\light-box\l1.jpg" alt="img30">
                                                <figcaption>
                                                    <h2>Jolly <span>Winston</span></h2>
                                                    <p>
                                                        <a href="#"><i class="fa fa-fw fa-star-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-comments-o"></i></a>
                                                        <a href="#"><i class="fa fa-fw fa-envelope-o"></i></a>
                                                    </p>
                                                </figcaption>
                                            </figure>
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