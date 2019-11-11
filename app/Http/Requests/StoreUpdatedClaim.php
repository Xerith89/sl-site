<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatedClaim extends FormRequest
{
    public function messages()
    {
        // Messages that apply to the validation rules
        return [
            'PolicyholderName.required' => 'Policyholder Name Is Required',
            'PolicyholderEmail.required' => 'Policyholder Email Is Required',
            'PolicyholderPostCode.required' => 'Policyholder Post Code Is Required',
            'PolicyholderComments.required' => 'Policyholder Comments Are Required',
            'ClaimNumber.required' => 'Claim Number Is Required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'PolicyholderName' => 'required',
            'PolicyholderEmail' => 'required',
            'PolicyholderPostCode' => 'required',
            'PolicyholderComments' => 'required',
            'ClaimNumber' => 'required'
        ];
    }
}
