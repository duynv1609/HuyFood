<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="pro_name">Tiêu đề trang:</label>
                <input type="text" class="form-control" required placeholder="Tiêu đề trang" value="{{ old('ps_name',isset($page->ps_name) ? $page->ps_name  : '') }}" name="ps_name">
            </div>

            <div class="form-group">
                <label for="pro_name">Chọn trang:</label>
                <select name="type" class="form-control" >
                    <option value="1" {{ isset($page->ps_type) && $page->ps_type == 1? "selected='selected'" : "" }}>Về chúng tôi</option>
                    <option value="2" {{ isset($page->ps_type) && $page->ps_type == 2? "selected='selected'" : "" }}>Thông tin giao hàng</option>
                    <option value="3" {{ isset($page->ps_type) && $page->ps_type == 3? "selected='selected'" : "" }}>Chính sách bảo mật</option>
                    <option value="4" {{ isset($page->ps_type) && $page->ps_type == 4? "selected='selected'" : "" }}>Điều khoản sử dụng</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Nội dung:</label>
                <textarea name="ps_content" required class="form-control" id="a_content" cols="30" rows="3" placeholder="Nội dung">{{ old('ps_content',isset($page->ps_content) ? $page->ps_content : '') }}</textarea>
            </div>
            

            <button type="submit" class="btn btn-success">Lưu thông tin</button>
        </div>
    </div>

</form>

@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
		CKEDITOR.replace( 'a_content' );
    </script>
@stop