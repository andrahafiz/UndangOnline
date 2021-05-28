<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <div class="row">
                                        <div class="col">
                                            <h3 class="middle">Data Tema</h3>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <?php
                                        foreach ($tema as $key => $value) {
                                        ?>
                                            <div class="col-lg-12 col-xl-3">
                                                <div class="card-sub">
                                                    <img class="card-img-top img-fluid" src="<?php echo base_url() . 'assets/Tema/' . $value->image_thema ?>" alt="Card image cap" style="width:268px; height:224px; object-fit: scale-down;">

                                                    <div class="card-block text-center">
                                                        <h4 class="card-title f-w-600 mb-3 "><?php echo $value->nama_thema ?> </h4>
                                                        <hr style="width:50%">
                                                        <a href="<?= base_url('Mempelai/Tema/Preview/') . "" . $this->session->userdata('ID_Undangan') . "/" . $value->id_thema; ?>">
                                                            <button class="btn btn-inverse btn-round">Preview</button>
                                                        </a>
                                                        <button class="btn btn-primary btn-round">Pakai</button>
                                                        <!-- <div class="text-center tooltip-icon">
                                                            <a href="<?php echo base_url('Admin/Tema/Detail/' . $value->id_thema); ?>">
                                                                <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                                    <i class="fa fa-file-text-o"></i>
                                                                </button>
                                                            </a>
                                                            <a href="<?php echo base_url('Admin/Tema/Edit/' . $value->id_thema); ?>">
                                                                <button type="button" class="btn btn-info  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                            </a>
                                                            <?php if ($value->status_thema == 1) { ?>
                                                                <a href="<?php echo base_url("Admin/Tema/ubah_status/" . $value->id_thema . "/0"); ?>">
                                                                    <button type="button" class="btn btn-warning  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title=" Non Aktifkan Tema">

                                                                        <i class="fa fa-eye-slash"></i>
                                                                    </button>
                                                                </a>
                                                            <?php
                                                            } elseif ($value->status_thema == 0) { ?>
                                                                <a href="<?php echo base_url("Admin/Tema/ubah_status/" . $value->id_thema . "/1"); ?>">
                                                                    <button type="button" class="btn btn-warning  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Aktifkan Tema">
                                                                        <i class="fa fa-eye"></i>

                                                                    </button>
                                                                </a>
                                                            <?php } ?>

                                                            <a href="">
                                                                <button type="button" class="btn btn-danger  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                                                                    <i class="fa fa-trash"></i>
                                                                </button>
                                                            </a>
                                                        </div> -->
                                                        <!-- <p class="card-text">asdasd</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }; ?>
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