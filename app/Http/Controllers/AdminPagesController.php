<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Auth;
use App\AdminPages;
use App\Http\Requests\AdminPagesRequest; 

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Page        = new AdminPages();		
	   $PagesRecord = $Page->all();
	   
	   return view('admin.pages.listing_page',compact('PagesRecord'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.pages.add_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminPagesRequest $request)
    {
        $Page                       = new AdminPages();

		if(!empty($request->input("page_slug")))
		{
		  $PageSlug = Art_UrlSlug($request->input("page_slug"),'content_pages','page_slug');
		}
		else
		{
		  $PageSlug = Art_UrlSlug($request->input("page_title"),'content_pages','page_slug');
		}


	    $Page->page_name            = $request->input("page_title");
	    $Page->page_slug            = $PageSlug;
	    $Page->page_description     = addslashes($request->input("page_description"));
	    $Page->page_order           = $request->input("page_order");
	    $Page->display_status       = $request->input("page_status");
	    $Page->meta_title           = $request->input("page_meta_title");
	    $Page->meta_description     = $request->input("page_meta_keyword");
	    $Page->meta_keyword         = $request->input("page_meta_description");
		$Page->created_at           = date('Y-m-d H:i:s');
	    $Page->save();
		return redirect('admin/page')->with('message', 'Information added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $Page        = new AdminPages();
	  $PageRecord  = $Page->findOrFail($id);	
	  
	  return view('admin.pages.edit_page', compact('PageRecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminPagesRequest $request, $id)
    {
        $Page        = new AdminPages();
		$PageRecord  = $Page->findOrFail($id);

		if(!empty($request->page_slug))
		{
		  $PageSlug = Art_UrlSlug($request->input("page_slug"),'content_pages','page_slug','id',$id);
		}
		else
		{
		 $PageSlug = Art_UrlSlug($request->input("page_title"),'content_pages','page_slug','id',$id);
		}

		DB::table('content_pages')->where('id', $id)->update(['page_name'=>$request->page_title,
			                                          'page_slug'=>$PageSlug,
			                                          'page_description'=>addslashes($request->page_description),
			                                          'page_order'=>$request->page_order,
			                                          'display_status'=>$request->page_status,
			                                          'meta_title'=>$request->page_meta_title,
			                                          'meta_description'=>$request->page_meta_keyword,
			                                          'meta_keyword'=>$request->page_meta_description]);
	  
	    return redirect('admin/page')->with('message', 'Information saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Page        = new AdminPages();
		$PageRecord  = $Page->findOrFail($id);
        $PageRecord->delete();
		return redirect('admin/page')->with('message', 'Information deleted successfully.');
    }
}
