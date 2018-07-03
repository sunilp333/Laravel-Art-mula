<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class new_testController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $file_name = 'example.png';
      $extension = getFileExtension($file_name);
      echo $extension; // outputs png

	  echo '<br>';
      
	  // Full URL, with query string
	  echo $request->fullUrl();

	  echo '<br>';

	  // Just the path part of the URL 
      echo $request->path();

	   echo '<br>';


	  //Just the root (protocol and domain) part of the URL)ss
      echo "========".$request->root();
	   echo '<br>';

	  echo url()->current();

	  echo '<br>';

	  echo url('some/path');

	  echo '<br>';
	  
	  return view('admin.test.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.test.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
