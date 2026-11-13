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
      <div class="row clearfix">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <div class="shop-sidebar">
            <div class="sidebar-search">
              <form action="shop-products.html" method="post" class="search-form">
                <div class="form-group">
                  <input type="search" name="search-field" placeholder="Search..." required="">
                  <button><i class="lnr lnr-icon-search"></i></button>
                </div>
              </form>
            </div>
            <div class="sidebar-widget category-widget">
              <div class="widget-title">
                <div class="h5 widget-title">Categories</div>
              </div>
              <div class="widget-content">
                <ul class="category-list clearfix">
                  <li><a href="{{ route('shop.details') }}">Decor Items</a></li>
                  <li><a href="{{ route('shop.details') }}">Furniture</a></li>
                  <li><a href="{{ route('shop.details') }}">Plants & Pots</a></li>
                  <li><a href="{{ route('shop.details') }}">Home Accessories</a></li>
                  <li><a href="{{ route('shop.details') }}">Lifestyle Essentials</a></li>
                  <li><a href="{{ route('shop.details') }}">Trending Products</a></li>
                </ul>
              </div>
            </div>
            <div class="sidebar-widget price-filters">
              <div class="widget-title">
                <div class="h5 widget-title">Filter by Price</div>
              </div>
              <div class="range-slider clearfix">
                <div class="price-range-slider"></div>
                <div class="clearfix">
                  <p>Price:</p>
                  <div class="title"></div>
                  <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                  <input type="submit" value="Filter">
                </div>
              </div>
            </div>
            <div class="sidebar-widget post-widget">
              <div class="widget-title">
                <div class="h5 widget-title">Popular Products</div>
              </div>
              <div class="post-inner">
                <div class="post">
                  <figure class="post-thumb"><a href="shop-details.html"><img src="{{ asset('images/resource/products/thumb-1.jpg') }}" alt=""></a></figure>
                  <a href="{{ route('shop.details') }}">Best Headset</a>
                  <span class="price">$45.00</span>
                </div>
                <div class="post">
                  <figure class="post-thumb"><a href="shop-details.html"><img src="{{ asset('images/resource/products/thumb-2.jpg') }}" alt=""></a></figure>
                  <a href="{{ route('shop.details') }}">Quality Battery</a>
                  <span class="price">$34.00</span>
                </div>
                <div class="post">
                  <figure class="post-thumb"><a href="shop-details.html"><img src="{{ asset('images/resource/products/thumb-3.jpg') }}" alt=""></a></figure>
                  <a href="{{ route('shop.details') }}">Smart Watch</a>
                  <span class="price">$29.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 content-side">
          <!--MixitUp Galery-->
          <div class="mixitup-gallery mt-5 mt-lg-0">
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
              <div class="product-block all mix pantry fruit col-lg-4 col-md-6 col-sm-12">
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
              <div class="product-block all mix dairy meat fruit col-lg-4 col-md-6 col-sm-12">
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
              <div class="product-block all mix pantry fruit vagetables col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/3.jpg') }}" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="{{ route('shop.details') }}">Sunglasses</a></div>
                    <span class="price">$43.00</span>
                    <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                  </div>
                  <div class="icon-box">
                    <a href="{{ route('shop.details') }}" class="ui-btn like-btn"><i class="fa fa-heart"></i></a>
                    <a href="{{ route('cart') }}" class="ui-btn add-to-cart"><i class="fa fa-shopping-cart"></i></a>
                  </div>
                </div>
              </div>

              <!--Product Block-->
              <div class="product-block all mix dairy meat vagetables col-lg-4 col-md-6 col-sm-12">
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
              <div class="product-block all mix pantry meat fruit col-lg-4 col-md-6 col-sm-12">
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
              <div class="product-block all mix dairy pantry col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/6.jpg') }}" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="{{ route('shop.details') }}">Party Bag</a></div>
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
              <div class="product-block all mix fruit vagetables col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/7.jpg') }}" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="{{ route('shop.details') }}">Coffee Mug</a></div>
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
              <div class="product-block all mix dairy pantry meat vagetables col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <div class="image"><a href="{{ route('shop.details') }}"><img src="{{ asset('images/resource/products/8.jpg') }}" alt=""/></a></div>
                  <div class="content">
                    <div class="h4"><a href="{{ route('shop.details') }}">Smart Watch</a></div>
                    <span class="price">$30.00</span>
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
      </div>
    </div>
  </section>
  <!-- End Featured Products -->

    <!-- Main Footer -->
    
@endsection
