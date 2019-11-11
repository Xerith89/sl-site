@component('mail::message')
# Stephen Lower Insurance Services

<h1>Thanks For Getting In Touch!</h1>

Your Query ID: {{$contact->id}}<br>
Time of Submission: {{date('d-M-y H:i', strtotime($contact->created_at))}}<br><br>
We aim to respond to all queries within 24 working hours and so you should be hearing from us shortly.
<br><br>
If your query is urgent then you can give us a call on 01303 247047.
<br><br>
<strong>Please note that this email box is not monitored.</strong>

Thanks,<br>

Stephen Lower Insurance Services

@endcomponent
