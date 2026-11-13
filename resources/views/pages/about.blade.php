@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | About Us')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">About</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>About</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- About Section Start -->
    <section class="about-section fix section-padding pt-90">
      <div class="shape-1 gsap-fade-left float-horizontal"><img src="{{ asset('images/icons/shape-3.png') }}" alt=""></div>
      <div class="auto-container">
          <div class="row g-4">
            <div class="col-xl-7 col-lg-6">
              <div class="about-block-items-1">
                  <div class="sec-title mb-0">
                    <div class="h2 title char-animation">
                    Rooted in Harmony, <br>Growing in Wellness
                    </div>
                  </div>
                  <div class="about-wrap gsap-stagger-parent">
                    <div class="about-counter gsap-stagger-item">
                      <div class="h3 count-box"><span class="count-text" data-speed="3000" data-stop="25">5</span>+</div>
                      <p>Years of Work <br> Experience</p>
                      <a href="{{ route('about') }}" class="theme-btn btn-style-one">Discover More <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                    </div>
                     <div class="about-right-items">
                        <div class="about-text gsap-stagger-item">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</div>
                        <div class="about-icon-items gsap-stagger-item">
                            <div class="icon-items">
                              <div class="icon"><i aria-hidden="true" class=" flaticon-set-yoga-2"></i></i>
                              </div>
                              <div class="content">
                                <div class="h5 title">Nature & Balance</div>
                                <div class="text">Through mindful movement and breath, we empower you</div>
                              </div>
                            </div>
                             <div class="icon-items">
                              <div class="icon"><i aria-hidden="true" class=" flaticon-set-yoga"></i></i>
                              </div>
                              <div class="content">
                                <div class="h5 title">Modern & Inclusive</div>
                                <div class="text">We create a welcoming space where everyone </div>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6">
              <div class="about-image-1 fix gsap-fade-right">
                <img data-speed=".8" src="{{ asset('images/resource/about1-1.jpg') }}" alt="">
              </div>
            </div>
          </div>
      </div>
    </section>

    <!-- start services-section -->
    <section class="services-section">
      <div class="outer-box section-padding">
        <div class="shape-1 float-horizontal"><img src="{{ asset('images/icons/shape-4.png') }}" alt=""></div>
        <div class="shape-2 float-horizontal"><img src="{{ asset('images/icons/shape-5.png') }}" alt=""></div>
        <div class="shape-3 float-horizontal"><img src="{{ asset('images/icons/shape-6.png') }}" alt=""></div>
        <div class="bg bg-image"><img src="{{ asset('images/resource/service-bg1-1.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="row justify-content-center">
            <div class="sec-title col-md-10 text-center">
              <div class="h2 title char-animation">Mindful Practices <br>for Complete <img src="{{ asset('images/resource/service1-2.jpg') }}" alt=""> Wellbeing</div>
            </div>
          </div>

          <div class="default-tabs tabs-box mb-0">
            <div class="row">
              <div class="col-lg-4">
                <!-- Tab Btns -->
                <div class="tab-btns tab-buttons ">
                  <button data-tab="#prod-morning" class="tab-btn active-btn wow fadeInUp" data-wow-delay="200ms">
                    <i aria-hidden="true" class=" flaticon-set-yoga-pose-1"></i>
                    <span>Daily Morning Flow</span>
                  </button>
                  <button data-tab="#prod-meditation" class="tab-btn wow fadeInUp" data-wow-delay="300ms">
                    <i aria-hidden="true" class=" flaticon-set-exercise"></i>
                    <span>Meditation in Stillness</span>
                  </button>
                  <button data-tab="#prod-walk" class="tab-btn wow fadeInUp" data-wow-delay="400ms">
                    <i aria-hidden="true" class=" flaticon-set-treadmill"></i>
                    <span>Nature Walk Sessions</span>
                  </button>
                  <button data-tab="#prod-art" class="tab-btn wow fadeInUp" data-wow-delay="500ms">
                    <i aria-hidden="true" class=" flaticon-set-calendar"></i>
                    <span>Creative Art Therapy</span>
                  </button>
                  <button data-tab="#prod-breathwork" class="tab-btn wow fadeInUp" data-wow-delay="600ms">
                    <i aria-hidden="true" class=" flaticon-set-mat"></i>
                    <span>Guided Breathwork</span>
                  </button>
                </div>
              </div>

              <div class="col-lg-8">
                <!-- Tabs Container -->
                <div class="tabs-content">

                  <!-- Tab -->
                  <div class="tab active-tab" id="prod-morning">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image gsap-reveal" data-origin="top"><img src="{{ asset('images/resource/service1-1.jpg') }}" alt=""></div>
                          <div class="h3 title">Daily Morning Flow</div>
                          <div class="text">Our retreats weave together time-honored techniques and mindful experiences to restore balance, deepen self-awareness, and reconnect you with the rhythms of nature. Each practice is guided by experienced facilitators and designed to support your journey toward lasting well-being.</div>
                          <a href="{{ route('services.details') }}" class="theme-btn btn-style-one">Discover More <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab -->
                  <div class="tab" id="prod-meditation">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.jpg') }}" alt=""></div>
                          <div class="h3 title">Meditation in Stillness</div>
                          <div class="text">Our retreats weave together time-honored techniques and mindful experiences to restore balance, deepen self-awareness, and reconnect you with the rhythms of nature. Each practice is guided by experienced facilitators and designed to support your journey toward lasting well-being.</div>
                          <a href="{{ route('services.details') }}" class="theme-btn btn-style-one">Discover More <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab -->
                  <div class="tab" id="prod-walk">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.jpg') }}" alt=""></div>
                          <div class="h3 title">Nature Walk Sessions</div>
                          <div class="text">Our retreats weave together time-honored techniques and mindful experiences to restore balance, deepen self-awareness, and reconnect you with the rhythms of nature. Each practice is guided by experienced facilitators and designed to support your journey toward lasting well-being.</div>
                          <a href="{{ route('services.details') }}" class="theme-btn btn-style-one">Discover More <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab -->
                  <div class="tab" id="prod-art">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.jpg') }}" alt=""></div>
                          <div class="h3 title">Creative Art Therapy</div>
                          <div class="text">Our retreats weave together time-honored techniques and mindful experiences to restore balance, deepen self-awareness, and reconnect you with the rhythms of nature. Each practice is guided by experienced facilitators and designed to support your journey toward lasting well-being.</div>
                          <a href="{{ route('services.details') }}" class="theme-btn btn-style-one">Discover More <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab -->
                  <div class="tab" id="prod-breathwork">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.jpg') }}" alt=""></div>
                          <div class="h3 title">Guided Breathwork</div>
                          <div class="text">Our retreats weave together time-honored techniques and mindful experiences to restore balance, deepen self-awareness, and reconnect you with the rhythms of nature. Each practice is guided by experienced facilitators and designed to support your journey toward lasting well-being.</div>
                          <a href="{{ route('services.details') }}" class="theme-btn btn-style-one">Discover More <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end services-section -->

    <!-- start why-choose-us-section -->
    <section class="why-choose-us-section fix section-padding">
      <div class="shape-1 gsap-fade-right"><img src="{{ asset('images/icons/shape-7.png') }}" alt=""></div>
      <div class="shape-2 float-horizontal"><img src="{{ asset('images/icons/shape-8.png') }}" alt=""></div>
      <div class="auto-container">
        <div class="row gx-3">
          <div class="image-column col-xl-6 col-lg-5">
            <div class="inner-column">
              <div class="image gsap-reveal" data-origin="left"><img src="{{ asset('images/resource/wcu1-1.jpg') }}" alt=""></div>
            </div>
          </div>
          <div class="content-column col-xl-6 col-lg-7">
            <div class="inner-column">
              <div class="sec-title mb-30 mt-20">
                <div class="h2 title char-animation">Why Choose a Screen- Free Retreat</div>
              </div>
              <div class="row gsap-stagger-parent">
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-yoga-13"></i>
                    </div>
                    <div class="h4 title">Sleep for Deep Rest</div>
                    <div class="text">everyone with high and useful reward for his Financial statement </div>
                  </div>
                </div>
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-yoga-11"></i>
                    </div>
                    <div class="h4 title">Reconnect with Yourself</div>
                    <div class="text">everyone with high and useful reward for his Financial statement </div>
                  </div>
                </div>
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-mental-health"></i>
                    </div>
                    <div class="h4 title">Inner Mental Clarity</div>
                    <div class="text">everyone with high and useful reward for his Financial statement </div>
                  </div>
                </div>
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-brochure"></i>
                    </div>
                    <div class="h4 title">Rediscover Presence</div>
                    <div class="text">everyone with high and useful reward for his Financial statement </div>
                  </div>
                </div>
              </div>
              <a href="{{ route('about') }}" class="theme-btn btn-style-one">Discover More <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end why-choose-us-section -->

    <!-- start features-section -->
    <section class="features-section">
      <div class="shape-3 gsap-fade-up"><img src="{{ asset('images/icons/shape-18.png') }}" alt=""></div>
      <div class="outer-box fix section-padding pb-0">
        <div class="shape-1 float-horizontal"><img src="{{ asset('images/icons/shape-11.png') }}" alt=""></div>
        <div class="shape-2 bounce-y"><img src="{{ asset('images/icons/shape-19.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-xl-6">
              <div class="inner-column">
                <div class="sec-title">
                  <div class="h6 sub-title bg-white">Health Benefits</div>
                  <div class="h2 title">Find balance in body and mind</div>
                  <div class="h6 text">We take a whole‑body approach to easing discomfort, offering safe and effective therapies guided by our experienced team. Our focus spans relaxation, pain management</div>
                </div>
                <div class="feature-outer gsap-stagger-parent">
                  <div class="feature gsap-stagger-item">
                    <img src="{{ asset('images/icons/soft-star2.png') }}" alt="">
                    <span>Back Pain</span>
                  </div>
                  <div class="feature gsap-stagger-item">
                    <img src="{{ asset('images/icons/soft-star2.png') }}" alt="">
                    <span>Muscle Tension</span>
                  </div>
                  <div class="feature gsap-stagger-item">
                    <img src="{{ asset('images/icons/soft-star2.png') }}" alt="">
                    <span>Sports Injuries</span>
                  </div>
                  <div class="feature gsap-stagger-item">
                    <img src="{{ asset('images/icons/soft-star2.png') }}" alt="">
                    <span>Pain Management</span>
                  </div>
                  <div class="feature gsap-stagger-item">
                    <img src="{{ asset('images/icons/soft-star2.png') }}" alt="">
                    <span>Burnout Recovery</span>
                  </div>
                  <div class="feature gsap-stagger-item">
                    <img src="{{ asset('images/icons/soft-star2.png') }}" alt="">
                    <span>Depression Support</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="image-column col-xl-6">
              <div class="inner-column image-map-container">
                <div class="image gsap-fade-right"><img src="{{ asset('images/resource/feature1-1.png') }}" alt=""></div>
                <div class="feature-content map-gsap-pointer one">
                  <div class="dot cursor-pointer"></div>
                  <div class="text">improves flexibility, reduces stress, and enhances in a single practice.</div>
                </div>
                <div class="feature-content map-gsap-pointer two">
                  <div class="dot cursor-pointer"></div>
                  <div class="text">improves flexibility, reduces stress, and enhances in a single practice.</div>
                </div>
                <div class="feature-content map-gsap-pointer three">
                  <div class="dot cursor-pointer"></div>
                  <div class="text">improves flexibility, reduces stress, and enhances in a single practice.</div>
                </div>
                <div class="feature-content map-gsap-pointer four">
                  <div class="dot cursor-pointer"></div>
                  <div class="text">improves flexibility, reduces stress, and enhances in a single practice.</div>
                </div>
                <div class="feature-content map-gsap-pointer five">
                  <div class="dot cursor-pointer"></div>
                  <div class="text">improves flexibility, reduces stress, and enhances in a single practice.</div>
                </div>
                <div class="feature-content map-gsap-pointer six active">
                  <div class="dot cursor-pointer"></div>
                  <div class="text">improves flexibility, reduces stress, and enhances in a single practice.</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- start marquee-outer -->
        <div class="marquee-outer fix">
          <div class="marquee">
            <div class="marquee-group">
              <div class="text" data-text="Stress Management Guidance">Stress Management Guidance</div>
              <span class="text divider ">
                <img src="{{ asset('images/icons/soft-star3.png') }}" alt="">
              </span>
              <div class="text" data-text="Emotional Wellness Programs">Emotional Wellness Programs</div>
              <span class="text divider ">
                <img src="{{ asset('images/icons/soft-star3.png') }}" alt="">
              </span>
              <div class="text" data-text="Personal Insight Guidance">Personal Insight Guidance</div>
              <span class="text divider ">
                <img src="{{ asset('images/icons/soft-star3.png') }}" alt="">
              </span>
              <div class="text" data-text="Stress Management Guidance">Stress Management Guidance</div>
              <span class="text divider ">
                <img src="{{ asset('images/icons/soft-star3.png') }}" alt="">
              </span>
              <div class="text" data-text="Emotional Wellness Programs">Emotional Wellness Programs</div>
              <span class="text divider ">
                <img src="{{ asset('images/icons/soft-star3.png') }}" alt="">
              </span>
              <div class="text" data-text="Personal Insight Guidance">Personal Insight Guidance</div>
              <span class="text divider ">
                <img src="{{ asset('images/icons/soft-star3.png') }}" alt="">
              </span>
            </div>
          </div>
        </div>
        <!-- end marquee-section -->
      </div>
    </section>
    <!-- end features-section -->
    
    <!-- start team-section-two -->
    <section class="team-section-two fix section-padding">
      <div class="container">
         <div class="sec-title mb-60">
            <div class="row align-items-center">
            <div class="col-lg-5">
              <div class="h6 sub-title">meet our team</div>
            </div>
              <div class="col-lg-7">
                <div class="h2 title char-animation">The People Behind the Sacred Experience</div>
              </div>
            </div>
         </div>
         <div class="row gx-4">
          <div class="col-xl-5 col-lg-4 order-2 order-lg-1 gsap-fade-up" data-delay="0.3">
            <div class="tm-team-one-image-outer">
                <div class="tm-team-one-images-outer">
                    <!-- Image -->
                    <div class="tm-team-one-image active">
                        <img src="{{ asset('images/resource/team2-1.jpg') }}" alt="img">
                    </div>
                    <!-- Image -->
                    <div class="tm-team-one-image two">
                        <img src="{{ asset('images/resource/team2-2.jpg') }}" alt="img">
                    </div>
                    <!-- Image -->
                    <div class="tm-team-one-image three">
                       <img src="{{ asset('images/resource/team2-3.jpg') }}" alt="img">
                    </div>
                    <!-- Image -->
                    <div class="tm-team-one-image four">
                      <img src="{{ asset('images/resource/team2-4.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
          </div>
          <div class="col-xl-7 col-lg-8 order-1 order-lg-2">
            <div class="team-block-wrap">
              <div class="team-block-two active gsap-fade-up" data-delay="0.2">
                <div class="inner-block">
                  <div class="content-block">
                    <div class="name h4"><a href="{{ route('team.details') }}">Desmond Eagle</a></div>
                    <div class="text">Yoga & Mindfulness</div>
                  </div>
                  <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="{{ route('team.details') }}" class="arrow-icon">
                   <img src="{{ asset('images/icons/arrow-icon.png') }}" alt="">
                  </a>
                </div>
              </div>
               <div class="team-block-two gsap-fade-up" data-delay="1.2">
                <div class="inner-block">
                  <div class="content-block">
                    <div class="name h4"><a href="{{ route('team.details') }}">Bodrum Salvador</a></div>
                    <div class="text">Wellness & Therapy</div>
                  </div>
                  <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="{{ route('team.details') }}" class="arrow-icon">
                   <img src="{{ asset('images/icons/arrow-icon.png') }}" alt="">
                  </a>
                </div>
              </div>
               <div class="team-block-two gsap-fade-up" data-delay="2.2">
                <div class="inner-block">
                  <div class="content-block">
                    <div class="name h4"><a href="{{ route('team.details') }}">Abraham Pigeon</a></div>
                    <div class="text">Physical Therapist</div>
                  </div>
                  <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="{{ route('team.details') }}" class="arrow-icon">
                   <img src="{{ asset('images/icons/arrow-icon.png') }}" alt="">
                  </a>
                </div>
              </div>
               <div class="team-block-two gsap-fade-up" data-delay="3.2">
                <div class="inner-block">
                  <div class="content-block">
                    <div class="name h4"><a href="{{ route('team.details') }}">Bartholomew Shoe</a></div>
                    <div class="text">Yoga & Mindfulness</div>
                  </div>
                  <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="{{ route('team.details') }}" class="arrow-icon">
                   <img src="{{ asset('images/icons/arrow-icon.png') }}" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
         </div>
      </div>
    </section>
    <!-- end team-section-two -->

    <!-- Main Footer -->
    
@endsection
