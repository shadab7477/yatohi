@extends('layouts.app', ['headerStyle' => 'one', 'footerStyle' => 'one'])

@section('title', 'Swami Nagendra & Yatohi Foundation | Spiritual Learning, Yoga & Meditation')

@section('content')
<!--End Main Header -->

    <!-- start banner-section -->
    <section class="banner-section notranslate">
      <div class="outer-box">
        <div class="anim-icon gsap-fade-left float-horizontal"><img src="{{ asset('images/icons/shape-2.png') }}" alt=""></div>
        <div class="info-one gsap-fade-right">
          <img src="{{ asset('images/icons/soft-star.png') }}" alt="">
          <div class="h5 title">{{ __('Swami Nagendra') }} </div>
        </div>
        <div class="info-two gsap-fade-left">
          <div class="image "><img src="{{ asset('images/banner/banner1-3.jpg') }}" alt=""></div>
          <div class="shape-1 animate-circle"><img src="{{ asset('images/icons/shape-1.png') }}" alt=""></div>
          <div class="content">
            <div class="h4 title">10,000+</div>
            <div class="text">{{ __('Spiritual Seekers & Students Guided Worldwide') }}</div>
          </div>
        </div>
        <div class="auto-container">
          <div class="row">
            <div class="image-column col-lg-4">
              <div class="inner-column">
                <div class="image gsap-fade-up"><img src="{{ asset('images/banner/banner1-1.png') }}" alt=""></div>
                <div class="image-bg"><img src="{{ asset('images/banner/banner1-1-1.png') }}" alt=""></div>
              </div>
            </div>
            <div class="content-column col-lg-8">
              <div class="inner-column gsap-stagger-parent">
                <div class="h1 banner-title char-animation notranslate">{{ __('Spiritual  & Inner Awakening') }}</div>
                <div class="content-box gsap-stagger-item">
                  <div class="h5 text">{{ __('Under the spiritual guidance of Swami Nagendra, Yatohi Foundation is dedicated to authentic yogic wisdom, meditation, and holistic personal development.') }} <br>{{ __('Discover your inner consciousness, cultivate self-discipline, and bring lasting harmony into everyday life.') }}</div>
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Explore Programmes') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end banner-section -->

    <!-- start marquee-section -->
    <section class="marquee-section fix">
      <div class="marquee">
        <div class="marquee-group">
          <div class="text" data-text="200-Hour, 300-Hour & 500-Hour Yoga TTC">{{ __('200-Hour, 300-Hour & 500-Hour Yoga TTC') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="International Meditation Teacher Training">{{ __('International Meditation Teacher Training') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="Diploma Programme in Yoga">{{ __('Diploma Programme in Yoga') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="Prenatal Yoga Teacher Training">{{ __('Prenatal Yoga Teacher Training') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="Holistic Life Coaching & Spiritual Development">{{ __('Holistic Life Coaching & Spiritual Development') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
        </div>
        <div class="marquee-group">
          <div class="text" data-text="200-Hour, 300-Hour & 500-Hour Yoga TTC">{{ __('200-Hour, 300-Hour & 500-Hour Yoga TTC') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="International Meditation Teacher Training">{{ __('International Meditation Teacher Training') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="Diploma Programme in Yoga">{{ __('Diploma Programme in Yoga') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="Prenatal Yoga Teacher Training">{{ __('Prenatal Yoga Teacher Training') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
          <div class="text" data-text="Holistic Life Coaching & Spiritual Development">{{ __('Holistic Life Coaching & Spiritual Development') }}</div>
          <span class="text divider ">
            <img src="{{ asset('images/icons/marquee1-1.png') }}" alt="">
          </span>
        </div>
      </div>
    </section>
    <!-- end marquee-section -->

    <!-- About Section Start -->
    <section class="about-section fix section-padding pt-90">
      <div class="shape-1 gsap-fade-left float-horizontal"><img src="{{ asset('images/icons/shape-3.png') }}" alt=""></div>
      <div class="auto-container">
          <div class="row g-4">
            <div class="col-xl-7 col-lg-6">
              <div class="about-block-items-1">
                  <div class="sec-title mb-0">
                    <div class="h2 title char-animation">
                    {{ __('Swami Nagendra &') }} <br>{{ __('Yatohi Foundation') }}
                    </div>
                  </div>
                  <div class="about-wrap gsap-stagger-parent">
                    <div class="about-counter gsap-stagger-item">
                      <div class="h3 count-box"><span class="count-text" data-speed="3000" data-stop="25">25</span>+</div>
                      <p>{{ __('Years of Spiritual Sadhana') }} <br> {{ __('& Guiding Seekers') }}</p>
                      <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Discover Founder Story') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                    </div>
                     <div class="about-right-items">
                        <div class="about-text gsap-stagger-item">{{ __('Swami Nagendra is the founder and spiritual guide associated with Yatohi Foundation, an organization dedicated to spiritual learning, yoga, meditation, yogic wisdom, and holistic personal development. His spiritual journey began in India, where he developed a deep connection with meditation, traditional yoga practices, sacred yogic texts, and the exploration of inner consciousness.') }}</div>
                        <div class="about-icon-items gsap-stagger-item">
                            <div class="icon-items">
                              <div class="icon"><i aria-hidden="true" class=" flaticon-set-yoga-2"></i>
                              </div>
                              <div class="content">
                                <div class="h5 title">{{ __('Inner Self & Mental Peace') }}</div>
                                <div class="text">{{ __('Helping individuals discover their inner selves, achieve mental peace, develop self-discipline, and bring greater balance into life.') }}</div>
                              </div>
                            </div>
                             <div class="icon-items">
                              <div class="icon"><i aria-hidden="true" class=" flaticon-set-yoga"></i>
                              </div>
                              <div class="content">
                                <div class="h5 title">{{ __('Compassion, Wisdom & Seva') }}</div>
                                <div class="text">{{ __('Making yogic education accessible, guiding personal transformations, and encouraging mindful living and service to society.') }}</div>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6">
              <div class="about-image-1 fix gsap-fade-right">
                <img data-speed=".8" src="{{ asset('images/resource/about1-1.png') }}" alt="">
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
              <div class="h2 title char-animation">{{ __('Educational Programmes') }} <br>{{ __('& Spiritual') }} <img src="{{ asset('images/resource/service1-2.webp') }}" alt=""> {{ __('Teacher Trainings') }}</div>
            </div>
          </div>

          <div class="default-tabs tabs-box mb-0">
            <div class="row">
              <div class="col-lg-4">
                <!-- Tab Btns -->
                <div class="tab-btns tab-buttons ">
                  <button data-tab="#prod-yttc200" class="tab-btn active-btn wow fadeInUp" data-wow-delay="200ms">
                    <i aria-hidden="true" class=" flaticon-set-yoga-pose-1"></i>
                    <span>{{ __('200-Hour Yoga Teacher Training') }}</span>
                  </button>
                  <button data-tab="#prod-yttc300" class="tab-btn wow fadeInUp" data-wow-delay="300ms">
                    <i aria-hidden="true" class=" flaticon-set-exercise"></i>
                    <span>{{ __('300 & 500-Hour Yoga TTC') }}</span>
                  </button>
                  <button data-tab="#prod-meditation" class="tab-btn wow fadeInUp" data-wow-delay="400ms">
                    <i aria-hidden="true" class=" flaticon-set-treadmill"></i>
                    <span>{{ __('Meditation Teacher Training') }}</span>
                  </button>
                  <button data-tab="#prod-diploma" class="tab-btn wow fadeInUp" data-wow-delay="500ms">
                    <i aria-hidden="true" class=" flaticon-set-calendar"></i>
                    <span>{{ __('Diploma Programme in Yoga') }}</span>
                  </button>
                  <button data-tab="#prod-prenatal" class="tab-btn wow fadeInUp" data-wow-delay="600ms">
                    <i aria-hidden="true" class=" flaticon-set-mat"></i>
                    <span>{{ __('Prenatal & Life Coaching') }}</span>
                  </button>
                </div>
              </div>

              <div class="col-lg-8">
                <!-- Tabs Container -->
                <div class="tabs-content">

                  <!-- Tab 1 -->
                  <div class="tab active-tab" id="prod-yttc200">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image gsap-reveal" data-origin="top"><img src="{{ asset('images/resource/service1-1.png') }}" alt=""></div>
                          <div class="h3 title">{{ __('200-Hour Yoga Teacher Training') }}</div>
                          <div class="text">{{ __('An internationally recognized foundational programme covering traditional asanas, pranayama, anatomy, meditation fundamentals, and classical yogic philosophy. Designed for aspiring yoga teachers and sincere seekers wishing to establish an authentic yogic foundation.') }}</div>
                          <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Learn More') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab 2 -->
                  <div class="tab" id="prod-yttc300">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.png') }}" alt=""></div>
                          <div class="h3 title">{{ __('300-Hour & 500-Hour Master Yoga TTC') }}</div>
                          <div class="text">{{ __('Advanced residential and online teacher training delving deeply into sacred yogic texts, advanced pranayama, kriya techniques, subtle energy anatomy, and the mastery of inner consciousness. Guided by Swami Nagendra to elevate your teaching to master level.') }}</div>
                          <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Learn More') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab 3 -->
                  <div class="tab" id="prod-meditation">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.png') }}" alt=""></div>
                          <div class="h3 title">{{ __('International Meditation Teacher Training') }}</div>
                          <div class="text">{{ __('A transformative training in classical meditation practices, mindfulness, dhyana, and yogic consciousness exploration. Learn to guide others toward deep mental stillness, stress relief, emotional balance, and spiritual awakening.') }}</div>
                          <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Learn More') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab 4 -->
                  <div class="tab" id="prod-diploma">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.png') }}" alt=""></div>
                          <div class="h3 title">{{ __('Diploma Programme in Yoga') }}</div>
                          <div class="text">{{ __('A comprehensive academic and experiential diploma covering theoretical foundations, therapeutic applications of yoga, sacred scriptures, Ayurveda integration, and yogic lifestyle principles for holistic personal and professional development.') }}</div>
                          <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Learn More') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Tab 5 -->
                  <div class="tab" id="prod-prenatal">
                    <div class="tab-inner-content">
                      <div class="content-box">
                        <div class="inner-box">
                          <div class="image"><img src="{{ asset('images/resource/service1-1.png') }}" alt=""></div>
                          <div class="h3 title">{{ __('Prenatal Yoga & Spiritual Life Coaching') }}</div>
                          <div class="text">{{ __('Specialized teacher training supporting women through pregnancy with gentle yogic movement and breathwork, coupled with spiritual life coaching programmes designed to guide personal transformation, ethical living, and conscious purpose.') }}</div>
                          <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Learn More') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
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
                <div class="h2 title char-animation">{{ __('Pillars of Wisdom & Holistic Living') }}</div>
              </div>
              <div class="row gsap-stagger-parent">
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-yoga-13"></i>
                    </div>
                    <div class="h4 title">{{ __('Sacred Yogic Wisdom') }}</div>
                    <div class="text">{{ __('Rooted in India’s classical traditions, sacred texts, and deep meditation exploration.') }}</div>
                  </div>
                </div>
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-yoga-11"></i>
                    </div>
                    <div class="h4 title">{{ __('Inner Consciousness') }}</div>
                    <div class="text">{{ __('Guiding individuals to discover their inner selves, achieve peace, and cultivate discipline.') }}</div>
                  </div>
                </div>
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-mental-health"></i>
                    </div>
                    <div class="h4 title">{{ __('Mindful Living & Seva') }}</div>
                    <div class="text">{{ __('Fostering compassion, self-discovery, and selfless contribution back to society.') }}</div>
                  </div>
                </div>
                <div class="wcu-block col-md-6 gsap-stagger-item">
                  <div class="inner-block">
                    <div class="icon">
                      <i aria-hidden="true" class=" flaticon-set-brochure"></i>
                    </div>
                    <div class="h4 title">{{ __('Global Mindful Community') }}</div>
                    <div class="text">{{ __('Building an inclusive global sangha where every individual’s spiritual journey is respected.') }}</div>
                  </div>
                </div>
              </div>
              <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Discover Our Vision') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end why-choose-us-section -->

    <!-- start services-section-two -->
    <section class="services-section-two">
      <div class="outer-box fix section-padding">
        <div class="bg bg-image"><img src="{{ asset('images/resource/service2-1-bg.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="sec-title text-center light mb-50">
            <div class="h2 title char-animation">{{ __('Pathways of Spiritual Learning') }} <br>{{ __('with Swami Nagendra') }}</div>
          </div>
        </div>
        <div class="service-outer">
          <div class="swiper service-slider pb-0">
            <div class="swiper-wrapper">
              <div class="service-block-two swiper-slide">
                <div class="inner-block">
                  <div class="upper-box">
                    <div class="title-outer">
                      <div class="h5 number">01</div>
                      <div class="h4 title">{{ __('Traditional Yoga') }} <br>{{ __('& Asana Sadhana') }}</div>
                    </div>
                    <div class="image">
                      <img src="{{ asset('images/resource/service2-1.jpg') }}" alt="">
                      <img src="{{ asset('images/resource/service2-1.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="text">{{ __('Connecting body, breath, and energy through authentic classical yoga alignment.') }}</div>
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Read More') }}<span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                </div>
              </div>
              <div class="service-block-two swiper-slide">
                <div class="inner-block">
                  <div class="upper-box">
                    <div class="title-outer">
                      <div class="h5 number">02</div>
                      <div class="h4 title">{{ __('Meditation &') }} <br>{{ __('Dhyana Sadhana') }}</div>
                    </div>
                    <div class="image">
                      <img src="{{ asset('images/resource/service2-2.jpg') }}" alt="">
                      <img src="{{ asset('images/resource/service2-2.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="text">{{ __('Stillness of mind and awakening inner consciousness through guided dhyana.') }}</div>
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Read More') }}<span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                </div>
              </div>
              <div class="service-block-two swiper-slide">
                <div class="inner-block active">
                  <div class="upper-box">
                    <div class="title-outer">
                      <div class="h5 number">03</div>
                      <div class="h4 title">{{ __('Sacred Yogic') }} <br>{{ __('Philosophy & Texts') }}</div>
                    </div>
                    <div class="image">
                      <img src="{{ asset('images/resource/wcu1-1.jpg') }}" alt="">
                      <img src="{{ asset('images/resource/wcu1-1.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="text">{{ __('Exploring ancient wisdom, the Yoga Sutras, and practical spiritual philosophy.') }}</div>
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Read More') }}<span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                </div>
              </div>
              <div class="service-block-two swiper-slide">
                <div class="inner-block">
                  <div class="upper-box">
                    <div class="title-outer">
                      <div class="h5 number">04</div>
                      <div class="h4 title">{{ __('Spiritual Life') }} <br>{{ __('Coaching & Guidance') }}</div>
                    </div>
                    <div class="image">
                      <img src="{{ asset('images/resource/service2-4.jpg') }}" alt="">
                      <img src="{{ asset('images/resource/service2-4.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="text">{{ __('Personalized transformation, clarity of purpose, and cultivating self-discipline.') }}</div>
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Read More') }}<span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                </div>
              </div>
              <div class="service-block-two swiper-slide">
                <div class="inner-block">
                  <div class="upper-box">
                    <div class="title-outer">
                      <div class="h5 number">05</div>
                      <div class="h4 title">{{ __('Seva & Giving') }} <br>{{ __('Back to Society') }}</div>
                    </div>
                    <div class="image">
                      <img src="{{ asset('images/resource/service2-5.jpg') }}" alt="">
                      <img src="{{ asset('images/resource/service2-5.jpg') }}" alt="">
                    </div>
                  </div>
                  <div class="text">{{ __('Spreading compassionate action, selfless service, and global community upliftment.') }}</div>
                  <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('Read More') }}<span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="service-slider-dots"></div>
      </div>
    </section>
    <!-- end services-section-two -->

    <!-- start pricing-section -->
    <section class="pricing-section fix section-padding">
      <div class="auto-container">
        <div class="sec-title mb-50">
          <div class="h2 title char-animation">{{ __('Flagship Teacher Training Programmes') }}</div>
          <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('View All Programmes') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
        </div>
        <div class="row gx-4 gsap-stagger-parent">
          <div class="pricing-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="shape"><img src="{{ asset('images/icons/shape-9.png') }}" alt=""></div>
              <div class="upper-box">
                <div class="h6 cat">{{ __('Foundational') }}</div>
                <div class="h5 title">{{ __('200-Hour Yoga Teacher Training') }}</div>
                <div class="h6 price"><span>{{ __('Certified') }}</span>/{{ __('Course') }}</div>
              </div>
              <div class="pricing-feature">
                <div class="h5 title">{{ __('Programme Highlights') }}</div>
                <ul class="feature">
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Traditional Hatha & Ashtanga Asanas') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Pranayama & Breathwork Mastery') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Anatomy, Physiology & Alignment') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Yogic Philosophy & Ethics') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Teaching Methodology & Practice') }}</span>
                  </li>
                </ul>
                <a href="javascript:void(0)" class="pricing-btn">{{ __('View Programme Details') }}</a>
              </div>
            </div>
          </div>
          <div class="pricing-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block active">
              <div class="shape"><img src="{{ asset('images/icons/shape-9.png') }}" alt=""></div>
              <div class="upper-box">
                <div class="h6 cat">{{ __('Advanced Mastery') }}</div>
                <div class="h5 title">{{ __('300 & 500-Hour Advanced TTC') }}</div>
                <div class="h6 price"><span>{{ __('Master') }}</span>/{{ __('Level') }}</div>
              </div>
              <div class="pricing-feature">
                <div class="h5 title">{{ __('Programme Highlights') }}</div>
                <ul class="feature">
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Advanced Asana & Subtle Adjustments') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Sacred Yogic Texts In-Depth Study') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Kundalini, Chakras & Nadis Anatomy') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Deep Meditation & Inner Consciousness') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Direct Spiritual Mentorship by Babaji') }}</span>
                  </li>
                </ul>
                <a href="javascript:void(0)" class="pricing-btn">{{ __('View Programme Details') }}</a>
              </div>
            </div>
          </div>
          <div class="pricing-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="shape"><img src="{{ asset('images/icons/shape-9.png') }}" alt=""></div>
              <div class="upper-box">
                <div class="h6 cat">{{ __('Specialized') }}</div>
                <div class="h5 title">{{ __('Meditation TTC & Diploma in Yoga') }}</div>
                <div class="h6 price"><span>{{ __('Diploma') }}</span>/{{ __('Certified') }}</div>
              </div>
              <div class="pricing-feature">
                <div class="h5 title">{{ __('Programme Highlights') }}</div>
                <ul class="feature">
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('International Meditation Teacher Training') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Diploma Programme in Yogic Studies') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Prenatal Yoga Teacher Training') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Holistic Spiritual Life Coaching') }}</span>
                  </li>
                  <li class="active">
                    <img src="{{ asset('images/icons/check.png') }}" alt="">
                    <span>{{ __('Global Community Seva Projects') }}</span>
                  </li>
                </ul>
                <a href="javascript:void(0)" class="pricing-btn">{{ __('View Programme Details') }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end pricing-section -->

    <!-- start gallary-section -->
    <section class="gallary-section fix">
      <div class="outer-box">
        <div class="gallary-outer">
          <div class="image gsap-fade-up">
            <a href="images/resource/p3.jpg" class="lightbox-image" data-fancybox="gallery">
              <img src="{{ asset('images/resource/p3.jpg') }}" alt="GallerImg">
            </a>
          </div>
          <div class="content-box gsap-fade-up">
            <div class="inner-box">
              <div class="h2 title char-animation">{{ __('Where Consciousness') }} <br>& <br>{{ __('Peace Awaken') }}</div>
            </div>
          </div>
          <div class="image gsap-fade-up">
            <a href="images/resource/gallary1-2.jpg" class="lightbox-image" data-fancybox="gallery">
              <img src="{{ asset('images/resource/p1.avif') }}" alt="GallerImg">
            </a>
          </div>
          <div class="image gsap-fade-up">
            <a href="images/resource/gallary1-3.jpg" class="lightbox-image" data-fancybox="gallery">
              <img src="{{ asset('images/resource/p2.jpg') }}" alt="GallerImg">
            </a>
          </div>
        </div>
        <div class="gallary-outer">
          <div class="image one gsap-fade-up">
            <a href="images/resource/gallary1-4.jpg" class="lightbox-image" data-fancybox="gallery">
              <img src="{{ asset('images/resource/about1-1.png') }}" alt="GallerImg">
            </a>
          </div>
          <div class="image gsap-fade-up">
            <a href="images/resource/gallary1-5.jpg" class="lightbox-image" data-fancybox="gallery">
              <img src="{{ asset('images/resource/p2.jpg') }}" alt="GallerImg">
            </a>
          </div>
        
          <div class="image gsap-fade-up">
            <a href="images/resource/gallary1-7.jpg" class="lightbox-image" data-fancybox="gallery">
              <img src="{{ asset('images/resource/p3.jpg') }}" alt="GallerImg">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end gallary-section -->

    <!-- start testimonial-section -->
    <section class="testimonial-section section-padding fix">
      <div class="shape-1 float-horizontal"><img src="{{ asset('images/icons/shape-11.png') }}" alt=""></div>
      <div class="auto-container">
        <div class="row ">
          <div class="image-column col-xl-6 col-lg-5">
            <div class="inner-column">
              <div class="image gsap-reveal" data-origin="left"><img src="{{ asset('images/resource/wcu1-1.jpg') }}" alt=""></div>
            </div>
          </div>
          <div class="content-column col-xl-6 col-lg-7">
            <div class="inner-column">
              <div class="sec-title mb-15">
                <div class="h2 title char-animation">{{ __('Words of Gratitude & Transformation') }}</div>
              </div>
              <div class="testimonial-block">
                <div class="inner-block gsap-stagger-parent">
                  <div class="qute-icon"><img src="{{ asset('images/icons/shape-10.png') }}" alt=""></div>
                  <div class="swiper testi-slider  pb-0">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <div class="text gsap-stagger-item">{{ __('Under the divine guidance of Swami Nagendra, I discovered the profound depth of authentic meditation and traditional yoga. Yatohi Foundation provided an environment where my spiritual journey was deeply nurtured.') }}</div>
                        <div class="info-box gsap-stagger-item">
                          <div class="h4 name">Aarav Sharma</div>
                          <div class="designation">{{ __('500-Hour Yoga TTC Graduate') }}</div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="text">{{ __('The International Meditation Teacher Training at Yatohi Foundation transformed my perception of life and self-discipline. Babaji’s teachings on sacred texts and mindful living bring immense clarity and inner peace.') }}</div>
                        <div class="info-box  gsap-stagger-item">
                          <div class="h4 name">Sarah Jenkins</div>
                          <div class="designation">{{ __('Meditation Teacher & Life Coach') }}</div>
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
                      <div class="h6 rating-text">{{ __('5.0 Spiritual Community Rating') }}</div>
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

    <!-- start contact-section -->
    <section class="contact-section">
      <div class="outer-box section-padding">
        <div class="bg bg-image"><img src="{{ asset('images/resource/contact1-1-bg.png') }}" alt=""></div>
        <div class="shape-1 float-horizontal"><img src="{{ asset('images/icons/shape-12.png') }}" alt=""></div>
        <div class="shape-2 bounce-y"><img src="{{ asset('images/icons/shape-13.png') }}" alt=""></div>
        <div class="shape-3 float-horizontal"><img src="{{ asset('images/icons/shape-14.png') }}" alt=""></div>
        <div class="auto-container">
          <div class="row">
            <div class="content-column col-lg-6">
              <div class="inner-column">
                <div class="sec-title">
                  <div class="h2 title char-animation">{{ __('Begin Your Journey with Yatohi Foundation') }}</div>
                  <div class="text">{{ __('Connect with us for teacher training admissions, meditation retreats, spiritual guidance, and life coaching.') }}<br><strong style="color: #ED2C2B;">{{ __('Phone:') }}</strong> +1 (703) 634-9599 &nbsp;|&nbsp; <strong style="color: #ED2C2B;">{{ __('Email:') }}</strong> info@yatohifoundation.com</div>
                </div>
                <!-- Form Column -->
                <div class="form-column ">
                  <div class="inner-column">
                    <!-- Contact Form -->
                    <div class="contact-form">
                      <!--Contact Form-->
                      <form action="javascript:void(0)" onsubmit="event.preventDefault(); return false;">
                        <div class="row gx-2 gsap-stagger-parent">
                          <div class="col-sm-6 gsap-stagger-item">
                            <div class="form-clt">
                              <input type="text" name="name" placeholder="{{ __('Your Name') }}" required="">
                            </div>
                          </div>
                          <div class="col-sm-6 gsap-stagger-item">
                            <div class="form-clt">
                              <input type="text" name="number" id="number" placeholder="{{ __('Phone Number') }}">
                            </div>
                          </div>
                          <div class="col-sm-6 gsap-stagger-item">
                            <div class="form-clt">
                              <input type="email" name="email" id="email" placeholder="{{ __('Your Email') }}">
                            </div>
                          </div>
                          <div class="col-sm-6 gsap-stagger-item">
                            <div class="form-clt">
                              <input type="text" name="program" placeholder="{{ __('Select Programme (e.g. 200-Hr TTC)') }}">
                            </div>
                          </div>
                          <div class="col-sm-12 gsap-stagger-item">
                            <div class="form-clt">
                              <input type="text" name="message" placeholder="{{ __('How can we support your spiritual journey?') }}">
                            </div>
                          </div>
                          <div class="col-sm-12 gsap-stagger-item">
                            <button class="theme-btn btn-style-one" type="button">{{ __('Submit Inquiry') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!--End Contact Form -->
                  </div>
                </div>
              </div>
            </div>
            <div class="image-column col-lg-6">
              <div class="inner-column">
                <div class="image gsap-interactive-img"><img src="{{ asset('images/resource/wcu1-1.jpg') }}" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end contact-section -->

    <!-- start blog-section -->
    <section class="blog-section fix section-padding">
      <div class="auto-container">
        <div class="sec-title mb-50">
          <div class="h2 title char-animation">{{ __('Spiritual Teachings & Wisdom') }} <br>{{ __('from Swami Nagendra') }}</div>
          <a href="javascript:void(0)" class="theme-btn btn-style-one">{{ __('See All Wisdom Articles') }} <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
        </div>
        <div class="row gx-4 gsap-stagger-parent">
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="cat">{{ __('Yogic Wisdom') }}</div>
                  <span></span>
                  <div class="cat">{{ __('Meditation') }}</div>
                </div>
                <div class="h4 title"><a href="javascript:void(0)">{{ __('Exploring Inner Consciousness Through Traditional Meditation') }}</a></div>
              </div>
              <div class="image">
                <img src="{{ asset('https://thumb.wikimedia.org/wikipedia/commons/thumb/c/c8/Altja_j%C3%B5gi_Lahemaal.jpg/1280px-Altja_j%C3%B5gi_Lahemaal.jpg?utm_source=en.wikipedia.org&utm_campaign=index&utm_content=thumbnail') }}" alt="">
                <img src="{{ asset('https://thumb.wikimedia.org/wikipedia/commons/thumb/c/c8/Altja_j%C3%B5gi_Lahemaal.jpg/1280px-Altja_j%C3%B5gi_Lahemaal.jpg?utm_source=en.wikipedia.org&utm_campaign=index&utm_content=thumbnail') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">{{ __('Self-Discipline') }}</div>
                  <span></span>
                  <div class="h6 cat">{{ __('Daily Living') }}</div>
                </div>
                <div class="h4 title"><a href="javascript:void(0)">{{ __('Cultivating Mental Peace and Balance in Modern Everyday Life') }}</a></div>
              </div>
              <div class="image">
                <img src="{{ asset('https://media.istockphoto.com/id/2181735944/photo/natural-mountains-landscapes.jpg?s=612x612&w=0&k=20&c=4EZdF1438jegkW3U8h0TG4JaPO_cpMMBY-MouwLlyf4=') }}" alt="">
                <img src="{{ asset('https://media.istockphoto.com/id/2181735944/photo/natural-mountains-landscapes.jpg?s=612x612&w=0&k=20&c=4EZdF1438jegkW3U8h0TG4JaPO_cpMMBY-MouwLlyf4=') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">{{ __('Seva & Vision') }}</div>
                  <span></span>
                  <div class="h6 cat">{{ __('Compassion') }}</div>
                </div>
                <div class="h4 title"><a href="javascript:void(0)">{{ __('Building a Mindful Global Community and Giving Back to Society') }}</a></div>
              </div>
              <div class="image">
                <img src="{{ asset('https://media.istockphoto.com/id/1550071750/photo/green-tea-tree-leaves-camellia-sinensis-in-organic-farm-sunlight-fresh-young-tender-bud.jpg?s=612x612&w=0&k=20&c=RC_xD5DY5qPH_hpqeOY1g1pM6bJgGJSssWYjVIvvoLw=') }}" alt="">
                <img src="{{ asset('https://media.istockphoto.com/id/1550071750/photo/green-tea-tree-leaves-camellia-sinensis-in-organic-farm-sunlight-fresh-young-tender-bud.jpg?s=612x612&w=0&k=20&c=RC_xD5DY5qPH_hpqeOY1g1pM6bJgGJSssWYjVIvvoLw=') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end blog-section -->

    <!-- start gallary-section-two -->
    <seciton class="gallary-section-two fix">
      <div class="gallary-outer">
        <div class="swiper gallary-slider-outer gsap-fade-up pb-0">
          <div class="swiper-wrapper">
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-2.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p1.avif') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-3.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p3.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-5.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p2.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-2.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p1.avif') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-3.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p3.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-5.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p2.jpg') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-2.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p1.avif') }}" alt="GallerImg">
              </a>
            </div>
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-3.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p3.jpg') }}" alt="GallerImg">
              </a>
            </div>
          
            <div class="image swiper-slide">
              <a href="images/resource/gallary2-5.jpg" class="lightbox-image" data-fancybox="gallery">
                <img src="{{ asset('images/resource/p2.jpg') }}" alt="GallerImg">
              </a>
            </div>
          </div>
        </div>
      </div>
    </seciton>
    <!-- end gallary-section-two -->

@endsection
