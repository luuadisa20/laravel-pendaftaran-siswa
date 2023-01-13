// deklarasi variable

// element container dari nama-bank-input
const nama_bank_input_container = $('#nama-bank-input-container');

const nama_bank_input = $('#nama-bank-input');
const nama_bank_select = $('#nama-bank-select');

const bukti_pembayaran = $('#bukti-pembayaran');

const nominal = $('#nominal');

// ketika html ready/selesai dimuat maka jalankan callback berikut
$(document).ready(function () {
  // inisialisasi element nama_bank_select menggunakan library select2
  nama_bank_select.select2({
    // konfigurasi tema
    theme: "bootstrap"
  });

  // inisialisasi event listener change element nama_bank_select 
  nama_bank_select.on('change', function () {
    if (this.value === 'Lainnya') { // jika value nama_bank_select sama dengan 'Lainnya', maka jalankan perintah didalamnya
      nama_bank_input_container.show();
      nama_bank_input.val('');
    } else { // selain itu, maka jalankan perintah didalamnya
      nama_bank_input_container.hide();
      nama_bank_input.val(this.value);
    }
  });

  bukti_pembayaran.on('change', function () {
    bukti_pembayaran.next('.custom-file-label').text(this.files[0].name);
  });

  nominal.on('keyup', function () {
    if (this.value.charAt(0) == '0' && this.value.length > 1) {
      this.value = this.value.substring(1);
    }

    const tempValue = formatAngka(this.value, { reverse: true });

    this.value = tempValue;

    if (isNaN(tempValue) || tempValue < 0) {
      this.value = 0;
    }

    if (this.dataset.max) {
      if (tempValue > this.dataset.max) {
        this.value = this.dataset.max;
      }
    }

    if (tempValue === 0) {
      this.value = arg.defaultValue;
    }

    this.value = formatAngka(this.value);

    if (arg.callback) {
      arg.callback(e, data);
    }
  });
});

function formatAngka(amount = 0, { reverse = false, decimalCount = 0, decimal = ',', thousands = '.' } = {}) {
  if (typeof amount === 'string') {
    amount = amount.trim();
  }

  if (reverse) {
    return +(`${amount}`.split(thousands).join('').split(decimal).join('.'));
  }

  decimalCount = Math.abs(decimalCount);
  decimalCount = isNaN(decimalCount) ? 0 : decimalCount;

  const number = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
  const splitCount = number.length > 3 ? number.length % 3 : 0;
  const decimalNumber = Math.abs(amount - number).toFixed(decimalCount).slice(2);

  const front = splitCount ? number.substr(0, splitCount) + thousands : '';
  const middle = number.substr(splitCount).replace(/(\d{3})(?=\d)/g, '$1' + thousands);
  const back = decimalCount > 0 && +decimalNumber > 0 ? decimal + decimalNumber : '';

  return `${front}${middle}${back}`;
}
