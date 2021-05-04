@extends('template.layout')
@section('slide')
    <section class="slide">
        <div class="w3-content w3-display-container tp_container" style="position: relative">
            <img class="mySlides" src="https://image.yes24.vn/Upload/ImageMain/Master/Main_A1_20190403_ta1.jpg">
            <img class="mySlides" src="https://image.yes24.vn/Upload/ImageMain/Master/Main_A3_HOT_20190411_ta.jpg">
            <img class="mySlides" src="https://image.yes24.vn/Upload/ImageMain/Master/Main_A5_HOT_20190408_ta.jpg">
            <img class="mySlides" src="https://image.yes24.vn/Upload/ImageMain/Master/Main_A6_HOT_20190410_ta.jpg">

            <button class="w3-button w3-black w3-display-left"   onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right"  onclick="plusDivs(1)">&#10095;</button>
        </div>
    </section>
@stop
@section('content')
    <section>
        <div class="tp_container">
            <div class="product_list">
                <div class="title_heading">
                    <h2><img src="{{ asset('images/new.png') }}" style="width: 40px;height: 40px" alt="">Sản phẩm mới</h2>
                </div>
                <div class="width-100 flex" style="flex-wrap: wrap;">
                    @for($i = 1; $i <= 10 ; $i ++)
                        <div class="product_item">
                            <a href="{{ route('demo.detail') }}" class="product_item_img">
                                <img src="{{ asset('images/giay_demo.png') }}" alt="">
                            </a>
                            <h3 class="product_item_name"><a href="">Giày thể thao </a></h3>
                            <p class="product_item_description">Nồi thủy tinh Luminarc Amberline Trianon Eclipse 1.5L C2321 Nồi thủy tinh Luminarc Amberline Trianon Eclipse 1.5L C2321</p>
                            <div class="product_price">
                                <span class="product_price-new">210.000đ</span>
                                <span class="product_price-old">290.000đ</span>
                                <span class="product_price-sale">(4%)</span>
                            </div>
                        </div>
                    @endfor
                    <div class="clearfloat"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="tp_container box_about_product">
            <h2>MUA SẢN PHẨM SKF TẠI SAO NÊN CHỌN NGỌC ANH</h2>
            <div class="about_product width-100 flex" style="flex-wrap: wrap;">
                @php
                    $arrayAbout = [
                        'Cung cấp sỉ và lẻ',
                        'Sản phẩm chính hãng',
                        'Đại lý uỷ quyền',
                        'Đại lý chính hãng',
                        'Hỗ trợ 24/7',
                        'Bảo hành toàn quốc'
                    ]
                @endphp
                @for($i = 0; $i<= 5; $i ++)
                    <div class="about_product_item flex">
                         <div class="about_product_icon">

                         </div>
                         <div class="about_product_content">
                             <h6>{{ $arrayAbout[$i] }}</h6>
                             <p>Sản phẩm SKF do chúng tôi bán ra đều được bảo hành chính hãng SKF, Cơ chế bảo hành đổi mới linh hoạt. Hỗ trợ tối đa lợi ích của Khách hàng</p>
                         </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    <section>
        <div class="tp_container box_footer_top" style="background-color: #eee">
            <div class="width-100 flex" style="flex-wrap: wrap;">
                @php
                    $arrayAbout = [
                        'SẢN PHẨM SKF CHÍNH HÃNG',
                        'GIAO HÀNG TẬN NƠI',
                        'BẢO HÀNH CHÍNH HÃNG',
                        'HỖ TRỢ 24/7'
                    ]
                @endphp
                @for($i = 0; $i<= 3; $i ++)
                    <div class="flex" style="width: 25%;align-items: center">
                        <div class="icon" style="width: 46px;height: 46px;border-radius: 50%;background-color: white;text-align: center;line-height: 67px;">
                            <img src="{{ asset('images/package.svg') }}" style="width: 28px;height: 28px;" alt="">
                        </div>
                        <div class="content" style="margin-left: 10px;">
                            <p style="color: #235890;text-transform: uppercase">{{ $arrayAbout[$i] }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
@stop