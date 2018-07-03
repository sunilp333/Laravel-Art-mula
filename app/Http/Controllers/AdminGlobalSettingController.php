<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\AdminGlobalSetting;
use Auth;
use App\Http\Requests\StoreAdminGlobalSettingRequest; 
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use checkrole;
class AdminGlobalSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
	   $GlobalSettingObj      = new AdminGlobalSetting();
	   $GlobalSettingRecord   = $GlobalSettingObj->findOrFail(1);		
	   
	   return view('admin.admin_global_setting',compact('GlobalSettingRecord'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
	   
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
    public function update(StoreAdminGlobalSettingRequest $request, $id)
    {
       $GlobalSettingObj      = new AdminGlobalSetting();
	   $GlobalSettingRecord   = $GlobalSettingObj->findOrFail(1);
			
	   DB::table('global_settings')->where('id', 1)->update(['email'=>$request->siteoptions_email,
			                                       'no_reply_email'=>$request->siteoptions_noreply_email,
		                                           'phone_number'=>$request->siteoptions_phone_number,
		                                           'contact_address'=>$request->siteoptions_contact_address,
		                                           'meta_title'=>$request->siteoptions_meta_title,
		                                           'meta_description'=>$request->siteoptions_meta_descriptions,
		                                           'meta_keywords'=>$request->siteoptions_meta_keywords]);

	   if(Input::hasFile('siteoptions_logo')){
			$imageName = time().'.'.$request->siteoptions_logo->getClientOriginalExtension();			
			$file = Input::file('siteoptions_logo');
			$file->move('uploads/web_images/', $imageName);	
			DB::table('global_settings')->where('id', 1)->update(['logo_image'=>$imageName]);	

			$Old_Logo = $request->old_logo_image;
	        if(!empty($Old_Logo) && file_exists('uploads/web_images/'.$Old_Logo))
	        {
			  @unlink('uploads/web_images/'.$Old_Logo);
			}
		}    
		
	   return redirect('admin/siteoptions')->with('message', 'Site Option Updated successfully.');
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

	public function dashboard(Request $request)
	{	
	   return view('admin.admin_dashboard');
	}
}
