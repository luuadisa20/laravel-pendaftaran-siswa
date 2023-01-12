@extends('layouts.admin')

@section('container')
  <div class="container">
    <h6>
      Halo, {{ Auth::user()->nama }}
    </h6>

    <div class="mb-4">
      <span>Selamat datang</span>
    </div>

    @if (Auth::user()->role == 'admin')
      <div class="alert alert-warning">Silahkan mengecek data pendaftaran beserta bukti pembayaran para calon siswa!</div>
      {{-- @elseif ($siswa->status_registrasi == 'pending' && $siswa->bukti_pembayaran == '')
      <div class="alert alert-warning">Silhakan melakukan pembayaran untuk memproses pendaftaran.</div>
    @elseif ($siswa->status_registrasi == 'pending' && $siswa->bukti_pembayaran != '')
      <div class="alert alert-warning">Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.</div>
    @elseif ($siswa->status_registrasi == 'accepted')
      <div class="alert alert-warning">Pembayaran diverifikasi, silahkan untuk melakukan proses selanjutnya.</div>
    @elseif ($siswa->status_registrasi == 'denied')
      <div class="alert alert-warning">Verifikasi pembayaran gagal, silahkan lakukan proses ulang pendaftaran.</div> --}}
    @endif

    @if (session()->has('message'))
      <p class="alert {{ session('alert-class') }}">{{ session('message') }}</p>
    @endif
  </div>
@endsection
