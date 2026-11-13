<!-- Main Header-->
<header class="main-header header-style-two">
  <div class="outer-box">
    <div class="header-lower anim-fade-move" data-delay="0.25">
      <div class="inner-container">
        <!-- Main box -->
        <div class="main-box">
          <div class="logo-box">
            <div class="logo">
              <a href="javascript:void(0)"><img src="{{ asset('images/logo.png') }}" alt="Logo" /></a>
            </div>
          </div>

        </div>
        <!--Nav Box-->
        <div class="nav-outer">
          <nav class="nav main-menu notranslate">
            <ul class="navigation">
              <li class="current"><a href="javascript:void(0)">{{ __('Home') }}</a></li>
              <li class="dropdown"><a href="javascript:void(0)">{{ __('About Babaji') }}</a>
                <ul>
                  <li><a href="javascript:void(0)">{{ __('Swami Nagendra') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Yatohi Foundation') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Founder Spiritual Journey') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Vision & Core Values') }}</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="javascript:void(0)">{{ __('Teacher Training') }}</a>
                <ul>
                  <li><a href="javascript:void(0)">{{ __('200-Hour Yoga Teacher Training') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('300-Hour Advanced Yoga TTC') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('500-Hour Master Yoga TTC') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('International Meditation Teacher Training') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Diploma Programme in Yoga') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Prenatal Yoga Teacher Training') }}</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="javascript:void(0)">{{ __('Spiritual ') }}</a>
                <ul>
                  <li><a href="javascript:void(0)">{{ __('Sacred Yogic Wisdom') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Traditional Meditation & Dhyana') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Inner Consciousness Exploration') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Sacred Yogic Texts & Philosophy') }}</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="javascript:void(0)">{{ __('Life Coaching') }}</a>
                <ul>
                  <li><a href="javascript:void(0)">{{ __('Holistic Personal Development') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Mindful Living & Self-Discipline') }}</a></li>
                  <li><a href="javascript:void(0)">{{ __('Seva & Giving Back to Society') }}</a></li>
                </ul>
              </li>
              <li><a href="javascript:void(0)">{{ __('Contact') }}</a></li>
            </ul>
          </nav>
        </div>
        <div class="right-box notranslate">
          @include('partials.language-switcher')
          <a href="javascript:void(0)" class="theme-btn btn-style-four">{{ __('Connect with Babaji') }}<span><img
                src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
          <!--Mobile Navigation Toggler-->
          <div class="mobile-nav-toggler">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>

    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
    <nav class="menu-box">
      <div class="upper-box">
        <div class="nav-logo">
          <a href="javascript:void(0)"><img src="{{ asset('images/logo2.png') }}" alt=""></a>
        </div>
        <div class="close-btn"><i class="icon fa fa-times"></i></div>
      </div>

      <ul class="navigation clearfix notranslate">
        <!--Keep This Empty / Menu will come through Javascript-->
      </ul>
      <ul class="contact-list-one">
        <li>
          <!-- Contact Info Box -->
          <div style="padding: 15px 25px;">@include('partials.language-switcher')</div>
          <div class="contact-info-box">
            <i class="icon lnr-icon-phone-handset"></i>
            <span class="title">{{ __('Call Now') }}</span>
            <a href="javascript:void(0)">+1 (703) 634-9599</a>
          </div>
        </li>
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box">
            <span class="icon lnr-icon-envelope1"></span>
            <span class="title">{{ __('Send Email') }}</span>
            <a href="javascript:void(0)">info@yatohifoundation.com</a>
          </div>
        </li>
        <li>
          <!-- Contact Info Box -->
          <div class="contact-info-box">
            <span class="icon lnr-icon-clock"></span>
            <span class="title">{{ __('Yatohi Foundation') }}</span>
            Swami Nagendra - Spiritual Guide
          </div>
        </li>
      </ul>
      <ul class="social-links">
        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fab fa-pinterest"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </nav>
  </div>
  <!-- End Mobile Menu -->

  <!-- Header Search -->
  <div class="search-popup">
    <span class="search-back-drop"></span>
    <button class="close-search"><span class="fa fa-times"></span></button>

    <div class="search-inner">
      <form method="post" action="javascript:void(0)" onsubmit="event.preventDefault(); return false;">
        <div class="form-group">
          <input type="search" name="search-field" value="" placeholder="Search..." required="" />
          <button type="submit"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </div>
  </div>
  <!-- End Header Search -->

  <!-- Sticky Header  -->
  <div class="sticky-header">
    <div class="auto-container">
      <div class="inner-container">
        <!--Logo-->
        <div class="logo">
          <a href="javascript:void(0)"><img src="{{ asset('images/logo2.png') }}" alt=""></a>
        </div>

        <!--Right Col-->
        <div class="nav-outer">
          <!-- Main Menu -->
          <nav class="main-menu">
            <div class="navbar-collapse show collapse clearfix">
              <ul class="navigation clearfix notranslate">
                <!--Keep This Empty / Menu will come through Javascript-->
              </ul>
            </div>
          </nav>
          <!-- Main Menu End-->

          <!--Mobile Navigation Toggler-->
          <div class="mobile-nav-toggler">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <a href="javascript:void(0)" class="header-phone_box">
          <span class="icon"><i aria-hidden="true" class="fas fa-phone-alt"></i></span>
          <span class="info">
            {{ __('Call Anytime') }}
            <strong>+1 (703) 634-9599</strong>
          </span>
        </a>
      </div>
    </div>
  </div>
  <!-- End Sticky Menu -->
</header>