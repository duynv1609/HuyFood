<header class="short-stor">
    <div class="container-fluid">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-3 col-sm-12 text-center nopadding-right">
                <div class="top-logo">
                    <a href="/"><img src="{{ asset('img/houseware.png') }}" alt=""/></a>
                </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-md-6 text-center">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="expand"><a href="/" title="Trang chủ">Trang chủ</a></li>
                            <li class="expand">
                                <a href="#">Sản phẩm</a>
                                <ul class="restrain sub-menu">
                                    @if (isset($categories))
                                        @foreach($categories as $cate)
                                            <li><a href="{{ route('get.list.product',[$cate->c_slug,$cate->id]) }}">{{ $cate->c_name }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="expand"><a href="{{ route('get.list.article') }}" title="Tin tức">Tin tức</a></li>
                            <li class="expand"><a href="{{ route('get.about_us') }}">Giới thiệu</a></li>
                            <li class="expand"><a href="{{ route('get.contact') }}">Liên hệ</a></li>
                            {{--<li class="expand">--}}
                                {{--<a href="#">Pages</a>--}}

                            {{--</li>--}}
                        </ul>
                    </nav>
                </div>
                <!-- mobile menu start -->
                <!-- mobile menu end -->
            </div>
            <!-- mainmenu area end -->
            <!-- top details area start -->
            <div class="col-md-3 col-sm-12 nopadding-left">
                <div class="top-detail">
                    <div class="disflow">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-right">
                                <div class="cart-toggler">
                                    <a href="{{ route('get.list.shopping.cart') }}"><i class="icon-bag"></i></a>
                                    <a href="{{ route('get.list.shopping.cart') }}"><span class="cart-quantity">{{ \Cart::count() }}</span></a>
                                </div>
                                {{--<div class="restrain small-cart-content">--}}
                                    {{--<ul class="cart-list">--}}
                                        {{--<li>--}}
                                            {{--<a class="sm-cart-product" href="product-details.html">--}}
                                                {{--<img src="{{ asset('img/products/sm-products/cart1.jpg') }}" alt="">--}}
                                            {{--</a>--}}
                                            {{--<div class="small-cart-detail">--}}
                                                {{--<a class="remove" href="#"><i class="fa fa-times-circle"></i></a>--}}
                                                {{--<a href="#" class="edit-btn"><img src="{{ asset('img/btn_edit.gif') }}" alt="Edit Button" /></a>--}}
                                                {{--<a class="small-cart-name" href="product-details.html">Voluptas nulla</a>--}}
                                                {{--<span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                        {{--<li>--}}
                                            {{--<a class="sm-cart-product" href="product-details.html">--}}
                                                {{--<img src="{{ asset('img/products/sm-products/cart2.jpg') }}" alt="">--}}
                                            {{--</a>--}}
                                            {{--<div class="small-cart-detail">--}}
                                                {{--<a class="remove" href="#"><i class="fa fa-times-circle"></i></a>--}}
                                                {{--<a href="#" class="edit-btn"><img src="{{ asset('img/btn_edit.gif') }}" alt="Edit Button" /></a>--}}
                                                {{--<a class="small-cart-name" href="product-details.html">Donec ac tempus</a>--}}
                                                {{--<span class="quantitys"><strong>1</strong>x<span>$75.00</span></span>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                    {{--<p class="total">Subtotal: <span class="amount">$155.00</span></p>--}}
                                    {{--<p class="buttons">--}}
                                        {{--<a href="checkout.html" class="button">Checkout</a>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                    <!-- addcart top start -->
                    <!-- search divition start -->
                    <div class="disflow">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form action="{{ route('get.product.list') }}" id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="k" maxlength="128" placeholder="Search product...">
                                            <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                    <div class="disflow">
                        <div class="expand dropps-menu">
                            <a href="#"><i class="glyphicon glyphicon-user"></i></a>
                            <ul class="restrain language" style="width: 200px">
                                @if (Auth::check())
                                    <li><a href="{{ route('user.dashboard') }}" title="Quản lý tổng quan">Quản lý</a></li>
                                    <li><a href="{{ route('get.list.shopping.cart') }}">Giỏ hàng</a></li>
                                    <li><a href="{{ route('get.logout.user') }}">Thoát</a></li>
                                @else
                                    <li><a href="{{ route('get.register') }}">Đăng ký</a></li>
                                    <li><a href="{{ route('get.login') }}">Đăng nhập</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
</header>