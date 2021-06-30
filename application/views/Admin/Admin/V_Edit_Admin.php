<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <!--  TABEL Admin  -->
                        <div class="col-xl-12 col-md-12">
                            <!-- HTML5 Export Buttons table start -->
                            <div class="card">
                                <div class="card-header table-card-header">
                                    <div class="row m-b-20">
                                        <div class="col-md-8 m-b-5">
                                            <h3 class="f-w-900">Edit Admin</h3>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-block">
                                    <?php
                                    if (validation_errors()) {
                                        echo "<div class='alert alert-warning icons-alert'> 
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                    <i class='icofont icofont-close-line-circled'></i>
                    </button> <p><strong>Gagal!</strong>" . validation_errors() . "</p>
                    </div>";
                                    }; ?>
                                    <form class="form-group" method="POST">
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-lg-2 col-form-label f-w-900">Username Admin</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon round-left "><i class="icofont icofont-user-alt-3"></i></span>
                                                    <input type="text" required id="username_admin" name="username_admin" class="form-control form-control-round  m-b-10" placeholder="Username Admin" value="<?= $data->Username_Admin ?>" autofocus>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-sm-3 col-lg-2 col-form-label f-w-900">Password Admin</label>
                                            <div class="col-sm-8 col-lg-10">
                                                <div class="input-group">
                                                    <span class="input-group-addon round-left "><i class="icofont icofont-ui-password"></i></span>
                                                    <input type="text" required id="pass_admin" name="pass_admin" class="form-control form-control-round  m-b-10" value="<?= $data->Password_Admin ?>" placeholder="Password Admin">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-2 ">
                                            <div class="col-sm-3 col-lg-2"></div>
                                            <div class="col-sm-8 col-lg-10">
                                                <!-- <button type="reset" class="btn btn-default waves-effect " data-dismiss="modal">Batal</button>
                                                <button class="btn btn-primary"><i class="icofont icofont-user-alt-3"></i>Primary Button</button>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light ">Simpan</button> -->
                                                <button type="submit" class="btn btn-primary btn-round k">Simpan</button>
                                                <a href="<?= base_url('Admin/Admin') ?>">
                                                    <button type="button" class="btn btn-inverse btn-outline-inverse btn-round ">Batal</button>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- HTML5 Export Buttons end -->
                        </div>
                        <!-- END TABEL Admin  -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>