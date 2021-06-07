<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-10 col-md-12 col-12 m-auto">
                                        <?= $this->session->flashdata('message'); ?>
                                        <div class="card-sub" style="cursor: auto;">
                                            <img class="card-img-top img-fluid" src="<?= base_url(); ?>assets\Mempelai\images\<?= $page == 'edit' ? 'feedback2.jpg' : 'feedback.jpg' ?>" alt=" Card image cap">
                                            <div class="card-block">
                                                <h1 class="card-title f-w-600">Testimoni</h1>
                                                <hr>
                                                <p class="card-text">Terima kasih telah memberikan testimoni ke website kami, kritik dan saran dari kamu sebagai semangat kami untuk membangun website ini menjadi lebih baik.</p>

                                                <form class="form-group" method="POST">
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <p class="f-w-600 m-b-5">ID Testimoni</p>
                                                            <input type="text" id="id_testimoni" name="id_testimoni" readonly class="form-control form-control-round " value="<?= empty($data_testimoni) ? kode_otomatis('tb_testimoni', 'ID_Testimoni') : $data_testimoni->ID_Testimoni  ?>">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <p class="f-w-600 m-b-5">ID Undangan</p>
                                                            <input type="text" id="id_undangan" name="id_undangan" readonly class="form-control form-control-round " value="<?= $this->session->userdata('ID_Undangan') ?>">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <p class="f-w-600 m-b-5">ID Akun</p>
                                                            <input type="text" id="id_akun" name="id_akun" readonly class="form-control form-control-round " value="<?= $this->session->userdata('ID_Akun') ?>">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm">
                                                            <p class="f-w-600 m-b-5">Username</p>
                                                            <input type="text" id="username" name="username" readonly class="form-control form-control-round " value="<?= $this->session->userdata('Username') ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm">
                                                            <p class="f-w-600 m-b-5">Komentar</p>
                                                            <textarea id="komentar" name="komentar" class="form-control max-textarea form-control-round p-l-35 p-t-25 p-b-25 " placeholder="Masukan komentarmu disini" rows="10"><?= empty($data_testimoni) ? '' : $data_testimoni->Testimoni ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm">
                                                            <?php if ($page == "add") { ?>
                                                                <p class="card-text text-warning f-12">* Testimoni kamu akan di beri kesempatan di tampilkan di halaman utama website namun harus melewati tahan filtering terlebih dahulu</p>
                                                            <?php } else { ?>
                                                                <p class="card-text text-warning f-12">* Testimoni kamu mungkin telah di posting di website utama, jika kamu melakukan perubahan maka akan masuk ke tahapa filtering lagi dan akan di tarik dari website utama, jika lulus tahap filtering akan di tampilkan ke dalam webiste utama lagi </p>
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm">
                                                            <?php if ($page == "add") { ?>
                                                                <button type="submit" name="add" class="btn btn-primary form-control-round f-right  m-l-10">Post</button>
                                                                <button type="reset" class="btn btn-inverse btn-outline-inverse form-control-round f-right">Reset</button>
                                                            <?php } else { ?>
                                                                <button type="submit" name="edit" class="btn btn-primary form-control-round f-right  m-l-10">Update</button>
                                                            <?php } ?>
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
                <!-- File upload card end -->
            </div>
        </div>
    </div>
</div>