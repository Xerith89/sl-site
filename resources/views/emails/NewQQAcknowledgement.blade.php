@component('mail::message')
# Stephen Lower Insurance Services

Your Query ID: {{$quick_quote->id}}<br>
Time of Submission: {{date('d-M-y H:i', strtotime($quick_quote->created_at))}}<br><br>
We're so happy you're interested in getting a quote from us. 
<br><br>
We'll be back in touch nearer to your renewal date to take some further details and discuss exactly how Stephen Lower Insurance Services can work for you.
<br><br>
<strong>Please note that this email box is not monitored.</strong>

Thanks,<br>

Stephen Lower Insurance Services

@endcomponent