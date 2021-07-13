<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <?php if (validation_errors()) {
                    echo "<div class='alert alert-warning icons-alert'> 
                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'> 
                    <i class='icofont icofont-close-line-circled'></i>
                    </button> <p><strong>Gagal!</strong>" . validation_errors() . "</p>
                    </div>";
                }; ?>
                <?= $this->session->flashdata('message'); ?>

                <div class="page-body">
                    <div class="form-group">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card ">
                                    <div class="card-header ">
                                        <div class="d-inline">
                                            <h1 class="f-w-900">Tambah Tema </h1>
                                            <hr />
                                        </div>
                                    </div>
                                    <div class="card-block ">
                                        <form enctype="multipart/form-data" method="POST" class="form-group">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <p class="f-w-600 m-b-5">ID Thema</p>
                                                    <input type="text" readonly id="id_tema" name="id_tema" class="form-control  form-control-round m-b-15" value="<?= kode_otomatis('thema', 'id_thema'); ?>">

                                                    <p class="f-w-600 m-b-5">Nama Thema</p>
                                                    <input type="text" id="nama_thema" name="nama_thema" class="form-control  form-control-round m-b-15" autofocus value="<?= set_value('nama_thema'); ?>">

                                                    <p class="f-w-600 m-b-5">View Tema</p>
                                                    <input type="text" id="view_tema" name="view_tema" class="form-control  form-control-round m-b-15" value="<?= set_value('view_tema'); ?>">

                                                    <p class="f-w-600 m-b-5">Status Thema</p>
                                                    <select name="status_tema" class="form-control form-control-round">
                                                        <option value="1">Aktif</option>
                                                        <option value="0">Non Aktif</option>
                                                    </select>

                                                    <div class="text-center m-t-25">
                                                        <a href="<?= base_url('Admin/Tema') ?>">
                                                            <button type="button" class="btn btn-inverse btn-outline-inverse w-25"><i class="icofont icofont-close-circled "></i>Batal</button>
                                                        </a>
                                                        <button type="submit" class="btn btn-success w-25"><i class="icofont icofont-check-circled"></i>Simpan</button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 text-center">
                                                    <p class="f-w-600 m-b-5">Gambar Tema</p>

                                                    <a href="<?= base_url('') . 'assets/Tema/NoImage.png' ?>" data-lightbox="example-set">
                                                        <img src="<?= base_url('') . 'assets/Tema/NoImage.png' ?>" class="img-fluid m-b-10" alt="" id="preview">
                                                    </a>
                                                    <input type="file" id="file" name="image" class="form-control  form-control-round m-b-10 " onchange="tampilkanPreview(this,'preview')">
                                                </div>
                                            </div>
                                        </form>
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
<script>
    function tampilkanPreview(gambar, idpreview) {
        //                membuat objek gambar
        var gb = gambar.files;

        //                loop untuk merender gambar
        for (var i = 0; i < gb.length; i++) {
            //                    bikin variabel
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview = document.getElementById(idpreview);
            var reader = new FileReader();

            if (gbPreview.type.match(imageType)) {
                //                        jika tipe data sesuai
                preview.file = gbPreview;
                reader.onload = (function(element) {
                    return function(e) {
                        element.src = e.target.result;
                    };
                })(preview);
                //                    membaca data URL gambar
                reader.readAsDataURL(gbPreview);
            } else {
                //                        jika tipe data tidak sesuai
                alert("Type file tidak sesuai. Khusus image.");
            }
        }
    }
</script>