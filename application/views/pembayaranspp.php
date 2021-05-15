<?php 
$data = array(
    'judul' => '',
    'menu' => menu_mempelai()
);
$this->load->view('Mempelai/layout/header',$data); ?>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?php echo base_url(); ?>asset/image/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Aplikasi Undangan Online
        </a>
    </nav>
    <div class="container" mt-5>
        <h2>Data Pembayaran Undangan</h2>
        <form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
            <input type="hidden" name="result_type" id="result-type" value="">
    </div>
    <input type="hidden" name="result_data" id="result-data" value=""></div>
    <label for="nama">Nama Pengguna</label>
    <div class="form-group">
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $this->session->userdata('Email_Akun') ?>">
    </div>

    <label for="jenis_kelamin">Jenis Kelamin</label>
    <div class="form-group">
        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
            <option value="Laki-Laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <label for="jml_bayar">Jumlah Bayar</label>
    <div class="form-group">
        <input type="text" class="form-control" name="jml_bayar" id="jml_bayar" value="100000">
    </div>
    <button class="btn btn-primary" id="pay-button">Bayar!</button>
    </form>
    <hr>
    <table class="table" table-bordered table-striped>
        <thead>
            <tr>
            <th>Order Id</th>
            <th>Gross_Aamount</th>
            <th>Payment Type</th>
            <th>Transaction Time</th>
            <th>Bank</th>
            <th>Va Numbers</th>
            <th>Status</th>
            <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        
        <?php foreach ($undangan_online as $d ) {?>
            <tr>
            <td><?php echo $d->order_id ; ?></td>
            <td align="right"><?php echo number_format($d->gross_amount, '0' ,'','.'); ?></td>
            <td><?php echo $d->payment_type; ?></td>
            <td><?php echo $d->transaction_time; ?></td>
            <td><?php echo $d->bank; ?></td>
            <td><?php echo $d->va_numbers; ?></td>
            <td>
            <?php
            if ($d->status_code == 200){
                ?>
                <span class="badge bg-success">Success</span>
                <?php
            }else{
                ?>
                <span class="badge bg-warning">Pending</span>
                <?php
            }
            ?>
            </td>
            <td>
            <a href="<?php echo $d->pdf_url; ?>" target="_blank" class="btn btn-success btn-sm">Download</a>
            </td>
            </tr>
        <?php } ?>
        </tbody>   
    </table>
    </div>
<?php $this->load->view('Mempelai/layout/footer')?>