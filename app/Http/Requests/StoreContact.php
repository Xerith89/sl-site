<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
{
    public function messages()
    {
        // Messages that apply to the validation rules
        return [
            'Name.required' => 'A Name Is Required',
            'Email.required'  => 'An Email Address Is Required',
            'Email.email'  => 'A Valid Email Address Is Required',
            'DepartmentRequired.required' => 'A Department Is Required',
            'QueryBody' => 'A Query Is Required',
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
        'Name' => 'required|max:255|string',
        'Email' => 'required|email',
        'Company' => 'present',
        'Reference' => 'present',
        'DepartmentRequired' => 'required|string',
        'QueryBody' => 'required|string',
        ];
    }
}
