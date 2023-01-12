@extends('layouts.main')

@section('container')

<div class="container mt-4 mb-5">
  <div class="row justify-content-center">
    <div class="col-md-7">
      
      <div class="card rounded-4 bg-primary-lrvl text-light">
        <div class="card-body p-5">

          <div class="w-100">
            <h1 class="text-center w-100 mb-5">{{ $title }}</h1>
          </div>
          
          <div class="row justify-content-center">
            <div class="col-md-8">
              @if (session('error'))
                <div class="alert alert-danger">
                  <b>Opps!</b> {{ session('error') }}
                </div>
              @endif

              <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" class="form-control rounded-4" placeholder="Email" required="">
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control rounded-4" placeholder="Password" required="">
                </div>

                <button type="submit" class="btn btn-block btn-secondary-lrvl rounded-4">Login</button>

                <hr>

                <p class="text-center">Belum punya akun? <a href="/pendaftaran-siswa">Daftar</a> sekarang!</p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection