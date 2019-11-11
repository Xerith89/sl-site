@component('mail::message')
# Stephen Lower Insurance Services
<h1>New Website Updated Claim Info</h1>
<div>
<strong>Query ID: </strong> {{$event->updatedClaim->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($event->updatedClaim->created_at))}}<br>
<strong>Name: </strong> {{$event->updatedClaim->PolicyholderName}}<br>
<strong>Email Address: </strong> {{$event->updatedClaim->PolicyholderEmail}}<br>   
<strong>Claim Number: </strong> {{$event->updatedClaim->ClaimNumber}}<br>   
<strong>Post Code: </strong> {{$event->updatedClaim->PolicyholderPostCode}}<br>  
<strong>Comments: </strong> {{$event->updatedClaim->PolicyholderComments}}<br>
        
Any uploaded items are attached.

</div>
<br><br>
Thanks,<br><br>
Stephen Lower Insurance
@endcomponent
