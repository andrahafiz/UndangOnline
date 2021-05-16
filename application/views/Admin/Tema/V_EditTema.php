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
                                    <h1 class="f-w-900">Edit Tema </h1>
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

                                    <div class="card-block ">
                                        <?= $detail_data->id_thema; ?>
                                        <?= $detail_data->nama_thema; ?>
                                        <?= $detail_data->view_thema; ?>
                                        <?= $detail_data->image_thema; ?>
                                        <?= $detail_data->status_thema; ?>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <p class="f-w-600 m-b-5">ID Thema</p>
                                            <input type="text" readonly id="id_tema" name="id_tema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->id_thema; ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="f-w-600 m-b-5">Nama Thema</p>
                                            <input type="text" readonly id="nama_thema" name="nama_thema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->nama_thema; ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="f-w-600 m-b-5">View Tema</p>
                                            <input type="text" readonly id="view_tema" name="view_tema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->view_thema; ?>">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="f-w-600 m-b-5">Gambar Thema</p>
                                            <image src="<?php echo base_url('') . 'assets/Tema/' . $image_thema ?>">

                                        </div>
                                        <div class="col-sm-4">
                                            <p class="f-w-600 m-b-5">Status Thema</p>
                                            <input type="text" readonly id="status_tema" name="status_tema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->status_thema; ?>">
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>