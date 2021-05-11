<div class="section products-block new-arrivals layout-3">
    <div class="block-title">
        <h2 class="title">New <span>Arrivals</span></h2>
    </div>

    <div class="block-content">
        <div class="products owl-theme owl-carousel">
            <div class="item">
                @foreach($newArrivals as $item)
                    <div class="product-item">
                        <div class="product-image">
                            <a href="{{ route('get.detail.product',[$item->pro_slug,$item->id]) }}">
                                <img src="{{asset(pare_url_file($item->pro_avatar ))}}" alt="Product Image">
                            </a>
                        </div>

                        <div class="product-title" style="white-space: nowrap;overflow:hidden; text-overflow: ellipsis;">
                            <a href="{{ route('get.detail.product',[$item->pro_slug,$item->id]) }}">
                                {{ $item->pro_name }}
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
                            <span class="sale-price">${{ number_format($item->pro_price,0,',','.') }}</span>
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
            <div class="item">
                @foreach($productJuices as $item)
                    <div class="product-item">
                        <div class="product-image">
                            <a href="{{ route('get.detail.product',[$item->pro_slug,$item->id]) }}">
                                <img src="{{asset(pare_url_file($item->pro_avatar ))}}" alt="Product Image">
                            </a>
                        </div>

                        <div class="product-title" style="white-space: nowrap;overflow:hidden; text-overflow: ellipsis;">
                            <a href="{{ route('get.detail.product',[$item->pro_slug,$item->id]) }}">
                                {{ $item->pro_name }}
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
                            <span class="sale-price">${{ number_format($item->pro_price,0,',','.') }}</span>
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
            <div class="item">
                @foreach($productFruits as $item)
                    <div class="product-item">
                        <div class="product-image">
                            <a href="{{ route('get.detail.product',[$item->pro_slug,$item->id]) }}">
                                <img src="{{asset(pare_url_file($item->pro_avatar ))}}" alt="Product Image">
                            </a>
                        </div>

                        <div class="product-title" style="white-space: nowrap;overflow:hidden; text-overflow: ellipsis;">
                            <a href="{{ route('get.detail.product',[$item->pro_slug,$item->id]) }}">
                                {{ $item->pro_name }}
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
                            <span class="sale-price">${{ number_format($item->pro_price,0,',','.') }}</span>
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
    </div>
</div>
