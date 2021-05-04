<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use App\Models\Rating;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index()
	{
		$ratings = Rating::with('user:id,name', 'product:id,pro_name')
			->limit(10)->get();

		$contacts = Contact::limit(10)->get();

		// doanh thu ngay

		$moneyDay = Transaction::whereDay('created_at',date('d'))
			->where('tr_status',Transaction::STATUS_DONE)
			->sum('tr_total');

        // Tuần

        $moneyWeek = Transaction::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        ->where('tr_status',Transaction::STATUS_DONE)
			->sum('tr_total');;

            $dateS = Carbon::now()->startOfMonth()->subMonth(3);
            $dateE = Carbon::now()->startOfMonth();
		// doanh thu thag
		$moneyMonth = Transaction::whereBetween('created_at',[$dateS,$dateE])
			->where('tr_status',Transaction::STATUS_DONE)
			->sum('tr_total');

        // Năm

        $moneyYear = Transaction::whereYear('created_at', (string) Carbon::now()->year)
			->where('tr_status',Transaction::STATUS_DONE)
			->sum('tr_total');

		$dataMoney = [
			[
				"name" => "Doanh thu ngày",
				"y"    => (int)$moneyDay
			],
			[
				"name" => "Doanh thu tuần",
				"y"    => (int)$moneyWeek
			],
			[
				"name" => "Doanh thu tháng",
				"y"    => (int)$moneyMonth
			],
			[
				"name" => "Doanh thu năm",
				"y"    => (int)$moneyYear
			]
		];

		// danh sach don hang moi

		$transactionNews = Transaction::with('user:id,name')
			->limit(5)
			->orderByDesc('id')
			->get();


		$viewData = [
			'ratings'  => $ratings,
			'contacts' => $contacts,
			'moneyDay' => $moneyDay,
			'moneyMonth' => $moneyMonth,
			'dataMoney' => json_encode($dataMoney),
			'transactionNews' => $transactionNews
		];

		return view('admin::index', $viewData);
	}
}
