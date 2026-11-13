@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'two'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Home Page 02')

@section('content')
<!--End Main Header -->

    <!-- start banner-section-two -->
    <section class="banner-section-two">
      <div class="outer-box">
        <div class="row gx-2">
          <div class="content-column col-lg-7">
            <div class="inner-column">
              <div class="shape-1 bounce-y gsap-fade-left"><img src="{{ asset('images/icons/shape-16.png') }}" alt=""></div>
              <div class="image-box">
                <div class="image gsap-fade-right"><img src="{{ asset('images/banner/banner2-1.jpg') }}" alt=""></div>
              </div>
              <div class="content-box">
                <div class="inner-box">
                  <div class="h1 title char-animation">Yoga for a <br>Refreshed Mind</div>
                  <div class="text gsap-fade-up" data-delay="0.3">We believe yoga is more than exercise—it’s a lifestyle. help you reconnect with your  breath in a supportive and peaceful environment.</div>
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">Get Appointment <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="image-column col-lg-5">
            <div class="inner-column">
              <div class="image gsap-interactive-img"><img src="{{ asset('images/banner/banner2-2.jpg') }}" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end banner-section-two -->


    <!-- start services-section-three -->
    <section class="services-section-three fix section-padding">
      <div class="shape-1 float-horizontal"><img src="{{ asset('images/icons/shape-11.png') }}" alt=""></div>
      <div class="container">
        <div class="sec-title text-center">
          <div class="h6 sub-title">Our Program Services</div>
          <div class="h2 title char-animation">Our Programs for Complete Mind– <br>Body Wellness</div>
        </div>
        <div class="row gx-4 gsap-stagger-parent">
          <div class="col-xl-4 col-md-6 gsap-stagger-item">
            <div class="service-block-three">
              <div class="inner-block">
                <div class="content-block">
                  <div class="border-line">
                    <svg width="78" height="5" viewBox="0 0 78 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#417572"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="javascript:void(0)">Hatha Yoga</a></div>
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
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#417572"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="javascript:void(0)">Vinyasa Flow</a></div>
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
                    <path d="M-1.81068e-05 3.60739C25.5413 -1.23117 51.7767 -1.20201 77.307 3.69332L77.1285 4.61072C51.7154 -0.262134 25.6005 -0.291162 0.176421 4.52518L-1.81068e-05 3.60739Z" fill="#417572"/>
                    </svg>

                  </div>
                  <div class="h4 title"><a href="javascript:void(0)">Restorative Yoga</a></div>
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
        </div>
      </div>
    </section>
    <!-- end services-section-three -->

    <!-- start about-section -->
    <section class="about-section-two">
      <div class="shape-3 float-horizontal"><img src="{{ asset('images/icons/shape-6.png') }}" alt=""></div>
      <div class="outer-box section-padding fix">
        <div class="shape-1 float-horizontal"><img src="{{ asset('images/icons/shape-11.png') }}" alt=""></div>
        <div class="shape-2 float-horizontal"><img src="{{ asset('images/icons/shape-17.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="row gx-3">
            <div class="image-column col-xl-6 col-lg-8">
              <div class="inner-column">
                <div class="image gsap-reveal" data-origin="left"><img src="{{ asset('images/resource/about2-1.jpg') }}" alt=""></div>
                <div class="about-counter">
                  <div class="count-box"><span class="count-text" data-speed="3000" data-stop="25s">5</span>+</div>
                  <p>Years of <br>Experience</p>
                </div>
              </div>
            </div>
            <div class="content-column col-xl-6 col-lg-10">
              <div class="inner-column gsap-stagger-parent">
                <div class="sec-title ">
                  <div class="h6 sub-title bg-white">About Yogava</div>
                  <div class="h2 title char-animation">Nurturing Balance, <br>Inspiring Renewal</div>
                  <div class="text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less </div>
                </div>
                <div class="info-box">
                  <div class="info gsap-stagger-item">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-yoga-2"></i>
                    </div>
                    <div class="content">
                      <div class="h5 title">Nature & Balance </div>
                      <div class="text">The readable content of a page when looking </div>
                    </div>
                  </div>
                  <div class="info gsap-stagger-item">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-yoga"></i>
                    </div>
                    <div class="content">
                      <div class="h5 title">Modern & Inclusive </div>
                      <div class="text">The readable content of a page when looking</div>
                    </div>
                  </div>
                </div>
                <div class="bottom-box gsap-stagger-item">
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">Discover more <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                  <div class="call-info">
                    <div class="icon"><i aria-hidden="true" class=" flaticon-common-phone-call"></i></div>
                    <div class="info">
                      <div class="text">Contact Us:</div>
                      <div class="h5 title">+92 3800 8060 </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end about-section -->

    <!-- start why-choose-us-section-two -->
    <section class="why-choose-us-section-two fix section-padding">
      <div class="auto-container">
        <div class="row justify-content-center">
          <div class="sec-title col-xl-7 col-lg-9 text-center mb-40 wow fadeInUp">
            <div class="h6 sub-title">Why Choose Us</div>
            <div class="h2 title char-animation">Why Choose a Screen-Free Retreat</div>
          </div>
        </div>
        <div class="row ">
          <div class="left-column col-xl-4 col-md-6">
            <div class="inner-column">
              <div class="wcu-block-two gsap-fade-right" data-delay="0.3">
                <div class="inner-block">
                  <div class="icon"><i aria-hidden="true" class=" flaticon-set-yoga-2"></i></div>
                  <div class="content">
                    <div class="h4 title">Experienced & Skilled </div>
                    <div class="text">Years of hands-on experience delivering exceptional & Smart</div>
                  </div>
                </div>
              </div>
              <div class="wcu-block-two gsap-fade-right" data-delay="0.6">
                <div class="inner-block">
                  <div class="icon two"><i aria-hidden="true" class=" flaticon-set-tool"></i></div>
                  <div class="content">
                    <div class="h4 title">Affordable Best Packages</div>
                    <div class="text">Premium landscaping services offered at competitive, budget</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="image-column col-xl-4">
            <div class="inner-column gsap-stagger-parent">
              <div class="bg-shape gsap-stagger-item"><img src="{{ asset('images/resource/wcu2-2.png') }}" alt=""></div>
              <div class="image gsap-stagger-item"><img src="{{ asset('images/resource/wcu2-1.png') }}" alt=""></div>
            </div>
          </div>
          <div class="right-column col-xl-4 col-md-6">
            <div class="inner-column">
              <div class="wcu-block-two gsap-fade-left" data-delay="0.3">
                <div class="inner-block">
                  <div class="icon three"><i aria-hidden="true" class=" flaticon-set-treadmill"></i></div>
                  <div class="content">
                    <div class="h4 title">High-Quality Materials</div>
                    <div class="text">Durable, sustainable materials chosen for long-lasting outdoor</div>
                  </div>
                </div>
              </div>
              <div class="wcu-block-two gsap-fade-left" data-delay="0.6">
                <div class="inner-block">
                  <div class="icon four"><i aria-hidden="true" class=" flaticon-set-meditation-3"></i></div>
                  <div class="content">
                    <div class="h4 title">Reliable & On-Time</div>
                    <div class="text">Timely project completion with professionalism and pay attention </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end why-choose-us-section-two -->

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
                  <div class="text">We take a whole‑body approach to easing discomfort, offering safe and effective therapies guided by our experienced team. Our focus spans relaxation, pain management</div>
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

    <!-- start services-section-four -->
    <section class="services-section-four fix section-padding">
      <div class="shape-1 gsap-fade-right"><img src="{{ asset('images/icons/shape-7.png') }}" alt=""></div>
      <div class="auto-container">
        <div class="row g-2 gsap-stagger-parent">
          <div class="service-block-four col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="image"><img src="{{ asset('images/resource/service4-2.jpg') }}" alt=""></div>
              <div class="content-box">
                <div class="h3 title">Evidence-Based Mental Health Treatment</div>
                <a href="javascript:void(0)" class="link-btn">Discover <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
              </div>
            </div>
          </div>
          <div class="service-block-four col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="anim-shape float-horizontal"><img src="{{ asset('images/icons/shape-29.png') }}" alt=""></div>
                <div class="h3 title char-animation">Transform Bodyand <br>Mind Together</div>
                <a href="javascript:void(0)" class="theme-btn btn-style-one">Get Appointment <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
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
        <div class="feature-outer">
          <div class="row gsap-stagger-parent">
            <div class="feature col-xl-4 col-md-6 gsap-stagger-item">
              <div class="inner">
                <div class="shape"><img src="{{ asset('images/icons/shape-20.png') }}" alt=""></div>
                <div class="h5 title">Personalized Care for Mind <br>& Balance</div>
              </div>
            </div>
            <div class="feature col-xl-4 col-md-6 gsap-stagger-item">
              <div class="inner">
                <div class="shape"><img src="{{ asset('images/icons/shape-21.png') }}" alt=""></div>
                <div class="h5 title">Whole-Body Care for Mind <br>& Balance</div>
              </div>
            </div>
            <div class="feature col-xl-4 col-md-6 gsap-stagger-item">
              <div class="inner">
                <div class="shape"><img src="{{ asset('images/icons/shape-22.png') }}" alt=""></div>
                <div class="h5 title">A Clear Pathway to <br>Mental Wellbeing</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end services-section-four -->


    <!-- start pricing-section-two -->
    <section class="pricing-section-two">
      <div class="shape-3 float-horizontal"><img src="{{ asset('images/icons/shape-6.png') }}" alt=""></div>
      <div class="outer-box fix section-padding">
        <div class="shape-1 gsap-fade-right"><img src="{{ asset('images/icons/shape-7.png') }}" alt=""></div>
        <div class="shape-2 float-horizontal"><img src="{{ asset('images/icons/shape-23.png') }}" alt=""></div>
        <div class="outer-container">
          <div class="sec-title text-center mb-10">
            <div class="h6 sub-title bg-white">pricing</div>
            <div class="h2 title char-animation">Special Offer! choose your pack</div>
          </div>
          <div class="row gsap-stagger-parent">
            <div class="col-xl-4 col-md-6 gsap-stagger-item">
              <div class="pricing-block-two">
                <div class="inner-block">
                  <div class="nexella-hover-bx hover-bx"></div>
                  <div class="nexella-hover-bx hover-bx2"></div>
                  <div class="nexella-hover-bx hover-bx3"></div>
                  <div class="nexella-hover-bx hover-bx4"></div>
                  <div class="content-block">
                    <div class="title h4">Basics</div>
                    <div class="text">
                      We combine clinical expertise with a patient-first <br> approach to deliver consistent.
                    </div>
                    <div class="price h2">
                      $98 <span>/Month</span>
                    </div>
                  </div>
                  <div class="image-block">
                    <img src="{{ asset('images/resource/pricing2-1.jpg') }}" alt="">
                    <img src="{{ asset('images/resource/pricing2-1.jpg') }}" alt="">
                  </div>
                   <a href="javascript:void(0)" class="link-btns">
                     View All Details
                    </a>
                </div>
              </div>
            </div>
             <div class="col-xl-4 col-md-6 gsap-stagger-item">
              <div class="pricing-block-two">
                <div class="inner-block">
                  <div class="nexella-hover-bx hover-bx"></div>
                  <div class="nexella-hover-bx hover-bx2"></div>
                  <div class="nexella-hover-bx hover-bx3"></div>
                  <div class="nexella-hover-bx hover-bx4"></div>
                  <div class="content-block">
                    <div class="title h4">Standard</div>
                    <div class="text">
                      We combine clinical expertise with a patient-first <br> approach to deliver consistent.
                    </div>
                    <div class="price h2">
                      $146 <span>/Month</span>
                    </div>
                  </div>
                  <div class="image-block">
                    <img src="{{ asset('images/resource/pricing2-2.jpg') }}" alt="">
                    <img src="{{ asset('images/resource/pricing2-2.jpg') }}" alt="">
                  </div>
                   <a href="javascript:void(0)" class="link-btns">
                     View All Details
                    </a>
                </div>
              </div>
            </div>
             <div class="col-xl-4 col-md-6 gsap-stagger-item">
              <div class="pricing-block-two">
                <div class="inner-block">
                  <div class="nexella-hover-bx hover-bx"></div>
                  <div class="nexella-hover-bx hover-bx2"></div>
                  <div class="nexella-hover-bx hover-bx3"></div>
                  <div class="nexella-hover-bx hover-bx4"></div>
                  <div class="content-block">
                    <div class="title h4">Advanced</div>
                    <div class="text">
                      We combine clinical expertise with a patient-first <br> approach to deliver consistent.
                    </div>
                    <div class="price h2">
                      $190 <span>/Month</span>
                    </div>
                  </div>
                  <div class="image-block">
                    <img src="{{ asset('images/resource/pricing2-3.jpg') }}" alt="">
                    <img src="{{ asset('images/resource/pricing2-3.jpg') }}" alt="">
                  </div>
                   <a href="javascript:void(0)" class="link-btns">
                     View All Details
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end pricing-section-two -->
    
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
                    <div class="name h4"><a href="javascript:void(0)">Desmond Eagle</a></div>
                    <div class="text">Yoga & Mindfulness</div>
                  </div>
                  <div class="social-icon">
                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="javascript:void(0)" class="arrow-icon">
                   <img src="{{ asset('images/icons/arrow-icon.png') }}" alt="">
                  </a>
                </div>
              </div>
               <div class="team-block-two gsap-fade-up" data-delay="1.2">
                <div class="inner-block">
                  <div class="content-block">
                    <div class="name h4"><a href="javascript:void(0)">Bodrum Salvador</a></div>
                    <div class="text">Wellness & Therapy</div>
                  </div>
                  <div class="social-icon">
                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="javascript:void(0)" class="arrow-icon">
                   <img src="{{ asset('images/icons/arrow-icon.png') }}" alt="">
                  </a>
                </div>
              </div>
               <div class="team-block-two gsap-fade-up" data-delay="2.2">
                <div class="inner-block">
                  <div class="content-block">
                    <div class="name h4"><a href="javascript:void(0)">Abraham Pigeon</a></div>
                    <div class="text">Physical Therapist</div>
                  </div>
                  <div class="social-icon">
                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="javascript:void(0)" class="arrow-icon">
                   <img src="{{ asset('images/icons/arrow-icon.png') }}" alt="">
                  </a>
                </div>
              </div>
               <div class="team-block-two gsap-fade-up" data-delay="3.2">
                <div class="inner-block">
                  <div class="content-block">
                    <div class="name h4"><a href="javascript:void(0)">Bartholomew Shoe</a></div>
                    <div class="text">Yoga & Mindfulness</div>
                  </div>
                  <div class="social-icon">
                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                    <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a>
                  </div>
                  <a href="javascript:void(0)" class="arrow-icon">
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

    <!-- start testimonial section -->
    <section class="testimonial-seciton-two">
      <div class="outer-box">
        <div class="bg bg-image"><img src="{{ asset('images/resource/testimonial2-1.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="row gx-3 gsap-stagger-parent">
            <div class="col-xl-3 col-md-6 gsap-stagger-item">
              <div class="sec-title style-two light">
                <h6 class="sub-title">Testimonials</h6>
                <h2 class="title char-animation">Real People. Real Results</h2>
                <a href="javascript:void(0)" class="theme-btn btn-style-one">Get Appointment <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 gsap-stagger-item">
              <div class="rating-box">
                <div class="inner-box">
                  <div class="count-box">
                    <div class="title"><span class="count-text" data-speed="2000" data-stop="4.8">0</span></div>
                  </div>
                  <div class="rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="text">From 3k Members, <br class="d-block">Reviewed by Google</div>
                  <div class="author-image"><img src="{{ asset('images/resource/testi2-1.png') }}" alt=""></div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-8 gsap-stagger-item">
              <div class="testimonial-column">
                <div class="inner-column">
                  
                  <div class="testimonial-block-two ">
                    <div class="inner-block">
                      <div class="swiper-container testi-slider-two pb-0 overflow-hidden">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <div class="icon"><img src="{{ asset('images/icons/shape-24.png') }}" alt=""></div>
                            <div class="review">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="info-text">They improved our lawn beautifully. The turfing looks fresh, even, and very professionally done. The team worked with care and kept us updated throughout the process. We’re really happy with the final result.</div>
                            <div class="author-info">
                              <div class="thumb"><img src="{{ asset('images/resource/testi2-1.jpg') }}" alt=""></div>
                              <div class="info">
                                <div class="h5 title">Emily Carter</div>
                                <div class="dsgn">Senior Project Manager</div>
                              </div>
                            </div>
                          </div>

                          <div class="swiper-slide">
                            <div class="icon"><img src="{{ asset('images/icons/shape-24.png') }}" alt=""></div>
                            <div class="review">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="info-text">They improved our lawn beautifully. The turfing looks fresh, even, and very professionally done. The team worked with care and kept us updated throughout the process. We’re really happy with the final result.</div>
                            <div class="author-info">
                              <div class="thumb"><img src="{{ asset('images/resource/testi2-1.jpg') }}" alt=""></div>
                              <div class="info">
                                <div class="h5 title">Emily Carter</div>
                                <div class="dsgn">Senior Project Manager</div>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="array-button">
                            <button class="array-prev">
                                <i class="far fa-chevron-left"></i>
                            </button>
                            <button class="array-next">
                                <i class="far fa-chevron-right"></i>
                            </button>
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
    <!-- end testimonial section -->

    <!-- start faq-section -->
    <section class="faq-section">
      <div class="outer-box">
        <div class="shape-1 bounce-y"><img src="{{ asset('images/icons/shape-26.png') }}" alt=""></div>
        <div class="shape-2 bounce-x"><img src="{{ asset('images/icons/shape-25.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="sec-title text-center style-two">
            <div class="h6 sub-title bg-white">FAQS</div>
            <div class="h2 title char-animation">Your Most Important Questions <br>Answered Here</div>
          </div>
          <div class="row">
            <div class="faq-column col-lg-12">
              <div class="inner-column">
                <div class="faq-box">
                  <div class="inner-box">
                    <ul class="accordion-box">
                      <!--Block-->
                      <li class="accordion block gsap-fade-up" data-delay="0.2">
                        <div class="acc-btn active">Do I Need Prior Experience to Join?
                          <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="acc-content">
                          <div class="content">
                            <div class="text">A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice. Not at all. Our classes welcome beginners and experienced practitioners alike, with modifications offered for every level. A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice.</div>
                          </div>
                        </div>
                      </li>
                      <!--Block-->
                      <li class="accordion block active-block gsap-fade-up" data-delay="1.2">
                        <div class="acc-btn">What Should I Bring to Class?
                          <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="acc-content current">
                          <div class="content">
                            <div class="text">A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice. Not at all. Our classes welcome beginners and experienced practitioners alike, with modifications offered for every level. A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice.</div>
                          </div>
                        </div>
                      </li>
                      <!--Block-->
                      <li class="accordion block gsap-fade-up" data-delay="2.2">
                        <div class="acc-btn">Is Yoga Safe for My Condition?
                          <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="acc-content">
                          <div class="content">
                            <div class="text">A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice. Not at all. Our classes welcome beginners and experienced practitioners alike, with modifications offered for every level. A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice.</div>
                          </div>
                        </div>
                      </li>
                      <!--Block-->
                      <li class="accordion block gsap-fade-up" data-delay="3.2">
                        <div class="acc-btn">Can Yoga Help with Stress or Anxiety?
                          <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="acc-content">
                          <div class="content">
                            <div class="text">A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice. Not at all. Our classes welcome beginners and experienced practitioners alike, with modifications offered for every level. A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice.</div>
                          </div>
                        </div>
                      </li>
                      <!--Block-->
                      <li class="accordion block gsap-fade-up" data-delay="4.2">
                        <div class="acc-btn">Do You Offer Packages or Memberships?
                          <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="acc-content">
                          <div class="content">
                            <div class="text">A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice. Not at all. Our classes welcome beginners and experienced practitioners alike, with modifications offered for every level. A yoga mat, comfortable clothing, and water. We provide props like blocks and straps to support your practice.</div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end faq-section -->

    <!-- start blog-section-two -->
    <section class="blog-section-two section-padding">
      <div class="auto-container">
        <div class="row justify-content-center">
          <div class="sec-title col-lg-8 mb-30 text-center">
            <div class="h6 sub-title">Blog</div>
            <div class="h2 title char-animation mb-40">Helpful Tips & Articles</div>
            <div class="text">approach to relieving chronic pain, offering a range of safe and effective <br>treatment options delivered</div>
          </div>
        </div>
        <div class="row gx-4 gsap-stagger-parent">
          <div class="blog-block-two col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="image">
                <img src="{{ asset('images/resource/blog2-1.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog2-1.jpg') }}" alt="">
              </div>
              <div class="h6 date">10 Sep 2025</div>
              <div class="content-box">
                <div class="h6 sub-title">Wellness Retreat</div>
                <div class="h4 title"><a href="javascript:void(0)">How to Achieve Life Balance with Yoga and Meditation </a></div>
              </div>
            </div>
          </div>
          <div class="blog-block-two col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="image">
                <img src="{{ asset('images/resource/blog2-2.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog2-2.jpg') }}" alt="">
              </div>
              <div class="h6 date">13 Sep 2025</div>
              <div class="content-box">
                <div class="h6 sub-title">Wellness Retreat</div>
                <div class="h4 title"><a href="javascript:void(0)">Healing the Body and Soul Through Retreats </a></div>
              </div>
            </div>
          </div>
          <div class="blog-block-two col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="image">
                <img src="{{ asset('images/resource/blog2-3.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog2-3.jpg') }}" alt="">
              </div>
              <div class="h6 date">15 Sep 2025</div>
              <div class="content-box">
                <div class="h6 sub-title">Wellness Retreat</div>
                <div class="h4 title"><a href="javascript:void(0)">Why Luxury Wellness Retreats Captivate the Soul </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end blog-section-two -->

    <!-- start gallary-section-two -->
    <seciton class="gallary-section-two fix">
      <div class="gallary-outer">
        <div class="swiper gallary-slider-outer gsap-fade-up pb-0">
          <div class="swiper-wrapper">
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-1.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-1.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-2.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-2.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-3.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-3.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-4.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-4.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-5.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-5.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-6.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-6.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-1.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-1.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-2.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-2.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-3.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-3.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-4.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-4.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-5.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-5.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-6.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/gallary2-6.jpg') }}" alt="GallerImg">
              </a>
            </div>
          </div>
        </div>
      </div>
    </seciton>
    <!-- end gallary-section-two -->

    <!-- Main Footer -->
    
@endsection
