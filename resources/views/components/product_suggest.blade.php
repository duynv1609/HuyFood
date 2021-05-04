@if (!empty($productSuggest))
<div class="">
    <div class="container">
        <div class="area-title">
            <h2>Sản phẩm cùng danh mục bạn đã mua </h2>
        </div>
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                @foreach($productSuggest as $product)
                    <!-- single-product start -->
                        <div class="col-lg-3 col-md-3">
                            <div class="single-product first-sale">
                                <div class="product-img">
                                    @if ( $product->pro_number == 0)
                                        <span style="position: absolute;background: #e91e63;color: white;padding: 2px 6px;border-radius: 5px;font-size: 10px;">Tạm hết hàng</span>
                                    @endif
                                    @if ($product->pro_sale)
                                        <span style="position: absolute;font-size:10px;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 10px;padding: 1px 7px;color: white;right: 0">{{ $product->pro_sale }}%</span>
                                    @endif
                                    <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}">
                                        <img class="primary-image" src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="" />
                                        <img class="secondary-image" src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="" />
                                    </a>
                                    <div class="action-zoom">
                                        <div class="add-to-cart">
                                            <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}" title="Xem chi tiết"><i class="fa fa-search-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="actions">
                                        <div class="action-buttons">
                                            <div class="add-to-links">
                                                <div class="compare-button">
                                                    <a href="{{ route('add.shopping.cart',$product->id) }}" title="Mua sản phẩm"><i class="icon-bag"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price">{{ number_format($product->pro_price,0,',','.') }} đ</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h2 class="product-name"><a href="#">{{ $product->pro_name }}</a></h2>
                                    <p>{{ $product->pro_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- our-product area end -->
    </div>
</div>
@endif