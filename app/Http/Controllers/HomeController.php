<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\Rating;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class HomeController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$productBestSeller = Product::where(
		   'pro_sale','>',10)->where('pro_active', '=',1)->limit(12)->get();

        $productNewArrivals = Product::where([
            'pro_hot' => Product::HOT_ON,
            'pro_active' => Product::STATUS_PUBLIC
        ])->limit(12)->get();

        $productOnSales = Product::where(
            'pro_sale','>',10)->where('pro_active', '=',1)->limit(12)->whereDate('created_at', Carbon::today())
            ->get();

        $productFruits = Product::where([
            'pro_category_id'=> 9,
            'pro_active' => Product::STATUS_PUBLIC
        ])
            ->limit(4)
            ->get();

        $productJuices = Product::where([
            'pro_category_id'=> 10,
            'pro_active' => Product::STATUS_PUBLIC
        ])
            ->limit(4)
            ->get();

        $newArrivals = Product::where([
            'pro_category_id'=> 11,
            'pro_active' => Product::STATUS_PUBLIC
        ])
            ->limit(4)
            ->get();
        $cart = Cart::content();

		$articleNews = Article::orderBy('id','DESC')->limit(3)->get();

		$categoriesHome = Category::with('products')
				->where('c_home',Category::HOME)
				->where('c_active',Category::STATUS_PUBLIC)
				->limit(3)
				->get();

		$productSuggest = [];
		//Kiểm tra nguoi dùng dang nhap
		if (get_data_user('web'))
		{
			$transactions = Transaction::where([
				'tr_user_id' => get_data_user('web'),
				'tr_status'  => Transaction::STATUS_DONE
			])->pluck('id');

			if (!empty($transactions))
			{
				$listId = Order::whereIn('or_transaction_id',$transactions)->distinct()->pluck('or_product_id');

				if ( !empty($listId))
				{

					$listIdCategory = Product::whereIn('id',$listId)->distinct()->pluck('pro_category_id');

					if ($listIdCategory)
					{
						$productSuggest = Product::whereIn('pro_category_id',$listIdCategory)->limit(8)->get();
					}
				}
			}
		}
		// chua dang nhap thi thoi

		$ratingnew = Rating::orderBy('id','DESC')->limit(5)->get();



		$viewData = [
			'productBestSeller'     => $productBestSeller,
			'articleNews'    => $articleNews,
			'categoriesHome' => $categoriesHome,
			'productSuggest' => $productSuggest,
			'ratingnew'		 => $ratingnew,
            'productNewArrivals' =>$productNewArrivals,
            'productOnSales' =>$productOnSales,
            'productFruits'=>$productFruits,
            'productJuices'=>$productJuices,
            'newArrivals'=>$newArrivals,
            'cart' =>$cart
		];

        return view('home.index',$viewData);
    }

    public function renderProductView(Request $request)
	{
		if ($request->ajax())
		{
			$listID = $request->id;
			$products = Product::whereIn('id',$listID)->get();
			$html = view('components.product_view',compact('products'))->render();

			return response()->json(['data' => $html]);
		}

	}
}
