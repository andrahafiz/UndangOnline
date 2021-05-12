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
                                    <h3>Data Undangan Terdaftar</h3>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <div id="basic-btn_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <table id="basic-btn" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="basic-btn_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th rowspan="1" colspan="1">No</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188.4px;">ID Undangan</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 282px;">ID Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Email Akun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 68.4px;">Nama Mempelai Pria</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 96.4px;">Nama Mempelai Wanita</th>
                                                        <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Aksi </th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($data_akun as $key => $value) {
                                                    ?>
                                                        <tr role="row">
                                                            <td class="sorting_1"><?php echo $key + 1 ?></td>
                                                            <td><?php echo $value->ID_Undangan ?></td>
                                                            <td><?php echo $value->ID_akun ?></td>
                                                            <td><?php echo $value->Email_akun ?></td>

                                                            <td><?php echo $value->Nama_MPria ?></td>
                                                            <td><?php echo $value->Nama_MWanita ?></td>
                                                            <td>
                                                                <a href="<?php echo base_url('Admin/Undangan/Detail/' . $value->ID_Undangan); ?>">
                                                                    <button type="button" class="btn-detail btn btn-warning  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">No</th>
                                                        <th rowspan="1" colspan="1">ID Undangan</th>
                                                        <th rowspan="1" colspan="1">ID Akun</th>
                                                        <th rowspan="1" colspan="1">Email Akun</th>
                                                        <th rowspan="1" colspan="1">Nama Mempelai Pria</th>
                                                        <th rowspan="1" colspan="1">Nama Mempelai Wanita</th>
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