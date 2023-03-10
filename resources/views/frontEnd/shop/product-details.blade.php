@extends('frontEnd.master')
@section('title')
    Product Detail
@endsection
@section('content')

    <div id="product-product" class="container wrapper_container">
        <div class="row">
            <div id="_desktop_column_left">
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <div class="box">
                        <h2 class="page-title hidden-sm hidden-xs">
                            Categories
                        </h2>
                        <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#box-container"
                             data-toggle="collapse">
                            <span class="page-title">Categories</span>
                            <span class="navbar-toggler collapse-icons">
          <i class="fa fa-angle-down add"></i>
          <i class="fa fa-angle-up remove"></i>
        </span>
                        </div>
                        <div id="box-container" class="collapse data-toggler">
                            <ul class="category-top-menu">
                                @foreach($categories as $category)
                                    <li>

                                        <a href="{{ route('shop', ['id' => $category->id]) }}"
                                           class="list-group-item">{{$category->category_name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <section class="featured-products clearfix">
                        <h3 class="page-title hidden-sm hidden-xs">
                            Bestsellers
                        </h3>
                        <div class="block-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#bestseller-container" data-toggle="collapse">
                            <span class="page-title">Bestsellers</span>
                            <span class="navbar-toggler collapse-icons">
      <i class="fa fa-angle-down add"></i>
      <i class="fa fa-angle-up remove"></i>
    </span>
                        </div>
                        <div id="bestseller-container" class="collapse in data-toggler">
                            <div class="product-thumb transition">
                                <div class="image"><a
                                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=36"><img
                                                src="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/cache/catalog/productsimage/16-85x110.jpg"
                                                alt="iPod Nano" title="iPod Nano" class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=36">iPod
                                            Nano</a></h4>
                                    <p class="description">Video in your pocket.

                                        Its the small iPod with one very big idea: video. The worlds most popula..</p>
                                    <p class="price">
                                        $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a
                                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=28"><img
                                                src="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/cache/catalog/productsimage/12-85x110.jpg"
                                                alt="HTC Touch HD" title="HTC Touch HD" class="img-responsive"/></a>
                                </div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=28">HTC
                                            Touch HD</a></h4>
                                    <p class="description">HTC Touch - in High Definition. Watch music videos and
                                        streaming content in awe-inspiring high defin..</p>
                                    <p class="price">
                                        $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a
                                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=34"><img
                                                src="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/cache/catalog/productsimage/17-85x110.jpg"
                                                alt="iPod Shuffle" title="iPod Shuffle" class="img-responsive"/></a>
                                </div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=34">iPod
                                            Shuffle</a></h4>
                                    <p class="description">Born to be worn.

                                        Clip on the worlds most wearable music player and take up to 240 songs with
                                        y..</p>
                                    <p class="price">
                                        $100.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="ishibannerblock-623785588" class="ishibannerblock">
                        <div class="bannerblock col-md-12 col-sm-12 col-xs-4">
                            <div class="image-container">
                                <div class=" banner-scale">
                                    <img src="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/cache/catalog/Left-banner-270x350.jpg"
                                         alt="" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class="featured-products clearfix">
                        <h3 class="page-title hidden-sm hidden-xs">
                            Latest
                        </h3>
                        <div class="block-title clearfix  hidden-lg hidden-md collapsed" data-target="#latest-container"
                             data-toggle="collapse">
                            <span class="page-title">Latest</span>
                            <span class="navbar-toggler collapse-icons">
      <i class="fa fa-angle-down add"></i>
      <i class="fa fa-angle-up remove"></i>
    </span>
                        </div>
                        <div id="latest-container" class="collapse in data-toggler">
                            <div class="product-thumb transition">
                                <div class="image"><a
                                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=49"><img
                                                src="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/cache/catalog/productsimage/6-85x110.jpg"
                                                alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1"
                                                class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=49">Samsung
                                            Galaxy Tab 10.1</a></h4>
                                    <p class="description">Samsung Galaxy Tab 10.1, is the world&rsquo;s thinnest
                                        tablet, measuring 8.6 mm thickness, running w..</p>
                                    <p class="price">
                                        <span class="price-new">$20.00</span> <span class="price-old">$241.99</span>
                                        <span class="price-tax">Ex Tax: $15.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a
                                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=48"><img
                                                src="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/cache/catalog/productsimage/15-85x110.jpg"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive"/></a>
                                </div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=48">iPod
                                            Classic</a></h4>
                                    <p class="description">More room to move.

                                        With 80GB or 160GB of storage and up to 40 hours of battery life, the new..</p>
                                    <p class="price">
                                        <span class="price-new">$38.00</span> <span class="price-old">$122.00</span>
                                        <span class="price-tax">Ex Tax: $30.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a
                                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=47"><img
                                                src="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/image/cache/catalog/productsimage/11-85x110.jpg"
                                                alt="HP LP3065" title="HP LP3065" class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4>
                                        <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=47">HP
                                            LP3065</a></h4>
                                    <p class="description">Stop your co-workers in their tracks with the stunning new
                                        30-inch diagonal HP LP3065 Flat Panel Mon..</p>
                                    <p class="price">
                                        $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>

            <div id="content" class="col-sm-9 column_center">
                <div class="breadcrumb-container">
                    <h1 class="page-title">Shop Detail</h1>
                    <ul class="breadcrumb">
                        <li><a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=common/home"><i
                                        class="fa fa-home"></i></a></li>
                        <li>
                            <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=48">Shop
                                Detail</a></li>
                    </ul>
                </div>
                <div class="product_carousel">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 product-left">
                            <div class="product-left-title hidden-lg hidden-md hidden-sm">
                                <h2 class="product-title"></h2>
                                <ul class="list-unstyled price">
                                    <li class="product-price">
                                        <h2></h2>
                                    </li>
                                    <li class="product-dis"><span style="text-decoration: line-through;"></span></li>
                                </ul>
                            </div>
                            <div class="product-image thumbnails_horizontal">
                                <div class="carousel-container">
                                    <a class="thumbnail" href="{{ asset($product->image) }}">
                                        <img src="{{ asset($product->image) }}" alt="iPod Classic"/>
                                    </a>
                                </div>
                                <div class="image_show">
                                    <div id="slider_carousel" class="owl-carousel">
                                        @foreach($product->otherImages as $otherImage)
                                            <div class="image-additional item">
                                                <a class="thumbnail" href="{{ asset($otherImage->image) }}">

                                                    <img src="{{ asset($otherImage->image) }}" alt="iPod Classic"/>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="tabs_info clearfix">
                                <div id="accordion" class="panel-group" role="tablist">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingOne">
                                            <a data-toggle="collapse" href="#tab-description" data-parent="#accordion"
                                               aria-expanded="true"> Description </a>
                                        </div>
                                        <div id="tab-description" class="panel-collapse collapse in" role="tabpanel"
                                             aria-labelledby="headingOne">
                                            <div class="tab-description">
                                                <div>
                                                    <div> {!! $product->long_description !!}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default tab_review">
                                        <div class="panel-heading" role="tab" id="headingTwo">
                                            <a data-toggle="collapse" href="#tab-review" data-parent="#accordion"
                                               aria-expanded="false">Reviews (1)</a>
                                        </div>
                                        <div id="tab-review" class="panel-collapse collapse" role="tabpanel"
                                             aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <form class="form-horizontal" id="form-review">
                                                    <div id="review"></div>
                                                    <h2>Write a review</h2>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-name">Your
                                                                Name</label>
                                                            <input type="text" name="name" value="" id="input-name"
                                                                   class="form-control"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label" for="input-review">Your
                                                                Review</label>
                                                            <textarea name="text" rows="5" id="input-review"
                                                                      class="form-control"></textarea>
                                                            <div class="help-block"><span
                                                                        class="text-danger">Note:</span> HTML is not
                                                                translated!
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <div class="col-sm-12">
                                                            <label class="control-label radio-title">Rating</label>&nbsp;&nbsp;&nbsp;
                                                            <div class="form-radio">
                                                                <span>Bad</span>&nbsp;
                                                                <input type="radio" name="rating" value="1"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="2"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="3"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="4"/>
                                                                &nbsp;
                                                                <input type="radio" name="rating" value="5"/>
                                                                &nbsp;<span>Good</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="buttons clearfix">
                                                        <div class="pull-right">
                                                            <button type="button" id="button-review"
                                                                    data-loading-text="Loading..."
                                                                    class="btn btn-primary">Continue
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 product-right">
                            <div class="product-left-title hidden-xs">
                                <h1 class="product-title">{{$product->name}}</h1>
                            </div>
                            <!-- AddThis Button BEGIN -->
                            <div class="social-toolbox">
                                <span>Share</span>
                                <div class="addthis_toolbox addthis_default_style"
                                     data-url="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/product&amp;product_id=48">
                                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                    <a class="addthis_button_tweet"></a>
                                    <a class="addthis_button_pinterest_pinit"></a>
                                    <a class="addthis_counter addthis_pill_style"></a>
                                </div>
                                <script type="text/javascript"
                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>
                            </div>
                            <!-- AddThis Button END -->
                            <div class="rating-wrapper">

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

                                <span class="fa fa-stack">
                      <i class="fa fa-star gray fa-stack-2x"></i>
                    </span>
                                <a class="review-count" href="" onclick="customclick(); return false;">1 reviews</a> /
                                <a class="write-review" href="" onclick="customclick(); return false;"><i
                                            class="fa fa-pencil"></i> Write a review</a>
                            </div>

                            <ul class="list-unstyled price">
                                <li class="product-price hidden-xs">
                                    <h2>{{$product->selling_price}}</h2>
                                </li>
                                <li class="product-dis hidden-xs"><span
                                            style="text-decoration: line-through;">{{$product->regular_price}}</span>
                                </li>

                            </ul>

                            <hr>
                            <hr>
                            <div id="product">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-quantity">Qty</label>
                                <form action="{{route('cart.add', ['id' => $product->id])}}" method="POST" class="cart">
                                    @csrf
                                    <input type="text" name="quantity" value="1" size="4" id="input-quantity" min="1"
                                           step="1" class="form-control"/>
                                    <button type="submit" id="button-cart" data-loading-text="Loading..."
                                            class="btn btn-primary btn-lg btn-block">Add to Cart
                                    </button>
                                </form>
                            </div>

                            <ul class="list-unstyled attr">
                                <li><span>Category:</span> <a
                                            href="{{route('shop', ['id' => $product->category->id])}}">{{$product->category->category_name}}</a>
                                </li>
                                <li><span>Brand:</span> <a href="">{{$product->brand->name}}</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="related-product row">
                    <h3 class="home-title">Related Products</h3>
                    <div class="related-carousel owl-carousel">
                        @foreach($product->category->products as $categoryProduct)
                            <div class="item">
                                <div class="product-container">
                                    <div class="product-thumb transition">
                                        <div class="image">
                                            <a href="{{route('product-details', ['id' => $product->id])}}">
                                                <img src="{{ asset($categoryProduct->image) }}" alt="Palm Treo Pro"
                                                     class="img-responsive"/>
                                                <img class="product-img-extra img-responsive" alt="Palm Treo Pro"
                                                     src="{{ asset($categoryProduct->image) }}"/>
                                            </a>
                                            <div class="rating">
                                                        <span class="fa fa-stack">
                              <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                                <span class="fa fa-stack">
                              <i class="fa fa-star gray fa-stack-2x"></i>
                              </span>
                                                <span class="fa fa-stack">
                              <i class="fa fa-star gray fa-stack-2x"></i>
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
                                                           href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/quick_view&amp;product_id=29">
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
                                                            onclick="wishlist.add('29');"><i class="fa fa-heart"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                            <symbol id="heart-shape-outline" viewBox="0 0 1150 1150">
                                                                <title>heart-shape-outline</title>
                                                                <path d="M492.719,166.008c0-73.486-59.573-133.056-133.059-133.056c-47.985,0-89.891,25.484-113.302,63.569 c-23.408-38.085-65.332-63.569-113.316-63.569C59.556,32.952,0,92.522,0,166.008c0,40.009,17.729,75.803,45.671,100.178l188.545,188.553c3.22,3.22,7.587,5.029,12.142,5.029c4.555,0,8.922-1.809,12.142-5.029l188.545-188.553 C474.988,241.811,492.719,206.017,492.719,166.008z"/>
                                                            </symbol>
                                                        </svg>
                                                        <svg class="icon" viewBox="0 0 30 30">
                                                            <use xlink:href="#heart-shape-outline" x="27%"
                                                                 y="26%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="btn-compare">
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onclick="compare.add('29');"><i
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
                                                <a href="{{route('product-details', ['id' => $product->id])}}">{{$categoryProduct->name}}</a>
                                            </h4>
                                            <p class="price">                             {{$categoryProduct->selling_price }}
                                            </p>
                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Product Details"
                                                        onclick="{{route('product-details', ['id' => $product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a style="color: white" class="lblcart"
                                                       href="{{route('product-details', ['id' => $product->id])}}"><span>Product Details</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>



    <script type="text/javascript">
        function customclick() {
            $('a[href=\'#tab-review .panel-default\']').trigger('click');
            $('.tab_review .collapse').removeClass('in');
        }

        $(document).ready(function () {
            $('.related-carousel').owlCarousel({
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
                    544: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });
        });
        //--></script>
    <script>
        $('.image_show').magnificPopup({
            type: 'image',
            delegate: 'a',
            gallery: {
                enabled: true
            }
        });
        $('#slider_carousel').owlCarousel({
            loop: false,
            nav: true,
            margin: 15,
            dots: false,
            rewind: true,
            rtl: $('html').attr('dir') == 'rtl' ? true : false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsive: {
                0: {
                    items: 2
                },
                443: {
                    items: 3
                },
                767: {
                    items: 3
                },
                991: {
                    items: 3
                },
                1199: {
                    items: 4
                }
            }
        });
    </script>

@endsection
