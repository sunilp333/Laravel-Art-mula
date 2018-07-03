<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use App\Users;
use Auth;
use App\Http\Requests\StorePagesRequest; 

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{  
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       
	   //$request->user()->authorizeRoles(['admin', 'user']);
	   // $request->user()->authorizeRoles('user');

	    if($request->user()->hasRole('admin')){ echo 'admin'; }else if($request->user()->hasRole('user')){ echo 'user'; }else{ echo 'Nothing'; }


	   $Page    = new Pages();		
	   $authors = $Page->paginate(4);
       return view('OLD.admin.pages.index_test',compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('OLD.admin.pages.create_test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePagesRequest $request)
    {      	
	  $Page                       = new Pages();
	  $Page->page_name            = $request->input("page_name");
	  $Page->page_slug            = 'slug';
	  $Page->page_description     = $request->input("page_description");
	  $Page->page_order           = 1;
	  $Page->display_status       = 1;
	  $Page->meta_title           = 'meta_title';
	  $Page->meta_description     = 'meta_description';
	  $Page->meta_keyword         = 'meta_keyword';	
	  $Page->save();
 	     
	   return redirect('admin/pages')->with('message', 'Pages added successfully');
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
		$Page    = new Pages();
		$author  = $Page->findOrFail($id);		
        return view('OLD.admin.pages.edit_test', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePagesRequest $request, $id)
    {	 
	    $Page    = new Pages();
		$author  = $Page->findOrFail($id);

		DB::table('pages')->where('id', $id)->update(['page_name'=>$request->page_name,
			                                          'page_description'=>$request->page_description]);


	  
	    return redirect('admin/pages')->with('message', 'Pages updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Page    = new Pages();
		$author  = $Page->findOrFail($id);
        $author->delete();
		return redirect('admin/pages')->with('message', 'Pages deleted successfully.');
    }

	public function mass_destroy(Request $request)
	{
	    $Page    = new Pages();
		$authors = explode(',', $request->input('ids'));

		foreach ($authors as $author_id) {
           $author = $Page->findOrFail($author_id);
           $author->delete();
        }
        
		return redirect('admin/pages')->with('message', 'Pages deleted successfully.');
	}
}
