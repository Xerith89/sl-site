<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuickQuote extends FormRequest
{

    public function messages()
    {
        // Messages that apply to the validation rules
        return [
            'name.required' => 'A Name Is Required',
            'email.required'  => 'An Email Address Is Required',
            'email.email'  => 'A Valid Email Address Is Required',
            'phone.required' => 'A Phone Number Is Required',
            'risk.required' => 'A Risk Address Is Required',
            'rebuild.required' => 'A Rebuild Cost Is Required',
            'startdate.required' => 'A Start Date Is Required',
            'startdate.date' => 'Start Date Must Be a Valid Date',
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'risk' => 'required',
            'rebuild' => 'required',
            'startdate' => 'required|date',
            'currentpremium' => 'present',
        ];
    }
}
