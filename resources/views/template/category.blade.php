@extends('template.layout')
@section('content')
    <section>
        <div class="tp_container product_categories">
            <div class="width-100 flex" style="flex-flow: wrap">
                <div class="width-20 product_categories_left">
                    <a href="javascript::void(0)" class="close_sidebar_mb"><i class="far fa-times-circle"></i></a>
                    <div class="sidebar_left" style="background: #eee;margin-right: 20px;margin-bottom: 20px;padding: 10px;margin-top: 10px;">
                        <div class="sidebar_title">
                            <p>Danh mục</p>
                        </div>
                        <div class="sidebar_nav">
                            <ul>
                                <li><a href="">Thời trang nam</a></li>
                                <li><a href="">Thời trang nữ</a></li>
                                <li><a href="">Áo chống nắng</a></li>
                                <li><a href="">Quần thể thao</a></li>
                                <li><a href="">Áo thể thao</a></li>
                                <li><a href="">Đồ trẻ em</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar_left">
                        <div class="sidebar_title">
                            <p>Tìm theo thương hiệu</p>
                        </div>
                        <div class="sidebar_nav">
                            <div class="list_trademark">
                                <a href="">Công Ty TNHH Hóa Chất Xây Dựng APT Việt Nam</a>
                                <a href="">Công Ty TNHH TM DV Vật Liệu Và Thiết Bị Vĩnh Phú</a>
                                <a href="">Công Ty TNHH Đầu Tư Và Vận Tải Châu Long</a>
                                <a href="">Công Ty TNHH Hệ Thống Xây Dựng Châu Âu</a>
                                <a href="">Công Ty TNHH MTV Vật Liệu Xây Dựng Hiệp Hà</a>
                                <a href="">Công Ty TNHH MTV Vina Built</a>
                                <a href="">Vật Liệu Xây Dựng Đạt Hoàng Anh - Công Ty TNHH Thương Mại Và Dịch Vụ Đạt Hoàng Anh</a>
                                <a href="">Công Ty TNHH MTV Xây Dựng & TM Sơn Mỹ</a>
                                <a href="">Vật Liệu Xây Dựng Quốc Tuấn - Công Ty TNHH Xây Dựng Vận Tải Quốc Tuấn</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_left">
                        <div class="sidebar_title">
                            <p>Tìm theo giá sản phẩm</p>
                        </div>
                        <div class="sidebar_nav">
                            <form action="">
                                <input type="text" placeholder="Từ">
                                <input type="text" placeholder="Đến">
                                <button class="btn" type="submit">Tìm kiếm</button>
                            </form>
                            
                            <div class="list_trademark">
                                <a href="">Dưới 500.000 đ</a>
                                <a href="">500.000 đ - 1.000.000 đ</a>
                                <a href="">1.000.000 đ - 2.000.000 đ</a>
                                <a href="">2.000.000 đ - 3.000.000 đ</a>
                                <a href="">3.000.000 đ - 4.000.000 đ</a>
                                <a href="">4.000.000 đ - 5.000.000 đ</a>
                                <a href="">5.000.000 đ - 6.000.000 đ</a>
                                <a href="">6.000.000 đ - 7.000.000 đ</a>
                                <a href="">7.000.000 đ - 10.000.000 đ</a>
                                <a href="">Trên 10.000.000 đ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="width-80 product_categories_right">
                    <div class="breadcrumb">
                        <ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="https://www.yes24.vn">
                                    <span itemprop="name">Trang chủ</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <span itemprop="name">Thời trang</span>
                                <meta itemprop="position" content="2">
                            </li>
                        </ul>
                        <div class="clearfloat"></div>
                    </div>
                    <div class="product_list">
                        <div class="title_heading">
                            <h1>Thời trang nam</h1>
                        </div>
                        <div class="result_rearch width-100 flex">
                            <div class="">Có <b>20</b> kết quả được tìm thấy</div>
                            <div class="">
                                <form action="">
                                    <label for="">Sắp xếp theo</label>
                                    <select name="" id="">
                                        <option value="">Bán chạy</option>
                                        <option value="">Sản phẩm mới</option>
                                        <option value="">Đánh giá sản phẩm</option>
                                        <option value="">Giá cao</option>
                                        <option value="">Giá thấp</option>
                                        <option value="">Sản phẩm khuyến mãi</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="width-100 flex" style="flex-wrap: wrap;">
                            @for($i = 1; $i <= 10 ; $i ++)
                                <div class="product_item product_item-4">
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
            </div>
        </div>
    </section>
@stop