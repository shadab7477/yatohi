@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Services')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <<div class="h1 title">Services</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Services</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- start services-section-three -->
    <section class="services-section-three fix section-padding pt-90">
      <div class="container">
        <div class="row gx-4 gsap-stagger-parent">
          <div class="col-xl-4 col-md-6 gsap-stagger-item">
            <div class="service-block-three">
              <div class="inner-block">
                <div class="content-block">
                  <div class="border-line">
                    <svg width="78" height="5" viewBox="0 0 78 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#ED2C2B"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="{{ route('services.details') }}">Hatha Yoga</a></div>
                  <div class="text">
                    Build strength, balance, and <br class="d-block"> flexibility at a steady pace.
                  </div>
                </div>
                <div class="image-block">
                  <img src="{{ asset('images/resource/service3-1.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/service3-1.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
           <div class="col-xl-4 col-md-6 gsap-stagger-item">
            <div class="service-block-three">
              <div class="inner-block">
                <div class="content-block two">
                  <div class="border-line">
                    <svg width="78" height="5" viewBox="0 0 78 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#ED2C2B"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="{{ route('services.details') }}">Vinyasa Flow</a></div>
                  <div class="text">
                    Dynamic movements synchronized <br class="d-block">with breath for energy and flow.
                  </div>
                </div>
                <div class="image-block">
                  <img src="{{ asset('images/resource/service3-2.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/service3-2.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
           <div class="col-xl-4 col-md-6 gsap-stagger-item">
            <div class="service-block-three">
              <div class="inner-block">
                <div class="content-block three">
                  <div class="border-line">
                    <svg width="78" height="5" viewBox="0 0 78 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#ED2C2B"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="{{ route('services.details') }}">Restorative Yoga</a></div>
                  <div class="text">
                    Deep relaxation to reduce <br class="d-block">stress and heal the body.
                  </div>
                </div>
                <div class="image-block">
                  <img src="{{ asset('images/resource/service3-3.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/service3-3.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
           <div class="col-xl-4 col-md-6 gsap-stagger-item">
            <div class="service-block-three">
              <div class="inner-block">
                <div class="content-block three">
                  <div class="border-line">
                    <svg width="78" height="5" viewBox="0 0 78 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#ED2C2B"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="{{ route('services.details') }}">Restorative Yoga</a></div>
                  <div class="text">
                    Deep relaxation to reduce <br class="d-block">stress and heal the body.
                  </div>
                </div>
                <div class="image-block">
                  <img src="{{ asset('images/resource/service3-3.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/service3-3.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
           <div class="col-xl-4 col-md-6 gsap-stagger-item">
            <div class="service-block-three">
              <div class="inner-block">
                <div class="content-block two">
                  <div class="border-line">
                    <svg width="78" height="5" viewBox="0 0 78 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#ED2C2B"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="{{ route('services.details') }}">Vinyasa Flow</a></div>
                  <div class="text">
                    Dynamic movements synchronized <br class="d-block">with breath for energy and flow.
                  </div>
                </div>
                <div class="image-block">
                  <img src="{{ asset('images/resource/service3-2.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/service3-2.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6 gsap-stagger-item">
            <div class="service-block-three">
              <div class="inner-block">
                <div class="content-block">
                  <div class="border-line">
                    <svg width="78" height="5" viewBox="0 0 78 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#ED2C2B"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="{{ route('services.details') }}">Hatha Yoga</a></div>
                  <div class="text">
                    Build strength, balance, and <br class="d-block"> flexibility at a steady pace.
                  </div>
                </div>
                <div class="image-block">
                  <img src="{{ asset('images/resource/service3-1.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/service3-1.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end services-section-three -->

    <!-- Main Footer -->
    
@endsection
