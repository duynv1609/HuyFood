@extends('layouts.app')
@section('content')
    <!-- start home slider -->
    @include('components.slide')
    <!-- end home slider -->

    <style>
        .active {
            color: #ff9705 !important;
        }
    </style>


    <!-- banner-area start -->
{{--    @include('components.banner')--}}
    <!-- banner-area end -->
    
    <!-- product section start -->
    <div class="our-product-area new-product">
        <div class="container">
            <div class="area-title">
                <h2>Sản phẩm nổi bật</h2>
            </div>
            <!-- our-product area start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="features-curosel">
                            @foreach($productHot as $proHot)
                            <!-- single-product start -->
                            <div class="col-lg-12 col-md-12">
                                <div class="single-product first-sale">
                                    <div class="product-img">
                                        @if ( $proHot->pro_number == 0)
                                        <span style="position: absolute;background: #e91e63;color: white;padding: 2px 6px;border-radius: 5px;font-size: 10px;">Tạm hết hàng</span>
                                        @endif
                                        @if ($proHot->pro_sale)
                                        <span style="position: absolute;font-size:10px;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 10px;padding: 1px 7px;color: white;right: 0">{{ $proHot->pro_sale }}%</span>
                                        @endif
                                        <a href="{{ route('get.detail.product',[$proHot->pro_slug,$proHot->id]) }}">
                                            <img class="primary-image" src="{{ asset(pare_url_file($proHot->pro_avatar)) }}" alt="" />
                                            <img class="secondary-image" src="{{ asset(pare_url_file($proHot->pro_avatar)) }}" alt="" />
                                        </a>
                                        <div class="action-zoom">
                                            <div class="add-to-cart">
                                                <a href="{{ route('get.detail.product',[$proHot->pro_slug,$proHot->id]) }}" title="Xem chi tiết"><i class="fa fa-search-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="actions">
                                            <div class="action-buttons">
                                                <div class="add-to-links">
                                                    <div class="compare-button">
                                                        <a href="{{ route('add.shopping.cart',$proHot->id) }}" title="Mua sản phẩm"><i class="icon-bag"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="price-box">
                                            @if ($proHot->pro_sale)
                                                <span class="new-price" style="text-decoration: line-through;color: #666;font-weight: 500;">{{ number_format($proHot->pro_price,0,',','.') }} đ</span>
                                                <span class="new-price">{{ number_format(round((100 - $proHot->pro_sale) * $proHot->pro_price / 100,0),0,',','.') }} đ</span>
                                            @else
                                                <span class="new-price">{{ number_format($proHot->pro_price,0,',','.') }} đ</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h2 class="product-name"><a href="#">{{ $proHot->pro_name }}</a></h2>
                                        <p>{{ $proHot->pro_description }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- our-product area end -->
        </div>
    </div>
    @include('components.product_suggest')
    <div id="product_view"></div>
    <!-- product section end -->
    
    <!-- latestpost area start -->
    @if (isset($articleNews))
    <div class="latest-post-area">
        <div class="container">
            <div class="area-title">
                <h2>Bài viết mới</h2>
            </div>
            <div class="row">
                <div class="all-singlepost">
                    <!-- single latestpost start -->
                    @foreach($articleNews as $arNew)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-post" style="margin-bottom: 40px">
                            <div class="post-thumb">
                                <a href="{{ route('get.detail.article',[$arNew->a_slug,$arNew->id]) }}">
                                    <img src="{{ asset(pare_url_file($arNew->a_avatar)) }}" alt="" style="width: 370px;height: 280px" />
                                </a>
                            </div>
                            <div class="post-thumb-info">
                                <div class="postexcerpt">
                                    <p style="height: 40px;">{{ $arNew->a_name }}</p>
                                    <a href="{{ route('get.detail.article',[$arNew->a_slug,$arNew->id]) }}" class="read-more">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- single latestpost end -->
                </div>
            </div>
        </div>
    </div>
    @endif
    <!-- latestpost area end -->
    <!-- block category area start -->
    <div class="block-category">
        <div class="container">
            <div class="row">
                @if ( isset($categoriesHome))
                <!-- featured block start -->
                    @foreach($categoriesHome as $categoriHome)
                    <div class="col-md-4">
                    <!-- block title start -->
                    <div class="block-title">
                        <h2>{{ $categoriHome->c_name }}</h2>
                    </div>
                    <!-- block title end -->
                    <!-- block carousel start -->
                        @if (isset($categoriHome->products))
                            <div class="block-carousel">
                                @foreach($categoriHome->products as $product)

									<?php
									$ageDetail = 0;

									if ($product->pro_total_rating)
									{
										$ageDetail  =  round($product->pro_total_number / $product->pro_total_rating,2);
									}
									?>
                                <div class="block-content">
                                    <!-- single block start -->
                                    <div class="single-block">
                                        <div class="block-image pull-left">
                                            @if ( $product->pro_number == 0)
                                        <span style="position: absolute;background: #e91e63;color: white;padding: 2px 6px;border-radius: 5px;font-size: 10px;">Tạm hết hàng</span>
                                        @endif
                                        @if ($product->pro_sale)
                                        <span style="position: absolute;font-size:10px;background-image: linear-gradient(-90deg,#ec1f1f 0%,#ff9c00 100%);border-radius: 10px;padding: 1px 7px;color: white;">{{ $product->pro_sale }}%</span>
                                        @endif
                                            <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}"><img src="{{ pare_url_file($product->pro_avatar) }}" style="width: 170px;height: 208px" alt="" /></a>
                                        </div>
                                        <div class="category-info">
                                            <h3><a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}">{{ $product->pro_name }}</a></h3>
                                            <p>{{ $product->pro_description }}</p>
                                            <div class="cat-price">
                                                @if ($product->pro_sale)
                                                    <span class="new-price" style="text-decoration: line-through;color: #666;font-weight: 500;">{{ number_format($product->pro_price,0,',','.') }} đ</span>
                                                    <span class="new-price">{{ number_format(round((100 - $product->pro_sale) * $product->pro_price / 100,0),0,',','.') }} đ</span>
                                                @else
                                                    <span class="new-price">{{ number_format($product->pro_price,0,',','.') }} đ</span>
                                                @endif
                                            </div>
                                            <div class="cat-rating">
                                                @for($i =1 ; $i<=5 ;$i ++)
                                                    <a href="#"><i class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></a>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        @endif
                    <!-- block carousel end -->
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- block category area end -->
    <!-- testimonial area start -->
    <div class="testimonial-area lap-ruffel">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="crusial-carousel">
                        @foreach($ratingnew as $rating)
                        <div class="crusial-content">                                                                   
                                <div class="testimonial-box">  
                                    <a href="{{ route('get.detail.product',[$rating->product->pro_slug,$rating->product->id]) }}">
                                        <img src="{{ asset(pare_url_file($rating->product->pro_avatar)) }}" alt="" style="display: inline-block;width: 90px;height:90px;margin: 0 0 15px;border-radius: 50%;" />
                                    </a>
                                    <div class="cat-rating">
                                        @for($i =1 ; $i<=5 ;$i ++)
                                            <i class="fa fa-star {{ $i<= $rating->ra_number ? 'active' : '' }}"></i>
                                        @endfor
                                    </div>
                                    <h4 style="color: #fe4819;">{!! $rating->user->name !!}</h4>
                                    <p style="margin-bottom: 20px;font-size: 17px;font-style: italic;font-weight: 400;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">{!! $rating->ra_content !!}</p>                                                                
                                    
                                </div>                                    
                        </div>
                        @endforeach
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->

@stop

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