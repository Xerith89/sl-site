<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreQuote extends FormRequest
{
    public function messages()
    {
        // Messages that apply to the validation rules
        return [
            'Title.required' => 'A Title Is Required',
            'Firstname.required'  => 'A First Name Is Required',
            'Surname.required'  => 'A Surname Is Required',
            'RelationshipToProposer.required' => 'Relationship To Proposer Is Required',
            'RelationshipMoreInfo.required_if' => 'Relationsip To Proposer Is Required',
            'Phonenumber.regex' => 'Phone Number Is Invalid',
            'Email.required' =>  'An Email Address Is Required',
            'Email.email' =>  'Email Address Is Invalid',
            'Email.same' =>  'Email Addresses Do Not Match',
            'CorrieNumber.required_if' => 'House Name/Number Is Required',
            'CorrieFirstLine.required_if' => 'First Line Of Address Is Required',
            'CorrieCity.required_if' => 'City Is Required',
            'CorrieCounty.required_if' => 'County Is Required',
            'CorriePostCode.required_if' => 'Post Code Is Required',
            'ProposerName.required' => 'Proposer Name Is Required',
            'RelationshipToProperty.required' => 'Relationship To Property Is Required',
            'RelToPropMoreInfo.required' => 'Relationship To Property Is Required',
            'CCJ.required' => 'Dropdown Is Required',
            'Bankruptcy.required' => 'Dropdown Is Required',
            'Declined.required' => 'Dropdown Is Required',
            'Recovery.required' => 'Dropdown Is Required',
            'Prosecuted.required' => 'Dropdown Is Required',
            'Liquidated.required' => 'Dropdown Is Required',
            'Disqualified.required' => 'Dropdown Is Required',
            'Convictions.required' => 'Dropdown Is Required',
            'StatementsMoreInfo.required' => 'More Information Is Required',
            'StatementsMoreInfo.min' => 'Minimum 10 Characters For Statements More Info',
            'RiskNumber.required' => 'Risk Name/Number Is Required',
            'RiskFirstLine.required' => 'First Line Of Risk Address Is Required',
            'RiskCity.required' => 'Risk City Is Required',
            'RiskCounty.required' => 'Risk County Is Required',
            'RiskPostCode.required' => 'Risk Post Code Is Required',
            'ResiAreas.required_if' => 'Residential Areas Confirmation Required',
            'BuildType.required_if' => 'Build Type Confirmation Required',
            'NumFlats.required_if' => 'Number Of Flats Is Required',
            'NumFlats.numeric' => 'Number Of Flats Must Be a Number',
            'NumFlatsUnoccupied.required_if' => 'Number Of Unoccupied Flats Required',
            'NumFlatsUnoccupied.numeric' => 'Number Of Unoccupied Flats Must Be a Number',
            'YearOfBuild.required' => 'Year Of Build Is Required',
            'YearOfBuild.numeric' => 'Year Of Build Must Be a Number',
            'YearOfBuild.gte' => 'Year Of Build Must Be Greater Than 1800',
            'YearOfBuild.lt' => 'Year Of Build Must Be Less Than 2020',
            'BuildTypeInfo.require_if' => 'Build Type More Info Required',
            'BusinessUse.required_if' => 'Business Use Is Required',
            'GoodStateRepair.required' => 'Good State Of Repair Is Confirmation Required',
            'StandardConstruction.required' => 'Standard Construction Is Confirmation Required',
            'MajorWorks.required' => 'Major Works Confirmation Is Required',
            'ListedStatus.required' => 'Listed Status Confirmation Is Required',
            'ClaimsDetails.required_if' => 'Claims Details Are Required',
            'HMO.required_if' => 'HMO Confirmation Is Required',
            'Unoccupied.required_if' => 'Unoccupancy Confirmation Is Required',
            'RiskDetailsMoreInfo.required' => 'More Details Are Required',
            'RiskDetailsMoreInfo.min' => 'Minimum 10 Characters For Statements More Info',
            'NumStoreys.numeric' => 'Number Of Storeys Must Be a Number',
            'NumStoreys.required_if' => 'Number Of Storeys Is Required',
            'NumLifts.numeric' => 'Number Of Lifts Must Be Numeric',
            'NumLifts.required_if' => 'Number Of Lifts Is Required',
            'PrevSubs.required' => 'Confirmation Of Previous Subsidence Is Required',
            'PrevFlood.required' => 'Confirmation Of Previous Flooding Is Required',
            'FloodSubsMoreInfo.required' => 'More Info Previous Flood/Subsidence Is Required',
            'PrevClaims.required' => 'Confirmation Of Any Previous Claims Is Required',
            'StartDate.required' => 'Start Date Is Required',
            'StartDate' => 'Start Date Cannot Be In the Past',
            'StartDate' => 'Start Date Must Be a Date',
            'RebuildCost.regex' => 'Invalid Rebuild Cost',
            'RebuildCost.required' => 'Rebuild Cost Is Required',
            'CommonAreas.regex' => 'Invalid Common Area Amount',
            'CurrentPremium.regex' => 'Invalid Current Premium Amount',
            'LandlordSumInsured.regex' => 'Invalid Landlord Contents Sum Insured',
            'LandlordSumInsured.required_if' => 'Landlord Contents Sum Insured Is Required',
            'CurrentExcess.numeric' => 'Current Excess Must Be a Number',
            'NumStaff.required_if' => 'Number Of Staff Required',
            'ERN.required' => 'Employer Reference Number Required',
            'IndemnityLevel.required_if' => 'D And O Indemnity LEvel Required' 
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'Title' => 'required',
            'Firstname' => 'required|max:255|string',
            'MiddleInitials' => 'nullable|string',
            'Surname' => 'required|max:255|string',
            'RelationshipToProposer' => 'required',
            'RelationshipMoreInfo' => 'required_if:RelationshipToProposer,other',
            'Organisation' => 'present',
            'PhoneNumber' => array('required','regex:^(?:(?:\(?(?:0(?:0|11)\)?[\s-]?\(?|\+)44\)?[\s-]?(?:\(?0\)?[\s-]?)?)|(?:\(?0))(?:(?:\d{5}\)?[\s-]?\d{4,5})|(?:\d{4}\)?[\s-]?(?:\d{5}|\d{3}[\s-]?\d{3}))|(?:\d{3}\)?[\s-]?\d{3}[\s-]?\d{3,4})|(?:\d{2}\)?[\s-]?\d{4}[\s-]?\d{4}))(?:[\s-]?(?:x|ext\.?|\#)\d{3,4})?|(07[\d]{8,12}|447[\d]{7,11})$^'),
            'Email' =>  'required|email|same:confirm-email',
            'CorrieNumber' => 'required_if:AddCorrie,on',
            'CorrieFirstLine' => 'required_if:AddCorrie,on',
            'CorrieSecondLine' => 'present',
            'CorrieCity' => 'required_if:AddCorrie,on',
            'CorrieCounty' => 'required_if:AddCorrie,on',
            'CorriePostCode' => 'required_if:AddCorrie,on',
            'ProposerName' => 'required|max:255|string',
            'RelationshipToProperty' => 'required',
            'RelToPropMoreInfo' => 'present',
            'PreviousPolicy' => 'nullable',
            'PreviousPolicyNumber' => 'present',
            'CCJ' => 'required',
            'Bankruptcy' => 'required',
            'Declined' => 'required',
            'Recovery' => 'required',
            'Prosecuted' => 'required',
            'Liquidated' => 'required',
            'Disqualified' => 'required',
            'Convictions' => 'required',
            'StatementsMoreInfo' => 'present',
            'RiskNumber' => 'required',
            'RiskFirstLine' => 'required',
            'RiskSecondLine' => 'present',
            'RiskCity' => 'required',
            'RiskCounty' => 'required',
            'RiskPostCode' => 'required',
            'InterestedParties' => 'present',
            'PropertyType' => 'present',
            'ResiAreas' => 'required_if:PropertyType,commercial|present',
            'BuildType' => 'required_if:PropertyType,block-of-flats|present',
            'NumFlats' => 'required_if:PropertyType,block-of-flats|required_if:ResiAreas,yes|numeric|required_if:DAndO,on|present',
            'NumFlatsUnoccupied' => 'required_if:PropertyType,block-of-flats|numeric|present',
            'YearOfBuild' => 'required|numeric|gte:1500|lt:2020',
            'BuildTypeInfo' => 'required_if:BuildType,other|present',
            'BusinessUse' => 'required_if:PropertyType,commercial|present',
            'GoodStateRepair' => 'required',
            'StandardConstruction' => 'required',
            'MajorWorks' => 'required',
            'ListedStatus' => 'required',
            'HMO' => 'required_if:PropertyType,let|required_if:PropertyType,contents-only|present',
            'Unoccupied' => 'required_if:PropertyType,let|required_if:PropertyType,contents-only|present',
            'RiskDetailsMoreInfo' => 'present',
            'NumStoreys' => 'numeric|required_if:Engineering,on|present|nullable',
            'Sprinklers' => 'present',
            'NumLifts' => 'numeric|required_if:Engineering,on|present|nullable',
            'PrevSubs' => 'required',
            'PrevFlood' => 'required',
            'PrevClaims' => 'required',
            'ClaimsDetails.*' => 'required_if:PrevClaims,yes',
            'StartDate' => 'required|after_or_equal:today|date',
            'RebuildCost' => 'required',
            'CommonAreas' =>'nullable',
            'LandlordSumInsured' => 'required_if:PropertyType,contents-only',
            'CurrentPremium' => 'nullable',
            'CurrentInsurer' => 'nullable',
            'CurrentExcess' => 'nullable|numeric',
            'SpecialTerms' => 'nullable',
            'EmployerLiability' => 'nullable',
            'ERNExempt' => 'nullable',
            'HasStaff' => 'nullable',
            'ERN' => 'present',
            'Engineering' => 'nullable',
            'DAndO' => 'nullable',
            'Terrorism' => 'nullable',
            'IndemnityLevel' => 'required_if:DAndO,on|present' 
        ];

        //Vanilla PHP to solve validation issues with Laravel
        //Using Isset to make sure tests don't break
        if (isset($_REQUEST['NumStaff']) && $_REQUEST['NumStaff'] > 0 && !isset($_REQUEST['ERNExempt']))
        {
           $rules['ERN'] = 'required';     
        }

        if (isset($_REQUEST['RelationshipToProperty']) && $_REQUEST['RelationshipToProperty'] == "other" )
        {
           $rules['RelToPropMoreInfo'] = 'required';     
        }

        if (isset($_REQUEST['CCJ']) && $_REQUEST['CCJ'] == 'yes' || isset($_REQUEST['Bankruptcy']) && $_REQUEST['Bankruptcy'] == 'yes' || isset( $_REQUEST['Declined']) && $_REQUEST['Declined'] == 'yes'|| isset($_REQUEST['Recovery']) && $_REQUEST['Recovery'] == 'yes'||
           isset($_REQUEST['Prosecuted']) && $_REQUEST['Prosecuted'] == 'yes' || isset($_REQUEST['Liquidated']) && $_REQUEST['Liquidated'] == 'yes' ||isset($_REQUEST['Disqualified']) && $_REQUEST['Disqualified'] == 'yes'|| isset($_REQUEST['Convictions']) && $_REQUEST['Convictions'] == 'yes')
        {
           $rules['StatementsMoreInfo'] = 'required|min:10';     
        }

        if (isset($_REQUEST['GoodStateRepair']) && $_REQUEST['GoodStateRepair']  == 'no' ||isset($_REQUEST['StandardConstruction']) && $_REQUEST['StandardConstruction'] == 'no' ||
         isset($_REQUEST['MajorWorks']) && $_REQUEST['MajorWorks'] == 'yes'||  isset($_REQUEST['HMO']) && $_REQUEST['HMO'] == 'yes' || isset($_REQUEST['Unoccupied']) && $_REQUEST['Unoccupied'] == 'yes')
        {
            $rules['RiskDetailsMoreInfo'] = 'required|min:10';     
        }

        if (isset($_REQUEST['PrevSubs']) && $_REQUEST['PrevSubs']  == 'yes' || isset($_REQUEST['PrevFlood']) && $_REQUEST['PrevFlood'] == 'yes')
        {
            $rules['FloodSubsMoreInfo'] = 'required|min:10';     
        }

        return $rules;
    }   
}
