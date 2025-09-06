@extends('frontend.layout')

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('frontend/images/bg_3.jpg')}}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                                                class="ion-ios-arrow-forward"></i></a></span> <span>Mobil <i
                                                class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Pilih Mobil Anda</h1>
                </div>
            </div>
        </div>
    </section>

---

<section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                @foreach($cars as $car)
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url( {{Storage::url($car->thumbnail)}} );">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="{{route('car.show', $car->slug)}}">{{$car->title}}</a></h2>
                            <div class="d-flex mb-3">
                                <p class="price ml-auto">Rp{{$car->price}} <span>/hari</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block">
                                {{-- Modifikasi di sini: Mengarahkan ke WhatsApp --}}
                                <a href="https://wa.me/6281234567890?text=Halo,%20saya%20tertarik%20untuk%20menyewa%20mobil%20{{$car->title}}%20dengan%20harga%20Rp{{$car->price}}/hari.%20Mohon%20informasi%20lebih%20lanjut." class="btn btn-primary py-2 mr-1" target="_blank">Pesan Sekarang</a>
                                <a href="{{route('car.show', $car->slug)}}" class="btn btn-secondary py-2 ml-1">Detail</a>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col text-center">
                    {{ $cars->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection