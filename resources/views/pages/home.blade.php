@extends('layouts.app')

@section('title')
Home Page
@endsection

@section('content')
{{-- Page Content --}}
<div class="page-content page-home">
    <section class="store-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                            <li data-target="#storeCarousel" data-slide-to="1"></li>
                            <li data-target="#storeCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/images/banner1.jpg" alt="Carousel Image"
                                    class="img-fluid d-block w-100 carousel-slider">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner2.jpg" alt="Carousel Image"
                                    class="img-fluid d-block w-100 carousel-slider">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/banner3.jpg" alt="Carousel Image"
                                    class="img-fluid d-block w-100 carousel-slider">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="store-trend-categories mt-4">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-6 col-md-3 col-lg-2 text-center" data-aos="fade-up" data-aos-delay="100">
                    <a href="#" class="component-service d-block">
                        <div class="service-image">
                            <i class="fa-sharp fa-regular fa-thumbs-up fa-5x icon-home"></i>
                        </div>
                        <div class="service-description">
                            <p class="service-text pb-2">KUALITAS TERJAMIN</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <a href="#" class="component-service d-block">
                        <div class="service-image">
                            <i class="fa-sharp fa-regular fa-clock fa-5x icon-home"></i>
                        </div>
                        <div class="service-description">
                            <p class="service-text pb-2">PENGERJAAN CEPAT</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2 text-center" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="component-service d-block">
                        <div class="service-image">
                            <i class="fa-solid fa-money-bill fa-5x icon-home"></i>
                        </div>
                        <div class="service-description">
                            <p class="service-text pb-2">HARGA BERSAING</p>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-3 col-lg-2 text-center" data-aos="fade-up" data-aos-delay="400">
                    <a href="#" class="component-service d-block noDecoration">
                        <div class="service-image">
                            <i class="fa-solid fa-computer fa-5x icon-home"></i>
                        </div>
                        <div class="service-description">
                            <p class="service-text pb-2">DESAIN BERKUALITAS</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 pt-4">
                    <div class="justify-content-center align-items-center text-center">
                        <div class="home-desc-title" data-aos="fade-right">
                            <h1>Make It More Perfect</h1>
                        </div>
                        <div class="home-desc" data-aos="fade-left">
                            <h4>POSTER A3 | ID CARD | SPANDUK | PANAKO | <br /> ROUNTAG | XBANNER | BALIHO | LETTER
                                AKRILIK | <br />
                                WALL
                                BRANDING
                                |
                                BRANDING MOBIL | DLL</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection