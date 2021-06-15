$("#Modal-P").modal({ backdrop: 'static', keyboard: false, show: true });
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');


$(".btn-detail").on("click", function () {
    var nama = $(this).data('nama');
    var nomor = $(this).data('wa');
    var email = $(this).data('email');

    if (nomor == "") {
        nomor = "Tidak ada data";
    }
    if (email == "") {
        email = "Tidak ada data";
    }

    $('.detail-nama').text(nama);
    $('.detail-wa').text(nomor);
    $('.detail-email').text(email);
    // $('.detail-body').append()

})
$(".btn-wa").on("click", function () {
    const nomor = $(this).data('nowa');
    // console.log(nomor);
    // https://api.whatsapp.com/send?phone=6289661083456&text=Halo%0ASaya%20Ingin%20Bekerja%20Sama
    var win = window.open('https://api.whatsapp.com/send?phone=' + nomor + '&text=WA test');
    if (win) {
        //Browser has allowed it to be opened
        win.focus();
    } else {
        //Browser has blocked it
        alert('Please allow popups for this website');
    }
    return false;
})


$('#pay-button').click(function (event) {
    event.preventDefault();
    $(this).attr("disabled", "disabled");

    var nama = $("#nama").val();
    var jenis_kelamin = $("#jenis_kelamin").val();
    var jml_bayar = $("#jml_bayar").val();
    $.ajax({
        type: 'POST',
        url: '<?= site_url() ?>snap/token',
        data: {
            nama: nama,
            jenis_kelamin: jenis_kelamin,
            jml_bayar: jml_bayar
        },
        cache: false,

        success: function (data) {
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

                onSuccess: function (result) {
                    changeResult('success', result);
                    console.log(result.status_message);
                    console.log(result);
                    $("#payment-form").submit();
                },
                onPending: function (result) {
                    changeResult('pending', result);
                    console.log(result.status_message);
                    $("#payment-form").submit();
                },
                onError: function (result) {
                    changeResult('error', result);
                    console.log(result.status_message);
                    $("#payment-form").submit();
                }
            });
        }
    });
});