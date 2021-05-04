<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminWarehouseController extends Controller
{
    public function getWarehouseProduct(Request $request)
	{
		$products = Product::with('category:id,c_name');
		
		if ($request->type && $request->type == 'pay')
		{
			$column = 'pro_pay';
			$products->where('pro_pay','>',0);
		}else
		{
			$column = 'pro_number';
			$products->where('pro_number','<=',5);
		}
		
		if ($request->name)  $products->where('pro_name','like','%'.$request->name.'%');
		if ($request->cate)  $products->where('pro_category_id',$request->cate) ;
		
		
		$products = $products->orderByDesc($column)->paginate(10);
		
		$categories = $this->getCategories();
		
		$viewData = [
			'products'   => $products,
			'categories' => $categories
		];
		
		return view('admin::warehouse.index',$viewData);
	}
	
	public function getCategories()
	{
		return Category::all();
	}
}
