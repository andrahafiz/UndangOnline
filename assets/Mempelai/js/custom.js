window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');


$("#btn-detail").on("click", function() {
    const nama = $(this).data('nama');
    const nomor = $(this).data('wa');
    const email = $(this).data('email');
    // $("#nama-detil").attr("value", nama);
    $('.detail-body').text(nama + "+" + nomor);
    // $('.detail-body').append()

})
$("#btn-wa").on("click", function() {
    const nomor = $(this).data('nowa');
    // console.log(nomor);
    // https://api.whatsapp.com/send?phone=6289661083456&text=Halo%0ASaya%20Ingin%20Bekerja%20Sama
    var win = window.open('https://api.whatsapp.com/send?phone=' + nomor + '&text=yes');
    if (win) {
        //Browser has allowed it to be opened
        win.focus();
    } else {
        //Browser has blocked it
        alert('Please allow popups for this website');
    }
    return false;
})