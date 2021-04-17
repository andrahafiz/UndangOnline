<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <!-- task, page, download counter  start -->
                        <div class="col-md-6 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="feather icon-user bg-c-blue card1-icon"></i>
                                    <span class="text-c-blue f-w-900 f-20">Tamu Undangan</span>
                                    <h3 class="m-t-15">100 Orang</h3>
                                </div>
                                <a href="<?= base_url("Mempelai"); ?>">
                                    <div class="card-footer bg-c-blue">
                                        <div class="row align-items-center  text-left">
                                            <div class="col">
                                                <p class="text-white m-b-0">Lihat Detail</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-arrow-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <!-- <i class="feather icon-cast bg-c-green card1-icon"></i> -->
                                    <i class="fa fa-money  bg-c-green card1-icon"></i>
                                    <span class="text-c-blue f-w-900 f-20">Total Hadiah</span>
                                    <h3 class="m-t-15">Rp. 1.000.000.000</h3>
                                </div>
                                <a href="<?= base_url("Hadiah"); ?>">
                                    <div class="card-footer bg-c-green">
                                        <div class="row align-items-center  text-left">
                                            <div class="col">
                                                <p class="text-white m-b-0">Lihat Detail</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-arrow-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- TAMU UNDANGAN -->
                        <div class="col-md-12 col-xl-4">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="feather icon-user bg-c-pink card1-icon"></i>
                                    <span class="text-c-blue f-w-900 f-20">Total Hadiah</span>
                                    <h3 class="m-t-15">100 Orang</h3>
                                </div>
                                <a href="<?= base_url("Mempelai"); ?>">
                                    <div class="card-footer bg-c-pink">
                                        <div class="row align-items-center  text-left">
                                            <div class="col">
                                                <p class="text-white m-b-0">Lihat Detail</p>
                                            </div>
                                            <div class="col-3 text-right">
                                                <i class="feather icon-arrow-up text-white f-16"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- END TAMU UNDANGAN -->

                        <!--  TABEL TAMU  -->
                        <div class="col-xl-12 col-md-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <h3 class="f-w-900">Data Tamu Undangan</h3>
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
                                                            </select> data</label></div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <div id="simpletable_filter" class="dataTables_filter"><label>Cari :<input type="Cari " class="form-control input-sm" placeholder="" aria-controls="simpletable"></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 182px;">Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 283.6px;">Position</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 138.8px;">Office</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 69.2px;">Age</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 141.2px;">Start date</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 98px;">Salary</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">Garrett Winters</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                                <td>63</td>
                                                                <td>2011/07/25</td>
                                                                <td>$170,750</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">Gloria Little</td>
                                                                <td>Systems Administrator</td>
                                                                <td>New York</td>
                                                                <td>59</td>
                                                                <td>2009/04/10</td>
                                                                <td>$237,500</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">Name</th>
                                                                <th rowspan="1" colspan="1">Position</th>
                                                                <th rowspan="1" colspan="1">Office</th>
                                                                <th rowspan="1" colspan="1">Age</th>
                                                                <th rowspan="1" colspan="1">Start date</th>
                                                                <th rowspan="1" colspan="1">Salary</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">Menampilkan 1 - 10 dari 20 data</div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="simpletable_previous"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li>
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

                        <!--  TABEL TAMU  -->
                        <div class="col-xl-12 col-md-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <h3 class="f-w-900">Data Tamu Undangan</h3>
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
                                                            </select> data</label></div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-6">
                                                    <div id="simpletable_filter" class="dataTables_filter"><label>Cari :<input type="Cari " class="form-control input-sm" placeholder="" aria-controls="simpletable"></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12">
                                                    <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 182px;">Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 283.6px;">Position</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 138.8px;">Office</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 69.2px;">Age</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 141.2px;">Start date</th>
                                                                <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 98px;">Salary</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1">Garrett Winters</td>
                                                                <td>Accountant</td>
                                                                <td>Tokyo</td>
                                                                <td>63</td>
                                                                <td>2011/07/25</td>
                                                                <td>$170,750</td>
                                                            </tr>
                                                            <tr role="row" class="even">
                                                                <td class="sorting_1">Gloria Little</td>
                                                                <td>Systems Administrator</td>
                                                                <td>New York</td>
                                                                <td>59</td>
                                                                <td>2009/04/10</td>
                                                                <td>$237,500</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">Name</th>
                                                                <th rowspan="1" colspan="1">Position</th>
                                                                <th rowspan="1" colspan="1">Office</th>
                                                                <th rowspan="1" colspan="1">Age</th>
                                                                <th rowspan="1" colspan="1">Start date</th>
                                                                <th rowspan="1" colspan="1">Salary</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="simpletable_info" role="status" aria-live="polite">Menampilkan 1 - 10 dari 20 data</div>
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="simpletable_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="simpletable_previous"><a href="#" aria-controls="simpletable" data-dt-idx="0" tabindex="0" class="page-link">Sebelumnya</a></li>
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

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>