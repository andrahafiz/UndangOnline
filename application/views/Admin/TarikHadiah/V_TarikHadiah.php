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
                                    <h3>Data Request Pencairan Dana</h3>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">

                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1">No Urut</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188.4px;">Nama Akun</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 282px;">Total Hadiah</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Tanggal Request</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 68.4px;">Tanggal Diterima</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Admin</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($data_request as $key => $value) {
                                                ?>
                                                    <tr role="row">
                                                        <td class="sorting_1" style="vertical-align:middle;"><?php echo $key + 1 ?></td>
                                                        <td style="vertical-align:middle;"><?= $value->Username ?> ( <?= $value->ID_Undangan ?> )</td>
                                                        <td style="vertical-align:middle;">
                                                            <?= rupiah($value->Total_Harga) ?>
                                                        </td>
                                                        <td style="vertical-align:middle;">
                                                            <?= empty($value->Request_Time) ? '-' : tgl_indo(date('Y-m-d', $value->Request_Time)) ?>
                                                        </td>
                                                        <td style="vertical-align:middle;">
                                                            <?= empty($value->Acc_Time) ? '-' : tgl_indo(date('Y-m-d', $value->Acc_Time))  ?>
                                                        </td>
                                                        <td style="vertical-align:middle;">
                                                            <?= empty($value->Username_Admin) ? '-' : $value->Username_Admin ?> ( <?= empty($value->Admin_Acc) ? '-' : $value->Admin_Acc ?> )
                                                        </td>
                                                        <td style="vertical-align:middle;">
                                                            <?php
                                                            if ($value->Status_Req == 0 || $value->Status_Req == 1) {
                                                                echo '<label class="badge badge-lg bg-success">Terima</label>';
                                                            } else {
                                                                echo '<label class="badge badge-lg bg-danger">Sudah diambil</label>';
                                                            }
                                                            ?>
                                                        </td>
                                                        <td style="vertical-align:middle;">
                                                            <a href="<?= $value->Status_Req == 1 ?  base_url('Admin/TarikHadiah/update_status/' . $value->ID_Request) : "#"; ?>">
                                                                <button class="btn  btn-icon icon-btn <?= $value->Status_Req == 1 ?   'btn-warning' : 'btn-disabled disabled'    ?>" data-toggle="tooltip" data-placement="top    " title="Cek Status"><i class="fa fa-refresh"></i></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">No Urut</th>
                                                    <th rowspan="1" colspan="1">Nama Akun</th>
                                                    <th rowspan="1" colspan="1">Total Hadiah</th>
                                                    <th rowspan="1" colspan="1">Tanggal Request</th>
                                                    <th rowspan="1" colspan="1">Tanggal Diterima</th>
                                                    <th rowspan="1" colspan="1">Admin</th>
                                                    <th rowspan="1" colspan="1">Status</th>
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