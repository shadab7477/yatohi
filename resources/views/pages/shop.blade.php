@extends('layouts.app', ['headerStyle' => 'two', 'footerStyle' => 'one'])

@section('title', 'Yogava - Yoga Fitness HTML Template | Shop')

@section('content')
<!--End Main Header -->

    <!-- Start main-content -->
    <section class="page-title" style="background-image: url('{{ asset('images/resource/page-title.jpg') }}');">
      <div class="auto-container">
        <div class="title-outer text-center">
          <div class="h1 title">Shop</div>
          <ul class="page-breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>Shop</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- end main-content -->

  <!-- Featured Products -->
  <section class="featured-products">
    <div class="auto-container">

      <!--MixitUp Galery-->
      <div class="mixitup-gallery">
        <!--Filter-->
        <div class="filters clearfix">
          <ul class="filter-tabs filter-btns clearfix">
            <li class="active filter" data-role="button" data-filter="all">All</li>
            <li class="filter" data-role="button" data-filter=".dairy">Decor</li>
            <li class="filter" data-role="button" data-filter=".pantry">Furniture</li>
            <li class="filter" data-role="button" data-filter=".meat">Lifestyle</li>
            <li class="filter" data-role="button" data-filter=".fruit">Accessories</li>
            <li class="filter" data-role="button" data-filter=".vagetables">Essentials</li>
          </ul>
        </div>

        <div class="filter-list row">
          <!--Product Block-->
          <div class="product-block all mix pantry fruit col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/1.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Show Piece</a></div>
                <span class="price">$32.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>

          <!--Product Block-->
          <div class="product-block all mix dairy meat fruit col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/2.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Leather Belt</a></div>
                <span class="price">$52.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>

          <!--Product Block-->
          <div class="product-block all mix pantry fruit vagetables col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/3.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Sunglasses</a></div>
                <span class="price">$42.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>

          <!--Product Block-->
          <div class="product-block all mix dairy meat vagetables col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/4.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Backpack</a></div>
                <span class="price">$22.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>

          <!--Product Block-->
          <div class="product-block all mix pantry meat fruit col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/5.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Hand Watch</a></div>
                <span class="price">$34.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>

          <!--Product Block-->
          <div class="product-block all mix dairy pantry col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/6.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Party Bag</a></div>
                <span class="price">$25.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>

          <!--Product Block-->
          <div class="product-block all mix fruit vagetables col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/7.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Coffee Mug</a></div>
                <span class="price">$20.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>

          <!--Product Block-->
          <div class="product-block all mix dairy pantry meat vagetables col-lg-3 col-md-6 col-sm-12">
            <div class="inner-box">
              <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/8.jpg') }}" alt=""/></a></div>
              <div class="content">
                <div class="h4"><a href="{{ route('shop.details') }}">Smart Watch</a></div>
                <span class="price">$40.00</span>
                <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
              </div>
              <div class="icon-box">
                <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Featured Products -->

    <!-- Main Footer -->
    
@endsection
