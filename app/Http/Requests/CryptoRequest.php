<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CryptoRequest extends FormRequest
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
            //
            'amounts' => array('regex:/([0-9])+\s*,?/u','required'),
        ];
    }

    public function messages()
    {
        return [
            'crypto[].required' => 'Please select a crypto currency',
            'currencies[].required'  => 'Please select a currency',
            'amounts.required'=> 'Please select an amount to convert',
            'amounts.regex'=> 'Something is wrong with the amounts!',

        ];
    }
}
