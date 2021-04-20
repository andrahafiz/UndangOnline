<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <!--  TABEL TAMU  -->
                        <div class="col-xl-12 col-md-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <div class="row m-b-20">
                                        <div class="col-md-8 m-b-5">
                                            <h3 class="f-w-900">Daftar Tamu Undangan<?= $this->session->userdata('ID_Undangan') ?> </h3>
                                        </div>
                                        <div class="col-md-4 m-b-5">
                                            <!-- <button class="btn btn-primary f-right "></button> -->
                                            <button type="button" class="btn btn-primary waves-effect f-right" data-toggle="modal" data-target="#large-Modal">Tambah Tamu Undangan</button>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="simpletable_length"><label>Menampilkan <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> data</label></div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <div id="simpletable_filter" class="dataTables_filter"><label>Cari:<input type="Cari" class="form-control input-sm" placeholder="" aria-controls="simpletable"></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 5%;">No</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:auto;">Nama</th>
                                                                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            <?php foreach ($tamu as $key => $value) { ?>
                                                                <tr class="align-center">
                                                                    <td><?= $key + 1 ?></td>
                                                                    <td><?= $value->Nama_Tamu ?></td>
                                                                    <td class="card-block icon-btn">
                                                                        <?php
                                                                        if (isset($value->Wa_Tamu)) {
                                                                            echo '<button type="button" id="" class="btn-wa btn btn-success btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" data-nowa="' . $value->Wa_Tamu . '" title="Whatsapp ' . $value->Wa_Tamu . '">
                                                                            <i class="fa fa-whatsapp"></i>
                                                                        </button>';
                                                                        }

                                                                        if (isset($value->Email_Tamu)) {
                                                                            echo ' <button type="button" class="btn btn-primary btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Email">
                                                                            <i class="fa fa-envelope"></i>
                                                                        </button>';
                                                                        }
                                                                        ?>

                                                                        <button type="button" class="btn btn-info  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                                            <i class="fa fa-edit"></i>
                                                                        </button>
                                                                        <span data-toggle="modal" data-target="#detail-Modal">
                                                                            <button type="button" data-wa="<?= $value->Wa_Tamu ?>" data-nama="<?= $value->Nama_Tamu ?>" data-email="<?= $value->Email_Tamu ?>" class="btn-detail btn btn-warning  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                                                <i class="fa fa-eye"></i>
                                                                            </button>
                                                                        </span>
                                                                        <button type="button" class="btn btn-danger  btn-icon waves-effect waves-light" style="height: 30px; width: 30px;" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>

                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1" width="5%">No</th>
                                                                <th rowspan="1" colspan="1">Nama</th>
                                                                <th rowspan="1" colspan="1">Aksi</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">Menampilkan 1 - 110 dari 20 data</div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item Sebelumnya disabled" id="simpletable_Sebelumnya"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                            <li class="paginate_button page-item next" id="simpletable_next"><a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">Selanjutnya</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- HTML5 Export Buttons end -->
                        </div>
                        <!-- END TABEL TAMU  -->
                    </div>
                </div>
            </div>

            <!-- MODAL INPUTA DATA TAMU -->
            <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title">Tambah Tamu Undangan</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-muted">Masukan kontak Tamu untuk mengirim undangan </p>
                            <div class="card-block ">
                                <form class="form-group" method="POST" action="<?= base_url('Mempelai/Tamu/tambahdata'); ?>">
                                    <p class="f-w-900 m-b-5">Nama Tamu</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                        <input type="hidden" id="id_undangan" name="id_undangan" value="<?= $this->session->userdata('ID_undangan'); ?>" class="form-control form-control-round  m-b-10" placeholder="Nama Tamu" autofocus>
                                        <input type="text" id="nama_tamu" name="nama_tamu" class="form-control form-control-round  m-b-10" placeholder="Nama Tamu" autofocus>
                                    </div>
                                    <p class="f-w-900 m-b-5">Email</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-email"></i></span>
                                        <input type="text" id="email_tamu" name="email_tamu" class="form-control form-control-round  m-b-10" placeholder="Email Tamu">
                                    </div>
                                    <p class="f-w-900 m-b-5">Nomor Whatasapp Tamu</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-brand-whatsapp"></i></span>
                                        <input type="text" id="wa_tamu" name="wa_tamu" class="form-control form-control-round  m-b-10" placeholder="No Whatsapp Tamu">
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
            <!--END MODAL INPUTA DATA TAMU -->

            <!-- MODAL DETAIL TAMU -->
            <div class="modal fade" id="detail-Modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Tamu Undangan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <dl class="dl-horizontal row p-3 m-b-0 f-20">
                                <dt class="col-sm-4 m-b-15 ">Nama</dt>
                                <dd class="col-sm-8 m-b-15 detail-nama"></dd>
                                <dt class="col-sm-4 m-b-15">Email</dt>
                                <dd class="col-sm-8 m-b-15 detail-email"></dd>
                                <dt class="col-sm-4 m-b-15">No WA</dt>
                                <dd class="col-sm-8 m-b-15 detail-wa"></dd>
                            </dl>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect " data-dismiss="modal">Kembali</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DETAIL TAMU -->
        </div>
    </div>
</div>