@extends('template.layout')
@section('content')
    <section>
        <div class="tp_container">
            <div class="width-100 flex" style="flex-flow: wrap">
                <div class="breadcrumb">
                    <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="https://www.yes24.vn">
                                <span itemprop="name">Trang chủ</span>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <span itemprop="name">Tin tức</span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ul>
                    <div class="clearfloat"></div>
                </div>
            </div>
            <div class="width-100 flex" style="">
                <div class="width-70" style="margin-right: 20px">
                    <div class="box_article" style="margin-top: 20px">
                        <div class="article_list">
                            @for($i = 1 ; $i <= 10 ; $i ++)
                                <div class="article_item width-100 flex loading-placeholder" style="border-bottom: 1px solid #f2f2f2;margin-bottom: 10px;padding-bottom: 10px;">
                                    <div class="article_avatar width-20">
                                        <div class="loading_image" style="max-width: 100%;width: 100%;height: 150px;"></div>
                                    </div>
                                    <div class="article_info width-80" style="margin-left: 20px;margin-right: 10px">
                                        <div class="loading_text" style="width: 100%;height: 10px;margin: 10px 0 10px 0"></div>
                                        <div class="loading_text" style="width: 100%;height: 10px;margin: 10px 0 10px 0"></div>
                                        <div class="loading_text" style="width: 100%;height: 10px;margin: 10px 0 10px 0"></div>
                                        <div class="loading_text" style="width: 100%;height: 10px;margin: 10px 0 10px 0"></div>
                                        <div class="loading_text" style="width: 100%;height: 10px;margin: 10px 0 10px 0"></div>
                                    </div>
                                </div>

                                <div class="article_item width-100 flex loading" style="border-bottom: 1px solid #f2f2f2;margin-bottom: 10px;padding-bottom: 10px;">
                                    <div class="article_avatar width-20">
                                        <a href="">
                                            <img src="{{ asset('images/giay_demo.png') }}" style="max-width: 100%;width:100%;height: 150px;object-fit: cover">
                                        </a>
                                    </div>
                                    <div class="article_info width-80" style="margin-left: 20px">
                                        <h3 style="font-size: 18px;font-weight: 500;margin-top: 10px">
                                            <a href="" style="color: #000">Tính năng mời bạn bè cùng xem video của Facebook</a>
                                        </h3>
                                        <p style="margin: 15px 0">Sau một thời gian thử nghiệm, tính năng xem chung - Watch Party đã có mặt trên  Facebook . Tính năng này sẽ cho phép...</p>
                                        <p style="font-size: 13px">
                                            <span style="color: #000"><i class="fas fa-clock" style="color: #999;font-size: 11px"></i> 12-12-2011 </span>
                                            <span style="color: #000"><i class="fas fa-eye" style="color: #999;font-size: 11px"></i> 20 </span>
                                            <span style="color: #000"><i class="fas fa-user" style="color: #999;font-size: 11px"></i> TrungPhuNA</span>
                                        </p>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="width-30">
                    <div class="title_heading">
                        <h1>Bài viết nổi bật</h1>
                    </div>
                    <div class="product_info">
                        
                    </div>
                    @for($i = 1 ; $i <= 10 ; $i ++)
                        <div class="article_item width-100 flex loading-placeholder" style="border-bottom: 1px solid #f2f2f2;margin-bottom: 10px;padding-bottom: 10px;">
                            <div class="article_info width-100">
                                <h3 class="loading_text" style="font-size: 18px;font-weight: 500;margin-top: 10px;height: 50px"></h3>
                                @for ($j = 1 ; $j<= 3 ; $j ++)
                                <div class="loading_text" style="margin: 5px 0 5px 0;height: 10px"></div>
                                @endfor

                                <div class="loading_text" style="margin: 10px 0 5px 0;height: 10px"></div>
                            </div>
                        </div>
                        <div class="article_item width-100 flex loading" style="border-bottom: 1px solid #f2f2f2;margin-bottom: 10px;padding-bottom: 10px;">
                            <div class="article_info width-100" >
                                <h3 style="font-size: 18px;font-weight: 500;margin-top: 10px">
                                    <a href="" style="color: #000">Tính năng mời bạn bè cùng xem video của Facebook</a>
                                </h3>
                                <p style="margin: 15px 0">Sau một thời gian thử nghiệm, tính năng xem chung - Watch Party đã có mặt trên  Facebook . Tính năng này sẽ cho phép...</p>
                                <p style="font-size: 13px">
                                    <span style="color: #000"><i class="fas fa-clock" style="color: #999;font-size: 11px"></i> 12-12-2011 </span>
                                    <span style="color: #000"><i class="fas fa-eye" style="color: #999;font-size: 11px"></i> 20 </span>
                                    <span style="color: #000"><i class="fas fa-user" style="color: #999;font-size: 11px"></i> TrungPhuNA</span>
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@stop


<script src="{{ asset('js/jquery_off.js') }}" crossorigin="anonymous"></script>
<script>
	$(function(){
		$(() => {

			const box = $('.loading'), ph = $('.loading-placeholder');

			let toggleEffect = () => {
				box.hide();
				ph.show();

				setTimeout(() => {
					ph.hide();
					box.show();
				}, 2e3);
			};

			toggleEffect();

		});
	})
</script>