<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <!--  TABEL Admin  -->
                        <div class="col-xl-12 col-md-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <div class="row m-b-20">
                                        <div class="col-md-8 m-b-5">
                                            <h3 class="f-w-900">Daftar Admin </h3>
                                        </div>
                                        <div class="col-md-4 m-b-5">
                                            <!-- <button class="btn btn-primary f-right "></button> -->
                                            <a href="<?= base_url('Admin/Admin/tambahdata') ?>">
                                                <!-- <button type="button" class="btn btn-primary waves-effect f-right" data-toggle="modal" data-target="#large-Modal">Tambah Admin </button> -->
                                                <button type="button" class="btn btn-primary waves-effect f-right" data-modal="large-Modal">Tambah Admin </button>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 5%;">No</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" aria-label="Position: activate to sort column ascending" style="width:auto;">Username</th>
                                                                <th tabindex="0" style="width: 15%;">ID Admin</th>
                                                                <th tabindex="0" style="width: 15%;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php
                                                            // if ($Admin->num_rows > 0) {

                                                            foreach ($data_admin as $key => $value) { ?>
                                                                <tr class="align-center">
                                                                    <td style="vertical-align:middle;"><?= $key + 1 ?></td>
                                                                    <td style="vertical-align:middle;"><?= $value->Username_Admin ?></td>
                                                                    <td style="vertical-align:middle;"><?= $value->ID_Admin ?></td>
                                                                    <td style="vertical-align:middle;">
                                                                        <div class="text-center tooltip-icon">
                                                                            <a href="<?= base_url('Admin/Admin/Edit/') . $value->ID_Admin ?>">
                                                                                <button type="button" class="btn btn-info  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit">
                                                                                    <i class="fa fa-edit"></i>
                                                                                </button>
                                                                            </a>

                                                                            <?php
                                                                            if ($value->Status_Admin == 1) { ?>
                                                                                <a href="<?= base_url('Admin/Admin/ubah_status/') . $value->ID_Admin . '/0' ?>">
                                                                                    <button type="button" class="btn btn-warning  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Non-Aktif Admin">
                                                                                        <i class="fa fa-eye-slash"></i>
                                                                                    </button>
                                                                                </a>
                                                                            <?php } else { ?>
                                                                                <a href="<?= base_url('Admin/Admin/ubah_status/') . $value->ID_Admin . '/1' ?>">
                                                                                    <button type="button" class="btn btn-warning  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Aktifkan Admin">
                                                                                        <i class="fa fa-eye"></i>
                                                                                    </button>
                                                                                </a>
                                                                            <?php } ?>


                                                                            <a href="<?= base_url('Admin/Admin/delete/') . $value->ID_Admin; ?>">
                                                                                <button type="button" class="btn btn-danger  btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Hapus">
                                                                                    <i class="fa fa-trash"></i>
                                                                                </button>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                            } ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1" width="5%">No</th>
                                                                <th rowspan="1" colspan="1">Username</th>
                                                                <th rowspan="1" colspan="1">ID Admin</th>
                                                                <th rowspan="1" colspan="1">Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- HTML5 Export Buttons end -->
                        </div>
                        <!-- END TABEL Admin  -->
                    </div>
                </div>
            </div>

            <!-- MODAL INPUTA DATA Admin -->
            <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Tambah Admin</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-block ">
                                <form class="form-group" method="POST" action="<?= base_url('Admin/Admin/'); ?>">
                                    <p class="f-w-900 m-b-5">Nama Admin</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                        <input type="text" required id="username_admin" name="username_admin" class="form-control form-control-round  m-b-10" placeholder="Nama Admin" autofocus>
                                    </div>
                                    <p class="f-w-900 m-b-5">Password Admin</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-ui-password"></i></span>
                                        <input type="text" required id="pass_admin" name="pass_admin" class="form-control form-control-round  m-b-10" placeholder="Password Admin">
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light " value="tambahdata">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--END MODAL INPUTA DATA Admin -->

            <!-- MODAL EDIT DATA Admin -->
            <div class="modal fade" id="edit-Modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Edit Admin Undangan</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-block ">
                                <form class="form-group" method="POST" action="<?= base_url('Mempelai/Admin/edit'); ?>">
                                    <p class="f-w-900 m-b-5">ID Admin B</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-key"></i></span>
                                        <input type="text" id="edit_id_undangan" readonly name="edit_id_undangan" value="<?= $this->session->userdata('ID_undangan'); ?>" class="form-control form-control-round  m-b-10" placeholder="Nama Admin" autofocus>
                                    </div>
                                    <p class="f-w-900 m-b-5">Nama Admin</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                        <input type="text" required id="edit_nama_Admin" name="edit_nama_Admin" class="form-control form-control-round  m-b-10" placeholder="Nama Admin" autofocus>
                                    </div>
                                    <p class="f-w-900 m-b-5">Email</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-email"></i></span>
                                        <input type="text" required id="edit_email_Admin" name="edit_email_Admin" class="form-control form-control-round  m-b-10" placeholder="Email Admin">
                                    </div>
                                    <p class="f-w-900 m-b-5">Nomor Whatasapp Admin</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-brand-whatsapp"></i></span>
                                        <input type="text" required id="edit_pass_admin" name="edit_pass_admin" class="form-control form-control-round  m-b-10" placeholder="No Whatsapp Admin">
                                    </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="reset" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary waves-effect waves-light ">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--END MODAL EDIT DATA Admin -->
        </div>
    </div>
</div>