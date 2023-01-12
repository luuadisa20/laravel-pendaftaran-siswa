// deklarasi variable

// element container dari asal-sekolah-input
const asal_sekolah_input_container = $('#asal-sekolah-input-container');

const asal_sekolah_input = $('#asal-sekolah-input');
const asal_sekolah_select = $('#asal-sekolah-select');

// ketika html ready/selesai dimuat maka jalankan callback berikut
$(document).ready(function () {
  // inisialisasi element asal_sekolah_select menggunakan library select2
  asal_sekolah_select.select2({
    // konfigurasi tema
    theme: "bootstrap"
  });

  // inisialisasi event listener change element asal_sekolah_select 
  asal_sekolah_select.on('change', function () {
    if (this.value === 'Lainnya') { // jika value asal_sekolah_select sama dengan 'Lainnya', maka jalankan perintah didalamnya
      asal_sekolah_input_container.show();
      asal_sekolah_input.val('');
    } else { // selain itu, maka jalankan perintah didalamnya
      asal_sekolah_input_container.hide();
      asal_sekolah_input.val(this.value);
    }
  });
});