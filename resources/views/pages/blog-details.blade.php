@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | News Details')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Blog Details</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Blog Details</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

    <!--Blog Details Start-->
    <section class="blog-details pt-120 pb-120">
      <div class="container">
        <div class="row">
          <div class="col-xl-8 col-lg-7">
            <div class="blog-details__left">
              <div class="blog-details__img">
                <img src="{{ asset('images/resource/news-details.jpg') }}" alt="">
                <div class="blog-details__date">
                  <span class="day">28</span>
                  <span class="month">Aug</span>
                </div>
              </div>
              <div class="blog-details__content">
                <ul class="list-unstyled blog-details__meta">
                  <li><a href="{{ route('blog.details') }}"><i class="fas fa-user-circle"></i> Admin</a> </li>
                  <li><a href="{{ route('blog.details') }}"><i class="fas fa-comments"></i> 02 Comments</a>
                  </li>
                </ul>
                <div class="h3 blog-details__title">We Ensure Best Quality Yogava Service</div>
                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
                <p class="blog-details__text-2">Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla. Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla, sollicitudin at euismod nec, feugiat at nisi. Quisque vitae odio nec lacus interdum tempus. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae et nunc. Sed vitae leo vitae nisl pellentesque semper.</p>
              </div>
              <div class="blog-details__bottom">
                <p class="blog-details__tags"> <span>Tags</span> <a href="{{ route('blog.details') }}">Business</a> <a href="{{ route('blog.details') }}">Agency</a> </p>
                <div class="blog-details__social-list"> <a href="{{ route('blog.details') }}"><i class="fab fa-twitter"></i></a> <a href="{{ route('blog.details') }}"><i class="fab fa-facebook"></i></a> <a href="{{ route('blog.details') }}"><i class="fab fa-pinterest-p"></i></a> <a href="{{ route('blog.details') }}"><i class="fab fa-instagram"></i></a> </div>
              </div>
              <div class="nav-links">
                <div class="prev">
                  <a href="{{ route('blog.details') }}" rel="prev">Bring to the table win-win survival strategies</a>
                </div>
                <div class="next">
                  <a href="{{ route('blog.details') }}" rel="next">How to lead a healthy &amp; well-balanced life</a>
                </div>
              </div>
              <div class="comment-one">
                <div class="h3 comment-one__title">2 Comments</div>
                <div class="comment-one__single">
                  <div class="comment-one__image"> <img src="{{ asset('images/resource/client-3.jpg') }}" alt=""> </div>
                  <div class="comment-one__content">
                    <div class="h3">Kevin Martin</div>
                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                      Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                      sollicitudin at euismod.
                    </p>
                    <a href="{{ route('blog.details') }}" class="theme-btn btn-style-two comment-one__btn"><span class="btn-title">Reply</span></a>
                  </div>
                </div>
                <div class="comment-one__single">
                  <div class="comment-one__image"> <img src="{{ asset('images/resource/client-2.jpg') }}" alt=""> </div>
                  <div class="comment-one__content">
                    <div class="h3">Sarah Albert</div>
                    <p>Mauris non dignissim purus, ac commodo diam. Donec sit amet lacinia nulla.
                      Aliquam quis purus in justo pulvinar tempor. Aliquam tellus nulla,
                      sollicitudin at euismod.
                    </p>
                    <a href="{{ route('blog.details') }}" class="theme-btn btn-style-two comment-one__btn"><span class="btn-title">Reply</span></a>
                  </div>
                </div>
                <div class="comment-form">
                  <div class="h3 comment-form__title">Leave a Comment</div>
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
                    <div class="mb-3">
                      <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-3">
                      <input name="form_botcheck" class="form-control" type="hidden" value="" />
                      <button type="submit" class="theme-btn btn-style-two" data-loading-text="Please wait..."><span class="btn-title">Submit Comment</span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="sidebar">
              <div class="sidebar__single sidebar__search">
                <form action="#" class="sidebar__search-form">
                  <input type="search" placeholder="Search here">
                  <button type="submit"><i class="lnr-icon-search"></i></button>
                </form>
              </div>
              <div class="sidebar__single sidebar__post">
                <div class="h3 sidebar__title">Latest Posts</div>
                <ul class="sidebar__post-list list-unstyled">
                  <li>
                    <div class="sidebar__post-image"> <img src="{{ asset('images/resource/blog1-1.jpg') }}" alt=""> </div>
                    <div class="sidebar__post-content">
                      <div class="h3"> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="{{ route('blog.details') }}">Finding Life Balance Through Yoga and Meditation</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__post-image"> <img src="{{ asset('images/resource/blog1-2.jpg') }}" alt=""> </div>
                    <div class="sidebar__post-content">
                      <div class="h3"> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="{{ route('blog.details') }}">Healing the Body and Soul Through Retreats</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__post-image"> <img src="{{ asset('images/resource/blog1-3.jpg') }}" alt=""> </div>
                    <div class="sidebar__post-content">
                      <div class="h3"> <span class="sidebar__post-content-meta"><i class="fas fa-user-circle"></i>Admin</span> <a href="{{ route('blog.details') }}">Why Luxury Wellness Retreats Captivate the Soul</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="sidebar__single sidebar__category">
                <div class="h3 sidebar__title">Categories</div>
                <ul class="sidebar__category-list list-unstyled">
                  <li><a href="{{ route('blog.details') }}">Back Pain<span class="lnr-icon-arrow-right"></span></a> </li>
                  <li class="active"><a href="{{ route('blog.details') }}">Muscle Tension<span class="lnr-icon-arrow-right"></span></a></li>
                  <li><a href="{{ route('blog.details') }}">Sports Injuries<span class="lnr-icon-arrow-right"></span></a> </li>
                  <li><a href="{{ route('blog.details') }}">Pain Management<span class="lnr-icon-arrow-right"></span></a> </li>
                  <li><a href="{{ route('blog.details') }}">Burnout Recovery<span class="lnr-icon-arrow-right"></span></a> </li>
                  <li><a href="{{ route('blog.details') }}">Depression Support<span class="lnr-icon-arrow-right"></span></a> </li>
                </ul>
              </div>
              <div class="sidebar__single sidebar__tags">
                <div class="h3 sidebar__title">Tags</div>
                <div class="sidebar__tags-list"> <a href="#">Support</a> <a href="#">Recovery</a> <a href="#">Pain</a> <a href="#">Injuries</a> <a href="#">Wellness</a> <a href="#">Health-tips</a> </div>
              </div>
              <div class="sidebar__single sidebar__comments">
                <div class="h3 sidebar__title">Recent Comments</div>
                <ul class="sidebar__comments-list list-unstyled">
                  <li>
                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                    <div class="sidebar__comments-text-box"><p>A wordpress commenter on <br /> launch new mobile app</p></div>
                  </li>
                  <li>
                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                    <div class="sidebar__comments-text-box">
                      <p> <span>John Doe</span> on template:</p>
                      <div class="h5">comments</div>
                    </div>
                  </li>
                  <li>
                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                    <div class="sidebar__comments-text-box"><p>A wordpress commenter on <br /> launch new mobile app</p></div>
                  </li>
                  <li>
                    <div class="sidebar__comments-icon"> <i class="fas fa-comments"></i> </div>
                    <div class="sidebar__comments-text-box">
                      <p> <span>John Doe</span> on template:</p>
                      <div class="h5">comments</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Blog Details End-->

    <!-- Main Footer -->
    
@endsection
