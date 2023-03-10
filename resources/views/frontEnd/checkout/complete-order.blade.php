@extends('frontEnd.master')
@section('title')
    Complete Order
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
                    <h1 class="page-title">Your order has been placed!</h1>
                    <ul class="breadcrumb">
                        <li><a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=common/home"><i
                                        class="fa fa-home"></i></a></li>
                        <li>
                            <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=checkout/cart">Shopping
                                Cart</a></li>
                        <li>
                            <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=checkout/checkout">Checkout</a>
                        </li>
                        <li>
                            <a href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=checkout/success">Success</a>
                        </li>
                    </ul>
                </div>
                <p>Your order has been successfully processed!</p>
                <p>You can view your order history by going to the <a
                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=account/account">my
                        account</a> page and by clicking on <a
                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=account/order">history</a>.
                </p>
                <p>If your purchase has an associated download, you can go to the account <a
                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=account/download">downloads</a>
                    page to view them.</p>
                <p>Please direct any questions you have to the <a
                            href="https://demo.ishithemes.com/opencart/OPC002/OPC002L01/index.php?route=information/contact">store
                        owner</a>.</p>
                <p>Thanks for shopping with us online!</p>
                <div class="buttons">
                    <div class="pull-right"><a href="{{route('home')}}" class="btn btn-primary">Continue</a></div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

@endsection
