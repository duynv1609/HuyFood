@extends('layouts.app')
@section('content')
    <!-- 2 Columns -->
    <div class="two-columns">
        <div class="container">
            <div class="row ">
                <!-- Left Column -->
                <div class="col-20p col-md-3 left-column">
                    <!-- Product - Category -->
                    <div class="section product-categories">
                        <div class="block-title">
                            <h2 class="title">Categories</h2>
                        </div>

                        <div class="block-content">
                            <div class="item">
											<span class="arrow collapsed" data-toggle="collapse" data-target="#vegetables" aria-expanded="false" role="button">
												<i class="fa fa-angle-down" aria-hidden="true"></i>
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</span>

                                <a class="category-title" href="product-grid-left-sidebar.html">Vegetables</a>
                                <div class="sub-category collapse" id="vegetables" aria-expanded="true" role="main">
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Tomato</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Broccoli</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Cabbage</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Cucumber</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
											<span class="arrow collapsed" data-toggle="collapse" data-target="#fruits" aria-expanded="false" role="button">
												<i class="fa fa-angle-down" aria-hidden="true"></i>
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</span>

                                <a class="category-title" href="product-grid-left-sidebar.html">Fruits</a>
                                <div class="sub-category collapse" id="fruits" aria-expanded="true" role="main">
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Orange</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Apple</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Banana</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Strawberry</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
											<span class="arrow collapsed" data-toggle="collapse" data-target="#juices" aria-expanded="false" role="button">
												<i class="fa fa-angle-down" aria-hidden="true"></i>
												<i class="fa fa-angle-right" aria-hidden="true"></i>
											</span>

                                <a class="category-title" href="product-grid-left-sidebar.html">Juices</a>
                                <div class="sub-category collapse" id="juices" aria-expanded="true" role="main">
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Orange Juices</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Tomato Juices</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Apple Juices</a>
                                    </div>
                                    <div class="item">
                                        <a href="product-grid-left-sidebar.html">Peaches Juices</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">Tea and Coffee</a>
                            </div>

                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">Jam</a>
                            </div>

                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">SeaFood</a>
                            </div>

                            <div class="item">
                                <a class="category-title" href="product-grid-left-sidebar.html">Fresh Meats</a>
                            </div>
                        </div>
                    </div>


                    <!-- Product - Flash Deals -->
                    <div class="section products-block nav-color flash-deals layout-4">
                        <div class="block-title">
                            <h2 class="title">Flash Deals</h2>
                        </div>

                        <div class="block-content">
                            <div class="products owl-theme owl-carousel">
                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="{{asset('img/product/4.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-countdown" data-date="2018/11/28">
                                    </div>

                                    <div class="product-title">
                                        <a href="product-detail-left-sidebar.html">
                                            Organic Strawberry Fruits
                                        </a>
                                    </div>

                                    <div class="product-rating">
                                        <div class="star on"></div>
                                        <div class="star on"></div>
                                        <div class="star on "></div>
                                        <div class="star on"></div>
                                        <div class="star"></div>
                                    </div>

                                    <div class="product-price">
                                        <span class="sale-price">$80.00</span>
                                        <span class="base-price">$90.00</span>
                                    </div>

                                    <div class="product-buttons">
                                        <a class="add-to-cart" href="#">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </a>

                                        <a class="add-wishlist" href="#">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>

                                        <a class="quickview" href="#">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="product-item">
                                    <div class="product-image">
                                        <a href="product-detail-left-sidebar.html">
                                            <img src="{{asset('img/product/18.jpg')}}" alt="Product Image">
                                        </a>
                                    </div>

                                    <div class="product-countdown" data-date="2018/12/18">
                                    </div>

                                    <div class="product-title">
                                        <a href="product-detail-left-sidebar.html">
                                            Organic Strawberry Fruits
                                        </a>
                                    </div>

                                    <div class="product-rating">
                                        <div class="star on"></div>
                                        <div class="star on"></div>
                                        <div class="star on "></div>
                                        <div class="star on"></div>
                                        <div class="star"></div>
                                    </div>

                                    <div class="product-price">
                                        <span class="sale-price">$80.00</span>
                                        <span class="base-price">$90.00</span>
                                    </div>

                                    <div class="product-buttons">
                                        <a class="add-to-cart" href="#">
                                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        </a>

                                        <a class="add-wishlist" href="#">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </a>

                                        <a class="quickview" href="#">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Payment Intro -->
                    <div class="section payment-intro">
                        <div class="block-content">
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/home2-payment-1.png')}}" alt="Payment Intro">
                                <h3 class="title">Free Shipping item</h3>
                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/home2-payment-2.png')}}" alt="Payment Intro">
                                <h3 class="title">Secured Payment</h3>
                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="{{asset('img/home2-payment-3.png')}}" alt="Payment Intro">
                                <h3 class="title">money back guarantee</h3>
                                <div class="content">Proin gravida nibh vel velit auctor aliquet aenean</div>
                            </div>
                        </div>
                    </div>


                    <!-- Testimonial -->
                    <div class="section testimonial">
                        <div class="block-title">
                            <h2 class="title">Testimonial</h2>
                        </div>

                        <div class="block-content">
                            <div class="testimonial-wrap owl-theme owl-carousel">
                                @foreach($ratingnew as $rating)
                                    <div class="item">
                                        <div class="image"><img src="{{ asset(pare_url_file($rating->product->pro_avatar)) }}" alt=""></div>
                                        <div class="content">"{!! $rating->ra_content !!}"</div>
                                        <div class="name">{!! $rating->user->name !!}</div>
                                        <div class="job">StyleHair</div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>


                <!-- Right Column -->
                <div class="col-80p col-md-9 right-column">
                    <!-- Product - Category Tab -->
                    <div class="section products-block category-tab">
                        <div class="block-title">
                            <h2 class="title">Vegetables</h2>
                        </div>

                        <div class="block-content">
                            <!-- Tab Navigation -->
                            <div class="tab-nav">
                                <ul>
                                    <li class="active">
                                        <a data-toggle="tab" href="new-arrivals.html">
                                            <span>New Arrivals</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#best-seller">
                                            <span>Best Seller</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#on-sale">
                                            <span>On Sale</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Tab Content -->
                            <div class="tab-content">
                                <!-- New Arrivals -->
                                <div role="tabpanel" class="tab-pane fade in active" id="new-arrivals">
                                    <div class="products owl-theme owl-carousel">
                                        @foreach($productHot as $proHot)
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="{{ route('get.detail.product',[$proHot->pro_slug,$proHot->id]) }}">
                                                    <img src="{{asset('img/product/8.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title" style="white-space: nowrap;overflow:hidden; text-overflow: ellipsis;">
                                                <a href="{{ route('get.detail.product',[$proHot->pro_slug,$proHot->id]) }}">
                                                    {{ $proHot->pro_name }}
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">${{ number_format($proHot->pro_price,0,',','.') }}</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Best Seller -->
                                <div role="tabpanel" class="tab-pane fade" id="best-seller">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/8.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <!-- On Sale -->
                                <div role="tabpanel" class="tab-pane fade" id="on-sale">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/4.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/8.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/9.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/10.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$96.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Newsletter -->
                    <div class="section newsletter">
                        <h2 class="block-title">Newsletter</h2>

                        <div class="block-content">
                            <p class="description">Sign up for newsletter to receive special offers and exclusive news about FreshMart products</p>
                            <form action="#" method="post">
                                <input type="text" placeholder="Enter Your Email">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>


                    <!-- Product - Category Double -->
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="section products-block category-double">
                                <div class="block-title">
                                    <h2 class="title">Fruits</h2>
                                </div>

                                <div class="block-content">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/4.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/8.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/2.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="section products-block category-double">
                                <div class="block-title">
                                    <h2 class="title">Juices</h2>
                                </div>

                                <div class="block-content">
                                    <div class="products owl-theme owl-carousel">
                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/16.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/13.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$120.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-item">
                                            <div class="product-image">
                                                <a href="product-detail-left-sidebar.html">
                                                    <img src="{{asset('img/product/28.jpg')}}" alt="Product Image">
                                                </a>
                                            </div>

                                            <div class="product-title">
                                                <a href="product-detail-left-sidebar.html">
                                                    Organic Strawberry Fruits
                                                </a>
                                            </div>

                                            <div class="product-rating">
                                                <div class="star on"></div>
                                                <div class="star on"></div>
                                                <div class="star on "></div>
                                                <div class="star on"></div>
                                                <div class="star"></div>
                                            </div>

                                            <div class="product-price">
                                                <span class="sale-price">$80.00</span>
                                                <span class="base-price">$90.00</span>
                                            </div>

                                            <div class="product-buttons">
                                                <a class="add-to-cart" href="#">
                                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                </a>

                                                <a class="add-wishlist" href="#">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>

                                                <a class="quickview" href="#">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Banners -->
                    <div class="section banners-block">
                        <div class="row margin-15">
                            <div class="col-lg-6 col-md-6 col-sm-6 padding-15">
                                <div class="banner-item effect">
                                    <a href="#">
                                        <img class="img-responsive" src="{{asset('img/banner/home2-banner-4.png')}}" alt="Banner">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 padding-15">
                                <div class="banner-item effect">
                                    <a href="#">
                                        <img class="img-responsive" src="{{asset('img/banner/home2-banner-5.png')}}" alt="Banner">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Product - New Arrivals -->
                    @include('components.product_suggest')
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->
    <div class="section intro">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="intro-header">
                        <img src="{{asset('img/leaf.png')}}" alt="Partner 1">
                        <h3>Why Choose Us</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="intro-left">
                        <div class="intro-item">
                            <p><img src="{{asset('img/intro-icon-1.png')}}" alt="Intro Image"></p>
                            <h4>Always Fresh</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <div class="intro-item">
                            <p><img src="{{asset('img/intro-icon-2.png')}}" alt="Intro Image"></p>
                            <h4>Super Healthy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="effect">
                        <a href="#">
                            <img class="intro-image img-responsive" src="{{asset('img/intro-2.png')}}" alt="Intro Image">
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="intro-right">
                        <div class="intro-item">
                            <p><img src="{{asset('img/intro-icon-3.png')}}" alt="Intro Image"></p>
                            <h4>100% Natural</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>

                        <div class="intro-item">
                            <p><img src="{{asset('img/intro-icon-4.png')}}" alt="Intro Image"></p>
                            <h4>Premium Quality</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            let routeRenderProduct  = '{{ route('post.product.view') }}';
            checkRenderProduct = false;
            $(document).on( 'scroll', function(){
                if ($(window).scrollTop() > 150 && checkRenderProduct == false ) {

                    checkRenderProduct = true;
                    let products = localStorage.getItem('products');
                    products = $.parseJSON(products)
                    console.log(products);

                    if (products.length > 0 )
                    {
                        $.ajax({
                            url : routeRenderProduct,
                            method : "POST",
                            data  : { id : products},
                            success : function(result)
                            {
                                $("#product_view").html('').append(result.data)
                            }
                        });
                    }

                }
            });
        })
    </script>
@stop
