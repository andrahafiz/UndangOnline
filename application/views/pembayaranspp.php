<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-6NV2MTOLU1VB-kDR"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Aplikasi Pembayaran Undangan Online</title>
</head>

<body>
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
        <input type="text" class="form-control" name="nama" id="nama">
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
        <input type="text" class="form-control" name="jml_bayar" id="jml_bayar">
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
    <script type="text/javascript">
        $('#pay-button').click(function(event) {
            event.preventDefault();
            $(this).attr("disabled", "disabled");

            var nama = $("#nama").val();
            var jenis_kelamin = $("#jenis_kelamin").val();
            var jml_bayar = $("#jml_bayar").val();
            $.ajax({
                type: 'POST',
                url: '<?= site_url() ?>/snap/token',
                data: {
                    nama: nama,
                    jenis_kelamin: jenis_kelamin,
                    jml_bayar: jml_bayar
                },
                cache: false,

                success: function(data) {
                    //location = data;

                    console.log('token = ' + data);

                    var resultType = document.getElementById('result-type');
                    var resultData = document.getElementById('result-data');

                    function changeResult(type, data) {
                        $("#result-type").val(type);
                        $("#result-data").val(JSON.stringify(data));
                        //resultType.innerHTML = type;
                        //resultData.innerHTML = JSON.stringify(data);
                    }

                    snap.pay(data, {

                        onSuccess: function(result) {
                            changeResult('success', result);
                            console.log(result.status_message);
                            console.log(result);
                            $("#payment-form").submit();
                        },
                        onPending: function(result) {
                            changeResult('pending', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        },
                        onError: function(result) {
                            changeResult('error', result);
                            console.log(result.status_message);
                            $("#payment-form").submit();
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>