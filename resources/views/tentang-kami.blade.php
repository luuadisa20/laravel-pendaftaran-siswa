@extends('layouts.main')

@section('container')

<div class="container mt-4 mb-5">
  <h2>{{ $title }}</h2>

  <div class="row d-flex no-gutters">
    <div class="col-md-6">
      <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/Gedung.jpg" style="width: 100%; height: 100%;">
    </div>
    <div class="col-md-6">
      <div class="row d-flex no-gutters">
        <div class="col-md-6">
          <div class="card bg-primary-lrvl">
            <div class="card-body">
              <p class="card-title">
                Pembelajaran Tatap Muka Terbatas
              </p>
              <p class="card-text">
                SMK Wikrama selalu menerapkan protokol kesehatan dengan ketat, jadi kamu gak perlu khawatir lagi !
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <iframe src="https://www.youtube.com/embed/_KYS5MT48tM" style="width: 100%; height: 100%; display: block;"></iframe>
        </div>
        <div class="col-md-6">
          <iframe src="https://www.youtube.com/embed/_V8ZWxAcGY4" style="width: 100%; height: 100%; display: block;"></iframe>
        </div>
        <div class="col-md-6">
          <div class="card bg-primary-lrvl">
            <div class="card-body">
              <p class="card-title">
                SMK Unggul dan Berprestasi Nasional
              </p>
              <p class="card-text">
                SMK Wikrama Bogor Satu dari 20 SMK Penerima Penghargaan "SMK Unggul dan Berprestasi" di Indonesia dari KEMENDIKBUD
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
