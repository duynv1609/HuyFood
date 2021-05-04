<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShoppingCartController extends FrontendController
{
	private  $vnp_TmnCode = "H6TO1BUK"; //Mã website tại VNPAY
	private  $vnp_HashSecret = "PLTKNSWOZDUSRHOGAUPBDMNJQPWNGAFC"; //Chuỗi bí mật
	private  $vnp_Url = "http://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
	private  $vnp_Returnurl = "http://doantotnghiep.abc/gio-hang/thanh-toan-pay";
	
	/**
	 * @param Request $request
	 * @param $id
	 * thêm giỏ hàng
	 */
    public function addProduct(Request $request,$id)
	{
	    $product = Product::select('pro_name','id','pro_price','pro_sale','pro_avatar','pro_number')->find($id);
	    
	    if (!$product) return redirect('/');
		
	    $price = $product->pro_price;
	    if ($product->pro_sale)
		{
			$price =  $price * (100 - $product->pro_sale)/ 100;
		}
		
		if ($product->pro_number == 0 )
		{
			return redirect()->back()->with('warning','Sản phẩm đã hết hàng');
		}
		
		\Cart::add([
			'id'      => $id,
			'name'    => $product->pro_name,
			'qty'     => 1,
			'price'   => $price,
			'options' => [
				'avatar' => $product->pro_avatar,
				'sale'   => $product->pro_sale,
				'price_old' => $product->pro_price
			],
		]);
		
		return redirect()->back()->with('success','Mua hàng thành công');
	}
	
	public function deleteProductItem($key)
	{
		\Cart::remove($key);
		
		return redirect()->back();
	}
	
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 * Danh sách giỏ hàng
	 */
	public function getListShoppingCart()
	{
		$products = \Cart::content();
		return view('shopping.index',compact('products'));
	}
	
	/**
	 * Form thanh toan
	 */
	public function getFormPay()
	{
		$products = \Cart::content();
		return view('shopping.pay',compact('products'));
	}
	
	/**
	 * Lưu thông tin giỏ hàng
	 */
	public function saveInfoShoppingCart(Request $request)
	{
		$totalMoney = str_replace(',','',\Cart::subtotal(0,3));
		$transactionId = 	Transaction::insertGetId([
			'tr_user_id' => get_data_user('web'),
			'tr_total'   =>  (int)$totalMoney,
			'tr_note'    => $request->note,
			'tr_address' => $request->address,
			'tr_phone'   => $request->phone,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		if ($transactionId)
		{
			$products = \Cart::content();
			foreach ($products as $product)
			{
				Order::insert([
					'or_transaction_id'	 => $transactionId,
					'or_product_id'         => $product->id,
					'or_qty'                => $product->qty,
					'or_price'              => $product->options->price_old,
					'or_sale'               => $product->options->sale,
				]);
			}
		}
		
		\Cart::destroy();
		
		return redirect('/');
	}
	
	/**
	 * Cập nhật số lượng giỏ hàng
	 */
	public function updateShoppingCart(Request $request, $id)
	{
		\Cart::update($id, ['qty' => $request->qty]);
		return redirect()->back()->with('success','Cập nhật thành công');
	}
	
	public function showFormPay(Request $request)
	{
		if ($request->vnp_ResponseCode == '00')
		{
		      $transactionID = $request->vnp_TxnRef;
		      
		      $transaction = Transaction::find($transactionID);
		      if ($transaction)
			  {
				  \Cart::destroy();
				  $transaction->tr_type = Transaction::TYPE_PAY;
				  $transaction->save();
				  return redirect()->to('/')->with('success','Xác nhận giao dịch thành công');
			  }
			  
			return redirect()->to('/')->with('danger','Mã đơn hàng không tồn tại');
			
		}
		
		$products = \Cart::content();
		return view('shopping.pay_online',compact('products'));
	}
	
	/**
	 * @param Request $request
	 * Lưu online
	 */
	public function savePayOnline(Request $request)
	{
		$totalMoney = str_replace(',','',\Cart::subtotal(0,3));
		$transactionId = 	Transaction::insertGetId([
			'tr_user_id' => get_data_user('web'),
			'tr_total'   =>  (int)$totalMoney,
			'tr_note'    => $request->note,
			'tr_address' => $request->address,
			'tr_phone'   => $request->phone,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now()
		]);
		
		if ($transactionId)
		{
			$products = \Cart::content();
			foreach ($products as $product)
			{
				Order::insert([
					'or_transaction_id'	 => $transactionId,
					'or_product_id'         => $product->id,
					'or_qty'                => $product->qty,
					'or_price'              => $product->options->price_old,
					'or_sale'               => $product->options->sale,
				]);
			}
		}
		
		// Sau khi xử lý xong bắt đầu xử lý online
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		
		// tham so dau vao
		$inputData = array(
			"vnp_Version"    => "2.0.0",
			"vnp_TmnCode"    => $this->vnp_TmnCode,
			"vnp_Amount"     => $totalMoney * 100, // so tien thanh toan,
			"vnp_Command"    => "pay",
			"vnp_CreateDate" => date('YmdHis'),
			"vnp_CurrCode"   => "VND",
			"vnp_IpAddr"     => $_SERVER['REMOTE_ADDR'], // IP
			"vnp_Locale"     => $request->language, // ngon ngu,
			"vnp_OrderInfo"  => $request->note, // noi dung thanh toan,
			"vnp_OrderType"  => $request->order_type,    // loai hinh thanh toan
			"vnp_ReturnUrl"  => $this->vnp_Returnurl,   // duong dan tra ve
			"vnp_TxnRef"     => $transactionId , // ma don hang,
		);
		
		if ($request->bank_code) {
			$inputData['vnp_BankCode'] = $request->bank_code;
		}
		ksort($inputData);
		$query = "";
		$i = 0;
		$hashdata = "";
		foreach ($inputData as $key => $value) {
			if ($i == 1) {
				$hashdata .= '&' . $key . "=" . $value;
			} else {
				$hashdata .= $key . "=" . $value;
				$i = 1;
			}
			$query .= urlencode($key) . "=" . urlencode($value) . '&';
		}
		
		
		$vnp_Url = $this->vnp_Url . "?" . $query;
		if ($this->vnp_HashSecret) {
			$vnpSecureHash = hash('sha256', $this->vnp_HashSecret . $hashdata);
			$vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
		}
		
		$returnData = array(
			'code' => '00',
			'message' => 'success',
			'data' => $vnp_Url
		);
		
		return redirect()->to($returnData['data']) ;
	}
}


//Ngân hàng: NCB
//Số thẻ: 9704198526191432198
//Tên chủ thẻ:NGUYEN VAN A
//Ngày phát hành:07/15
//Mật khẩu OTP:123456

//http://doantotnghiep.abc/gio-hang/thanh-toan-pay?vnp_Amount=6500000&vnp_BankCode=NCB&vnp_BankTranNo=20190519170832&vnp_CardType=ATM&vnp_OrderInfo=ok&vnp_PayDate=20190519171230&vnp_ResponseCode=00&vnp_TmnCode=0B7MQPMF&vnp_TransactionNo=13144574&vnp_TxnRef=19&vnp_SecureHashType=SHA256&vnp_SecureHash=a5316a614b22af756889d21d4d382f0fa124e40b6df08d4f214892dceb799f55