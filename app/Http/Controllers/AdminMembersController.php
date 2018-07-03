<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Auth;
use App\AdminMembers;
use App\Http\Requests\AdminMembersRequest; 

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class AdminMembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Members        = new AdminMembers();
	   $results_per_page = '1';

	   $MembersRecord = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.*', 'users.id as main_id', 'role_user.*', 'roles.name as user_type')->paginate(2);
	   
	   return view('admin.members.listing_member',compact('MembersRecord'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       $Members        = new AdminMembers();
	   $MembersRecord  = $Members->findOrFail($id);
	   return view('admin.members.edit_member', compact('MembersRecord'));
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
       $Members         = new AdminMembers();
	   $MembersRecords  = $Members->findOrFail($id);

		DB::table('users')->where('id', $id)->update(['name'=>$request->member_name,			                                         
			                                          'phone_number'=>$request->member_phone_number,
			                                          'contact_address'=>$request->member_contact_address]);
	  
	    return redirect('admin/members')->with('message', 'Information saved successfully.');
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
