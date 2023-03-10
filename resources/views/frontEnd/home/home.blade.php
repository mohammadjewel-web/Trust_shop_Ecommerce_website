@extends('frontEnd.master')
@section('title')
    Home
@endsection
@section('content')
    <div id="common-home">
        <div id="_desktop_services">
            <div class="ishiservicesblock" style="background: #f5f5f5;">
                <div class="ishiservices container">
                    <div class="services-container">
                        <div class="row">
                            <div class="services col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <a href="#">
                                    <div class="service-img"
                                         style="background-image: url({{asset('frontEndAssets')}}/image/cache/catalog/services/1-50x110.png);">
                                    </div>
                                    <div class="service-block">
                                        <div class="service-title">Worldwide Delivery</div>
                                        <div class="service-desc">Lorem ipsum dolor sit consect</div>
                                    </div>
                                </a>
                            </div>
                            <div class="services col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <a href="#">
                                    <div class="service-img"
                                         style="background-image: url({{asset('frontEndAssets')}}/image/cache/catalog/services/2-50x110.png);">
                                    </div>
                                    <div class="service-block">
                                        <div class="service-title">24X7 support</div>
                                        <div class="service-desc">Lorem ipsum dolor sit consect</div>
                                    </div>
                                </a>
                            </div>
                            <div class="services col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <a href="#">
                                    <div class="service-img"
                                         style="background-image: url({{asset('frontEndAssets')}}/image/cache/catalog/services/3-50x110.png);">
                                    </div>
                                    <div class="service-block">
                                        <div class="service-title">Gift Voucher</div>
                                        <div class="service-desc">Lorem ipsum dolor sit consect</div>
                                    </div>
                                </a>
                            </div>
                            <div class="services col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                <a href="#">
                                    <div class="service-img"
                                         style="background-image: url({{asset('frontEndAssets')}}/image/cache/catalog/services/4-50x110.png);">
                                    </div>
                                    <div class="service-block">
                                        <div class="service-title">Great saving</div>
                                        <div class="service-desc">Lorem ipsum dolor sit consect</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="ishislider-613532056" class="ishislider">
            <div class="owl-carousel">
                <div class="item">
                    <a href="#" class="slideshow__link">
                        <img src="{{asset('frontEndAssets')}}/image/cache/catalog/slider/slide-1-1920x600.jpg"
                             alt="Capture World" class="img-responsive"/>
                        <div class="container">
                            <div class="slider-content col-lg-6 col-md-6 col-sm-6 col-xs-6 slider-content-right"
                                 style="text-align:center">
                                <div class="sub-title" style="color:#ffffff">Dolby Digital Sound</div>
                                <div class="main-title" style="color: #fedb22">Capture World</div>
                                <div class="desc">
                                    <p style="color: #ffffff">ORDER NOW GET ASSURED CASHBACK AND FREE DELIVERY!</p>
                                </div>
                                <div class="slider-btn"><span class="btn-default btn">SHOP NOW</span></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="#" class="slideshow__link">
                        <img src="{{asset('frontEndAssets')}}/image/cache/catalog/slider/slide-2-1920x600.jpg"
                             alt="Capture Moment" class="img-responsive"/>
                        <div class="container">
                            <div class="slider-content col-lg-6 col-md-6 col-sm-6 col-xs-6 slider-content-right"
                                 style="text-align:center">
                                <div class="sub-title" style="color:#ffffff">High Definition Audio</div>
                                <div class="main-title" style="color: #fedb22">Capture Moment</div>
                                <div class="desc">
                                    <p style="color: #ffffff">ORDER NOW GET ASSURED CASHBACK AND FREE DELIVERY!</p>
                                </div>
                                <div class="slider-btn"><span class="btn-default btn">SHOP NOW</span></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <script type="text/javascript">
                $('#ishislider-613532056 .owl-carousel').owlCarousel({
                    loop: true,
                    nav: true,
                    dots: true,
                    autoplay: true,
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    animateOut: 'fadeOut',
                    dotsClass: 'owl-dots ishi-style-dot2',
                    navClass: ["owl-prev ishi-style-nav5", "owl-next ishi-style-nav5"],
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });
            </script>
        </section>
        <div id="_mobile_services"></div>
        <div id="ishiproductblock-1590745433" class="ishiproductsblock container">
            <h3 class="home-title">Trending Now</h3>
            <div class="featured-products-block products-block clearfix row">
                <div class="products_block_inner product-info col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <div class="product-bgcolor">
                        <div class="owl-carousel product-thumbnail col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            @foreach($trending_products as $trending_product)
                                <div class="item product-container" data-countdowntime="">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="{{route('product-details', ['id' => $trending_product->id])}}">
                                                <img src="{{ asset($trending_product->image) }}"
                                                     alt="{{route('product-details', ['id' => $trending_product->id])}}"
                                                     title="" class="img-responsive"/>
                                                <img class="product-img-extra img-responsive" alt="" title=""
                                                     src="{{ asset($trending_product->image) }}"/>
                                            </a>

                                            <div class="rating">

                                <span class="fa fa-stack">
                                  <i class="fa fa-star yellow fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star yellow fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star yellow fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>
                                            </div>
                                            <div class="button-group">
                                                <div class="btn-quickview">
                                                    <div class="quickview-button button" data-toggle="tooltip"
                                                         title=" Quick View">
                                                        <a class="quickbox"
                                                           href="{{route('product-details', ['id' => $trending_product->id])}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="display: none;">
                                                                <symbol id="eye-open" viewBox="0 0 1010 1010"><title>
                                                                        eye-open</title>
                                                                    <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                                </symbol>
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 30 30">
                                                                <use xlink:href="#eye-open" x="23%" y="24%"></use>
                                                            </svg>
                                                            <i class="fa fa-eye" aria-hidden="true"></i><span
                                                                    class="lblcart">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="btn-wishlist">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                            onclick="wishlist.add('42');"><i class="fa fa-heart"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="heart-shape-outline" viewBox="0 0 1150 1150">
                                                                <title>heart-shape-outline</title>
                                                                <path d="M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569 c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553 C474.988,241.811,492.719,206.017,492.719,166.008z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#heart-shape-outline" x="27%"
                                                                 y="28%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="btn-compare">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onclick="compare.add('42');"><i
                                                                class="fa fa-exchange"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="report" viewBox="0 0 1250 1250"><title>
                                                                    report</title>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                                <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                                <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                                <path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                                <path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#report" x="23%" y="24%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h4>
                                                <a href="{{route('product-details', ['id' => $trending_product->id])}}">{{$trending_product->name}}</a>
                                            </h4>
                                            <p class="price">
                                                {{$trending_product->selling_price}}

                                            </p>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Product Details"
                                                        onclick="{{route('product-details', ['id' => $trending_product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a style="color: white" class="lblcart"
                                                       href="{{route('product-details', ['id' => $trending_product->id])}}"><span>Product Details</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="product-img col-xl-3 col-lg-3">
                    <a href="#" class="ishi-customhover-fadeinrotate"><img
                                src="{{asset('frontEndAssets')}}/image/catalog/featuredproducts.jpg" alt="Trending Now"></a>
                </div>
            </div>


            <script type="text/javascript">
                $('#ishiproductblock-1590745433 .owl-carousel').owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    rewind: true,
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
            </script>
        </div>
        <div id="ishiproductblock-38898634" class="ishiproductsblock container">


            <h3 class="home-title">New Arrivals</h3>
            <div class="new-products-block products-block clearfix row">
                <div class="product-img col-xl-3 col-lg-3">
                    <a href="#" class="ishi-customhover-doublefadeincenter"><img
                                src="{{asset('frontEndAssets')}}/image/catalog/newproducts.jpg" alt="New Arrivals"></a>
                </div>
                <div class="products_block_inner product-info col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <div class="product-bgcolor">
                        <div class="owl-carousel product-thumbnail col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            @foreach($new_products as $new_product)
                                <div class="item product-container" data-countdowntime="">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="{{route('product-details', ['id' => $new_product->id])}}">
                                                <img src="{{ asset($new_product->image) }}" alt="" title=""
                                                     class="img-responsive"/>
                                                <img class="product-img-extra img-responsive"
                                                     src="{{ asset($new_product->image) }}"/>
                                            </a>
                                            <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                            </div>
                                            <div class="button-group">
                                                <div class="btn-quickview">
                                                    <div class="quickview-button button" data-toggle="tooltip"
                                                         title=" Quick View">
                                                        <a class="quickbox" href="">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="display: none;">
                                                                <symbol id="eye-open" viewBox="0 0 1010 1010"><title>
                                                                        eye-open</title>
                                                                    <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                                </symbol>
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 30 30">
                                                                <use xlink:href="#eye-open" x="23%" y="24%"></use>
                                                            </svg>
                                                            <i class="fa fa-eye" aria-hidden="true"></i><span
                                                                    class="lblcart">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="btn-wishlist">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                            onclick="wishlist.add('42');"><i class="fa fa-heart"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="heart-shape-outline" viewBox="0 0 1150 1150">
                                                                <title>heart-shape-outline</title>
                                                                <path d="M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569 c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553 C474.988,241.811,492.719,206.017,492.719,166.008z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#heart-shape-outline" x="23%"
                                                                 y="24%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="btn-compare">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onclick="compare.add('42');"><i
                                                                class="fa fa-exchange"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="report" viewBox="0 0 1250 1250"><title>
                                                                    report</title>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                                <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                                <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                                <path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                                <path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#report" x="23%" y="24%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">{{$new_product->name}}</a></h4>
                                            <p class="price">
                                                {{$new_product->selling_price}}
                                            </p>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Product Details"
                                                        onclick="{{route('product-details', ['id' => $new_product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a style="color: white" class="lblcart"
                                                       href="{{route('product-details', ['id' => $new_product->id])}}"><span>Product Details</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $('#ishiproductblock-38898634 .owl-carousel').owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    rewind: true,
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
            </script>
        </div>
        <div id="ishiproductblock-233604592" class="ishiproductsblock container">


            <h3 class="home-title">On Discount</h3>
            <div class="special-products-block products-block clearfix row">
                <div class="products_block_inner product-info col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <div class="product-bgcolor">
                        <div class="owl-carousel product-thumbnail col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            @foreach($discount_products as $discount_product)
                                <div class="item product-container" data-countdowntime="">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="{{route('product-details', ['id' => $discount_product->id])}}">
                                                <img src="{{ asset($discount_product->image) }}" alt="iMac"
                                                     class="img-responsive"/>
                                                <img class="product-img-extra img-responsive" alt="iMac"
                                                     src="{{ asset($discount_product->image) }}"/>
                                            </a>
                                            <div class="rating">

                            <span class="fa fa-stack">
                              <i class="fa fa-star yellow fa-stack-2x"></i>
                            </span>

                                                <span class="fa fa-stack">
                              <i class="fa fa-star yellow fa-stack-2x"></i>
                            </span>

                                                <span class="fa fa-stack">
                              <i class="fa fa-star yellow fa-stack-2x"></i>
                            </span>

                                                <span class="fa fa-stack">
                              <i class="fa fa-star gray fa-stack-2x"></i>
                            </span>

                                                <span class="fa fa-stack">
                              <i class="fa fa-star gray fa-stack-2x"></i>
                            </span>
                                            </div>


                                            <div class="button-group">
                                                <div class="btn-quickview">
                                                    <div class="quickview-button button" data-toggle="tooltip"
                                                         title=" Quick View">
                                                        <a class="quickbox"
                                                           href="{{asset('frontEndAssets')}}/index059b.html?route=product/quick_view&amp;product_id=41">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="display: none;">
                                                                <symbol id="eye-open" viewBox="0 0 1010 1010"><title>
                                                                        eye-open</title>
                                                                    <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                                </symbol>
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 30 30">
                                                                <use xlink:href="#eye-open" x="23%" y="24%"></use>
                                                            </svg>
                                                            <i class="fa fa-eye" aria-hidden="true"></i><span
                                                                    class="lblcart">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="btn-wishlist">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                            onclick="wishlist.add('41');"><i class="fa fa-heart"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="heart-shape-outline" viewBox="0 0 1150 1150">
                                                                <title>heart-shape-outline</title>
                                                                <path d="M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569 c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553 C474.988,241.811,492.719,206.017,492.719,166.008z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#heart-shape-outline" x="23%"
                                                                 y="24%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="btn-compare">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onclick="compare.add('41');"><i
                                                                class="fa fa-exchange"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="report" viewBox="0 0 1250 1250"><title>
                                                                    report</title>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                                <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                                <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                                <path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                                <path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#report" x="23%" y="24%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="">{{$discount_product->name}}</a></h4>
                                            <p class="price">
                                                <span class="price-new">{{$discount_product->selling_price}}</span>
                                                <span class="price-old">{{$discount_product->regular_price}}</span>
                                            </p>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Product Details"
                                                        onclick="{{route('product-details', ['id' => $discount_product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a style="color: white" class="lblcart"
                                                       href="{{route('product-details', ['id' => $discount_product->id])}}"><span>Product Details</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="product-img col-xl-3 col-lg-3">
                    <a href="#" class="ishi-customhover-fadeinbottom"><img
                                src="{{asset('frontEndAssets')}}/image/catalog/discountproduct.jpg" alt="On Discount"></a>
                </div>
            </div>

            <script type="text/javascript">
                $('#ishiproductblock-233604592 .owl-carousel').owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    rewind: true,
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
            </script>
        </div>
        <div id="ishiproductblock-442215304" class="ishiproductsblock container">


            <h3 class="home-title">Best Selling</h3>
            <div class="bestseller-products-block products-block clearfix row">
                <div class="product-img col-xl-3 col-lg-3">
                    <a href="#" class="ishi-customhover-fadeinnormal"><img
                                src="{{asset('frontEndAssets')}}/image/catalog/bestproducts.jpg" alt="Best Selling"></a>
                </div>
                <div class="products_block_inner product-info col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <div class="product-bgcolor">
                        <div class="owl-carousel product-thumbnail col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            @foreach($best_products as $best_product)
                                <div class="item product-container" data-countdowntime="">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="{{route('product-details', ['id' => $best_product->id])}}">
                                                <img src="{{ asset($best_product->image) }}" alt="iPod Nano"
                                                     class="img-responsive"/>
                                                <img class="product-img-extra img-responsive" alt="iPod Nano"
                                                     src="{{ asset($best_product->image) }}"/>
                                            </a>
                                            <div class="rating">

                              <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>

                                                <span class="fa fa-stack">
                                <i class="fa fa-star yellow fa-stack-2x"></i>
                              </span>
                                            </div>


                                            <div class="button-group">
                                                <div class="btn-quickview">
                                                    <div class="quickview-button button" data-toggle="tooltip"
                                                         title=" Quick View">
                                                        <a class="quickbox"
                                                           href="{{asset('frontEndAssets')}}/index0d3e.html?route=product/quick_view&amp;product_id=36">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="display: none;">
                                                                <symbol id="eye-open" viewBox="0 0 1010 1010"><title>
                                                                        eye-open</title>
                                                                    <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                                </symbol>
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 30 30">
                                                                <use xlink:href="#eye-open" x="23%" y="24%"></use>
                                                            </svg>
                                                            <i class="fa fa-eye" aria-hidden="true"></i><span
                                                                    class="lblcart">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="btn-wishlist">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                            onclick="wishlist.add('36');"><i class="fa fa-heart"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="heart-shape-outline" viewBox="0 0 1150 1150">
                                                                <title>heart-shape-outline</title>
                                                                <path d="M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569 c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553 C474.988,241.811,492.719,206.017,492.719,166.008z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#heart-shape-outline" x="23%"
                                                                 y="24%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="btn-compare">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onclick="compare.add('36');"><i
                                                                class="fa fa-exchange"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="report" viewBox="0 0 1250 1250"><title>
                                                                    report</title>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                                <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                                <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                                <path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                                <path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#report" x="25%" y="28%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h4>
                                                <a href="{{route('product-details', ['id' => $best_product->id])}}">{{$best_product->name}}</a>
                                            </h4>
                                            <p class="price">
                                                {{$best_product->selling_price}}
                                            </p>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Product Details"
                                                        onclick="{{route('product-details', ['id' => $best_product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a style="color: white" class="lblcart"
                                                       href="{{route('product-details', ['id' => $best_product->id])}}"><span>Product Details</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $('#ishiproductblock-442215304 .owl-carousel').owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    rewind: true,
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
            </script>
        </div>
        <section id="ishibannerblock-1438208481" class="ishibannerblock">
            <div class="bannerblock col-md-4 col-sm-4 col-xs-12">
                <div class="image-container">
                    <div class="scale banner-scale">
                        <img src="{{asset('frontEndAssets')}}/image/cache/catalog/banner/1-640x350.jpg" alt="Beats"
                             class="img-responsive">

                        <div class="banner-desc">
                            <div class="banner-data">
                                <div class="banner-title">Beats</div>
                                <div class="banner-subtitle">Headphone</div>
                            </div>
                            <div class="banner-btn">
                                <a href="#" class="btn-primary">SHOP NOW</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="bannerblock col-md-4 col-sm-4 col-xs-12">
                <div class="image-container">
                    <div class="scale banner-scale">
                        <img src="{{asset('frontEndAssets')}}/image/cache/catalog/banner/2-640x350.jpg" alt="Modern"
                             class="img-responsive">

                        <div class="banner-desc">
                            <div class="banner-data">
                                <div class="banner-title">Modern</div>
                                <div class="banner-subtitle">Smartwatch</div>
                            </div>
                            <div class="banner-btn">
                                <a href="#" class="btn-primary">SHOP NOW</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="bannerblock col-md-4 col-sm-4 col-xs-12">
                <div class="image-container">
                    <div class="scale banner-scale">
                        <img src="{{asset('frontEndAssets')}}/image/cache/catalog/banner/3-640x350.jpg" alt="Discover"
                             class="img-responsive">

                        <div class="banner-desc">
                            <div class="banner-data">
                                <div class="banner-title">Discover</div>
                                <div class="banner-subtitle">Smartphone</div>
                            </div>
                            <div class="banner-btn">
                                <a href="#" class="btn-primary">SHOP NOW</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <div id="ishispecialblock-2095087714" class="ishispecialblock container">
            <h3 class="home-title">Special Product</h3>
            <div class="products-block clearfix row">
                <div class="products_block_inner product-info col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <div class="product-bgcolor">
                        <div class="owl-carousel product-thumbnail col-xl-9 col-lg-9 col-md-12 col-sm-12">

                            @foreach($trending_products as $trending_product)
                                <div class="item product-container" data-countdowntime="">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <a href="{{route('product-details', ['id' => $trending_product->id])}}">
                                                <img src="{{ asset($trending_product->image) }}"
                                                     alt="{{route('product-details', ['id' => $trending_product->id])}}"
                                                     title="" class="img-responsive"/>
                                                <img class="product-img-extra img-responsive" alt="" title=""
                                                     src="{{ asset($trending_product->image) }}"/>
                                            </a>

                                            <div class="rating">

                                <span class="fa fa-stack">
                                  <i class="fa fa-star yellow fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star yellow fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star yellow fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>

                                                <span class="fa fa-stack">
                                  <i class="fa fa-star gray fa-stack-2x"></i>
                                </span>
                                            </div>


                                            <div class="button-group">
                                                <div class="btn-quickview">
                                                    <div class="quickview-button button" data-toggle="tooltip"
                                                         title=" Quick View">
                                                        <a class="quickbox"
                                                           href="{{route('product-details', ['id' => $trending_product->id])}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 style="display: none;">
                                                                <symbol id="eye-open" viewBox="0 0 1010 1010"><title>
                                                                        eye-open</title>
                                                                    <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                                </symbol>
                                                            </svg>
                                                            <svg class="icon" viewBox="0 0 30 30">
                                                                <use xlink:href="#eye-open" x="23%" y="24%"></use>
                                                            </svg>
                                                            <i class="fa fa-eye" aria-hidden="true"></i><span
                                                                    class="lblcart">Quick View</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="btn-wishlist">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                            onclick="wishlist.add('42');"><i class="fa fa-heart"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="heart-shape-outline" viewBox="0 0 1150 1150">
                                                                <title>heart-shape-outline</title>
                                                                <path d="M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569 c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553 C474.988,241.811,492.719,206.017,492.719,166.008z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#heart-shape-outline" x="27%"
                                                                 y="28%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="btn-compare">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onclick="compare.add('42');"><i
                                                                class="fa fa-exchange"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="report" viewBox="0 0 1250 1250"><title>
                                                                    report</title>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m480 258.667969h60v220h-60zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m240 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m200 118.667969h60v360h-60zm0 0"/>
                                                                <path d="m340-1.332031h60v480h-60zm0 0"/>
                                                                <path d="m60 358.667969h60v120h-60zm0 0"/>
                                                                <path d="m60 548.667969c.035156-3.414063.65625-6.796875 1.839844-10h-51.839844c-5.523438 0-10 4.476562-10 10 0 5.519531 4.476562 10 10 10h51.839844c-1.183594-3.203125-1.804688-6.589844-1.839844-10zm0 0"/>
                                                                <path d="m118.160156 538.667969c2.457032 6.4375 2.457032 13.558593 0 20h83.679688c-2.457032-6.441407-2.457032-13.5625 0-20zm0 0"/>
                                                                <path d="m100 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m380 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m341.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m481.839844 558.667969c-2.457032-6.441407-2.457032-13.5625 0-20h-83.679688c2.457032 6.4375 2.457032 13.558593 0 20zm0 0"/>
                                                                <path d="m520 548.667969c0 5.519531-4.476562 10-10 10s-10-4.480469-10-10c0-5.523438 4.476562-10 10-10s10 4.476562 10 10zm0 0"/>
                                                                <path d="m590 538.667969h-51.839844c2.457032 6.4375 2.457032 13.558593 0 20h51.839844c5.523438 0 10-4.480469 10-10 0-5.523438-4.476562-10-10-10zm0 0"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#report" x="23%" y="24%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h4>
                                                <a href="{{route('product-details', ['id' => $trending_product->id])}}">{{$trending_product->name}}</a>
                                            </h4>
                                            <p class="price">
                                                {{$trending_product->selling_price}}

                                            </p>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Product Details"
                                                        onclick="{{route('product-details', ['id' => $trending_product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a style="color: white" class="lblcart"
                                                       href="{{route('product-details', ['id' => $trending_product->id])}}"><span>Product Details</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="product-img col-xl-3 col-lg-3">
                    <a href="#" class="ishi-customhover-fadeoutcenter"><img
                                src="{{asset('frontEndAssets')}}/image/catalog/special-products.jpg" alt="Special Product"></a>
                </div>
            </div>
            <script type="text/javascript">
                $('#ishispecialblock-2095087714 .owl-carousel').owlCarousel({
                    loop: false,
                    nav: true,
                    dots: false,
                    rewind: true,
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 4
                        },
                        1200: {
                            items: 5
                        }
                    }
                });
            </script>
        </div>

        <div class="content_middle">
            <div class="container">
                <div class="row">
                    <section class="linklist_block col-lg-9 col-md-9 col-sm-12">
                        <div class="block_content">
                            <div id="linklist-carousel" class="owl-carousel">


                                <div class="multilevel-item">

                                    <div class="item linklist">
                                        <div class="link-img col-md-6 col-sm-6 col-xs-6">

                                            <img src="{{asset('frontEndAssets')}}/image/cache/catalog/category/1-150x198.jpg"
                                                 alt="Special" title="Special" class="img-responsive"/>

                                        </div>
                                        <div class="linklist-desc col-md-6 col-sm-6 col-xs-6">
                                            <h3> Digital Camera </h3>
                                            <ul>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Electronics</a></li>
                                                <li><a href="#">Dslr</a></li>
                                                <li><a href="#">Smartphone</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="item linklist">
                                        <div class="link-img col-md-6 col-sm-6 col-xs-6">

                                            <img src="{{asset('frontEndAssets')}}/image/cache/catalog/category/2-150x198.jpg"
                                                 alt="Special" title="Special" class="img-responsive"/>

                                        </div>
                                        <div class="linklist-desc col-md-6 col-sm-6 col-xs-6">
                                            <h3> Headphones </h3>
                                            <ul>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Electronics</a></li>
                                                <li><a href="#">Dslr</a></li>
                                                <li><a href="#">Smartphone</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>


                                <div class="multilevel-item">

                                    <div class="item linklist">
                                        <div class="link-img col-md-6 col-sm-6 col-xs-6">

                                            <img src="{{asset('frontEndAssets')}}/image/cache/catalog/category/3-150x198.jpg"
                                                 alt="Special" title="Special" class="img-responsive"/>

                                        </div>
                                        <div class="linklist-desc col-md-6 col-sm-6 col-xs-6">
                                            <h3> Smartphone </h3>
                                            <ul>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Electronics</a></li>
                                                <li><a href="#">Dslr</a></li>
                                                <li><a href="#">Smartphone</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="item linklist">
                                        <div class="link-img col-md-6 col-sm-6 col-xs-6">

                                            <img src="{{asset('frontEndAssets')}}/image/cache/catalog/category/4-150x198.jpg"
                                                 alt="Special" title="Special" class="img-responsive"/>

                                        </div>
                                        <div class="linklist-desc col-md-6 col-sm-6 col-xs-6">
                                            <h3> Smart Television </h3>
                                            <ul>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Electronics</a></li>
                                                <li><a href="#">Dslr</a></li>
                                                <li><a href="#">Smartphone</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>


                                <div class="multilevel-item">

                                    <div class="item linklist">
                                        <div class="link-img col-md-6 col-sm-6 col-xs-6">

                                            <img src="{{asset('frontEndAssets')}}/image/cache/catalog/category/5-150x198.jpg"
                                                 alt="Special" title="Special" class="img-responsive"/>

                                        </div>
                                        <div class="linklist-desc col-md-6 col-sm-6 col-xs-6">
                                            <h3> Smart Watches </h3>
                                            <ul>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Electronics</a></li>
                                                <li><a href="#">Dslr</a></li>
                                                <li><a href="#">Smartphone</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="item linklist">
                                        <div class="link-img col-md-6 col-sm-6 col-xs-6">

                                            <img src="{{asset('frontEndAssets')}}/image/cache/catalog/category/6-150x198.jpg"
                                                 alt="Special" title="Special" class="img-responsive"/>

                                        </div>
                                        <div class="linklist-desc col-md-6 col-sm-6 col-xs-6">
                                            <h3> Xbox & Gaming </h3>
                                            <ul>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Electronics</a></li>
                                                <li><a href="#">Dslr</a></li>
                                                <li><a href="#">Smartphone</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $('#linklist-carousel').owlCarousel({
                                loop: true,
                                nav: false,
                                dots: false,
                                margin: 30,
                                rewind: true,
                                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                                autoplay: false,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    767: {
                                        items: 1
                                    },
                                    768: {
                                        items: 2
                                    },
                                    991: {
                                        items: 2
                                    },
                                    1342: {
                                        items: 2
                                    },
                                    1501: {
                                        items: 3
                                    }
                                }
                            });
                        </script>
                    </section>
                    <section id="ishitesimonial-1583753167" class="ishitestimonialsblock col-lg-3 col-md-3 col-sm-12">
                        <div class="ishitestimonials-container parallax"
                             data-source-url="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/catalog/testimonial-img.jpg"
                             style="background-image: url({{asset('frontEndAssets')}}/image/catalog/testimonial-img.jpg)">
                            <h2 class="home-title">Testimonial</h2>
                            <div id="ishitestimonials-carousel" class="ishitestimonials-carousel owl-carousel">
                                <div class="item">
                                    <div class="testimonial-img">
                                        <img src="{{asset('frontEndAssets')}}/image/catalog/testimonial/testimonial-1.png"
                                             alt="Meck Jeckno">
                                    </div>
                                    <div class="testimonial-desc">
						<span class="user-name">
							Meck Jeckno
						</span>
                                        <span class="user-designation">
							Web Designer
						</span>
                                        <div class="user-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex nulla,
                                            consequat vitae blandit vel, pretium vel ligula.
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-img">
                                        <img src="{{asset('frontEndAssets')}}/image/catalog/testimonial/testimonial-2.png"
                                             alt="John Duff">
                                    </div>
                                    <div class="testimonial-desc">
						<span class="user-name">
							John Duff
						</span>
                                        <span class="user-designation">
							Web Developer
						</span>
                                        <div class="user-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex nulla,
                                            consequat vitae blandit vel, pretium vel ligula.
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-img">
                                        <img src="{{asset('frontEndAssets')}}/image/catalog/testimonial/testimonial-3.png"
                                             alt="Meck Jeckno">
                                    </div>
                                    <div class="testimonial-desc">
						<span class="user-name">
							Meck Jeckno
						</span>
                                        <span class="user-designation">
							Web Designer
						</span>
                                        <div class="user-description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ex nulla,
                                            consequat vitae blandit vel, pretium vel ligula.
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <script type="text/javascript">
                            var testslider = $('#ishitestimonials-carousel').owlCarousel({
                                loop: false,
                                dot: 0,
                                autoplay: 1,
                                items: 1,
                                rtl: $('html').attr('dir') == 'rtl' ? true : false,
                            });
                        </script>
                        <style>
                            #ishitesimonial-1583753167 {
                                background-color: #ffffff
                            }
                        </style>
                    </section>

                </div>
            </div>
        </div>
        <section id="ishimanufacturer-1822993871" class="manufacturerblock container clearfix">
            <div class="owl-carousel">
                @foreach($brands as $brand)
                    <div class="item" style="margin: 0px auto">
                        <a href="">
                            <img src="{{ asset($brand->image) }}" alt="Apple" class="img-responsive"
                                 style="height: 100px; width: 100px;"/>
                        </a>
                    </div>
                @endforeach

            </div>
            <script type="text/javascript">
                $('#ishimanufacturer-1822993871 .owl-carousel').owlCarousel({
                    loop: true,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    margin: 30,
                    animateOut: 'fadeOut',
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    responsive: {
                        0: {
                            items: 2
                        },
                        480: {
                            items: 3
                        },
                        768: {
                            items: 4
                        },
                        992: {
                            items: 5
                        },
                        1200: {
                            items: 6
                        }
                    }
                });
            </script>
        </section>
        <section class="smartblog_block clearfix">
            <h3 class="home-title">Latest Blog</h3>
            <div class="block_content">
                <div id="smartblog-carousel" class="smartblog-carousel owl-carousel">

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/index278a.html?route=information/blogger&amp;blogger_id=8">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/8-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/index278a.html?route=information/blogger&amp;blogger_id=8"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/index278a.html?route=information/blogger&amp;blogger_id=8">Lorem
                                        ipsum dolor sit amet</a></h4>
                                <div class="blog-desc"> There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suff...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/index278a.html?route=information/blogger&amp;blogger_id=8"> 1 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/index278a.html?route=information/blogger&amp;blogger_id=8">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/index11d5.html?route=information/blogger&amp;blogger_id=7">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/7-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/index11d5.html?route=information/blogger&amp;blogger_id=7"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/index11d5.html?route=information/blogger&amp;blogger_id=7">Upon
                                        of seasons earth</a></h4>
                                <div class="blog-desc"> There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suff...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/index11d5.html?route=information/blogger&amp;blogger_id=7"> 1 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/index11d5.html?route=information/blogger&amp;blogger_id=7">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/index2c9f.html?route=information/blogger&amp;blogger_id=6">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/6-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/index2c9f.html?route=information/blogger&amp;blogger_id=6"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/index2c9f.html?route=information/blogger&amp;blogger_id=6">Scelerisque
                                        vestibulum urna</a></h4>
                                <div class="blog-desc"> The standard chunk of Lorem Ipsum used since the 1500s is
                                    reproduced below for those inter...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/index2c9f.html?route=information/blogger&amp;blogger_id=6"> 3 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/index2c9f.html?route=information/blogger&amp;blogger_id=6">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/indexed5d.html?route=information/blogger&amp;blogger_id=5">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/5-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/indexed5d.html?route=information/blogger&amp;blogger_id=5"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/indexed5d.html?route=information/blogger&amp;blogger_id=5">Nec
                                        intellegat deseruisse te</a></h4>
                                <div class="blog-desc"> Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/indexed5d.html?route=information/blogger&amp;blogger_id=5"> 1 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/indexed5d.html?route=information/blogger&amp;blogger_id=5">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/index4b1d.html?route=information/blogger&amp;blogger_id=4">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/4-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/index4b1d.html?route=information/blogger&amp;blogger_id=4"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/index4b1d.html?route=information/blogger&amp;blogger_id=4">Viderer
                                        voluptatum te eum</a></h4>
                                <div class="blog-desc"> It was popularised in the 1960s with the release of Letraset
                                    sheets containing Lorem Ipsum...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/index4b1d.html?route=information/blogger&amp;blogger_id=4"> 0 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/index4b1d.html?route=information/blogger&amp;blogger_id=4">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/indexaa69.html?route=information/blogger&amp;blogger_id=3">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/3-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/indexaa69.html?route=information/blogger&amp;blogger_id=3"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/indexaa69.html?route=information/blogger&amp;blogger_id=3">Nostro
                                        expetenda voluptatum sit ex</a></h4>
                                <div class="blog-desc"> Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/indexaa69.html?route=information/blogger&amp;blogger_id=3"> 0 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/indexaa69.html?route=information/blogger&amp;blogger_id=3">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/index5463.html?route=information/blogger&amp;blogger_id=2">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/2-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/index5463.html?route=information/blogger&amp;blogger_id=2"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/index5463.html?route=information/blogger&amp;blogger_id=2">Upon
                                        of seasons earth dominion</a></h4>
                                <div class="blog-desc"> Duis faucibus enim vitae nunc moletie, nec facilisis arcu
                                    pulvinar nullammattisr nullam ma...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/index5463.html?route=information/blogger&amp;blogger_id=2"> 0 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/index5463.html?route=information/blogger&amp;blogger_id=2">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog_post item">
                        <div class="news_module_image_holder">

                            <a href="{{asset('frontEndAssets')}}/index5a4b.html?route=information/blogger&amp;blogger_id=1">
                                <img src="{{asset('frontEndAssets')}}/image/cache/catalog/blog/1-896x588.jpg" alt="Special"
                                     title="Special" class="img-responsive"/>
                            </a>
                            <a class="blogicons icon readmore_link" title="Click to view Read More "
                               href="{{asset('frontEndAssets')}}/index5a4b.html?route=information/blogger&amp;blogger_id=1"><i
                                        class="fa fa-link"></i></a>

                        </div>
                        <div class="blog_content">
                            <div class="blog_inner">
                                <span class="category"><i class="fa fa-tags"></i> Uncategories </span>
                                <h4 class="blog_title"><a
                                            href="{{asset('frontEndAssets')}}/index5a4b.html?route=information/blogger&amp;blogger_id=1">Proin
                                        faucibus massa tristique</a></h4>
                                <div class="blog-desc"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                                    ac.Lorem ipsum dolor sit am...
                                </div>
                                <div class="date-comment">
                                    <span class="date-time"> <i class="fa fa-calendar"></i>  Mon 05, 2019</span>
                                    <span class="write-comment"> <a
                                                href="{{asset('frontEndAssets')}}/index5a4b.html?route=information/blogger&amp;blogger_id=1"> 0 Comments</a></span>
                                </div>
                                <div class="view-blog">
                                    <div class="read-more"><a
                                                href="{{asset('frontEndAssets')}}/index5a4b.html?route=information/blogger&amp;blogger_id=1">
                                            <i class="fa fa-link"></i> Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $('#smartblog-carousel').owlCarousel({
                    loop: false,
                    nav: false,
                    dots: false,
                    rtl: $('html').attr('dir') == 'rtl' ? true : false,
                    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                    autoplay: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        544: {
                            items: 2
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 2
                        },
                        1200: {
                            items: 3
                        },
                        1600: {
                            items: 3
                        }
                    }
                });
            </script>
        </section>
    </div>
    <div id="_mobile_column_left" class="container"></div>
    <div id="_mobile_column_right" class="container"></div>
@endsection
