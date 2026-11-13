@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Projects Grid')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <<div class="h1 title">Projects Grid</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Projects Grid</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- start services-section-four -->
    <section class="services-section-four fix section-padding">
      <div class="auto-container">
        <div class="row g-2 gsap-stagger-parent">
          <div class="service-block-four col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="image"><img src="{{ asset('images/resource/service4-2.jpg') }}" alt=""></div>
              <div class="content-box">
                <div class="h3 title">Evidence-Based Mental Health Treatment</div>
                <a href="{{ route('services.details') }}" class="link-btn">Discover <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
              </div>
            </div>
          </div>
          <div class="service-block-four col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="anim-shape float-horizontal"><img src="{{ asset('images/icons/shape-29.png') }}" alt=""></div>
                <div class="h3 title char-animation">Transform Bodyand <br>Mind Together</div>
                <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Get Appointment <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
              </div>
            </div>
          </div>
          <div class="service-block-four col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="image"><img src="{{ asset('images/resource/service4-1.jpg') }}" alt=""></div>
              <div class="content-box-two">
                <div class="h3 title">Your Support Starts <br>Here</div>
                <div class="h4 text">+257 567 6852</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end services-section-four -->

    <!-- Main Footer -->
    
@endsection
