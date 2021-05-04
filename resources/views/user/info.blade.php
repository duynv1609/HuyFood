@extends('user.layout')
@section('content')

    <h1 class="page-header">Cập nhật thông tin</h1>
    <div class="row">
        <div class="col-sm-12">
            <form action="" method="POST">
                @csrf
                <div class="form-group" >
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" disabled="" placeholder="Enter email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="pwd">Họ Tên</label>
                    <input type="text" class="form-control" placeholder="Họ tên" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label for="pwd">Số điện thoại</label>
                    <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{ $user->phone }}">
                </div>

                <div class="form-group">
                    <label for="pwd">Địa chỉ</label>
                    <input type="text" class="form-control" placeholder="Địa chỉ" name="address" value="{{ $user->address }}">
                </div>

                <div class="form-group">
                    <label for="pwd">Giới thiệu bản thân</label>
                    <textarea name="about" id="" cols="30" rows="5" class="form-control" placeholder="Mô tả bản thân">{{ $user->about }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhật</button>
            </form>
        </div>
    </div>
@stop