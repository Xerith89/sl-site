@component('mail::message')
# Stephen Lower Insurance Services

<h1>Claim Update</h1>

Your Claim Submission ID: {{$updatedClaim->id}}<br>
Time of Submission: {{date('d-M-y H:i', strtotime($updatedClaim->created_at))}}<br><br>
Thank you for your update to your claim.
<br><br>
We will process this shortly and get in touch with you if we need anything further.
<br><br>
If you need to speak to us urgently then you can give us a call on 01303 247047.
<br><br>
<strong>Please note that this email box is not monitored.</strong>

Thanks,<br>

Stephen Lower Insurance Services

@endcomponent
