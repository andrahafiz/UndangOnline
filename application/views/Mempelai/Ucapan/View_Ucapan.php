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
                                    <h3 class="f-w-900">Ucapan Selamat</h3>
                                    <hr>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Tamu</th>
                                                    <th>Email/Wa</th>
                                                    <th>Ucapan Selamat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($data_ucapan as $key => $value) { ?>
                                                    <tr>
                                                        <td><?= ($key + 1) ?></td>
                                                        <td><?= $value->Nama_Tamu ?> <span class="text-muted"> ( <?= $value->ID_TamuUndangan ?> )</span></td>
                                                        <td><?= empty($value->Email_Tamu) ? 'Tidak ada email' : $value->Email_Tamu ?> /<?= empty($value->Wa_Tamu) ? 'Tidak ada WA' : $value->Wa_Tamu ?> </td>
                                                        <td><?= $value->Ucapan ?></td>
                                                        <td>
                                                            <?php if ($value->Status_Ucapan == 1) {
                                                                echo '<div class="icon-btn">
                                                                <div class="div">
                                                                <a href="' . base_url('Mempelai/Ucapan/ubah_status/' . $value->Id_Ucapan . '/0') . '">
                                                                    <button class="btn btn-mini btn-danger" data-toggle="tooltip" data-placement="bottom" title="Non-Aktifkan"><i class="fa fa-eye-slash"></i></button>                                                </div>
                                                                </a>
                                                            </div>';
                                                            } else {
                                                                echo '<div class="icon-btn">
                                                                <div class="div">
                                                                <a href="' . base_url('Mempelai/Ucapan/ubah_status/' . $value->Id_Ucapan . '/1') . '">
                                                                    <button class="btn btn-mini btn-success" data-toggle="tooltip" data-placement="bottom" title="Aktifkan"><i class="fa fa-eye"></i></button>                                                </div>
                                                                </a>
                                                            </div>';
                                                            }; ?></td>
                                                    </tr>
                                                <?php  } ?>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Tamu</th>
                                                    <th>Email/Wa</th>
                                                    <th>Ucapan Selamat</th>
                                                    <th>Aksi</th>
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