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
        <div class="card-body text-center">
          @if ($siswa->bukti_pembayaran !== null)
            <img src="{{ asset('pembayaran/' . $siswa->bukti_pembayaran) }}" class="img-thumbnail mb-3">
          @endif
          <p class="card-text mb-3">
            Nama Bank : {{ $siswa->nama_bank }}<br>
            Nama Pemilik Rekening : {{ $siswa->nama_pemilik_rekening }}<br>
            Nominal : {{ number_format($siswa->nominal, 0, '.', '.') }}
          </p>
          <a href="/page-pembayaran">Kembali</a>
        </div>
      </div>
    </div>
  </div>
@endsection
