@extends('frontEnd.master')
@section('title')
    Shop
@endsection
@section('content')
    <div id="product-category" class="container wrapper_container">
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

                    <div class="filterbox">
                        <div class="page-title hidden-sm hidden-xs">Refine Search</div>
                        <div class="block-title clearfix  hidden-lg hidden-md collapsed"
                             data-target="#filterbox-container" data-toggle="collapse">
                            <span class="page-title">Refine Search</span>
                            <span class="navbar-toggler collapse-icons">
      <i class="fa fa-angle-down add"></i>
      <i class="fa fa-angle-up remove"></i>
    </span>
                        </div>
                        <div id="filterbox-container" class="collapse data-toggler">
                            <div class="list-group-filter">

                                <a class="list-group-item group-name">Size</a>
                                <div class="list-group-item">
                                    <div id="filter-group1">
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="1"/>
                                                S (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="2"/>
                                                M (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="3"/>
                                                L (0)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="4"/>
                                                XL (0)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <a class="list-group-item group-name">Colour</a>
                                <div class="list-group-item">
                                    <div id="filter-group2">
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="5"/>
                                                Red (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="6"/>
                                                Green (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="7"/>
                                                Blue (0)
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <a class="list-group-item group-name">Price</a>
                                <div class="list-group-item">
                                    <div id="filter-group3">
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="8"/>
                                                $8.00 - $10.00 (1)
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label> <input type="checkbox" name="filter[]" value="9"/>
                                                $11.00 - $14.00 (1)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer text-left">
                                <button type="button" id="button-filter" class="btn btn-primary">Refine Search</button>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $('#button-filter').on('click', function () {
                            filter = [];

                            $('input[name^=\'filter\']:checked').each(function (element) {
                                filter.push(this.value);
                            });

                            location = 'indexabda.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=25&amp;filter=' + filter.join(',');
                        });
                    </script>

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
                                <div class="image"><a href="index5e0b.html?route=product/product&amp;product_id=36"><img
                                                src="{{asset('frontEndAssets')}}/image/cache/catalog/productsimage/16-85x110.jpg"
                                                alt="iPod Nano" title="iPod Nano" class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4><a href="index5e0b.html?route=product/product&amp;product_id=36">iPod Nano</a>
                                    </h4>
                                    <p class="description">Video in your pocket.

                                        Its the small iPod with one very big idea: video. The worlds most popula..</p>
                                    <p class="price">
                                        $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a href="index6320.html?route=product/product&amp;product_id=28"><img
                                                src="{{asset('frontEndAssets')}}/image/cache/catalog/productsimage/12-85x110.jpg"
                                                alt="HTC Touch HD" title="HTC Touch HD" class="img-responsive"/></a>
                                </div>
                                <div class="caption">
                                    <h4><a href="index6320.html?route=product/product&amp;product_id=28">HTC Touch
                                            HD</a></h4>
                                    <p class="description">HTC Touch - in High Definition. Watch music videos and
                                        streaming content in awe-inspiring high defin..</p>
                                    <p class="price">
                                        $122.00
                                        <span class="price-tax">Ex Tax: $100.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a href="indexc21e.html?route=product/product&amp;product_id=34"><img
                                                src="{{asset('frontEndAssets')}}/image/cache/catalog/productsimage/17-85x110.jpg"
                                                alt="iPod Shuffle" title="iPod Shuffle" class="img-responsive"/></a>
                                </div>
                                <div class="caption">
                                    <h4><a href="indexc21e.html?route=product/product&amp;product_id=34">iPod
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

                    <section id="ishibannerblock-2078456633" class="ishibannerblock">
                        <div class="bannerblock col-md-12 col-sm-12 col-xs-4">
                            <div class="image-container">
                                <div class=" banner-scale">
                                    <img src="{{asset('frontEndAssets')}}/image/cache/catalog/Left-banner-270x350.jpg"
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
                                <div class="image"><a href="index3d7a.html?route=product/product&amp;product_id=49"><img
                                                src="{{asset('frontEndAssets')}}/image/cache/catalog/productsimage/6-85x110.jpg"
                                                alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1"
                                                class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4><a href="index3d7a.html?route=product/product&amp;product_id=49">Samsung Galaxy
                                            Tab 10.1</a></h4>
                                    <p class="description">Samsung Galaxy Tab 10.1, is the world&rsquo;s thinnest
                                        tablet, measuring 8.6 mm thickness, running w..</p>
                                    <p class="price">
                                        <span class="price-new">$20.00</span> <span class="price-old">$241.99</span>
                                        <span class="price-tax">Ex Tax: $15.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="product-thumb transition">
                                <div class="image"><a href="indexb77e.html?route=product/product&amp;product_id=48"><img
                                                src="{{asset('frontEndAssets')}}/image/cache/catalog/productsimage/15-85x110.jpg"
                                                alt="iPod Classic" title="iPod Classic" class="img-responsive"/></a>
                                </div>
                                <div class="caption">
                                    <h4><a href="indexb77e.html?route=product/product&amp;product_id=48">iPod
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
                                <div class="image"><a href="indexd21c.html?route=product/product&amp;product_id=47"><img
                                                src="{{asset('frontEndAssets')}}/image/cache/catalog/productsimage/11-85x110.jpg"
                                                alt="HP LP3065" title="HP LP3065" class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4><a href="indexd21c.html?route=product/product&amp;product_id=47">HP LP3065</a>
                                    </h4>
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
                    <h2 class="page-title">Shop</h2>
                    <ul class="breadcrumb">
                        <li><a href=""><i class="fa fa-home"></i></a></li>
                        <li><a href="">Shop</a></li>
                    </ul>
                </div>
                <div class="products">
                    <div class="refine-search">
                        <div class="row">
                            <div class="row product-list-js">
                                @foreach($products as $product)
                                    <div class="product-layout product-list">
                                        <div class="product-container">
                                            <div class="product-thumb">
                                                <div class="image" data-countdowntime="">
                                                    <a href="{{route('product-details', ['id' => $product->id])}}">
                                                        <img src="{{ asset($product->image) }}"
                                                             alt="Apple Cinema 30&quot;" class="img-responsive"/>
                                                        <img class="product-img-extra img-responsive"
                                                             alt="Apple Cinema 30&quot;"
                                                             src="{{ asset($product->image) }}"/>
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
                                                                   href="index6d6f.html?route=product/quick_view&amp;product_id=42">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         style="display: none;">
                                                                        <symbol id="eye-open" viewBox="0 0 1010 1010">
                                                                            <title>eye-open</title>
                                                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687 c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818 c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68 c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699 C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554 c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704 c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971 c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999 c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04 c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222 c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362 s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362 c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04 z"/>
                                                                        </symbol>
                                                                    </svg>
                                                                    <svg class="icon" viewBox="0 0 30 30">
                                                                        <use xlink:href="#eye-open" x="23%"
                                                                             y="24%"></use>
                                                                    </svg>
                                                                    <i class="fa fa-eye" aria-hidden="true"></i><span
                                                                            class="lblcart">Quick View</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="btn-wishlist">
                                                            <button type="button" data-toggle="tooltip"
                                                                    title="Add to Wish List"
                                                                    onclick="wishlist.add('42');"><i
                                                                        class="fa fa-heart"></i>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     style="display: none;">
                                                                    <symbol id="heart-shape-outline"
                                                                            viewBox="0 0 1150 1150"><title>
                                                                            heart-shape-outline</title>
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
                                                                    title="Compare this Product"
                                                                    onclick="compare.add('42');"><i
                                                                        class="fa fa-exchange"></i>
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     style="display: none;">
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
                                                        <a href="indexe2aa.html?route=product/product&amp;path=20&amp;product_id=42&amp;sort=pd.name&amp;order=ASC&amp;limit=25">{{$product->name}}</a>
                                                    </h4>

                                                    <p class="price">
                                                        {{$product->selling_price}}
                                                    </p>

                                                    <div class="btn-cart">
                                                        <button type="button" data-toggle="tooltip"
                                                                title="Product Details"
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


                    <div class="product-list-top">
                        <div class="row">
                            <div class="btn-list-grid">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"
                                            title="Grid"><i class="fa fa-th"></i></button>
                                    <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
                                            title="List"><i class="fa fa-th-list"></i></button>
                                </div>
                            </div>
                            <div class="compare-total"><a href="" id="compare-total">All Product</a></div>
                            <div class="pagination-right">
                                <div class="sort-by-wrapper">
                                    <div class="col-md-2 text-right sort-by">
                                        <label class="control-label" for="input-sort">Sort By:</label>
                                    </div>
                                    <div class="col-md-3 text-right sort">
                                        <div class="select-wrapper">
                                            <select id="input-sort" class="form-control"
                                                    onchange="location = this.value;">

                                                <option value="index3b2b.html?route=product/category&amp;path=20&amp;sort=p.sort_order&amp;order=ASC&amp;limit=25">
                                                    Default
                                                </option>
                                                <option value="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=25"
                                                        selected="selected">Name (A - Z)
                                                </option>

                                                <option value="index3e99.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=DESC&amp;limit=25">
                                                    Name (Z - A)
                                                </option>

                                                <option value="index8a89.html?route=product/category&amp;path=20&amp;sort=p.price&amp;order=ASC&amp;limit=25">
                                                    Price (Low &gt; High)
                                                </option>

                                                <option value="index8cbd.html?route=product/category&amp;path=20&amp;sort=p.price&amp;order=DESC&amp;limit=25">
                                                    Price (High &gt; Low)
                                                </option>

                                                <option value="index686c.html?route=product/category&amp;path=20&amp;sort=rating&amp;order=DESC&amp;limit=25">
                                                    Rating (Highest)
                                                </option>

                                                <option value="indexaa47.html?route=product/category&amp;path=20&amp;sort=rating&amp;order=ASC&amp;limit=25">
                                                    Rating (Lowest)
                                                </option>

                                                <option value="index2106.html?route=product/category&amp;path=20&amp;sort=p.model&amp;order=ASC&amp;limit=25">
                                                    Model (A - Z)
                                                </option>

                                                <option value="index1d47.html?route=product/category&amp;path=20&amp;sort=p.model&amp;order=DESC&amp;limit=25">
                                                    Model (Z - A)
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="show-wrapper">
                                    <div class="col-md-1 text-right show">
                                        <label class="control-label" for="input-limit">Show:</label>
                                    </div>
                                    <div class="col-md-2 text-right limit">
                                        <div class="select-wrapper">
                                            <select id="input-limit" class="form-control"
                                                    onchange="location = this.value;">
                                                <option value="index7d01.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=15">
                                                    15
                                                </option>
                                                <option value="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=25"
                                                        selected="selected">25
                                                </option>
                                                <option value="indexb9bc.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=50">
                                                    50
                                                </option>
                                                <option value="index8bee.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=75">
                                                    75
                                                </option>
                                                <option value="indexc96c.html?route=product/category&amp;path=20&amp;sort=pd.name&amp;order=ASC&amp;limit=100">
                                                    100
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row product-list-js">
                        @foreach($all_products as $all_product)
                            <div class="product-layout product-list">
                                <div class="product-container">
                                    <div class="product-thumb">
                                        <div class="image" data-countdowntime="">
                                            <a href="{{route('product-details', ['id' => $all_product->id])}}">
                                                <img src="{{ asset($all_product->image) }}" alt="Apple Cinema 30&quot;"
                                                     class="img-responsive"/>
                                                <img class="product-img-extra img-responsive"
                                                     alt="Apple Cinema 30&quot;"
                                                     src="{{ asset($all_product->image) }}"/>
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
                                                           href="index6d6f.html?route=product/quick_view&amp;product_id=42">
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
                                                                 y="26%"></use>
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
                                                            <use xlink:href="#report" x="25%" y="28%"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h4>
                                                <a href="indexe2aa.html?route=product/product&amp;path=20&amp;product_id=42&amp;sort=pd.name&amp;order=ASC&amp;limit=25">{{$all_product->name}}</a>
                                            </h4>

                                            <p class="price">
                                                {{$all_product->selling_price}}
                                            </p>

                                            <div class="btn-cart">
                                                <button type="button" data-toggle="tooltip" title="Product Details"
                                                        onclick="{{route('product-details', ['id' => $all_product->id])}}">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a style="color: white" class="lblcart"
                                                       href="{{route('product-details', ['id' => $all_product->id])}}"><span>Product Details</span></a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="category-pagination">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12 text-left pagination-desc">Showing 1 to 14 of 14 (1 Pages)
                            </div>
                            <div class="col-sm-6 col-xs-12 text-right"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
