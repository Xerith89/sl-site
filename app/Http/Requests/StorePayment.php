<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePayment extends FormRequest
{
    public function messages()
    {
        // Messages that apply to the validation rules
        return [
            'SpecificationNumber.required' => 'Specification Number Is Required',
            'SpecificationNumber.min' => 'Specification Number Is Too Small',
            'RiskPostCode.required' => 'Post Code Is Required',
            'RiskPostCode.min' => 'Post Code Is Too Small',
            'StartDate.required' => 'Policy Start Date Is Required',
            'StartDate.date' => 'Policy Start Date Must Be A Valid Date',
            'AmountPaid.required' => 'Amount Being Paid Is Required',
            'AmountPaid.numeric' => 'Amount Being Paid Is Invalid',
            'Name.required' => 'Your Name Is Required',
            'PhoneNumber.required' => 'Your Phone Number Is Required',
            'Email.required' => 'Your Email Address Is Required',
            'Email.email' => 'Your Email Must Be A Valid Email Address',
            'Email.same' => 'Your Email Must Match Confirm Email'
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
            'SpecificationNumber' => 'required|string|min:5',
            'RiskPostCode' => 'required|string|min:7',
            'StartDate' => 'required|date',
            'Comments' => 'present',
            'AmountPaid' => 'required|numeric',
            'Name' => 'required|string',
            'PhoneNumber' => 'required|string',
            'EmailAddress' => 'required|email|same:ConfirmEmail',
        ];
    }
}
