@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Pricing')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Pricing</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Pricing</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- start pricing-section -->
    <section class="pricing-section fix section-padding">
      <div class="auto-container">
        <div class="row gx-4 gsap-stagger-parent">
          <div class="pricing-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="shape"><img src="{{ asset('images/icons/shape-9.png') }}" alt=""></div>
              <div class="upper-box">
                <div class="h5 cat">Basic</div>
                <div class="h5 title">Step away weekend & return renewed</div>
                <div class="h4 price"><span>$60</span>/Month</div>
              </div>
              <div class="pricing-feature">
                <div class="h4 title">Includes</div>
                <ul class="feature">
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Time That Works for You</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Personal Movement Coach</span>
                  </li>
                  <li>
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Welcome Pack Included</span>
                  </li>
                  <li>
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Certified Personal Trainer</span>
                  </li>
                  <li>
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Schedule That Fits You</span>
                  </li>
                </ul>
                <a href="{{ route('pricing') }}" class="pricing-btn">View All Details</a>
              </div>
            </div>
          </div>
          <div class="pricing-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block active">
              <div class="shape"><img src="{{ asset('images/icons/shape-9.png') }}" alt=""></div>
              <div class="upper-box">
                <div class="h5 cat">Standard</div>
                <div class="h5 title">A week of stillness, care, & restoration</div>
                <div class="h4 price"><span>$96</span>/Month</div>
              </div>
              <div class="pricing-feature">
                <div class="h4 title">Includes</div>
                <ul class="feature">
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Time That Works for You</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Personal Movement Coach</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Welcome Pack Included</span>
                  </li>
                  <li>
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Certified Personal Trainer</span>
                  </li>
                  <li>
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Schedule That Fits You</span>
                  </li>
                </ul>
                <a href="{{ route('pricing') }}" class="pricing-btn">View All Details</a>
              </div>
            </div>
          </div>
          <div class="pricing-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="shape"><img src="{{ asset('images/icons/shape-9.png') }}" alt=""></div>
              <div class="upper-box">
                <div class="h5 cat">advanced</div>
                <div class="h5 title">shared lodging & full access for two</div>
                <div class="h4 price"><span>$124</span>/Month</div>
              </div>
              <div class="pricing-feature">
                <div class="h4 title">Includes</div>
                <ul class="feature">
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Time That Works for You</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Personal Movement Coach</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Welcome Pack Included</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Certified Personal Trainer</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>Schedule That Fits You</span>
                  </li>
                </ul>
                <a href="{{ route('pricing') }}" class="pricing-btn">View All Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end pricing-section -->

    <!-- Main Footer -->
    
@endsection
