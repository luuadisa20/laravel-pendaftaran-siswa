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
            <li>Nama : {{ $pesan->nama }}</li>
            <li>Email : {{ $pesan->email }}</li>
            <li>No. HP : {{ $pesan->no_hp }}</li>
          </div>
          <div class="d-flex flex-column">
            <p class="card-title">
              Pesan:
            </p>
            <p class="card-text mb-3">
              {{ $pesan->pesan }}
            </p>
          </div>
          <a href="/pesan">Kembali</a>
        </div>
      </div>
    </div>
  </div>
@endsection
