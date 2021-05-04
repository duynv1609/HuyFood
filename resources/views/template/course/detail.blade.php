@extends('template.layout')
@section('content')
    @php
        $arrayImg = [
            'https://rautrangteam.net/wp-content/uploads/avatars/1/5c384a4ea3577-bpfull.png',
            'https://rautrangteam.net/wp-content/uploads/2019/01/VSL-EP-Tile-360x250.png',
            'https://rautrangteam.net/wp-content/uploads/2019/01/rautrangteam1-360x250.png',
            'https://rautrangteam.net/wp-content/uploads/2019/01/ProductPageEPTile600-360x250.png'
        ]
    @endphp
    <section>
        <div class="tp_container">
            <div class="course_detail ">
                <div class="title_heading">
                    <h2><img src="{{ asset('images/new.png') }}" style="width: 40px;height: 40px" alt="">Chi tiết khoá học</h2>
                </div>
                <div class="width-100 flex flex-direction-column">
                    <div class="width-70">
                        <div class="video"></div>
                        <div class="course_detail_list">
                            <div style="border: 1px solid #dedede;margin-top: 20px;padding: 10px">
                                <h5 style="font-size: 20px;color: #333">Đoạn này mô tả về khoá học</h5>
                            </div>
                            <div style="border: 1px solid #dedede;margin-top: 20px;padding: 10px">
                                <h5 style="font-size: 20px;color: #333">Chương trình học</h5>
                                @php
                                    $arrayDetail = [
                                        'Tại sao lại làm youtobe',
                                        'Cần chuẩn bị những gì để kiếm tiền trên Youtube?',
                                        'cách kiếm tiền trên Youtube',
                                        'Youtube trả tiền cho tôi bằng cách nào?',
                                        'Điều quan trọng nhất khi kiếm tiền trên Youtube',
                                        'Hướng dẫn nhận tiền từ Youtube'
                                    ]
                                @endphp
                                <style>
                                    .active_video,.active_video i { color: #e91d63 !important;}
                                    .course_item_video { display: none}
                                    iframe { width: 99% !important;min-height: 400px !important;padding-left: 9px}
                                </style>
                                <ul class="course_detail-link">
                                    @for($i = 1 ;$i <= 10 ; $i ++)
                                        <li>
                                            <a href="" style="display: block;padding: 8px;border-bottom: 1px dotted #e4e4e4;color: #333">
                                                <i class="far fa-file-video" style="color: #e0e0e0;font-size: 14px;margin-right: 5px;"></i><span>{{ $arrayDetail[rand(0,4)] }}</span>
                                            </a>
                                            <div class="course_item_video">
                                                {{--<iframe width="560" height="315" src="https://www.youtube.com/embed/9YffrCViTVk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                                            </div>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="width-30" style="margin: 10px">
                        <div class="title_heading">
                            <h3>Bài viết nổi bật</h3>
                        </div>
                        <div class="product_info">

                        </div>
                        @for($i = 1 ; $i <= 5 ; $i ++)
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
        </div>
    </section>
@stop
@section('script')
    <script>

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
		
        $(function(){
        	$(".course_detail-link li a").click(function(event){
        	   event.preventDefault();
        	   let $this = $(this);
        	   $(".course_item_video").hide();
        	   $this.next().slideToggle();
        	   if ($this.hasClass('active_video'))
               {
				   $this.find('i').removeClass('fa-play-circle').addClass('fa-file-video');
                   $this.removeClass('active_video')
               }else
               {
				   $this.addClass('active_video');
				   $this.find('i').addClass('fa-play-circle').removeClass('fa-file-video');
               }
            });
        })
    </script>
@stop