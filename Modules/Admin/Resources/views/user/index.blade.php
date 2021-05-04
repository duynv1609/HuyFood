@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Thành viên</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="table-responsive">
        <h2>Quản lý thành viên</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Tên hiển thị </th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
                <?php $stt = 1; ?>
                 @if (isset($users))
                     @foreach($users as $user)
                         <tr>
                             <td>{{ $stt++ }}</td>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{ $user->phone }}</td>
                         </tr>
                     @endforeach
                 @endif
            </tbody>
        </table>
        <div class="row">
            {!! $users->links() !!}
        </div>
    </div>
@stop