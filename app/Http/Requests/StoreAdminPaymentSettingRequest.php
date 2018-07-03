<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminPaymentSettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'currency' => 'required',
            'currency_code' => 'required',
			'stripe_client_id' => 'required',
            'stripe_secret_key' => 'required',
			'test_stripe_secret_key' => 'required',
			'test_stripe_client_id' => 'required',
			'stripe_gateway_environment' => 'required',
        ];
    }

	public function messages()
    {
       return [
        'currency.required'=>'Please enter currency name.',
	    'currency_code.required'=>'Please enter currency code.',
		'stripe_client_id.required'=>'Please enter Strip Publish Key - Live environment.',
		'stripe_secret_key.required'=>'Please enter Strip Secret Key - Live environment.',
		'test_stripe_secret_key.required'=>'Please enter Strip Publish Key - Test environment.',
		'test_stripe_client_id.required'=>'Please enter Secret Key - Test environment.',
		'stripe_gateway_environment.required'=>'Please check stripe environment.'
       ];
    }
}
