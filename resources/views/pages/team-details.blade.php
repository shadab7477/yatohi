@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Team Details')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Team Details</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Team Details</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!--Team Details Start-->
  <section class="team-details">
    <div class="container pt-120 pb-100">
      <div class="team-details__top pb-70">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__top-left">
              <div class="team-details__top-img"> <img src="{{ asset('images/resource/team-details.jpg') }}" alt="">
                <div class="team-details__big-text"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__top-right">
              <div class="team-details__top-content">
                <div class="h3 team-details__top-name">Aleesha Brown</div>
                <p class="team-details__top-title">Managing Director & CEO</p>
                <p class="team-details__top-text-1">I help my clients stand out and they help me grow.</p>
                <div class="team-details-contact mb-30">
                  <div class="h5 mb-0">Email Address</div>
                  <div class=""><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96f8f3f3f2fef3fae6d6eff9e3e4f2f9fbf7fff8b8f5f9fb">[email&#160;protected]</a></span></div>
                </div>
                <div class="team-details-contact mb-30">
                  <div class="h5 mb-0">Phone Number</div>
                  <div class=""><span>+012-3456-789</span></div>
                </div>
                <div class="team-details-contact">
                  <div class="h5 mb-0">Web Address</div>
                  <div class=""><span>www.yourdomain.com</span></div>
                </div>
                <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="team-details__bottom pt-100">
        <div class="row">
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__bottom-left">
              <div class="h4 team-details__bottom-left-title">Personal Experience</div>
              <p class="team-details__bottom-left-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="team-details__bottom-right">
              <div class="team-details__progress">
                <div class="team-details__progress-single">
                  <div class="h4 team-details__progress-title">Tecnology</div>
                  <div class="bar">
                    <div class="bar-inner count-bar" data-percent="90%">
                      <div class="count-text">90%</div>
                    </div>
                  </div>
                </div>
                <div class="team-details__progress-single">
                  <div class="h4 team-details__progress-title">Marketing</div>
                  <div class="bar">
                    <div class="bar-inner count-bar" data-percent="80%">
                      <div class="count-text">80%</div>
                    </div>
                  </div>
                </div>
                <div class="team-details__progress-single">
                  <div class="h4 team-details__progress-title">Business</div>
                  <div class="bar marb-0">
                    <div class="bar-inner count-bar" data-percent="75%">
                      <div class="count-text">75%</div>
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
  <!--Team Details End--> 

  <!--Contact Details Start-->
  <section class="team-contact-form">
    <div class="container pt-120 pb-120">
      <div class="sec-title text-center">
        <div class="h2 section-title__title">Feel Free to Write Our <br /> Tecnology Experts</div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <!-- Contact Form -->
          <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                </div>
              </div>
            </div>
            <div class="mb-3">
              <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
            </div>
            <div class="mb-3 text-center">
              <input name="form_botcheck" class="form-control" type="hidden" value="" />
              <button type="submit" class="theme-btn btn-style-two" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
              <button type="reset" class="theme-btn btn-style-two"><span class="btn-title">Reset</span></button>
            </div>
          </form>
          <!-- Contact Form Validation-->
        </div>
      </div>
    </div>
  </section>
  <!--Contact Details End-->

    <!-- Main Footer -->
    
@endsection
