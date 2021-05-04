@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Page Static</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>

    <div class="table-responsive">
        <h2>Quản lý  <a href="{{ route('admin.get.create.page_static') }}" class="pull-right"><i class="fas fa-plus-circle"></i></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="20%">Tiêu đề trang</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1; ?>
                 @if (isset($pages))
                     @foreach($pages as $page)
                         <tr>
                             <td>{{ $stt++ }}</td>
                             <td>
                                 {{ $page->ps_name }}
                             </td>

                             <td>
                                 {{ $page->created_at }}
                             </td>
                             <td>
                                 <a class="btn_customer_action" href="{{ route('admin.get.edit.page_static',$page->id) }}"><i class="fas fa-pen" ></i> Cập nhật</a>
                             </td>
                         </tr>
                     @endforeach
                 @endif
            </tbody>
        </table>
        
    </div>
@stop