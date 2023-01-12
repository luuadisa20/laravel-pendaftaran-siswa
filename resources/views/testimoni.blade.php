@extends('layouts.main')

@section('container')

<div class="container mt-4 mb-5">
  <h2>{{ $title }}</h2>

  <div class="form-row">
    <div class="col-md-4">
      <div class="card" style="height: 100%;">
        <div class="card-body">
          <p class="card-title" style="font-size: 2rem;">
            <strong class="text-secondary-lrvl">2000</strong>
            | Akhmad Munito
          </p>
          <p class="card-text">
            Maju Terus Wikrama, dengan sekolah di Wikrama saya dibekali ilmu yg sangat bermanfaat dan akhlakul karimah bisa langsung bisa bersaing ke dunia kerja di era modern ini
          </p>
        </div>
        <div class="card-footer">
          Administrasi Perkantoran (APK)
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="height: 100%;">
        <div class="card-body">
          <p class="card-title" style="font-size: 2rem;">
            <strong class="text-secondary-lrvl">2011</strong>
            | Lutfi Hakim
          </p>
          <p class="card-text">
            TSMK Wikrama bukan hanya menjadikan siswanya untuk masuk ke dunia kerja, melainkan melebihi dari apa yang dibutuhkan di dunia kerja pada umumnya.
          </p>
        </div>
        <div class="card-footer">
          Rekayasa Perangkat Lunak (RPL)
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card" style="height: 100%;">
        <div class="card-body">
          <p class="card-title" style="font-size: 2rem;">
            <strong class="text-secondary-lrvl">2016</strong>
            | Kamaludin
          </p>
          <p class="card-text">
            >Menerapkan sistem pembelajaran yang baik, efektif dan berbasis TI yang sangat memudahkan siswa.
          </p>
        </div>
        <div class="card-footer">
          Rekayasa Perangkat Lunak (RPL)
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
