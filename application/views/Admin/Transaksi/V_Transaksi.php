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
                                    <h3>Transaksi</h3>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">

                                            <thead>
                                                <tr role="row">
                                                    <th rowspan="1" colspan="1">No Urut</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 188.4px;">ID Transaksi</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 282px;">Bank</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Total Pembayaran</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 68.4px;">ID Undangan</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Waktu Transaksi</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Tipe Transaksi</th>
                                                    <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Status</th>
                                                    <!-- <th class="sorting" tabindex="0" aria-controls="basic-btn" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.2px;">Aksi </th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($data_undangan as $key => $value) {
                                                ?>
                                                    <tr role="row">
                                                        <td class="sorting_1" style="vertical-align:middle;"><?php echo $key + 1 ?></td>
                                                        <td style="vertical-align:middle;"><?php echo $value->order_id ?></td>
                                                        <td style="vertical-align:middle;"><img class="img-40" src='<?php echo getimagebank($value->bank) ?>'> </td>
                                                        <td style="vertical-align:middle;"><?php echo rupiah($value->gross_amount) ?></td>
                                                        <td style="vertical-align:middle;"><a class="text-custom" href="<?= base_url('Admin/Undangan/Detail/') . $value->kode_undangan ?>"><?php echo $value->kode_undangan ?></a></td>
                                                        <td style="vertical-align:middle;"><?php echo $value->transaction_time ?></td>
                                                        <td style="vertical-align:middle;">
                                                            <strong><?php echo $value->tipe_transaksi ?></strong>
                                                        </td>
                                                        <td style="vertical-align:middle;">
                                                            <?php

                                                            if ($value->status_code == 'pending') {
                                                                echo '<label class="badge badge-lg bg-inverse">Pending</label>';
                                                            } elseif ($value->status_code == 'settlement') {
                                                                echo '<label class="badge badge-lg bg-success">Lunas</label>';
                                                            } elseif ($value->status_code == 'cancel') {
                                                                echo '<label class="badge badge-lg bg-danger">Cancel</label>';
                                                            } elseif ($value->status_code == 'expire') {
                                                                echo '<label class="badge badge-lg bg-warning">Kadaluwarsa</label>';
                                                            } else {
                                                                echo '<label class="badge badge-lg bg-danger">Gagal</label>';
                                                            }
                                                            ?></td>
                                                        <!-- <td style="vertical-align:middle;">
                                                            <a href="<?= $value->status_code == 200 ? "#" : base_url('Transaksi/status/' . $value->order_id); ?>">
                                                                <button class="btn  btn-icon icon-btn <?= $value->status_code == 200 ? 'btn-disabled disabled' : 'btn-warning' ?>" data-toggle="tooltip" data-placement="top    " title="Cek Status"><i class="fa fa-refresh"></i></button>
                                                            </a>
                                                        </td> -->
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">No Urut</th>
                                                    <th rowspan="1" colspan="1">ID Transaksi</th>
                                                    <th rowspan="1" colspan="1">Bank</th>
                                                    <th rowspan="1" colspan="1">Total Pembayaran</th>
                                                    <th rowspan="1" colspan="1">ID Undangan</th>
                                                    <th rowspan="1" colspan="1">Waktu Transaksi </th>
                                                    <th rowspan="1" colspan="1">Tipe Transaksi </th>
                                                    <th rowspan="1" colspan="1">Status </th>
                                                    <!-- <th rowspan="1" colspan="1">Aksi</th> -->
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