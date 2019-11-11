@component('mail::message')
# Stephen Lower Insurance Services
<h1>New Website Query</h1>
<div>
<strong>Query ID: </strong> {{$contact->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($contact->created_at))}}<br>
<strong>Name: </strong> {{$contact->Name}}<br>
<strong>Company: </strong> {{$contact->Company}}<br>
<strong>Reference Number: </strong> {{$contact->Reference}}<br>
<strong>Department Needed: </strong> {{$contact->DepartmentRequired}}<br>
<strong>Query Body: </strong> {{$contact->QueryBody}}<br>
<strong>Files Attached: </strong> {{count($filenames)}}<br>
</div>
<br><br>
Thanks,<br><br>
Stephen Lower Insurance
@endcomponent
