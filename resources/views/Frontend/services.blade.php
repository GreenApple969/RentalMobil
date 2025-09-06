@extends('frontend.layout')

@section ('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url( {{asset('frontend/images/bg_3.jpg')}} );"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Layanan <i
                                class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Layanan Kami</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Layanan</span>
          <h2 class="mb-3">Layanan Terbaru Kami</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Upacara Pernikahan</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Transfer Kota</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Transfer Bandara</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span>
            </div>
            <div class="text w-100">
              <h3 class="heading mb-2">Tur Kota Penuh</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-intro" style="background-image: url( {{asset('frontedn/images/bg_3.jpg')}} );">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 heading-section heading-section-white ftco-animate">
          <h2 class="mb-3">Apakah Anda Ingin Menghasilkan Uang Bersama Kami? Jadi Jangan Terlambat.</h2>
          <a href="#" class="btn btn-primary btn-lg">Jadi Pengemudi</a>
        </div>
      </div>
    </div>
  </section>
@endsection