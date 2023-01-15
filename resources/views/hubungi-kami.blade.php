@extends('layouts.main')

@section('container')
  <div class="container mt-4 mb-5">
    <div class="card rounded-4 bg-primary-lrvl text-light">
      <div class="card-body p-5">

        <div class="w-100">
          <h1 class="text-center w-100 mb-5">{{ $title }}</h1>
        </div>

        @if (session()->has('message'))
          <p class="alert {{ session('alert-class') }}">{{ session('message') }}</p>
        @endif

        @if (count($errors) > 0)
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="row">
          <div class="col-md-4">
            <h5 class="card-title">KONTAK PENDAFTARAN</h5>
            <p class="card-text">
              Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720, Telepon (Whatsapp) 0251-8242411 / 082221718035
            </p>

            <a href="/pendaftaran-siswa" class="btn btn-secondary-lrvl rounded-4">Daftar Sekarang</a>
          </div>

          <div class="col-md-8">
            <form action="{{ route('pesan') }}" method="POST">
              {{ csrf_field() }}

              <div class="form-row">
                <div class="col-12 pb-4">
                  <input type="text" class="form-control rounded-4" name="nama" placeholder="Nama Lengkap"
                    value="{{ old('nama') }}">
                </div>
                <div class="col-md-6 pb-4">
                  <input type="text" class="form-control rounded-4" name="no-hp" placeholder="+62"
                    value="{{ old('no-hp') }}">
                </div>
                <div class="col-md-6 pb-4">
                  <input type="text" class="form-control rounded-4" name="email" placeholder="Alamat Email"
                    value="{{ old('email') }}">
                </div>
                <div class="col-12 pb-4">
                  <textarea class="form-control rounded-4" name="pesan" rows="6">{{ old('pesan') }}</textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-secondary-lrvl rounded-4">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
