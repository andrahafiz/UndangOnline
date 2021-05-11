$("#Modal-P").modal({ backdrop: 'static', keyboard: false, show: true });
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');

$(".tombolUbah").on("click", function () {
    var id = $(this).data("id");
    alert(id);
    // console.log(id);
    $("#edit_id_undangan").attr("value", id);
})

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

