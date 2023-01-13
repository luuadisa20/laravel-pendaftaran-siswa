@extends('layouts.admin')

@section('container')
  <div class="container pb-5">
    <h6>
      Halo, {{ Auth::user()->nama }}
    </h6>

    <div class="mb-4">
      <span>Selamat datang</span>
    </div>

    <div class="alert alert-warning">Silahkan mengecek data pendaftaran beserta bukti pembayaran para calon siswa!</div>
  </div>
@endsection
