@extends('layouts.admin')

@section('container')
  <div class="container">
    <h6>
      Halo, {{ Auth::user()->nama }}
    </h6>

    <div class="mb-4">
      <span>Silahkan upload bukti bayar Anda di form berikut</span>
    </div>

    <form action="/proses-pembayaran" method="post" enctype="multipart/form-data"></form>
    <div class="card">
      <div class="card-body">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nama-bank-select">Nama Bank</label>
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
            <input type="text" name="nama-pemilik-rekening" id="nama-pemilik-rekening" class="form-control">
          </div>
          <div class="form-group col-md-4">
            <label for="nominal">Nominal</label>
            <input type="text" name="nominal" id="nominal" class="form-control">
          </div>
          <div class="form-group col-md-12">
            <label for="nominal">Bukti Pembayaran</label>
            <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" id="bukti-pembayaran" name="bukti-pembayaran" required>
              <label class="custom-file-label" for="bukti-pembayaran">Choose file...</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
