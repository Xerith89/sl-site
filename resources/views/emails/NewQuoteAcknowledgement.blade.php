@component('mail::message')
# Stephen Lower Insurance Services

<h1>Thanks For Requesting A Quote!</h1>

<strong>Query ID: </strong> {{$event->completed_quote->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($event->completed_quote->created_at))}}<br>

We aim to respond to all quotes within 24 working hours and so you should be hearing from us shortly.
<br><br>
If your query is urgent then you can give us a call on 01303 247047.
<br><br>
<strong>Please note that this email box is not monitored.</strong>

Thanks,<br>

Stephen Lower Insurance Services

@endcomponent
