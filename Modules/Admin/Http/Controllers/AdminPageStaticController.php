<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\PageStatic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminPageStaticController extends Controller
{
    public function index()
	{
		$pages = PageStatic::all();
		
		return view('admin::page_static.index',compact('pages'));
	}
	
	public function create()
	{
		return view('admin::page_static.create');
	}
	
	public function store(Request $request)
	{
		
		$this->createOrUpdate($request);
		return redirect()->back();
	}
	
	public function edit($id)
	{
	     $page = PageStatic::find($id);
		return view('admin::page_static.create',compact('page'));
	}
	
	public function update(Request $request,$id)
	{
		$this->createOrUpdate($request,$id);
		return redirect()->back();
	}
	
	public function createOrUpdate($request,$id = '')
	{
	     $page = new PageStatic();
	     
	     if ($id) $page = PageStatic::find($id);
	     
	     $page->ps_name = $request->ps_name;
	     $page->ps_content = $request->ps_content;
	     $page->ps_type = $request->type;
	     
	     $page->save();
	     
	}
}
