<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgency extends FormRequest
{
    public function messages()
    {
        // Messages that apply to the validation rules
        return [
            'ApplicantName.required' => 'Applicant Name Is Required',
            'ApplicantPosition' => 'Applicant Position Is Required',
            'CompanyName.required' => 'Company Name Is Required',
            'CompanyEmail.required' => 'Company Email Is Required',
            'CompanyTel.required' => 'Company Telephone Number Is Required',
            'CompanyTel.regex' => 'Invalid Company Telephone Number',
            'BusinessType.required' => 'Business Type Is Required',
            'FirstApplicantName.required_if' => 'First Applicant Name Is Required',
            'FirstApplicantAddress.required_if' => 'First Applicant Address Is Required',
            'FirstApplicantHomeOwner.required_if' => 'First Applicant Home Owner Status Is Required',
            'SecondApplicantName.required_if' => 'Second Applicant Name Is Required',
            'SecondApplicantAddress.required_if' => 'Second Applicant Address Is Required',
            'SecondApplicantHomeOwner.required_if' => 'Second Applicant Home Owner Status Is Required',
            'TradingAddress.required' => 'Trading Address Is Required',
            'EstablishedDate.required' => 'Company Established Date Is Required',
            'FinancialYearEnd.required' => 'Company Financial Year End Date Is Required',
            'CompanyRegNo.required' => 'Company Registration Number Is Required',
            'FCAAuth.required' => 'FCA Authorisation Status Is Required',
            'FCAFirmRef.required_if' => 'FCA Firm Reference Is Required',
            'PrincipalName.required_if' => 'Principal Name Is Required',
            'PrincipalTelNo.required_if' => 'Principal Phone Number Is Required',
            'PrincipalAddress.required_if' => 'Principal Address Is Required',
            'IndemInsurer.required' => 'Professional Indemnity Insurer Name Is Required',
            'IndemPolicyNumber.required' => 'Professional Indemnity Policy Number Is Required',
            'IndemRenewalDate.required' => 'Professional Indemnity Renewal Date Is Required',
            'IndemLimit.required' => 'Professional Indemnity Limit Is Required',
            'IndemExcess.required' => 'Professional Indemnity Excess Is Required',
            'CriminalConvictions.required' => 'Criminal Convictions Declaration Is Required',
            'AgencyTerminated.required' => 'Previous Agency Terminations Declaration Is Required',
            'CriminalConvictionsInfo.required_if' => 'Criminal Convictions Info Is Required',
            'AgencyTerminatedInfo.required_if' => 'Agency Termination Info Is Required'
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
            'ApplicantName' => 'required',
            'ApplicantPosition' => 'required',
            'CompanyName' => 'required|max:255|string',
            'CompanyEmail' => 'required|email',
            'CompanyTel' => array('required','regex:^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?|(07[\d]{8,12}|447[\d]{7,11})$^'),
            'CompanyFax' => 'nullable',
            'CompanyWebsite' => 'nullable',
            'BusinessType' => 'required',
            'FirstApplicantName' => 'required_if:BusinessType,Sole|required_if:BusinessType,Partnership',
            'FirstApplicantAddress' => 'required_if:BusinessType,Sole|required_if:BusinessType,Partnership',
            'FirstApplicantHomeOwner' => 'required_if:BusinessType,Sole|required_if:BusinessType,Partnership',
            'SecondApplicantName' => 'required_if:BusinessType,Partnership',
            'SecondApplicantAddress' => 'required_if:BusinessType,Partnership',
            'SecondApplicantHomeOwner' => 'required_if:BusinessType,Partnership',
            'TradingAddress' => 'required',
            'EstablishedDate' => 'required|date',
            'FinancialYearEnd' => 'required',
            'CompanyRegNo' => 'required',
            'FCAAuth' => 'required',
            'FCAFirmRef' => 'required_if:FCAAuth,FCA',
            'PrincipalName' => 'required_if:FCAAuth,AppointedRep',
            'PrincipalTelNo' => 'required_if:FCAAuth,AppointedRep',
            'PrincipalAddress' => 'required_if:FCAAuth,AppointedRep',
            'IndemInsurer' => 'required',
            'IndemPolicyNumber' => 'required',
            'IndemRenewalDate' => 'required|date',
            'IndemLimit' => 'required',
            'IndemExcess' => 'required',
            'CriminalConvictions' => 'required',
            'CriminalConvictionsInfo' => 'required_if:CriminalConvictions,Yes',
            'AgencyTerminated' => 'required',
            'AgencyTerminatedInfo' => 'required_if:AgencyTerminated,Yes'
        ];
    }
}
