<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClaim extends FormRequest
{
    public function messages()
    {
        // Messages that apply to the validation rules
        return [
            'Name.required' => 'A Name Is required',
            'Email.required'  => 'An Email Address Is required',
            'Email.email'  => 'A Valid Email Address Is required',
            'PhoneNumber.required' => 'First Phone Number Is required',
            'PhoneNumber.regex' => 'Invalid First Phone Number',
            'SecondPhoneNumber.required' => 'Second Phone Number Is required',
            'SecondPhoneNumber.regex' => 'Second Phone Number Is Invalid',
            'SpecificationNumber.required' => 'Specification Number Is required',
            'RiskAddress.required' => 'Risk Address Is required',
            'InsuredName.required' => 'Insured Name Is required',
            'DamageCause.required' => 'Damage Cause Is required',
            'Damage.required' => 'Damage Is required',
            'InformedBy.required' => 'Please Confirm Who Informed You Of The Incident',
            'DateAdvised.required' => 'Date Advised Is required',
            'DateAdvised.date' => 'Date Advised Is Invalid',
            'DatePoliceAdvised.required_if' => 'Date Police Advised Is required',
            'CrimeNumber.required_if' => 'Crime Number Is requiredd',
            'OfficerStationDealing.requiredd_if' => 'Officer And Station Dealing Is required',
            'RecoverVAT.required' => 'Confirm If VAT Can Be Recovered',
            'SettlementPayee.required' => 'Settlement Payee Name Is required',
            'ChequeAddress.required' => 'Cheque Address Is required'
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
            'PhoneNumber' => array('required','regex:^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?|(07[\d]{8,12}|447[\d]{7,11})$^'),
            'Email' =>  'required|email|same:confirm-email',
            'SecondPhoneNumber' =>  array('required','regex:^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?|(07[\d]{8,12}|447[\d]{7,11})$^'),
            'SpecificationNumber' => 'required',
            'RiskAddress' => 'required',
            'InsuredName' => 'required',
            'DamageCause' => 'required',
            'Damage' => 'required',
            'InformedBy' => 'present',
            'DateAdvised' => 'present',
            'TradesmanName' => 'present',
            'DateEstimatesReceived' => 'present',
            'PoliceAdvised' => 'nullable',
            'DatePoliceAdvised' => 'present',
            'CrimeNumber' => 'present',
            'OfficerStationDealing' => 'present',
            'RecoverVAT' => 'required',
            'SettlementPayee' => 'required',
            'ChequeAddress' => 'required',
            'NotifyBroker' => 'nullable'
        ];
    }
}
