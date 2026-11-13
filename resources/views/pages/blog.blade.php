@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | News Grid')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Blog Grid</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Blog Grid</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!-- start blog-section -->
    <section class="blog-section fix section-padding pt-90">
      <div class="auto-container">
        <div class="row gx-4 gsap-stagger-parent">
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">15 Dec 2025</div>
                  <span></span>
                  <div class="h6 cat">Wellness</div>
                </div>
                <div class="h4 title"><a href="{{ route('blog.details') }}">Finding Life Balance Through <br>Yoga and Meditation </a></div>
              </div>
              <div class="image">
                <img src="{{ asset('images/resource/blog1-1.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog1-1.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">15 Dec 2025</div>
                  <span></span>
                  <div class="h6 cat">Wellness</div>
                </div>
                <div class="h4 title"><a href="{{ route('blog.details') }}">Healing the Body and Soul <br>Through Retreats </a></div>
              </div>
              <div class="image">
                <img src="{{ asset('images/resource/blog1-2.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog1-2.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">15 Dec 2025</div>
                  <span></span>
                  <div class="h6 cat">Wellness</div>
                </div>
                <div class="h4 title"><a href="{{ route('blog.details') }}">Why Luxury Wellness Retreats <br>Captivate the Soul </a></div>
              </div>
              <div class="image">
                <img src="{{ asset('images/resource/blog1-3.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog1-3.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">15 Dec 2025</div>
                  <span></span>
                  <div class="h6 cat">Wellness</div>
                </div>
                <div class="h4 title"><a href="{{ route('blog.details') }}">How to Achieve Life Balance with Yoga and Meditation </a></div>
              </div>
              <div class="image">
                <img src="{{ asset('images/resource/blog1-2.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog1-2.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">15 Dec 2025</div>
                  <span></span>
                  <div class="h6 cat">Wellness</div>
                </div>
                <div class="h4 title"><a href="{{ route('blog.details') }}">Why Luxury Wellness Retreats <br>Captivate the Soul </a></div>
              </div>
              <div class="image">
                <img src="{{ asset('images/resource/blog1-3.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog1-3.jpg') }}" alt="">
              </div>
            </div>
          </div>
          <div class="blog-block col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="catagories">
                  <div class="h6 cat">15 Dec 2025</div>
                  <span></span>
                  <div class="h6 cat">Wellness</div>
                </div>
                <div class="h4 title"><a href="{{ route('blog.details') }}">Finding Life Balance Through <br>Yoga and Meditation </a></div>
              </div>
              <div class="image">
                <img src="{{ asset('images/resource/blog1-1.jpg') }}" alt="">
                <img src="{{ asset('images/resource/blog1-1.jpg') }}" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end blog-section -->

    <!-- Main Footer -->
    
@endsection
