<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Demo Giao diện</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=vietnamese" rel="stylesheet">
</head>
<body>
<section style="border-bottom: 1px solid #dedede">
    
</section>
<section style="background-color: white">
    <div class="tp_container" id="header_top" style="margin-top: 0">
        <header class="header_top">
            <div class="nav_top width-100">
                <ul class="float-right">
                    <li><a href=""><i class="far fa-address-book"></i>Kiểm tra đơn hàng</a></li>
                    <li><a href=""><i class="fas fa-phone"></i>Chăm sóc khách hàng</a></li>
                    <li><a href=""><i class="fas fa-bell"></i>Thông báo</a></li>
                </ul>
                <div class="clearfloat"></div>
            </div>
            <div class="header_content width-100 flex">
                <div class="width-20 header_content_left">
                    <a href="" class="header_content_logo">
                        <img src="https://image.yes24.vn/upload/image/ci.png" alt="">
                    </a>
                </div>
                <div class="width-30 header_content_search">
                    <form action="" class="flex">
                        <input type="text" placeholder="Bạn tìm gì hôm nay?">
                        <button><i class="fas fa-search"></i> </button>
                    </form>
                </div>
                <div class="width-50 header_content_right">
                    <ul class="float-right">
                        <li>
                            <a href="" class="flex"><i class="fas fa-car-side"></i> <span>Sản phẩm đã xem</span></a>
                        </li>
                        <li>
                            <a href="" class="flex"><i class="fas fa-radiation-alt"></i> <span>Khuyến mãi</span></a>
                        </li>
                        <li class="">
                            <div class="nav_user">
                                <span><i class="fas fa-user-plus"></i></span>
                                <p><a href="" class="md_show">Đăng ký</a> <br><a href="">Đăng nhập</a></p>
                            </div>
                        </li>
                        <li>
                            <a href="" class="shopping_nav"><i class="fas fa-cart-arrow-down"></i><span>2</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
    </div>
</section>

<section id="scrollMenu" style="border-bottom: 1px solid #dedede;background-color: white">
    <div class="tp_container" style="margin-top: 0">
        <nav class="main_menu">
            <ul class="float-left">
                <li><a href=""><i class="fas fa-home"></i> Trang chủ</a></li>
                <li><a href=""><i class="fas fa-database"></i> Sản phẩm</a></li>
                <li><a href="{{ route('get.course') }}"><i class="fas fa-book"></i> Khoá học </a></li>
                <li><a href=""><i class="fas fa-pen"></i> Tin tức</a></li>
                <li><a href=""><i class="fas fa-address-card"></i> Giới thiệu</a></li>
                <li><a href=""><i class="fas fa-file-signature"></i> Liên hệ</a></li>
            </ul>
            <div class="clearfloat"></div>
        </nav>
    </div>
</section>
<section class="box_nav_mobile">
    <div class="tp_container">
        <nav class="nav_menu_mobile flex">
            <a href="javascript:;void(0)" rel="nofollow" class="box_nav_mb"><i class="fas fa-list"></i></a>
            <a href="javascript:;void(0)" rel="nofollow" class="box_nav_info"><i class="fas fa-shopping-cart"></i></a>
        </nav>
    </div>
</section>
@yield('slide')
@yield('content')
<section class="footer tp_container_fluid">
    <div class="box_footer">
        <div class="width-100 footer_top flex">
            <div class="width-25 footer_top_item">
                <h5>Chăm sóc khách hàng</h5>
                <ul>
                    <li><a href="">Trung tâm trợ giúp</a></li>
                    <li><a href="">Hướng dẫn mua hàng</a></li>
                    <li><a href="">Chinh sách bảo hành</a></li>
                    <li><a href="">Chăm sóc khách hàng</a></li>
                </ul>
            </div>
            <div class="width-25 footer_top_item">
                <h5>Về chúng tôi</h5>
                <ul>
                    <li><a href="">Giới thiệu Cty</a></li>
                    <li><a href="">Tuyển dụng</a></li>
                    <li><a href="">Điều khoản sử dụng</a></li>
                    <li><a href=""></a></li>
                </ul>
            </div>
            <div class="width-25 footer_top_item">
                <h5>Thanh toán</h5>
                <p><span></span><span></span></p>
            </div>
            <div class="width-25 footer_top_item">
                <h5>Đăng ký nhận tin khuyến mãi</h5>
                <form action="" class="flex">
                    <input type="text" placeholder="Email ...">
                    <button type="submit">Nam</button>
                    <button type="submit">Nữ</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer_nav">
        <ul class="">
            <li><a href="">Giới thiệu</a></li>
            <li><a href="">Quy định sử dụng</a></li>
            <li><a href="">Quản lý thông tin cá nhân</a></li>
            <li><a href="">Tin tức</a></li>
            <li><a href="">Tuyển dụng</a></li>
            <li><a href="">Đối tác</a></li>
        </ul>
    </div>
    <div class="footer_bottom">
        <p>Copyright © <a href="">TrungPhuNA</a> 2019</p>
    </div>
</section>
<!--sidebar info mobile-->
<section class="mb_info_user">
    <a href="javascript::void(0)" class="close_mb_user"><i class="far fa-times-circle"></i></a>
    <div class="mb_info_header flex">
        <div class="mn_user_image width-30">
            <img src="{{ asset('images/user_default.png') }}" alt="">
        </div>
        <div class="mn_user_name width-70">
            <a href="">Xin chào <span>Phan Trung Phú</span></a>
            <br><a href=""><i class="fas fa-pencil-alt"></i> Chỉnh sửa thông tin</a>
        </div>
    </div>
    <div class="mb_info_content">
        <ul>
            <li><a href=""><i class="fas fa-home"></i> Trang chủ</a></li>
            <li><a href=""><i class="fas fa-database"></i> Quản lý đơn hàng</a></li>
            <li><a href=""><i class="fas fa-heart"></i> Sản phẩm yêu thích</a></li>
            <li><a href=""><i class="fas fa-cogs"></i> Thay đổi mật khẩu</a></li>
        </ul>
        <a href="" class="sign-out-alt"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
    </div>
</section>
@include('template.components.modal.demo')
<div class="opacity"></div>
</body>
<script src="{{ asset('js/jquery_off.js') }}" crossorigin="anonymous"></script>
@yield('script')
<script>

	//slide
	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
		showDivs(slideIndex += n);
	}

	function showDivs(n) {
		var i;
		var x = document.getElementsByClassName("mySlides");
		if (x.length)
        {
			if (n > x.length) {slideIndex = 1}
			if (n < 1) {slideIndex = x.length}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex-1].style.display = "block";
        }
	}

	//fix
	// When the user scrolls the page, execute myFunction
	window.onscroll = function() {myFunction()};
	var header = document.getElementById("scrollMenu");
	var sticky = header.offsetTop;
	function myFunction() {
		console.log(sticky);
		if (window.pageYOffset > sticky) {
			header.classList.add("fix_menu");
		} else {
			header.classList.remove("fix_menu");
		}
	}

	$(function () {

		// show sidebar-left
		$(".box_nav_mb").click(function(){
			let productCategories = $(".product_categories_left");
			 if ($(".product_categories_left").hasClass('active_mb'))
             {
				 productCategories.css('left','-300px');
				 productCategories.removeClass('active_mb')
				 $(".opacity").hide();
             }else
             {
				 productCategories.css('left','0');
				 productCategories.addClass('active_mb')
				 $(".opacity").show();
             }
		});

		$(".close_sidebar_mb").click(function(event){
			event.preventDefault();
			$(".box_nav_mb").trigger('click')
        })

        // user
        $(".box_nav_info").click(function(event){
        	event.preventDefault();
        	let mb_info_header = $(".mb_info_user");

			if (mb_info_header.hasClass('active_mb'))
			{
				mb_info_header.css('right','-300px');
				mb_info_header.removeClass('active_mb')
				$(".opacity").hide();
			}else
			{
				mb_info_header.css('right','0');
				mb_info_header.addClass('active_mb')
				$(".opacity").show();
			}
        })

        $(".close_mb_user").click(function(event){
			event.preventDefault();

			$(".box_nav_info").trigger('click')
        });

		//test show modal
        $(".md_show").click(function(event){
			event.preventDefault();

			let $this = $(this);
			if ($this.hasClass('active_md'))
            {
				$(".tp_modal").css('top','-100%')
                $this.removeClass('active_md')
				$(".opacity").hide();
            }else
            {
				$this.addClass('active_md')
				$(".tp_modal").css('top','15%')
				$(".opacity").show();
            }
        })

        //close modal
        $(".tp_modal_close").click(function(event){
			event.preventDefault();
			$(".md_show").trigger('click');
        });
	})
</script>
</html>
