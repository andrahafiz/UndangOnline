<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <!--  TABEL Hadiah  -->
                        <div class="col-xl-12 col-md-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <h3 class="f-w-900">Hadiah</h3>
                                    <hr>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="basic-btn" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Tamu</th>
                                                    <th>Email/Wa</th>
                                                    <th>Tanggal</th>
                                                    <th>Jumlah Hadiah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data_hadiah as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= ($key + 1) ?></td>
                                                        <td><?= $value->Nama_Tamu ?></td>
                                                        <td><?= empty($value->Email_Tamu) ? 'Tidak ada email' : $value->Email_Tamu ?> /<?= empty($value->Wa_Tamu) ? 'Tidak ada WA' : $value->Wa_Tamu ?> </td>
                                                        <td><?= $value->transaction_time ?> </td>
                                                        <td><Strong><?= rupiah($value->gross_amount) ?></strong> </td>
                                                    </tr>
                                                <?php  } ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Tamu</th>
                                                    <th>Email/Wa</th>
                                                    <th>Tanggal</th>
                                                    <th>Jumlah Hadiah</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- HTML5 Export Buttons end -->
                        </div>
                        <!-- END TABEL TAMU  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>