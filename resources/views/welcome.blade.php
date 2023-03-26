@extends('home')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('landing/img/testdomba.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">{{ __('content.welcome') }} Mahir Qurban</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">{{ __('content.judul') }}</h1>
                                    <a href="{{ route('register') }}" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">{{ __('content.tombol') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5" id="aboutus">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">19</h1>
                                <small class="fs-5 fw-bold">{{ __('content.year') }}</small>
                            </div>
                        </div>
                       <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba5.jfif') }}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba9.jfif') }}">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba8.jfif') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">{{ __('content.about') }}</p>
                    <h1 class="mb-4">{{ __('content.founder') }}</h1>
                    <p class="mb-4">{{ __('content.kata') }}</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('landing/img/service.png') }}" alt="">
                            <h5 class="mb-3">{{ __('content.visi') }}</h5>
                            <span>{{ __('content.Isivisi') }}.
                            </span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('landing/img/product.png') }}" alt="">
                            <h5 class="mb-3">{{ __('content.history') }}</h5>
                            <span>{{ __('content.Isihistory') }}</span>
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="">{{ __('content.more') }}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">{{ __('content.us') }}</p>
                    <h1 class="mb-4">{{ __('content.alasan') }} Mahir Qurban</h1>
                    <p class="mb-4">{{ __("content.because") }}</p>
                    <p><i class="bi bi-card-checklist text-primary me-3" style="color: green; font-size: 20px;"></i>{{ __('content.quali') }}</p>
                    <p><i class="bi bi-wallet2 text-primary me-3" style="color: green; font-size: 20px;"></i>{{ __('content.payment') }}</p>
                    <p><i class="bi bi-receipt-cutoff text-primary me-3" style="color: green; font-size: 20px;"></i>{{ __('content.bukti') }}</p>
                    <p><i class="bi bi-award text-primary me-3" style="color: green; font-size: 20px;"></i>{{ __('content.potong') }}</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="{{ route('register') }}">{{ __('content.tombol') }}</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/experience.png') }}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">19</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">{{ __('content.year') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/award.png') }}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">183</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">{{ __('content.award') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/animal.png') }}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">2619</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">{{ __('content.total') }}</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('landing/img/client.png') }}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">51940</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">{{ __('content.clients') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Banner Start -->
    <div class="container-fluid banner my-5 py-5" id="produk" data-parallax="scroll" data-image-src="{{ asset('landing/img/rumput.jfif') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba1.jfif') }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Domba Superior</h2>
                            <!--<p class="text-white mb-4">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{ route('register') }}">{{ __('content.tombol') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="{{ asset('landing/img/domba9.jfif') }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Domba Premium</h2>
                            <!--<p class="text-white mb-4">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>-->
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{ route('register') }}">{{ __('content.tombol') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


     <!-- Product Start -->
     <div class="container-xxl py-5" id="support">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">{{ __('content.cara') }}</p>
                <h1 class="mb-5">{{ __('content.qurban') }} Mahir Qurban</h1>
            </div>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/login.png') }}"alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">{{ __('content.daftar') }}</a>
                            <span class="text-primary me-1">{{ __('content.caralog') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/transaksi.png') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">{{ __('content.beli') }}</a>
                            <span class="text-primary me-1">{{ __('content.pilih') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/checkout.png') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">{{ __('content.method') }}</a>
                            <span class="text-primary me-1">{{ __('content.metpay') }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('landing/img/sukses.png') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">{{ __('content.finish') }}</a>
                            <span class="text-primary me-1">{{ __('content.ibadah') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->

    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">{{ __('content.kami') }}</p>
                <h1 class="mb-5">{{ __('content.galery') }}</h1>
            </div>
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/1.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/2.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/2.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/3.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/4.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/4.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/5.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/5.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/6.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/6.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/7.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/7.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('landing/img/8.jpg') }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('landing/img/8.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">{{ __('content.Quest') }}</p>
                <h1 class="mb-5">{{ __('content.asked') }}</h1>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: #07683B; color: white;">
                        {{ __('content.tanya') }}
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>{{ __('content.tentu') }}</strong>{{ __('content.course') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{ __('content.domisi') }}
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{ __('content.lokasi') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      {{ __('content.item') }}
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>{{ __('content.ketiga') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        {{ __('content.item4') }}
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>{{ __('content.isi4') }}
                      </div>
                    </div>
                  </div>
              </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
