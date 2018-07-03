<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Users;
use App\AdminPaymentSettings;
use Auth;
use App\Http\Requests\StoreAdminPaymentSettingRequest; 
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AdminPaymentSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $PaymentSettingObj      = new AdminPaymentSettings();
	   $PaymentSettingRecord   = $PaymentSettingObj->findOrFail(1);		
	   
	   return view('admin.admin_payment_setting',compact('PaymentSettingRecord'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreAdminPaymentSettingRequest $request, $id)
    {
       $PaymentSettingObj      = new AdminPaymentSettings();
	   $PaymentSettingRecord   = $PaymentSettingObj->findOrFail(1);
			
	   DB::table('payment_options')->where('id', 1)->update(['currency'=>$request->currency,
			                                                 'currency_code'=>$request->currency_code,
		                                                     'stripe_gateway_environment'=>$request->stripe_gateway_environment,
		                                                     'stripe_client_id'=>$request->stripe_client_id,
		                                                     'stripe_secret_key'=>$request->stripe_secret_key,
		                                                     'test_stripe_secret_key'=>$request->test_stripe_secret_key,
		                                                     'test_stripe_client_id'=>$request->test_stripe_client_id,
		                                                     'stripe_publish_key'=>$request->stripe_publish_key]);
		
	   return redirect('admin/paymentoptions')->with('message', 'Payment Option Updated successfully.');
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
