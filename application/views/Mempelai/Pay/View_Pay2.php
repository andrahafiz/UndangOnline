<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
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
                <input type="hidden" name="result_data" id="result-data" value="">
            </div>
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

        </div>
    </div>
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