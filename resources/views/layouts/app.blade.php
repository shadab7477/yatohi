<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ app()->getLocale() == 'hi' ? 'lang-hi' : '' }}">
<head>
  <meta charset="utf-8">
  <title>@yield('title', 'Swami Nagendra & Yatohi Foundation | Spiritual Learning, Yoga & Meditation')</title>
  <!-- Stylesheets -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

  <!-- Responsive -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    /* Prevent Google Translate banner from altering design and layout */
    .goog-te-banner-frame.skiptranslate,
    .goog-te-banner-frame,
    #goog-gt-tt,
    .goog-te-balloon-frame {
      display: none !important;
    }
    body {
      top: 0px !important;
      position: static !important;
    }
    .skiptranslate iframe {
      display: none !important;
    }
    .goog-te-gadget {
      display: none !important;
    }
    .goog-tooltip, .goog-tooltip:hover {
      display: none !important;
    }
    .goog-text-highlight {
      background-color: transparent !important;
      border: none !important;
      box-shadow: none !important;
    }
    font {
      background-color: transparent !important;
      box-shadow: none !important;
    }
  </style>

  @stack('styles')
</head>

<body class="{{ app()->getLocale() == 'hi' ? 'lang-hi' : '' }}">
  <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Back-to-top start -->
    <div class="back-to-top-wrapper">
      <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <!-- Back-to-top end -->

    <!-- MouseCursor Start -->
    <div class="mouseCursor cursor-outer"></div>
    <div class="mouseCursor cursor-inner"></div>

    <!-- Main Header -->
    @if(isset($headerStyle) && $headerStyle === 'one')
      @include('partials.header-one')
    @else
      @include('partials.header-two')
    @endif

    {{-- Session alerts for feedback --}}
    @if(session('success'))
      <div style="position: fixed; top: 100px; right: 25px; z-index: 99999; background: #28a745; color: #fff; padding: 15px 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); font-weight: 500;">
        <i class="fa fa-check-circle me-2"></i> {{ session('success') }}
      </div>
    @endif
    @if(session('newsletter_success'))
      <div style="position: fixed; top: 100px; right: 25px; z-index: 99999; background: #17a2b8; color: #fff; padding: 15px 25px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); font-weight: 500;">
        <i class="fa fa-envelope me-2"></i> {{ session('newsletter_success') }}
      </div>
    @endif

    <!-- Page Content -->
    @yield('content')

    <!-- Main Footer -->
    @if(isset($footerStyle) && $footerStyle === 'two')
      @include('partials.footer-two')
    @else
      @include('partials.footer-one')
    @endif

  </div>
  <!-- End Page Wrapper -->

  <!-- Google Translate Element (Hidden) -->
  <div id="google_translate_element" style="display:none;"></div>

  <!-- Scripts -->
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/wow.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/appear.js') }}"></script>
  <script src="{{ asset('js/lenis.min.js') }}"></script>
  <script src="{{ asset('js/bxslider.js') }}"></script>
  <script src="{{ asset('js/knob.js') }}"></script>
  <script src="{{ asset('js/swiper.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/gsap.min.js') }}"></script>
  <script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
  <script src="{{ asset('js/splitType.js') }}"></script>
  <script src="{{ asset('js/gsap-scroll-smoother.js') }}"></script>
  <script src="{{ asset('js/gsap-scroll-to-plugin.js') }}"></script>
  <script src="{{ asset('js/SplitText.min.js') }}"></script>
  <script src="{{ asset('js/custom-gsap.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

  <!-- Native Bilingual Translation Handler (Laravel Server-Side Localization) -->
  <script type="text/javascript">
    function switchSiteLanguage(event, lang) {
      if (event) event.preventDefault();
      
      // Clear any legacy Google Translate cookies so they never mangle pure Devanagari text
      document.cookie = 'googtrans=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
      document.cookie = 'googtrans=; Path=/; domain=' + location.hostname + '; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
      try {
        localStorage.setItem('site_language', lang);
      } catch(e) {}

      // Switch locale seamlessly via Laravel backend
      window.location.href = "{{ url('/lang') }}/" + lang;
    }

    // Sync active state on load
    document.addEventListener('DOMContentLoaded', function() {
      // Clear legacy Google Translate cookies
      document.cookie = 'googtrans=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
      document.cookie = 'googtrans=; Path=/; domain=' + location.hostname + '; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';

      var activeLocale = "{{ app()->getLocale() }}";
      var btnEn = document.querySelectorAll('.btn-lang-en');
      var btnHi = document.querySelectorAll('.btn-lang-hi');
      if (activeLocale === 'hi') {
        btnHi.forEach(function(b) {
          b.style.setProperty('background', '#ED2C2B', 'important');
          b.style.setProperty('color', '#ffffff', 'important');
        });
        btnEn.forEach(function(b) {
          b.style.setProperty('background', 'transparent', 'important');
          b.style.setProperty('color', '#333333', 'important');
        });
      } else {
        btnEn.forEach(function(b) {
          b.style.setProperty('background', '#ED2C2B', 'important');
          b.style.setProperty('color', '#ffffff', 'important');
        });
        btnHi.forEach(function(b) {
          b.style.setProperty('background', 'transparent', 'important');
          b.style.setProperty('color', '#333333', 'important');
        });
      }
    });
  </script>

  @if(request()->routeIs('home') || request()->routeIs('home.2'))
  <script type="text/javascript">
    // Safeguard for client presentation: prevent navigating away from the homepage
    document.addEventListener('click', function(e) {
      var anchor = e.target.closest('a');
      if (!anchor) return;

      // Allow language switcher toggles
      if (anchor.classList.contains('btn-lang-toggle') || anchor.closest('.lang-switcher-pill')) {
        return;
      }

      // Allow lightbox / fancybox image previews
      if (anchor.classList.contains('lightbox-image') || anchor.hasAttribute('data-fancybox')) {
        return;
      }

      var href = anchor.getAttribute('href');
      if (!href || href === '#' || href.indexOf('javascript:void(0)') !== -1 || href.startsWith('tel:') || href.startsWith('mailto:')) {
        e.preventDefault();
        return false;
      }
    }, false);
  </script>
  @endif

  @stack('scripts')
</body>
</html>
