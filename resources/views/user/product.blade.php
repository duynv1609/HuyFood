@extends('user.layout')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <h2>Danh sách sản phẩm bán chạy</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Giá tiền</th>
                        <th>Lượt bán</th>
                    </tr>
                </thead>
                <tbody>
                @if (isset($products))
                    @foreach($products as $product)
                        <tr>
                            <td>#{{ $product->id }}</td>
                            <td>
                                <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}" target="_blank">{{ $product->pro_name }}</a>
                            </td>
                            <td>
                                <img src="{{ pare_url_file($product->pro_avatar) }}" alt="" style="width: 80px;height: 80px;">
                            </td>
                            <td>{{ number_format($product->pro_price,0,',','.') }} VNĐ</td>
                            <td>{{ $product->pro_pay }}</td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop