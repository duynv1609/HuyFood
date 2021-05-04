@extends('user.layout')
@section('content')
    <style>
        .product-img img
        {
            max-width: 100%;
        }
        .secondary-image,.actions ,.add-to-cart{ display: none}
        h2 { font-size: 15px;line-height: 18px;}
        .price-box
        {
            margin-top: 10px;
            text-align: center;
        }
    </style>
    <div class="row">
        <div class="col-sm-12">
            <div id="product_view"></div>
        </div>
    </div>
@stop
@section('script')
    <script>

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		
		let routeRenderProduct  = '{{ route('post.product.view') }}';

        let products = localStorage.getItem('products');
        products = $.parseJSON(products)

        if (products.length > 0 )
        {
            $.ajax({
                url : routeRenderProduct,
                method : "POST",
                data  : { id : products},
                success : function(result)
                {
                    $("#product_view").html('').append(result.data)
                }
            });
        }
    </script>
@stop