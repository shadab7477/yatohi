@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Service Details')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Service Details</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Service Details</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Start Services Details-->
  <section class="services-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <!--Start Services Details Sidebar-->
        <div class="col-xl-4 col-lg-4">
          <div class="service-sidebar">
            <!--Start Services Details Sidebar Single-->
            <div class="sidebar-widget service-sidebar-single">

              <div class="sidebar-service-list">
                <ul>
                  <li><a href="{{ route('services.details') }}" class="current"><i class="fas fa-angle-right"></i><span>Back Pain</span></a></li>
                  <li class="current"><a href="{{ route('services.details') }}"><i class="fas fa-angle-right"></i><span>Muscle Tension</span></a></li>
                  <li><a href="{{ route('services.details') }}"><i class="fas fa-angle-right"></i><span>Sports Injuries</span></a></li>
                  <li><a href="{{ route('services.details') }}"><i class="fas fa-angle-right"></i><span>Pain Management</span></a></li>
                  <li><a href="{{ route('services.details') }}"><i class="fas fa-angle-right"></i><span>Depression Support</span></a></li>
                </ul>
              </div>

              <div class="service-details-help">
                <div class="help-shape-1"></div>
                <div class="help-shape-2"></div>
                <div class="h2 help-title">Contact with <br /> us for any <br /> advice</div>
                <div class="help-icon">
                  <span class=" lnr-icon-phone-handset"></span>
                </div>
                <div class="help-contact">
                  <p>Need help? Talk to an expert</p>
                  <a href="tel:12463330079">+892 ( 123 ) 112 - 9999</a>
                </div>
              </div>

              <!--Start Services Details Sidebar Single-->
              <div class="sidebar-widget service-sidebar-single mt-4">
                <div class="service-sidebar-single-btn wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200m">
                  <a href="#" class="theme-btn btn-style-two"><span class="btn-title"><span class="fas fa-file-pdf"></span> download pdf file</span></a>
                </div>
              </div>
            </div>
            <!--End Services Details Sidebar-->
          </div>
        </div>

        <!--Start Services Details Content-->
        <div class="col-xl-8 col-lg-8">
          <div class="services-details__content">
            <img class="w-100" src="{{ asset('images/resource/service-details.jpg') }}" alt="" />
            <div class="h3 mt-4">Service Overview</div>
            <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make </p>
            <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur adipis icing elit  </p>
            <div class="content mt-40">
              <div class="text">
                <div class="h3">Burnout Recovery</div>
                <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <blockquote class="blockquote-one">Lorem ipsum dolor sit amet, consectetur notted adipisicing elit sed do eiusmod remaining essentially unchanged Lorem ipsum dolor sit amet consec tetur</blockquote>
              </div>
              <div class="feature-list mt-4">
                <div class="row clearfix">
                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <img class="mb-3" src="{{ asset('images/resource/service-d1.jpg') }}" alt="images" />
                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <img class="mb-3" src="{{ asset('images/resource/service-d2.jpg') }}" alt="images" />
                    <p>Lorem ipsum dolor sit amet consec adipis elit Dolor repellat pariatur temporibus doloribus hic conse quatur copy typing refreshing</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=" mt-25">
              <div class="h3">Frequently Asked Question</div>
              <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
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
        <!--End Services Details Content-->
      </div>
    </div>
  </section>
  <!--End Services Details-->

    <!-- Main Footer -->
    
@endsection
