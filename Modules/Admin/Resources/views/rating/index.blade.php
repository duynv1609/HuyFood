@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Đánh giá</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Quản lý đánh giá</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên TV </th>
                <th>Sản phẩm </th>
                <th>Nội dung</th>
                <th>Rating</th>
                {{--<th>Thao tác</th>--}}
            </tr>
            </thead>
            <tbody>
            <?php $stt = 1; ?>
            @if (isset($ratings))
                @foreach($ratings as $rating)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ isset($rating->user->name) ? $rating->user->name : '[N\A]' }}</td>
                        <td><a href="">{{ isset($rating->product->pro_name) ? $rating->product->pro_name : '[N\A]' }}</a></td>
                        <td>{{ $rating->ra_content }}</td>
                        <td>{{ $rating->ra_number }}</td>
                        {{--<td>--}}
                            {{--<a class="btn_customer_action" href=""><i class="fas fa-trash-alt"></i> Xoá</a>--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
        <div class="row">
            {!! $ratings->links() !!}
        </div>
    </div>
@stop