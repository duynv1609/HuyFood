<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
    	$transactions = Transaction::with('user:id,name');
    	
    	$transactionsTotal = Transaction::whereRaw(1);
    	
    	if ($request->dates)
		{
			$date = $this->getStartEndTime($request->dates);
			$transactionsTotal->whereBetween(DB::raw('DATE(created_at)'),array($date['start'],$date['end']));
			$transactions->whereBetween(DB::raw('DATE(created_at)'),array($date['start'],$date['end']));
		}
		
		if ($request->status)
		{
			$status = $request->status == 2 ? 0 : 1;
			$transactionsTotal->where('tr_status',$status);
			$transactions->where('tr_status',$status);
		}
		
		$transactionsTotal = $transactionsTotal->sum('tr_total');
    	$transactions = $transactions->orderByDesc('id')->paginate(10);
    	
    	$viewData = [
    		'transactions' => $transactions,
			'transactionsTotal' => $transactionsTotal,
			'query' => $request->query()
		];
    	
        return view('admin::transaction.index',$viewData);
    }
    
    public function viewOrder(Request $request,$id)
	{
		 if ($request->ajax())
		 {
		 	$orders = Order::with('product')
				->where('or_transaction_id',$id)->get();
		 	
		 	$html = view('admin::components.order',compact('orders'))->render();
		 	return \response()->json($html);
		 }
	}
	
	public function delete($id)
	{
		\DB::table('transactions')->where('id',$id)->delete();
		return redirect()->back();
	}
	
	/**
	 * Xử lý trạng thái đơn hàng
	 */
	public function actionTransaction($id)
	{
		$transaction = Transaction::find($id);
		$orders = Order::where('or_transaction_id',$id)->get();
		
		if ($orders)
		{
			//tru di so luong cua san pham
			// tang bien pay san pham
			foreach ($orders as $order)
			{
				$product = Product::find($order->or_product_id);
				$product->pro_number = $product->pro_number - $product->or_qty;
				$product->pro_pay ++;
				$product->save();
			}
		}
		
		// update user
		\DB::table('users')->where('id',$transaction->tr_user_id)
			->increment('total_pay');
		
		$transaction->tr_status = Transaction::STATUS_DONE;
		$transaction->save();
		
		return redirect()->back()->with('success','Xử lý đơn hàng thành công');
	}
	
	public function getStartEndTime($date_range, $config=[])
	{
		$dates = explode(' - ', $date_range);
		
		if (array_get($config, 'his'))
		{
			$start_date = date('Y-m-d H:i:s', strtotime($dates[0]));
			$end_date = date('Y-m-d H:i:s', strtotime($dates[1]));
		}else
		{
			$start_date = date('Y-m-d 00:00:00', strtotime($dates[0]));
			$end_date = date('Y-m-d 23:59:59', strtotime($dates[1]));
		}
		return [
			'start' => $start_date,
			'end' => $end_date
		];
	}
}
