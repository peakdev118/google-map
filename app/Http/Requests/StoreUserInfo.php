<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserInfo extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name' => ['required'],
            'nric' => ['required'],
            'contact' => ['required'],
            'address1' => ['required'],
            'address2' => ['required'],
            'postcode' => ['required'],
            'district' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'agent' => ['required'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name' => 'Please insert your name',
            'nric' => 'NRIC/Identity - YYMMDD-xx-xxxx(numerical only). Please insert correct value',
            'contact' => 'Contact number must be numberical with prefix +60 xx xxx xxxxx - (up to 11 numberical). Please insert correct value',
            'address1' => 'Please insert address1',
            'address2' => 'Please insert address2',
            'postcode' => 'Post code range must be numerical(00001 to 99999). Please insert correct value',
            'district' => 'Please select discrict',
            'agent' => 'Agent must be number from 0001 to 9999',
            'map' => 'Please select map',
        ];
    }
}
