@extends('layouts.app')

@section('content')
  <div class="container mt-4 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-7">

        <div class="card rounded-4 bg-primary-lrvl-grd text-light">
          <div class="card-body p-5">

            <div class="w-100">
              <h1 class="text-center w-100 mb-5">LOGIN</h1>
            </div>

            <div class="row justify-content-center">
              <div class="col-md-8">
                <form action="{{ route('login') }}" method="POST">
                  @csrf

                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email"
                      class="form-control @error('email') is-invalid @enderror rounded-4" placeholder="Email" required
                      value="{{ old('email') }}" autocomplete="email" autofocus>

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password"
                      class="form-control @error('password') is-invalid @enderror rounded-4" placeholder="Password"
                      required="">

                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group row">
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                          {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                          {{ __('Remember Me') }}
                        </label>
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-block btn-secondary-lrvl rounded-4">
                    {{ __('Login') }}
                  </button>

                  <hr>

                  @if (Route::has('password.request'))
                    <p class="text-center">
                      <a class="btn btn-link text-center"
                        href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </p>
                  @endif

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
