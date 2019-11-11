@component('mail::message')
# Stephen Lower Insurance Services
<h1>New Website Quick Quote</h1>
<div>
<strong>Query ID: </strong> {{$quick_quote->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($quick_quote->created_at))}}<br>
<strong>Name: </strong> {{$quick_quote->name}}<br>
<strong>Email: </strong> {{$quick_quote->email}}<br>
<strong>Phone Number: </strong> {{$quick_quote->phone}}<br>
<strong>Risk Address: </strong> {{$quick_quote->risk}}<br>
<strong>Rebuild: </strong> {{$quick_quote->rebuild}}<br>
<strong>Renewal Date: </strong>{{$quick_quote->startdate}}<br>
<strong>Current Premium: £</strong> {{$quick_quote->currentpremium}}<br>
<strong>Files Attached: </strong> {{count($filenames)}}<br>
</div>
<br><br>
Thanks,<br><br>
Stephen Lower Insurance
@endcomponent
