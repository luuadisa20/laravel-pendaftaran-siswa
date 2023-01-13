// deklarasi variable

const btn_verifikasi = $('.btn-verifikasi');
const btn_tolak = $('.btn-tolak');

// ketika html ready/selesai dimuat maka jalankan callback berikut
$(document).ready(function () {
  btn_verifikasi.on('click', function () {
    const id = this.dataset.id;
    if (confirm(`Konfirmasi verifikasi nomor registrasi ${id}`)) {
      const elementForm = document.getElementById('form-pendaftaran');
      const elementId = document.getElementById('id-pendaftaran');

      elementId.value = id;

      elementForm.action = '/proses-verifikasi';
      elementForm.submit();
    }
  });

  btn_tolak.on('click', function () {
    const id = this.dataset.id;
    if (confirm(`Konfirmasi tolak nomor registrasi ${id}`)) {
      const elementForm = document.getElementById('form-pendaftaran');
      const elementId = document.getElementById('id-pendaftaran');

      elementId.value = id;

      elementForm.action = '/proses-tolak';
      elementForm.submit();
    }
  });
});
