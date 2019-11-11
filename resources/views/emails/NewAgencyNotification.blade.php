@component('mail::message')
# Stephen Lower Insurance Services
<h1>New Agency Application</h1>
<div>
<strong>Query ID: </strong> {{$event->agency->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($event->agency->created_at))}}<br>
<strong>Applicant Name: </strong> {{$event->agency->ApplicantName}}<br>
<strong>Applicant Position: </strong> {{$event->agency->ApplicantPosition}}<br>
<strong>Company Name: </strong> {{$event->agency->CompanyName}}<br>
<strong>Phone Number: </strong> {{$event->agency->CompanyTel}}<br>
<strong>Fax: </strong> {{$event->agency->CompanyFax}}<br>
<strong>Email Address: </strong> {{$event->agency->CompanyEmail}}<br>   
<strong>Website: </strong> {{$event->agency->ComnpanyWebsite}}<br>   
<strong>Trading Address: </strong> {{$event->agency->TradingAddress}}<br>  
<strong>Company Established: </strong> {{$event->agency->EstablishedDate}}<br> 
<strong>Financial Year End: </strong> {{$event->agency->FinancialYearEnd}}<br>  
<strong>Company Registration Number: </strong> {{$event->agency->CompanyRegNo}}<br>    
<strong>Indemnity Insurer: </strong> {{$event->agency->IndemInsurer}}<br>  
<strong>Indemnity Policy Number: </strong> {{$event->agency->IndemPolicyNumber}}<br>
<strong>Indemnity Renewal Date: </strong> {{$event->agency->IndemRenewalDate}}<br>
<strong>Indemnity Limit: </strong> {{$event->agency->IndemLimit}}<br>                         
<strong>Indemnity Excess: </strong> {{$event->agency->IndemExcess}}<br>  
<strong>Criminal Convictions For Any Directors/Owners?: </strong> {{$event->agency->CriminalConvictions}}<br> 
<strong>Convictions Info: </strong> {{$event->agency->CriminalConvictionsInfo}}<br>       
<strong>Agency Previously Terminated Or Cancelled?: </strong> {{$event->agency->AgencyTerminated}}<br> 

<h4>Authorisation</h4>

<strong>FCA Authorised?: </strong> {{$event->agency->FCAAuth}}<br>
<strong>FCA Firm Reference: </strong> {{$event->agency->FCAFirmRef}}<br>

<strong>Appointed Representative?: </strong> {{$event->agency->AppointedRep}}<br>
<strong>Principal Name: </strong> {{$event->agency->PrincipalName}}<br>
<strong>Principal Telephone Number: </strong> {{$event->agency->PrincipalTelNo}}<br>
<strong>Principal Address: </strong> {{$event->agency->PrincipalAddress}}<br>
<strong>Appointed Representative?: </strong> {{$event->agency->AppointedRep}}<br>
<strong>Principal Name: </strong> {{$event->agency->PrincipalName}}<br>
<strong>Principal Telephone Number: </strong> {{$event->agency->PrincipalTelNo}}<br>
<strong>Principal Address: </strong> {{$event->agency->PrincipalAddress}}<br>

<h4>Sole Trader/Partnership Details</h4>
<strong>Type: </strong> {{$event->agency->BusinessType}}<br>
<strong>First Applicant Name: </strong> {{$event->agency->FirstApplicantName}}<br>
<strong>First Applicant Address: </strong> {{$event->agency->FirstApplicantAddress}}<br>
<strong>First Applicant Home Owner?: </strong> {{$event->agency->FirstApplicantHomeOwner}}<br>
<strong>Second Applicant Name: </strong> {{$event->agency->SecondApplicantName}}<br>
<strong>Second Applicant Address: </strong> {{$event->agency->SecondApplicantAddress}}<br>
<strong>Second Applicant Home Owner?: </strong> {{$event->agency->SecondApplicantHomeOwner}}<br>

Any uploaded accounts are attached.

</div>
<br><br>
Thanks,<br><br>
Stephen Lower Insurance
@endcomponent
