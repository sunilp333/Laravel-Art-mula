<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPagesRequest extends FormRequest
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
            'page_title' => 'required',
            'page_description' => 'required',			
            'page_order' => 'required|numeric'			
        ];
    }
	public function messages()
    {
       return [
        'page_title.required'=>'Please enter page title.',	 
		'page_description.required'=>'Please enter page description.',	
	    'page_order.required'=>'Please enter page order.',
		'page_order.numeric'=>'Please enter valid page order.'
       ];
    }
}
