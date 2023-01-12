@extends('layouts.main')

@section('container')

<div class="container mt-4">

  {{-- carausel --}}
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-content" style="background-image: url(/img/a3ca017dbb865d037019be245827a4fa.jpg)"></div>
        <div class="carousel-caption d-none d-md-block">
          <div class="col-12  text-center text-md-left mt-5">
            <h2 class="text-white font-weight-bold mb-3">PPDB TP {{ date('Y') }}-{{ date('Y') + 1 }}<br>SMK Wikrama Bogor</h2>
            <p class="text-white mb-5">
              Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>PENDAFTARAN PPDB</b> dibawah ini! <br><strong>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</strong>
            </p>
            <a href="/pendaftaran-siswa" class="btn btn-secondary-lrvl">Pendaftaran PPDB</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-content" style="background-image: url(/img/ce507008c9bb08cd2dc2235649fdb88e.jpg)"></div>
        <div class="carousel-caption d-none d-md-block">
          <div class="col-12  text-center text-md-left mt-5">
            <h2 class="text-white font-weight-bold mb-3">PPDB TP {{ date('Y') }}-{{ date('Y') + 1 }}<br>SMK Wikrama Bogor</h2>
            <p class="text-white mb-5">
              Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik <b>PENDAFTARAN PPDB</b> dibawah ini! <br><strong>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</strong>
            </p>
            <a href="/pendaftaran-siswa" class="btn btn-secondary-lrvl">Pendaftaran PPDB</a>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  
  <hr>

  <div class="rounded shadow p-5 bg-white mb-5">
    <div class="row">
      <div class="col-lg-4 col-md-6 mt-0 text-center">
        <h3 class="font-weight-bold text-capitalize h5 ">MOTTO</h3>
        <p class="regular text-muted">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
      </div>
      <div class="col-lg-4 col-md-6 mt-5 mt-md-0 text-center">
        <h3 class="font-weight-bold text-capitalize h5 ">AFIRMASI</h3>
        <p class="regular text-muted">Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
      </div>
      <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 text-center">
        <h3 class="font-weight-bold text-capitalize h5 ">ATITUDE</h3>
        <p class="regular text-muted">Aku ada lingkunganku <br> bahagia</p>
      </div>
    </div>
  </div>
</div>

@endsection
