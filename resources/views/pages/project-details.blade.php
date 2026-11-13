@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Project Details')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Project Details</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Project Details</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

	<!--Project Details Start-->
	<section class="project-details pt-120">
		<div class="container">
			<div class="row">
				<div class="col-xl-12">
					<div class="project-details__top">
						<div class="project-details__img"> <img src="{{ asset('images/resource/project-details.jpg') }}" alt=""> </div>
					</div>
				</div>
			</div>
			<div class="project-details__content">
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="project-details__content-left">
							<div class="h3 mb-4">Finding Life Balance Through Yoga and Meditation</div>
							<p>Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Asperiores, repellat aliquid. Est corrupti officiis dignissimos deserunt sunt minima iusto quia saepe tempora consectetur dolor deleniti voluptatum et, eos vitae pariatur molestiae odit quos enim voluptas nobis ullam voluptatem cum iste. Dolore modi, animi optio, dignissimos delectus pariatur similique harum eos. </p>
							<p class="mb-5">Beyond more stoic this along goodness hey this this wow manatee mongoose one as since a far flustered impressive manifest Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum illo ea ad, nam quisquam optio vel tempora, minus placeat, ut nisi quam quos laboriosam eos quibusdam cum atque suscipit quod dignissimos magni doloribus facere eius soluta possimus. Officiis, autem similique sequi labore aliquid corporis illo omnis voluptate optio possimus doloremque, error reiciendis delectus ex tempore, architecto eaque, inventore nihil pariatur quibusdam facere reprehenderit? Doloribus deleniti sapiente, dicta, dolorem unde deserunt quisquam. Dolore consequuntur reiciendis corporis perspiciatis quam fuga magnam molestiae minima culpa ab beatae vel itaque cumque et adipisci autem nisi qui esse in, deserunt numquam hic? Et, eligendi, assumen daEst corrupti officiis dignissimos.</p>
						</div>
					</div>
					<div class="col-xl-4 col-lg-4">
						<div class="project-details__content-right">
							<div class="project-details__details-box">
								<div class="project-details__bg-shape"> </div>
								<ul class="list-unstyled project-details__details-list">
									<li>
										<p class="project-details__client">Date</p>
										<div class="h4 project-details__name">10 January, 2026</div>
									</li>
									<li>
										<p class="project-details__client">Client</p>
										<div class="h4 project-details__name">Kodesolution Ltd</div>
									</li>
									<li>
										<p class="project-details__client">Website</p>
										<div class="h4 project-details__name">www.domain.com</div>
									</li>
									<li>
										<p class="project-details__client">Location</p>
										<div class="h4 project-details__name">New York, USA</div>
									</li>
									<li>
										<p class="project-details__client">Value</p>
										<div class="h4 project-details__name">$12,367</div>
									</li>
									<li>
										<div class="project-details__social"> <a href="#"><i class="fa fa-x"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12">
					<div class="project-details__pagination-box">
						<ul class="project-details__pagination list-unstyled clearfix">
							<li class="next">
								<div class="icon"> <a href="#" aria-label="Previous"><i class="far fa-arrow-left-long"></i></a> </div>
								<div class="content">Previous</div>
							</li>
							<li class="count"><a href="#"></a></li>
							<li class="count"><a href="#"></a></li>
							<li class="count"><a href="#"></a></li>
							<li class="count"><a href="#"></a></li>
							<li class="previous">
								<div class="content">Next</div>
								<div class="icon"> <a href="#" aria-label="Previous"><i class="far fa-arrow-right-long"></i></a> </div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Project Details End-->

    <!-- start services-section-four -->
    <section class="services-section-four fix section-padding">
      <div class="auto-container">
        <div class="row g-2 gsap-stagger-parent">
          <div class="service-block-four col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="image"><img src="{{ asset('images/resource/service4-2.jpg') }}" alt=""></div>
              <div class="content-box">
                <div class="h3 title">Evidence-Based Mental Health Treatment</div>
                <a href="{{ route('services.details') }}" class="link-btn">Discover <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
              </div>
            </div>
          </div>
          <div class="service-block-four col-xl-4 col-md-6 gsap-stagger-item">
            <div class="inner-block">
              <div class="content">
                <div class="anim-shape float-horizontal"><img src="{{ asset('images/icons/shape-29.png') }}" alt=""></div>
                <div class="h3 title char-animation">Transform Bodyand <br>Mind Together</div>
                <a href="{{ route('contact') }}" class="theme-btn btn-style-one">Get Appointment <span><img src="{{ asset('images/icons/arrow.png') }}" alt=""></span></a>
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
      </div>
    </section>
    <!-- end services-section-four -->

    <!-- Main Footer -->
    
@endsection
