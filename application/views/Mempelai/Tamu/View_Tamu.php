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
                                            <h3 class="f-w-900">Daftar Tamu Undangan</h3>
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
                                                    <div class="dataTables_length" id="simpletable_length"><label>Show <select name="simpletable_length" aria-controls="simpletable" class="form-control input-sm">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> entries</label></div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <div id="simpletable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="simpletable"></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 185.2px;">No</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 288.4px;">Nama</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 142px;">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">Airi Satou</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                            </tr>

                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">No</th>
                                                                <th rowspan="1" colspan="1">Nama</th>
                                                                <th rowspan="1" colspan="1">Aksi</th>


                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">Showing 1 to 10 of 20 entries</div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="simpletable_previous"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="simpletable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="simpletable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                            <li class="paginate_button page-item next" id="simpletable_next"><a href="#" aria-controls="simpletable" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
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
                            <h3 class="modal-title">Tambah Tamu Unndangan</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-muted">Masukan kontak Tamu untuk mengirim undangan </p>
                            <div class="card-block ">
                                <form class="form-group">
                                    <p class="f-w-900 m-b-10">Nama Tamu</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                        <input type="text" id="nama_tamu" name="username" class="form-control form-control-round  m-b-10" placeholder="Nama Tamu" autofocus value="<?= set_value('username'); ?>">
                                    </div>
                                    <p class="f-w-900 m-b-10">Email</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                        <input type="text" id="nama_tamu" name="username" class="form-control form-control-round  m-b-10" placeholder="Nama Tamu" autofocus value="<?= set_value('username'); ?>">
                                    </div>
                                    <p class="f-w-900 m-b-10">Nomor Tamu</p>
                                    <div class="input-group">
                                        <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                        <input type="text" id="nama_tamu" name="username" class="form-control form-control-round  m-b-10" placeholder="Nama Tamu" autofocus value="<?= set_value('username'); ?>">
                                    </div>
                                    <!-- <p class="f-w-600 m-b-5">Nomor Whatssapp</p>
                                    <input type="text" id="wa_tamu" class="form-control  form-control-round m-b-10">
                                    <p class="f-w-600 m-b-5">Email</p>
                                    <input type="text" id="email_tamu" class="form-control  form-control-round m-b-10"> -->

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light ">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--END MODAL INPUTA DATA TAMU -->

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>