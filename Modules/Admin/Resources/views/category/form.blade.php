<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên danh mục:</label>
        <input type="text" class="form-control" placeholder="Tên danh mục" value="{{ old('name',isset($category->c_name) ? $category->c_name  : '') }}" name="name">
        @if($errors->has('name'))
            <span class="error-text">
                {{$errors->first('name')}}
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="name">Icon:</label>
        <input type="text" class="form-control" placeholder="fa fa-home" value="{{ old('icon',isset($category->c_icon) ? $category->c_icon : '') }}" name="icon">
        @if($errors->has('icon'))
            <span class="error-text">
                        {{$errors->first('icon')}}
                    </span>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
</form>