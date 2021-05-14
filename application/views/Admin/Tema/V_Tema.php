<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <h3>Data Tema </h3>

                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <?php
                                        foreach ($tema as $key => $value) {
                                        ?>
                                            <div class="col-lg-12 col-xl-3">
                                                <div class="card-sub">
                                                    <img class="card-img-top img-fluid" src="<?php echo base_url() . 'assets/Tema/' . $value->image_thema ?>" alt="Card image cap">
                                                    <div class="card-block">
                                                        <h4 class="card-title"><?php echo $value->nama_thema ?></h4>
                                                        <a href=""> <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                                <i class="fa fa-file-text-o"></i>
                                                            </button>
                                                        </a>
                                                        <a href=""> <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                        </a>
                                                        <a href=""> <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="NonAktif">
                                                                <i class="fa fa-eye"></i>
                                                            </button>
                                                        </a>
                                                        <a href=""> <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                        </a>
                                                        <p class="card-text"></p>
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