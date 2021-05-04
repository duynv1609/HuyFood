@extends('template.layout')

@section('content')
    <section>
        <div class="tp_container">
            <div class="dashboard">
                <div class="title_heading">
                    <h2><img src="{{ asset('images/new.png') }}" style="width: 40px;height: 40px" alt="">Chào mừng bạn đến với {{ Request::url() }}</h2>
                </div>
                <h6>Thống kê</h6>
                <div class="width-100 flex">
                    <div class="dashboard_item" style="background-color: #4caf50">
                         <div class="">
                             <p>2</p>
                             <p>Tổng đơn hàng</p>
                         </div>
                    </div>
                    <div class="dashboard_item" style="background-color: #2196f3">
                        <div class="">
                            <p>2</p>
                            <p>Tổng đơn hàng</p>
                        </div>
                    </div>
                    <div class="dashboard_item" style="background-color: #f72a6d">
                        <div class="">
                            <p>2</p>
                            <p>Tổng đơn hàng</p>
                        </div>
                    </div>
                    <div class="dashboard_item" style="background-color: #ff9800">
                        <div class="">
                            <p>2</p>
                            <p>Tổng đơn hàng</p>
                        </div>
                    </div>
                    <div class="clearfloat"></div>
                </div>

                <h6>Danh sách đơn hàng</h6>
                <div class="width-100">
                    <div class="transaction_item">
                        <table class="width-100" style="color: #333">
                            <tr style="background-color: #dedede">
                                <th width="10%;" style="padding: 10px">Mã đơn hàng</th>
                                <th width="10%">Ngày Mua</th>
                                <th>Tổng Tiền</th>
                                <th>Trạng Thái</th>
                            </tr>
                            @for($i = 1; $i <= 10 ;$i ++)
                            <tr style="border-bottom: 1px solid #f2f2f2">
                                <td align="center" style="padding: 3px">{{ $i }}</td>
                                <td align="center">20-2-2011</td>
                                <td align="center">20.000.000 vnđ</td>
                                <td align="center"><a href="">Thành Công</a></td>
                            </tr>
                            @endfor
                        </table>
                    </div>
                    <div class="transaction_item_mobile flex" style="padding: 10px;background-color: #eee;margin-bottom: 5px">
                        <p class="width-15">Mã ĐH</p>
                        <p class="width-25">Ngày mua</p>
                        <p class="width-30">Tổng tiền</p>
                        <p class="width-25">Trạng Thái</p>
                    </div>
                    @for($i = 1 ;$i <= 10 ; $i++)
                    <div class="transaction_item_mobile flex" style="padding: 10px">
                        <span class="width-15">#{{ $i }}</span>
                        <span class="width-25">20-2-2011</span>
                        <span class="width-30">20.000.000 vnđ</span>
                        <span class="width-25">Hoàn Thành</span>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
    
@stop