@extends('Frontend.layout')

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('{{asset ('Frontend/images/bg_1.jpg') }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
        <div class="col-lg-8 ftco-animate">x
          <div class="text w-100 text-center mb-md-5 pb-md-5">
            <h1 class="mb-4">Cara Cepat &amp; Mudah Menyewa Mobil</h1>
            <p style="font-size: 18px;">Jelajahi setiap sudut kota dan ciptakan kenangan tak terlupakan. Rental Mobil hadir
             untuk mewujudkan perjalanan impian Anda dengan armada kendaraan yang andal dan nyaman, siap menemani setiap petualangan.</p>
            <!--
              <a href="https://vimeo.com/45830194"
              class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="ion-ios-play"></span>
              </div>
              <div class="heading-title ml-5">
                <span>Langkah mudah untuk menyewa mobil</span>
              </div>
            </a>
            -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12 featured-top">
          <div class="row justify-content-center no-gutters">
            <div class="col-md-10 d-flex align-items-center">
              <div class="services-wrap rounded-right w-100">
                <h3 class="heading-section text-center mb-4">Cara Lebih Baik untuk Menyewa Mobil Impian Anda</h3>
                <div class="row d-flex mb-4">
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center"><span
                          class="flaticon-route"></span></div>
                      <div class="text w-100">
                        <h3 class="heading mb-2">Pilih Lokasi Penjemputan Anda</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center"><span
                          class="flaticon-handshake"></span></div>
                      <div class="text w-100">
                        <h3 class="heading mb-2">Pilih Penawaran Terbaik</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 d-flex justify-content-center align-self-stretch ftco-animate">
                    <div class="services w-100 text-center">
                      <div class="icon d-flex align-items-center justify-content-center"><span
                          class="flaticon-rent"></span></div>
                      <div class="text w-100 text-center mx-auto m-auto">
                        <h3 class="heading mb-2 text-center">Pesan Mobil Sewa Anda</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <p class="text-center mt-5"><a target="_blank" href="https://wa.me/qr/6YOX66N2MVB3N1"
                    class="btn text-center mx-auto m-auto ml-auto btn-primary py-3 px-4">Pesan Mobil Impian Anda</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  <section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          <span class="subheading">Apa yang kami tawarkan</span>
          <h2 class="mb-2">Kendaraan Unggulan</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="carousel-car owl-carousel">
            @foreach($cars as $car)
            <div class="item">
              <div class="car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url( {{Storage::url($car->thumbnail) }});">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">{{ $car->title }}</a></h2>
                  <div class="d-flex mb-3">
                    <p class="price ml-auto">Rp{{ $car->price }} <span>/hari</span></p>
                  </div>
                  <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Pesan Sekarang</a> <a
                      href="{{ route('car.show', $car->slug) }}" class="btn btn-secondary py-2 ml-1">Detail</a></p>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-about">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
          style="background-image: url( {{asset('frontend/images/about.jpg') }});">
        </div>
        <div class="col-md-6 wrap-about ftco-animate">
          <div class="heading-section heading-section-white pl-md-5">
            <span class="subheading">Tentang Kami</span>
            <h2 class="mb-4">Selamat Datang di Carbook</h2>

            <p>Butuh mobil? Rental Mobil menyediakan beragam pilihan kendaraan yang siap mengantar Anda ke mana saja, kapan saja. Proses pemesanan mudah, perjalanan Anda nyaman dan aman.</p>
            <p>Temukan kebebasan berkendara dengan armada mobil terbaik kami. Rental Mobil menyediakan layanan tepercaya dan nyaman untuk setiap perjalanan Anda, memastikan pengalaman yang tak terlupakan.</p>
            <p><a href="{{route('car')}}" class="btn btn-primary py-3 px-4">Cari Kendaraan</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Layanan
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
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-wedding-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Upacara Pernikahan</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Transfer Kota</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Transfer Bandara</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span
                class="flaticon-transportation"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Tur Kota Penuh</h3>
              <p>Sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakannya regelialia yang diperlukan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  -->

  <!-- Driver
  <section class="ftco-section ftco-intro" style="background-image: url({{asset('frontend/images/bg_3.jpg') }} );">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6 heading-section heading-section-white ftco-animate">
          <h2 class="mb-3">Apakah Anda Ingin Menghasilkan Uang Bersama Kami? Jadi Jangan Terlambat.</h2>
          <a target="_blank" href="https://wa.me/qr/6YOX66N2MVB3N1" class="btn btn-primary btn-lg">Jadi Pengemudi</a>
        </div>
      </div>
    </div>
  </section>
  -->


  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <span class="subheading">Testimoni</span>
          <h2 class="mb-3">Klien Bahagia</h2>
        </div>
      </div>
      <div class="row ftco-animate">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel ftco-owl">
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url( {{asset('frontend/images/person_1.jpg')}} )">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Jauh di sana, di balik pegunungan kata, jauh dari negara Vokalia dan Konsonantia, hiduplah teks-teks buta.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">Manajer Pemasaran</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url( {{asset('frontend/images/person_2.jpg')}})">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Jauh di sana, di balik pegunungan kata, jauh dari negara Vokalia dan Konsonantia, hiduplah teks-teks buta.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">Desainer Antarmuka</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap rounded text-center py-4 pb-5">
                <div class="user-img mb-2" style="background-image: url( {{asset('frontend/images/person_3.jpg')}})">
                </div>
                <div class="text pt-4">
                  <p class="mb-4">Jauh di sana, di balik pegunungan kata, jauh dari negara Vokalia dan Konsonantia, hiduplah teks-teks buta.</p>
                  <p class="name">Roger Scott</p>
                  <span class="position">Desainer UI</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
