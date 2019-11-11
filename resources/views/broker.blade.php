@extends('layout.layout')
@section('content')
<section>
    <div class="container">
        <br><br><br>
        <div class="card text-center m-5 mx-auto come-in" style="width: 60vw;">
            <img src="images/broker.jpeg" class="card-img-top mb-3" style="width:100%; height:33%; opacity: 0.4;" alt="Broker">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h1>Brokers</h1>
            </div>
            <div class="card-body mt-3  align-items-center">
                <h4 class="display-4">Your Clients Come First</h4>
                <br>
                <p class="lead">At Stephen Lower we understand that your client is the most important thing to your business. Our aim is to give you the very best service etc
                etc</p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="agency-tab" data-toggle="tab" href="#agency" role="tab" aria-controls="agency" aria-selected="false">Apply For An Agency</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac aliquam sem. Fusce consequat, leo in pellentesque dapibus, lorem felis placerat turpis, sit amet auctor lacus leo id nunc. Praesent aliquam posuere est, quis luctus metus efficitur sit amet. Phasellus rutrum bibendum tristique. </p>
                        <br>
                        <ul class="list-group" style="list-style-type: none;">
                            <li><i class="fas fa-check fa-2x " style=" color: #008000;"></i> Feature One</li><br>
                            <li><i class="fas fa-check fa-2x " style=" color: #008000;"></i> Feature Two</li><br>
                            <li><i class="fas fa-check fa-2x " style=" color: #008000;"></i> Feature Three</li>
                        </ul>
                        <h3 class="mt-5 "><strong>See What We Can Do For Your Clients Today!</strong></h3>
                        <a href="/quote" class="btn btn-success btn-lg mb-3 mt-3 ">
                            Get a Quote
                        </a>
                    </div>
                    
                    <div class="tab-pane fade" id="agency" role="tabpanel" aria-labelledby="agency-tab">
                        <h4 class="mt-3">Apply For An Agency With US</h4>

                        <div class="m-3">
                            @include('layout.messages')
                        </div>
                    
                        <div class="errors">
                            <!-- Our Validation Errors Go Here-->
                        </div>
                        <form method="POST" enctype="multipart/form-data" action={{action('AgenciesController@store')}}>
                        <div class="form-group flex-row mb-2 ml-4 mr-4">
                            <label for="ApplicantName" class="mt-4"><strong>Applicant Name</strong></label><input type="text" class="form-control form-control-sm col-sm-8 offset-sm-2" id="ApplicantName" name="ApplicantName" placeholder="Applicant Name" value="{{ old('ApplicantName') }}">
                            
                            <label for="ApplicantPosition" class="mt-4"><strong>Applicant Company Position</strong></label><input type="text" class="form-control form-control-sm col-sm-8 offset-sm-2" id="ApplicantPosition" name="ApplicantPosition" placeholder="Applicant Position" value="{{ old('ApplicantPosition') }}">

                            <label for="CompanyName" class="mt-4"><strong>Company Name</strong></label> <input type="text" class="form-control form-control-sm col-sm-8 offset-sm-2" id="CompanyName" name="CompanyName" placeholder="Company Name" value="{{ old('CompanyName') }}">
                            
                            <label for="CompanyEmail" class="mt-4"><strong>Company Email Address</strong></label> <input type="email" class="form-control form-control-sm col-sm-8 offset-sm-2" id="CompanyEmail" name="CompanyEmail" placeholder="Company Email Address" value="{{ old('CompanyEmail') }}">
                            
                            <label for="CompanyTel" class="mt-4"><strong>Company Phone Number </strong></label> <input type="text" class="form-control form-control-sm col-sm-6 offset-sm-3" id="CompanyTel" name="CompanyTel" placeholder="Company Phone Number" value="{{ old('CompanyTel') }}">
                            
                            <label for="CompanyFax" class="mt-4"><strong>Company Fax Number (Optional)</strong></label> <input type="text" class="form-control form-control-sm col-sm-6 offset-sm-3" id="CompanyFax" name="CompanyFax" placeholder="Company Fax Number" value="{{ old('CompanyFax') }}" >
                            
                            <label for="CompanyWebsite" class="mt-4"><strong>Company Website (Optional)</strong></label> <input type="text" class="form-control form-control-sm col-sm-8 offset-sm-2" id="CompanyWebsite" name="CompanyWebsite" placeholder="Company Website Address" value="{{ old('CompanyWebsite') }}" >
                            
                            <label for="BusinessType" class="mt-4"><strong>Business Type</strong></label> 
                                <select class="form-control form-control-sm col-sm-4 offset-sm-4" id="BusinessType" name="BusinessType" value="{{ old('BusinessType') }}">
                                    <option value="null"></option>
                                    <option value="Sole">Sole Trader</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="Other">Other</option>
                                </select>
                            
                            <div class="applicant-one">
                                <label for="FirstApplicantName" class="mt-4"><strong>First Applicant Name</strong></label> <input type="text" class="form-control form-control-sm col-sm-6 offset-sm-3" id="FirstApplicantName" name="FirstApplicantName" placeholder="First Applicant Name" value="{{ old('FirstApplicantName') }}" >
                                
                                <label for="FirstApplicantAddress" class="mt-4"><strong>First Applicant Address</strong></label> <textarea cols="4" rows="4" class="form-control form-control-sm " id="FirstApplicantAddress" name="FirstApplicantAddress" placeholder="First Applicant Address" value="{{ old('FirstApplicantAddress') }}"></textarea>
                                
                                <label for="FirstApplicantHomeOwner" class="mt-4"><strong>First Applicant Home Owner</strong></label> 
                                <select class="form-control form-control-sm col-sm-2 offset-sm-5" id="FirstApplicantHomeOwner" name="FirstApplicantHomeOwner" value="{{ old('FirstApplicantHomeOwner') }}">
                                    <option value="null"></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="applicant-two">
                                <label for="SecondApplicantName" class="mt-4"><strong>Second Applicant Name</strong></label> <input type="text" class="form-control form-control-sm col-sm-6 offset-sm-3" id="SecondApplicantName" name="SecondApplicantName" placeholder="Second Applicant Name" value="{{ old('SecondApplicantName') }}" >
                                
                                <label for="SecondApplicantAddress" class="mt-4"><strong>Second Applicant Address</strong></label> <textarea cols="4" rows="4" class="form-control form-control-sm" id="SecondApplicantAddress" name="SecondApplicantAddress" placeholder="Second Applicant Address" value="{{ old('SecondApplicantAddress') }}"></textarea>
                                
                                <label for="SecondApplicantHomeOwner" class="mt-4"><strong>Second Applicant Home Owner</strong></label> 
                                <select class="form-control form-control-sm col-sm-2 offset-sm-5" id="SecondApplicantHomeOwner" name="SecondApplicantHomeOwner" value="{{ old('SecondApplicantHomeOwner') }}">
                                    <option value="null"></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            
                            <label for="TradingAddress" class="mt-4"><strong>Trading Address </strong></label><textarea cols="4" rows="4" id="TradingAddress" class="form-control form-control-sm" name="TradingAddress" placeholder="Trading Address" value="{{ old('TradingAddress') }}"></textarea>

                            <label for="EstablishedDate" class="mt-4"><strong>Company Established Date </strong></label><input type="text" id="EstablishedDate" class="form-control form-control-sm mb-2 col-sm-4 offset-sm-4" name="EstablishedDate" placeholder="Established Date"  value="{{ old('EstablishedDate') }}">
                            
                            <label for="FinancialYearEnd" class="mt-4"><strong>Financial Year End Date </strong></label><input type="text" id="FinancialYearEnd" class="form-control form-control-sm mb-2 col-sm-4 offset-sm-4" name="FinancialYearEnd" placeholder="Year End Date" value="{{ old('FinancialYearEnd') }}">

                            <label for="CompanyRegNo" class="mt-4"><strong>Company Registration Number </strong></label><input type="text" id="CompanyRegNo" class="form-control form-control-sm mb-2 col-sm-6 offset-sm-3" name="CompanyRegNo" placeholder="Company Registration Number"  value="{{ old('CompanyRegNo') }}">
                            
                            <label for="FCAAuth" class="mt-4"><strong>Company Authorisation Status</strong></label> 
                            <select class="form-control form-control-sm col-sm-8 offset-sm-2" id="FCAAuth" name="FCAAuth" value="{{ old('FCAAuth') }}">
                                <option value="null"></option>
                                <option value="FCA">FCA Authorised For General Insurance</option>
                                <option value="AppointedRep">Appointed Representative Of An Authorised Firm</option>
                            </select>

                            <div class="fca-ref">
                                <label for="FCAFirmRef" class="mt-4"><strong>FCA Firm Reference Number </strong></label><input type="text" id="FCAFirmRef" class="form-control form-control-sm mb-2 col-sm-6 offset-sm-3" name="FCAFirmRef" placeholder="Company FCA Reference"  value="{{ old('FCAFirmRef') }}">
                            </div>

                            <div class="principal">
                                <label for="PrincipalName" class="mt-4"><strong>Firm Name </strong></label><input type="text" id="PrincipalName" class="form-control form-control-sm mb-2 col-sm-8 offset-sm-2" name="PrincipalName" placeholder="Principal Name" value="{{ old('PrincipalName') }}">

                                <label for="PrincipalTelNo" class="mt-4"><strong>Firm Telephone Number </strong></label><input type="text" id="PrincipalTelNo" class="form-control form-control-sm mb-2 col-sm-6 offset-sm-3" name="PrincipalTelNo" placeholder="Principal Phone Number"  value="{{ old('PrincipalTelNo') }}">
                                
                                <label for="PrincipalAddress" class="mt-4"><strong>Firm Address </strong></label><textarea cols="4" rows="4" id="PrincipalAddress" class="form-control form-control-sm mb-2" name="PrincipalAddress" placeholder="Principal Address"  value="{{ old('PrincipalAddress') }}"> </textarea>
                            </div>
                            <label for="IndemInsurer" class="mt-4"><strong>Professional Indemnity Insurer Name </strong></label><input type="text" id="IndemInsurer" class="form-control form-control-sm mb-2 col-sm-8 offset-sm-2" name="IndemInsurer" placeholder="Insurer Name" value="{{ old('IndemInsurer') }}">
                            
                            <label for="IndemPolicyNumber" class="mt-4"><strong>Professional Indemnity Policy Number </strong></label><input type="text" id="IndemPolicyNumber" class="form-control form-control-sm mb-2 col-sm-6 offset-sm-3" name="IndemPolicyNumber" placeholder="Insurer Policy Number" value="{{ old('IndemPolicyNumber') }}">
                            
                            <label for="IndemRenewalDate" class="mt-4"><strong>Professional Indemnity Renewal Date </strong></label><input type="text" id="IndemRenewalDate" class="form-control form-control-sm mb-2 col-sm-4 offset-sm-4" name="IndemRenewalDate" placeholder="Insurer Renewal Date"  value="{{ old('IndemRenewalDate') }}">

                            <label for="IndemLimit" class="mt-4"><strong>Professional Indemnity Cover Limit </strong></label><input type="text" id="IndemLimit" class="form-control form-control-sm mb-2 col-sm-4 offset-sm-4" name="IndemLimit" placeholder="Indemnity Limit"  value="{{ old('IndemLimit') }}">

                            <label for="IndemExcess" class="mt-4"><strong>Professional Indemnity Excess </strong></label><input type="text" id="IndemExcess" class="form-control form-control-sm mb-2 col-sm-4 offset-sm-4" name="IndemExcess" placeholder="Policy Excess" value="{{ old('IndemExcess') }}">

                            <label for="CriminalConvictions" class="col p-0 mt-4"><strong>Does Any Director, Parnet Or Principal Have Any Criminal Convictions (Not Including Driving Offences) Not Treated As Spent Under The Rehabilitation Of Offenders Act 1974?</strong><small></small></label>
                            <select class="form-control form-control-sm col-sm-2 offset-sm-5" id="CriminalConvictions" name="CriminalConvictions" value="{{ old('CriminalConvictions') }}">
                                <option value="null"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>

                            <div class="convictions-info">
                                <label for="CriminalConvictionsInfo" class="mt-4"><strong>Please Provide More Info </strong></label><textarea cols="4" rows="4" id="CriminalConvictionsInfo" class="form-control form-control-sm" name="CriminalConvictionsInfo" placeholder="Criminal Convictions Info" value="{{ old('CriminalConvictionsInfo') }}"></textarea>
                            </div>

                            <label for="AgencyTerminated" class="col p-0 mt-4"><strong>Has Any Agency Previously Held By You Ever Been Cancelled Or Terminated (Other Than For Lack Of Support)?</strong><small></small></label>
                            <select class="form-control form-control-sm col-sm-2 offset-sm-5" id="AgencyTerminated" name="AgencyTerminated" value="{{ old('AgencyTerminated') }}">
                                <option value="null"></option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                            <div class="terminated-info">
                                <label for="AgencyTerminatedInfo" class="mt-4"><strong>Please Provide More Info </strong></label><textarea cols="4" rows="4" id="AgencyTerminatedInfo" class="form-control form-control-sm" name="AgencyTerminatedInfo" placeholder="Agency Termination Info" value="{{ old('AgencyTerminatedInfo') }}"></textarea>
                            </div>
                            <div class="mt-4">
                                <label for="query"><strong>Upload</strong> </label>

                                <small id="uploadHelp" class="form-text text-muted mb-3">Here you can upload any PDF documents that you wish to attach to support your application.</small>
                                <small id="uploadHelptwo" class="form-text text-muted mb-3">Max File Size: 5MB</small>
                                <input type="file" id="accounts" name="accounts[]" multiple> 
                            </div>
                        </div>
                        <br>
                        @csrf
                        <button type="reset" class="btn btn-danger" value="reset">Clear</button>
                        <button type="submit" id="submit-app" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    <br><br>
</section>
@endsection