@extends('layouts.admin')

@section('container')
  <div class="container pb-5">
    <h6>
      Halo, {{ Auth::user()->nama }}
    </h6>

    <div class="mb-4">
      <span>Selamat datang</span>
    </div>

    <div class="d-flex">
      <div class="card" style="width: 100%;">
        <div class="card-body">
          <div class="mb-3">
            <li>NISN : {{ $siswa->nisn }}</li>
            <li>Nama Siswa : {{ $siswa->nama }}</li>
            <li>Jenis Kelamin : {{ $siswa->jenis_kelamin }}</li>
            <li>Asal Sekolah : {{ $siswa->asal_sekolah }}</li>
            <li>Email : {{ $siswa->email }}</li>
            <li>No. HP : {{ $siswa->no_hp }}</li>
            <li>No. HP Ayah : {{ $siswa->no_hp_ayah }}</li>
            <li>No. HP Ibu : {{ $siswa->no_hp_ibu }}</li>
          </div>
          <a href="/page-pembayaran">Kembali</a>
        </div>
      </div>
    </div>
  </div>
@endsection
