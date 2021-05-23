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
                                    <h3>Data Testimoni Terlampirkan</h3>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <div id="basic-btn_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <table id="basic-btn" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="basic-btn_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th rowspan="1" colspan="1">No Urut</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188.4px;">ID Undangan</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 282px;">ID Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Tanggapan</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 68.4px;">Tanggal Posting</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 96.4px;">Status </th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 96.4px;">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_testimoni as $key => $value) {
                                                    ?>
                                                        <tr role="row">
                                                            <td class="sorting_1"><?php echo $key + 1 ?></td>
                                                            <td><?php echo $value->ID_Undangan ?></td>
                                                            <td><?php echo $value->ID_akun ?></td>
                                                            <td><?php echo $value->Testimoni ?></td>
                                                            <td><?php echo $value->Tgl_Testimoni ?></td>


                                                            <td><?php

                                                                if ($value->Status_Testimoni == "Posting") {
                                                                    echo '<label class="badge badge-lg bg-success">Posting</label>';
                                                                } elseif ($value->Status_Testimoni == "Non-Aktif") {
                                                                    echo '<label class="badge badge-lg bg-warning">Belum diposting</label>';
                                                                }
                                                                ?></td>
                                                            <td>

                                                                <?php if ($value->Status_Testimoni == "Non-Aktif") { ?>
                                                                    <a href="<?php echo base_url("Admin/Testimoni/ubah_status/" . $value->ID_Testimoni . "/Posting"); ?>"> <button type="button" class="btn btn-success  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Posting">
                                                                            <i class="fa fa-eye"></i>
                                                                        </button>
                                                                    </a>
                                                                <?php
                                                                } elseif ($value->Status_Testimoni == "Posting") { ?>
                                                                    <a href="<?php echo base_url("Admin/Testimoni/ubah_status/" . $value->ID_Testimoni . "/Non-Aktif"); ?>"> <button type="button" class="btn btn-warning  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Non Aktif">
                                                                            <i class="fa fa-eye-slash"></i>
                                                                        </button>
                                                                    </a>
                                                                <?php }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">ID Akun</th>
                                                        <th rowspan="1" colspan="1">ID Undangan</th>
                                                        <th rowspan="1" colspan="1">Komentar</th>
                                                        <th rowspan="1" colspan="1">Tanggal Posting</th>
                                                        <th rowspan="1" colspan="1"> Status</th>
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