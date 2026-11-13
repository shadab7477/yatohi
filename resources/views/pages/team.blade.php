@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Team')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Team</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Team</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- start team-section -->
    <section class="team-section fix section-padding pt-100">
      <div class="auto-container">
        <div class="row gx-4">
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-1.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-1.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Maliha Mahi</a>
                      </div>
                      <div class="text">Yoga & Mindfulness</div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-2.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-2.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Devon Lane</a>
                      </div>
                      <div class="text">Wellness & Therapy</div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-3.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-3.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Jessika juco</a>
                      </div>
                      <div class="text">Physical Therapist</div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-4.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-4.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Arlene McCoy</a>
                      </div>
                      <div class="text">Yoga & Mindfulness</div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".2s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-4.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-4.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Arlene McCoy</a>
                      </div>
                      <div class="text">Yoga & Mindfulness</div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".4s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-3.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-3.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Jessika juco</a>
                      </div>
                      <div class="text">Physical Therapist</div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".6s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-2.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-2.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Devon Lane</a>
                      </div>
                      <div class="text">Wellness & Therapy </div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
          <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay=".8s">
            <div class="team-block">
                <div class="thumb">
                  <img src="{{ asset('images/resource/team1-1.jpg') }}" alt="">
                  <img src="{{ asset('images/resource/team1-1.jpg') }}" alt="">
                </div>
                <div class="team-content">
                    <div class="h4 title">
                        <a href="{{ route('team.details') }}">Maliha Mahi</a>
                      </div>
                      <div class="text">Yoga & Mindfulness</div>

                    <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                    <span class="share-icon fa-solid fa-share"></span>
              </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end team-section -->

    <!-- Main Footer -->
    
@endsection
