<?php

namespace App\Http\Controllers;

use App\Models\PageStatic;
use Illuminate\Http\Request;

class PageStaticController extends FrontendController
{
	public function __construct()
	{
		parent::__construct();
	}
	
    public function aboutUs()
	{
		$page = PageStatic::where('ps_type',PageStatic::TYPE_ABOUT)->first();
		
		return view('page_static.about',compact('page'));
	}
	
	public function giaohang()
	{
		$page = PageStatic::where('ps_type',PageStatic::TYPE_INFO_SHOPPING)->first();
		return view('page_static.index',compact('page'));
	}
	
	public function baomat()
	{
		$page = PageStatic::where('ps_type',PageStatic::TYPE_BAOMAT)->first();
		return view('page_static.index',compact('page'));
	}
	
	public function dieukhoansudung()
	{
		$page = PageStatic::where('ps_type',PageStatic::TYPE_DIEUKHOAN)->first();
		return view('page_static.index',compact('page'));
	}
}
