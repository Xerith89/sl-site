@component('mail::message')
# Stephen Lower Insurance Services
<h1>New Website Quote Request</h1>
<div>
<strong>Query ID: </strong> {{$event->completed_quote->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($event->completed_quote->created_at))}}<br>
</div>
Quote details are attached.
<br><br>
Thanks,<br><br>
Stephen Lower Insurance
@endcomponent

