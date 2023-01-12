@extends('layouts.app')

@section('content')
  <div class="container mt-4 mb-5">
    <div class="row justify-content-center">
      <div class="col-md-7">

        <div class="card rounded-4 bg-primary-lrvl text-light">
          <div class="card-body p-5">

            <div class="w-100">
              <h1 class="text-center w-100 mb-5">LOGIN</h1>
            </div>

            <div class="row justify-content-center">
              <div class="col-md-8">
                <form method="POST" action="{{ route('password.update') }}">
                  @csrf

                  <input type="hidden" name="token" value="{{ $token }}">


                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email"
                      class="form-control @error('email') is-invalid @enderror rounded-4" placeholder="Email" required
                      value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>

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




@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Reset Password') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('password.update') }}">
              @csrf

              <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm"
                  class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
