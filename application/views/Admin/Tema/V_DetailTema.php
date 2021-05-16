<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="row align-items-end">
                        <div class="col-lg">
                            <div class="page-header-title">
                                <div class="d-inline">
                                    <h1 class="f-w-900">Detail Tema </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
                <?= $this->session->flashdata('message'); ?>

                <div class="page-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="card ">
                                    <div class="card-header">
                                        <!-- <h3 class="f-w-600">Akad</h3> -->
                                    </div>
                                    <div class="card-block ">
                                        <div class="row">
                                            <div class="col-sm-12 text-center">
                                                <p class="f-w-600 m-b-5">Gambar Tema</p>
                                                <div class="thumbnail">
                                                    <div class="thumb">
                                                        <a href="<?= base_url('') . 'assets/Tema/' . $image_thema ?>" data-lightbox="1" data-title="Tema <?= $detail_data->nama_thema; ?>">
                                                            <img src="<?= base_url('') . 'assets/Tema/' . $image_thema ?>" alt="<?= $detail_data->nama_thema; ?>" class="img-fluid img-thumbnail ">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">ID Thema</p>
                                                <input type="text" readonly id="id_tema" name="id_tema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->id_thema; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Nama Thema</p>
                                                <input type="text" readonly id="nama_thema" name="nama_thema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->nama_thema; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">View Tema</p>
                                                <input type="text" readonly id="view_tema" name="view_tema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->view_thema; ?>">
                                            </div>
                                            <div class="col-sm-4">
                                                <p class="f-w-600 m-b-5">Status Thema</p>
                                                <input type="text" readonly id="status_tema" name="status_tema" class="form-control  form-control-round m-b-10" value="<?= $detail_data->status_thema; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="f-right">
                                    <button type="reset" class="btn btn-primary btn-outline-primary z-depth-bottom-3"><i class="icofont icofont-close-circled "></i>Batal</button>
                                    <button type="submit" class="btn btn-primary z-depth-bottom-3 "><i class="icofont icofont-check-circled"></i>Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    </form>
                </div>
            </div>