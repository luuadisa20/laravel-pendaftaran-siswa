<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>pendaftaran-siswa-pdf</title>

  <link rel="stylesheet" href="{{ public_path('vendor/bootstrap/css/bootstrap.min.css') }}">
  <style>
    .table-pdf {
      width: 100%;
    }
  </style>
</head>
<body style="width: 100%; font-size: 1rem;">
  <table class="table-pdf">
    <tr>
      <td>
        <img src="{{ public_path('img/logo-wk.png') }}" class="img-thumbnail" style="width: 110px; height: auto;">
      </td>
      <td class="pl-4">
        <strong>
          PANITIA PENERIMAAN PESERTA DIDIK BARU<br>
          SMK WIKRAMA BOGOR TP.2023-2024<br>
        </strong>
        <span>
          Jl. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor<br>
          Email : prohumasi@smkwikrama.sch.id | Website : http://smkwikrama.sch.id
        </span>
      </td>
    </tr>
  </table>
  
  <table class="table-pdf mt-4">
    <tr>
      <td class="text-center">
        <strong>
          TANDA BUKTI PENDAFTARAN<br>
          SMK Wikrama Bogor TP.2023-2024<br>
        </strong>
      </td>
    </tr>
  </table>

  <table class="table-pdf mt-4">
    <tr>
      <td valign="top" style="width: 50%;">
        <table class="table-pdf">
          <tr>
            <td style="background-color: lightgray">
              <strong>
                I. BIODATA CALON PESERTA DIDIK
              </strong>
            </td>
          </tr>
          <tr>
            <td>
              <table class="table-pdf">
                <tr>
                  <td>
                    <strong>TANGGAL DAFTAR</strong>
                  </td>
                  <td>
                    : {{ $tanggal_pendaftaran }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>NOMOR SELEKSI</strong>
                  </td>
                  <td>
                    : {{ $no_seleksi }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>NAMA LENGKAP</strong>
                  </td>
                  <td>
                    : {{ $nama }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>NISN</strong>
                  </td>
                  <td>
                    : {{ $nisn }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>ASAL SEKOLAH</strong>
                  </td>
                  <td>
                    : {{ $asal_sekolah }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>NO HP</strong>
                  </td>
                  <td>
                    : {{ $no_hp }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>EMAIL</strong>
                  </td>
                  <td>
                    : {{ $email }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>NO HP AYAH</strong>
                  </td>
                  <td>
                    : {{ $no_hp_ayah }}
                  </td>
                </tr>
                <tr>
                  <td>
                    <strong>NO HP IBU</strong>
                  </td>
                  <td>
                    : {{ $no_hp_ibu }}
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="background-color: lightgray">
              <strong>
                II. INFORMASI DAN PERSYARATAN
              </strong>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <strong>A. Akun Anda</strong><br>
                Akses <a href="/login" target="_blank">ppdb-smkwikrama/student</a>, login gunakan<br>
                Email: {{ $email }}<br>
                Password: {{ $password }}<br>
                Akun ini digunakan untuk mengecek status pendaftaran pada SIM PPDB SMK Wikrama Bogor.
              </p>
            </td>
          </tr>
        </table>
      </td>
      <td valign="top" style="width: 50%;">
        <table class="table-pdf">
          <tr>
            <td>
              <p>
                <strong>B. Foto/Scan Dokumen yang Harus Dipersiapkan</strong><br>
                1. Persyaratan satu<br>
                2. Persyaratan dua<br>
                3. Persyaratan tiga
              </p>
            </td>
          </tr>
          <tr>
            <td>
              <p>
                <strong>C. Biaya Seleksi</strong><br>
                Pembayaran uang seleksi sebesar Rp. 200.000 melalui transfer bank:<br>
                Bank BNI: 1234567890 A.N. SMK Wikrama Sekolah<br>
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>