@component('mail::message')
# Stephen Lower Insurance Services

<h1>New Claim Report</h1>

Your Claim Submission ID: {{$claim->id}}<br>
Time of Submission: {{date('d-M-y H:i', strtotime($claim->created_at))}}<br><br>
We aim to respond to all claims within 24 working hours and so you should be hearing from us shortly.
<br><br>
In the meantime, please do everything within your power to prevent any further damage or loss.<br>
For instance, If you have an escape of water, the water should be turned off at the stopcock
<br>
If you need to speak to us urgently then you can give us a call on 01303 247047.
<br><br>
<strong>Please note that this email box is not monitored.</strong>

Thanks,<br>

Stephen Lower Insurance Services

@endcomponent
