@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Liên hệ</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Quản lý liên hệ</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tiêu đề</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Nội dung</th>
                <th>Trạng thái</th>
                <th width="10%">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            <?php $stt = 1; ?>
            @if (isset($contacts))
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $stt++ }}</td>
                        <td>{{ $contact->c_title }}</td>
                        <td>{{ $contact->c_name }}</td>
                        <td>{{ $contact->c_email }}</td>
                        <td>{{ $contact->c_content }}</td>
                         <td>
                             @if ( $contact->c_status == 1)
                                 <span class="label label-success">Đã xử lý</span>
                             @else
                                 <span class="label label-default">Chưa xử lý</span>
                             @endif
                         </td>
                        <td>
                            <a class="btn_customer_action" href="{{ route('admin.action.contact',['status',$contact->id]) }}"><i class="fas fa-pen" ></i> Cập nhật</a>
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@stop