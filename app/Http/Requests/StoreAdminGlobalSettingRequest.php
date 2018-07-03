<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminGlobalSettingRequest extends FormRequest
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
             'siteoptions_email' => 'required|email|max:55',
             'siteoptions_noreply_email' => 'required|email|max:55',
			 'siteoptions_contact_address' => 'required',
             'siteoptions_phone_number' => 'required|numeric',
			 'siteoptions_logo' => 'mimes:jpg,png,jpeg,gif,svg'
		];
		
    }

	public function messages()
    {
       return [
        'siteoptions_email.required'=>'Please enter administrator Email.',
	    'siteoptions_email.email'=>'Please enter valid email address.',
		'siteoptions_noreply_email.required'=>'Please enter No Reply Email.',
		'siteoptions_noreply_email.email'=>'Please enter valid No Reply Email.',
		'siteoptions_contact_address.required'=>'Please enter administrator contact address.',
		'siteoptions_phone_number.required'=>'Please enter administrator Phone Number.',
		'siteoptions_phone_number.numeric'=>'Please enter valid Phone number.',
		'siteoptions_logo.mimes'=>'Uploaded File is Invalid, logo must be a file of type: jpg,png,jpeg,gif,svg.'
       ];
    }
}
