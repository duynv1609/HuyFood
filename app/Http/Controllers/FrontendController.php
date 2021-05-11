<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function __construct()
	{
		$categories = Category::where('c_active',Category::STATUS_PUBLIC)->get();
		View::share('categories', $categories);
	}
}
