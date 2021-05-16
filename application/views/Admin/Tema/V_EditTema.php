<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <?= $this->session->flashdata('message'); ?>

                <div class="page-body">
                    <div class="form-group">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card ">
                                    <div class="card-header ">
                                        <div class="d-inline">
                                            <h1 class="f-w-900">Edit Tema </h1>
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="card-block ">
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <p class="f-w-600 m-b-5">ID Thema</p>
                                                <input type="text" id="id_tema" name="id_tema" class="form-control  form-control-round m-b-15" value="<?= $detail_data->id_thema; ?>">

                                                <p class="f-w-600 m-b-5">Nama Thema</p>
                                                <input type="text" id="nama_thema" name="nama_thema" class="form-control  form-control-round m-b-15" value="<?= $detail_data->nama_thema; ?>">

                                                <p class="f-w-600 m-b-5">View Tema</p>
                                                <input type="text" id="view_tema" name="view_tema" class="form-control  form-control-round m-b-15" value="<?= $detail_data->view_thema; ?>">

                                                <p class="f-w-600 m-b-5">Status Thema</p>
                                                <?= $detail_data->status_thema != 0 ? ' <label class="badge badge-lg bg-success">Aktif</label>' : '<label class="badge badge-lg bg-danger">Non Aktif</label>'; ?>

                                                <div class="text-center m-t-25">
                                                    <a href="<?= base_url('Admin/Tema') ?>">
                                                        <button type="reset" class="btn btn-primary btn-outline-primary z-depth-bottom-3"><i class="icofont icofont-close-circled "></i>Batal</button>
                                                    </a>
                                                    <button type="submit" class="btn btn-primary z-depth-bottom-3 "><i class="icofont icofont-check-circled"></i>Simpan</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-center">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>