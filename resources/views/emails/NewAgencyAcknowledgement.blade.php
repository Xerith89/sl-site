@component('mail::message')
# Stephen Lower Insurance Services

<h1>New Agency Application</h1>

Your Submission ID: {{$agency->id}}<br>
Time of Submission: {{date('d-M-y H:i', strtotime($agency->created_at))}}<br><br>
Thank you for your interest in working with us. 
<br><br>
We have received your agency application and will be in touch once we have reviewed it.
<br>
If you need to speak to us urgently then you can give us a call on 01303 247047.
<br><br>
<strong>Please note that this email box is not monitored.</strong>

Thanks,<br>

Stephen Lower Insurance Services
@endcomponent
