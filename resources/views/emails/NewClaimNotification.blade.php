@component('mail::message')
# Stephen Lower Insurance Services
<h1>New Website Claim Report</h1>
<div>
<strong>Query ID: </strong> {{$event->claim->id}}<br>
<strong>Date Submitted: </strong> {{date('d-M-y H:i', strtotime($event->claim->created_at))}}<br>
<strong>Name: </strong> {{$event->claim->Name}}<br>
<strong>Phone Number: </strong> {{$event->claim->PhoneNumber}}<br>
<strong>Alt Phone Number: </strong> {{$event->claim->SecondPhoneNumber}}<br>
<strong>Email Address: </strong> {{$event->claim->Email}}<br>   
<strong>Specification Number: </strong> {{$event->claim->SpecificationNumber}}<br>   
<strong>Risk Address: </strong> {{$event->claim->RiskAddress}}<br>  
<strong>Insured Name: </strong> {{$event->claim->InsuredName}}<br> 
<strong>Damage Cause: </strong> {{$event->claim->DamageCause}}<br>  
<strong>Damage: </strong> {{$event->claim->Damage}}<br>    
<strong>Informed By (If Any): </strong> {{$event->claim->InformedBy}}<br>  
<strong>Date Advised (If Any): </strong> {{$event->claim->DateAdvised}}<br>
<strong>Tradesman Name (If Any): </strong> {{$event->claim->TradesmanName}}<br>
<strong>Date Estimates Received (If Any): </strong> {{$event->claim->DateEstimatesReceived}}<br>                         
<strong>Police Advised?: </strong> {{$event->claim->PoliceAdvised}}<br>  
<strong>Date Police Advised (If Any): </strong> {{$event->claim->DatePoliceAdvised}}<br> 
<strong>Crime Number (If Any): </strong> {{$event->claim->CrimeNumber}}<br>       
<strong>Police Officer And Station (If Any): </strong> {{$event->claim->OfficerStationDealing}}<br> 
<strong>VAT Recoverable: </strong> {{$event->claim->RecoverVAT}}<br>
<strong>Notify Broker: </strong> {{$event->claim->NotifyBroker}}<br>
<strong>Settlement Payee: </strong> {{$event->claim->SettlementPayee}}<br>
<strong>Cheque Address: </strong> {{$event->claim->ChequeAddress}}<br>
        
Any uploaded photos are attached.

</div>
<br><br>
Thanks,<br><br>
Stephen Lower Insurance
@endcomponent
