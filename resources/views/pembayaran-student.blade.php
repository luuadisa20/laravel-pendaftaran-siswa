@extends('layouts.admin')

@section('container')
  <div class="container pb-5">
    <h6>
      Halo, {{ Auth::user()->nama }}
    </h6>

    <div class="mb-4">
      <span>Silahkan upload bukti bayar Anda di form berikut</span>
    </div>

    @if ($siswa->status_registrasi == 'pending' && $siswa->bukti_pembayaran != '')
      <div class="alert alert-warning">Pembayaran sedang diverifikasi, harap tunggu informasi selanjutnya.</div>
    @endif

    <form action="{{ url('page-pembayaran') }}" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}

      <div class="card">
        <div class="card-body">

          @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul class="mb-0">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="nama-bank-select">Pilih Bank</label>
              <select class="form-control" name="nama-bank-select" id="nama-bank-select">
                <option value="">Pilih Bank</option>
                <option>Lainnya</option>
                <option>Bank BNI</option>
                <option>Bank BRI</option>
                <option>Bank BCA</option>
                <option>Bank Mandiri</option>
                <option>Bank Lampung</option>
                <option>Bank Permata</option>
              </select>
            </div>

            <div class="form-group col-md-4">
              <label for="nama-pemilik-rekening">Nama Pemilik Rekening</label>
              <input type="text" name="nama-pemilik-rekening" id="nama-pemilik-rekening" class="form-control"
                value="{{ old('nama-pemilik-rekening') }}">
            </div>

            <div class="form-group col-md-4">
              <label for="nominal">Nominal</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="hidden" name="nominal" id="nominal-input">
                <input type="text" id="nominal" class="form-control">
              </div>
            </div>

            <div class="form-group col-md-4" id="nama-bank-input-container" style="display: none">
              <label for="nama-bank-input">Nama Bank</label>
              <input type="text" class="form-control" name="nama-bank-input" id="nama-bank-input"
                placeholder="Masukkan Nama Bank atau E-Wallet">
            </div>

            <div class="form-group col">
              <label for="bukti-pembayaran">Bukti Pembayaran</label>
              <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" name="bukti-pembayaran" id="bukti-pembayaran"
                  accept="image/*" required>
                <label class="custom-file-label" for="bukti-pembayaran">Choose file...</label>
              </div>
            </div>

            <div class="form-group col-md-12">
              <div class="form-row justify-content-end">
                <div class="col-md-4">
                  <button type="submit" class="btn btn-block btn-primary-lrvl">Upload Bukti Pembayaran</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </form>
  </div>
@endsection
