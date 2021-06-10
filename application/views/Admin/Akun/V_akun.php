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
                                    <h3>Data Akun Terdaftar</h3>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <div id="basic-btn_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <table id="basic-btn" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="basic-btn_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th rowspan="1" colspan="1">No Urut</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188.4px;">ID Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 282px;">Username</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Email Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 68.4px;">No HP Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 96.4px;">Created Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Status Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Aksi </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_akun as $key => $value) {
                                                    ?>
                                                        <tr role="row">
                                                            <td class="sorting_1"><?php echo $key + 1 ?></td>
                                                            <td><?php echo $value->ID_akun ?></td>
                                                            <td><?php echo $value->Username ?></td>
                                                            <td><?php echo $value->Email_akun ?></td>
                                                            <td><?php echo $value->NoHp_akun ?></td>
                                                            <td><?php echo $value->Created_akun ?></td>
                                                            <td><?php

                                                                if ($value->Status_akun == 2) {
                                                                    echo '<label class="badge badge-lg bg-success">Aktif</label>';
                                                                } elseif ($value->Status_akun == 1) {
                                                                    echo '<label class="badge badge-lg bg-warning">Menunggu Verifikasi</label>';
                                                                } elseif ($value->Status_akun == 0) {
                                                                    echo '<label class="badge badge-lg bg-danger">Tidak Aktif</label>';
                                                                }
                                                                ?></td>
                                                            <td>

                                                                <?php if ($value->Status_akun == 2) { ?>
                                                                    <a href="<?php echo base_url("Admin/Akun/ubah_status/" . $value->ID_akun . "/0"); ?>"> <button type="button" class="btn btn-danger  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Nonaktifkan Akun">
                                                                            <i class="fa fa-key"></i>
                                                                        </button>
                                                                    </a>
                                                                <?php
                                                                } elseif ($value->Status_akun == 0) { ?>
                                                                    <a href="<?php echo base_url("Admin/Akun/ubah_status/" . $value->ID_akun . "/2"); ?>"> <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Aktifkan  Akun">
                                                                            <i class="fa fa-key"></i>
                                                                        </button>
                                                                    </a>
                                                                <?php } elseif ($value->Status_akun == 1) {
                                                                ?>
                                                                    <a href="<?php echo base_url("Admin/Akun/ubah_status/" . $value->ID_akun . "/2"); ?>"> <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Aktifkan  Akun">
                                                                            <i class="fa fa-key"></i>
                                                                        </button>
                                                                    </a>
                                                                    <a href="<?php echo base_url("Admin/Akun/ubah_status/" . $value->ID_akun . "/0"); ?>"> <button type="button" class="btn btn-danger  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Nonaktifkan Akun">
                                                                            <i class="fa fa-key"></i>
                                                                        </button>
                                                                    </a>
                                                                <?php } ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">No Urut</th>
                                                        <th rowspan="1" colspan="1">ID Akun</th>
                                                        <th rowspan="1" colspan="1">Username</th>
                                                        <th rowspan="1" colspan="1">Email Akun</th>
                                                        <th rowspan="1" colspan="1">No HP Akun</th>
                                                        <th rowspan="1" colspan="1">Cretaed Akun</th>
                                                        <th rowspan="1" colspan="1">Status Akun</th>
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
                </div>
            </div>
        </div>
    </div>
</div>