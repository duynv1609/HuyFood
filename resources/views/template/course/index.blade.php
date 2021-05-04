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
            <div class="product_list course_list">
                <div class="title_heading">
                    <h2><img src="{{ asset('images/new.png') }}" style="width: 40px;height: 40px" alt="">Danh sách khoá học</h2>
                </div>
                <div class="width-100 flex" style="flex-wrap: wrap;">
                    @for($i = 1; $i <= 10 ; $i ++)
                        <div class="product_item course_item">
                            <a href="{{ route('get.course.detail') }}" class="product_item_img">
                                <img src="{{ $arrayImg[rand(0,3)] }}" alt="">
                            </a>
                            <h3 class="product_item_name" style="border-bottom: 1px solid #dedede;padding: 10px 0"><a href="">Hướng dẫn kiếm tiền Youtobe</a></h3>
                            <div class="course_info flex" style="justify-content: space-between;margin-top: 20px">
                                <a href="" class="width-10" style="line-height: 30px"><i style="font-size: 15px;border-radius: 50%;border: 1px solid #dedede;width: 20px;height: 20px;line-height: 20px;text-align: center;color: #ddd;" class="fas fa-user"></i></a>
                                <div class="width-60 course_info_auth">
                                    <a href="">By Admin</a>
                                    <p>Nhân viên</p>
                                </div>
                                <div class="width-30 course_info_auth-40" style="text-align: right">
                                    <a href="{{ route('get.course.detail') }}" style="padding: 5px 10px;border: 1px solid #e91d63;display: inline-block;color: #e91d63;border-radius: 5px;">Xem ngay</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                    <div class="clearfloat"></div>
                </div>
            </div>
        </div>
    </section>
@stop