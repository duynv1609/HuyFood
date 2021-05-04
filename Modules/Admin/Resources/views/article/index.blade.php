@extends('admin::layouts.master')
@section('content')
    <div class="page-header">
        <ol class="breadcrumb">
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Bài viết</a></li>
            <li class="active">Danh sách</li>
        </ol>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-inline" action="" style="margin-bottom: 20px">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Tên bài viết ..." name="name" value="{{ \Request::get('name') }}">
                </div>

                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <h2>Quản lý bài viết <a href="{{ route('admin.get.create.article') }}" class="pull-right"><i class="fas fa-plus-circle"></i></a></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th width="18%">Tên bài viết</th>
                    <th style="width: 100px">Hình Ảnh</th>
                    <th style="width: 300px">Mô tả</th>
                    <th>Nổi bật</th>
                    <th>Trạng thái</th>
                    <th width="10%">Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php $stt = 1; ?>
                 @if (isset($articles))
                     @foreach($articles as $article)
                         <tr>
                             <td>{{ $stt++ }}</td>
                             <td>
                                 {{ $article->a_name }}
                             </td>
                             <td>
                                 <img src="{{ pare_url_file($article->a_avatar) }}" alt="" class="img img-responsive" style="width: 100px;height: 80px;">
                             </td>
                             <td>{{ $article->a_description }}</td>
                             
                             <td>
                                 <a href="{{ route('admin.get.action.article',['hot',$article->id]) }}" class="label {{ $article->getHot($article->a_hot)['class'] }}">{{ $article->getHot($article->a_hot)['name'] }}</a>
                             </td>
                             <td>
                                 <a href="{{ route('admin.get.action.article',['active',$article->id]) }}" class="label {{ $article->getStatus($article->a_active)['class'] }}">{{ $article->getStatus($article->a_active)['name'] }}</a>
                             </td>
                             <td>
                                 {{ $article->created_at }}
                             </td>
                             <td>
                                 <a class="btn_customer_action" href="{{ route('admin.get.edit.article',$article->id) }}"><i class="fas fa-pen" ></i> Cập nhật</a>
                                 <a class="btn_customer_action" href="{{ route('admin.get.delete.article',$article->id) }}"><i class="fas fa-trash-alt"></i> Xoá</a>
                             </td>
                         </tr>
                     @endforeach
                 @endif
            </tbody>
        </table>
        <div>
            {!! $articles->links() !!}
        </div>
    </div>
@stop