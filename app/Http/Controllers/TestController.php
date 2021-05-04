<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
	{
		return view('template.index');
	}
	
	public function category()
	{
		return view('template.category');
	}
	
	public function detail()
	{
		return view('template.detail');
	}
	
	public function article()
	{
		return view('template.article');
	}
	
	public function loading()
	{
		return view('template.loading');
	}
	
	public function transaction()
	{
		return view('template.transaction');
	}
	
	public function course()
	{
		return view('template.course.index');
	}
	
	public function courseDetail()
	{
		return view('template.course.detail');
	}
}
