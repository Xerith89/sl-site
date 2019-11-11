@component('mail::message')
# Stephen Lower Insurance Services
<h1>New Payment Notification</h1>
<div>
<strong>Query ID: </strong> {{$payment->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($payment->created_at))}}<br>
<strong>Spec Number: </strong> {{$payment->SpecificationNumber}}<br>
<strong>Risk Post Code: </strong> {{$payment->RiskPostCode}}<br>
<strong>Policy Start Date: </strong> {{$payment->StartDate}}<br>
<strong>Name: </strong> {{$payment->Name}}<br>
<strong>Phone Number: </strong> {{$payment->PhoneNumber}}<br>
<strong>Email Address: </strong> {{$payment->EmailAddress}}<br>
<strong>Amount Paid: </strong> {{$payment->AmountPaid}}<br>
<strong>Any Comments: </strong> {{$payment->Comments}}<br>          
</div>
<br><br>
Thanks,<br><br>
Stephen Lower Insurance
@endcomponent

