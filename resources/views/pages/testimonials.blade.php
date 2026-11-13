@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Testimonials')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <h1 class="title">{{ __('Testimonials') }}</h1>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>{{ __('Testimonials') }}</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- start testimonial-section -->
    <section class="testimonial-section section-padding fix">
      <div class="shape-1 float-horizontal"><img src="{{ asset('images/icons/shape-11.png') }}" alt=""></div>
      <div class="auto-container">
        <div class="row ">
          <div class="image-column col-xl-6 col-lg-5">
            <div class="inner-column">
              <div class="image gsap-reveal" data-origin="left"><img src="{{ asset('images/resource/testi1-1.jpg') }}" alt=""></div>
            </div>
          </div>
          <div class="content-column col-xl-6 col-lg-7">
            <div class="inner-column">
              <div class="sec-title mb-15">
                <div class="h2 title char-animation">Real People. Real Results</div>
              </div>
              <div class="testimonial-block">
                <div class="inner-block gsap-stagger-parent">
                  <div class="qute-icon"><img src="{{ asset('images/icons/shape-10.png') }}" alt=""></div>
                  <div class="swiper testi-slider  pb-0">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="text gsap-stagger-item">From branding to web development, their team delivered a seamless experience. The attention to detail, responsiveness, and innovative approach their team!</div>
                        <div class="info-box gsap-stagger-item">
                          <div class="h4 name">Dianne Russell</div>
                          <div class="h6 designation">Brand Manager</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="text">From branding to web development, their team delivered a seamless experience. The attention to detail, responsiveness, and innovative approach their team!</div>
                        <div class="info-box  gsap-stagger-item">
                          <div class="h4 name">Emily Carter</div>
                          <div class="h6 designation">Project Manager</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="rating-info">
                    <div class="h2 count-box"><span class="count-text" data-speed="3000" data-stop="4.9">0</span></div>
                    <div class="rating-box">
                      <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      </div>
                      <div class="h6 rating-text">2,488 Rating</div>
                    </div>
                  </div>
                  <div class="aroow-box">
                    <div class="testi-slider-prev"><img src="{{ asset('images/icons/arrow-left.png') }}" alt=""></div>
                    <div class="testi-slider-next"><img src="{{ asset('images/icons/arrow-right.png') }}" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end testimonial-section -->

    <!-- Main Footer -->
    
@endsection
