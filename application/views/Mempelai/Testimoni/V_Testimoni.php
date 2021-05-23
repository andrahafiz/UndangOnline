<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-md-6 m-auto">
                                        <div class="card-sub" style="cursor: auto;">

                                            <?= $this->session->flashdata('message'); ?>
                                            <img class="card-img-top img-fluid" src="<?= base_url(); ?>assets\Mempelai\images\feedback.jpg" alt=" Card image cap">
                                            <div class="card-block">
                                                <h1 class="card-title f-w-600">Testimoni</h1>
                                                <p class="card-text">Terima kasih telah memberikan testimoni ke website kami, kritik dan saran dari kamu sebagai semangat kami untuk membangun website ini menjadi lebih baik.</p>
                                                <p class="card-text text-warning f-12">* Testimoni kamu akan di berikan kesempatan di tampilkan di halaman utama website</p>
                                                <form class="form-group" method="POST">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <p class="f-w-600 m-b-5">ID Undangan</p>
                                                            <input type="text" id="id_undangan" name="id_undangan" readonly class="form-control form-control-round " value="<?= $this->session->userdata('ID_Undangan') ?>">
                                                        </div>
                                                        <div class="col-sm-6">
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
                                                            <textarea id="komentar" name="komentar" class="form-control max-textarea form-control-round p-20" placeholder="Masukan komentarmu disini    "></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm">
                                                            <button type="submit" class="btn btn-primary form-control-round f-right  m-l-10">Post</button>
                                                            <button type="reset" class="btn btn-inverse btn-outline-inverse form-control-round f-right">Reset</button>
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
</div>
</div>