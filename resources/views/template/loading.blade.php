<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
    <title>DEMO</title>
</head>
<body>
     <div class="">

         <div class="container" style="width: 500px;margin: 10px auto">
             <div class="container_list">
                 @for($i = 1 ;$i <= 10 ; $i ++)
                     <div class="list_item box-placeholder" style="display: flex;border-bottom: 1px solid #dedede;margin: 20px">
                         <div class="list_item_image image" style="width: 30%;max-width: 100%;margin: 10px">
                             <p class="loading_img"></p>
                         </div>
                         <div class="list_item_text" style="width: 70%;margin-left: 20px">
                             <h2 style="margin: 0;height: 50px" class="text"></h2>
                             <p class="text" style="height: 15px"></p>
                             <p class="text" style="height: 15px"></p>
                             <p class="text" style="height: 15px"></p>
                         </div>
                     </div>

                     <div class="list_item box" style="display: flex;border-bottom: 1px solid #dedede;margin: 20px">
                         <div class="list_item_image" style="width: 30%;margin: 10px">
                             <a href="">
                                 <img src="{{ asset('images/giay_demo.png') }}" style="max-width: 100%;height: 120px">
                             </a>
                         </div>
                         <div class="list_item_text" style="width: 70%;margin-left: 10px;margin-right: 10px">
                             <h2 style="margin: 0">Bộ Công an bắt nguyên Chủ tịch AVG Phạm Nhật Vũ về tội đưa hối lộ</h2>
                             <p>Praesent semper mauris dui. Maecenas faucibus tempor sapien sit amet lobortis. Cras tempor metus turpis, a rhoncus metus mollis id </p>
                         </div>
                     </div>
                 @endfor
             </div>
         </div>
     </div>
</body>
</html>

<script src="{{ asset('js/jquery_off.js') }}" crossorigin="anonymous"></script>
<script>
    $(function(){
		$(() => {

			const box = $('.box'), ph = $('.box-placeholder');

			let toggleEffect = () => {
				box.hide();
				ph.show();

				// setTimeout(() => {
				// 	ph.hide();
				// 	box.show();
				// }, 2e3);
			};

			toggleEffect();

		});
    })
</script>