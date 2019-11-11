@extends('layout.layout')
@section('content')
<div class="jumbotron jumbotron-fluid quote-jumbo">
  <div class="container">
    <h2 class="text-center header ml16"><strong>Getting a quote is so easy</strong></h2>
    <br>
  </div>
</div>
    <section>
        <div class="container" style="text-align:center;">
            <div class="mx-auto come-in">
                <div class="ie-warning">
                    <h5>Unfortunately Our Quote System Does Not Support Internet Explorer</h5>
                    <p>Please use an alternative browser to obtain a quote.</p>
                </div>
                    @if(count($errors) == 0)
                        <div class="start-button mt-3 ml-5"></div>
                    @endif
                
                    <p class="mt-3">Every quote is individually prepared by one of our experienced underwriters. <br />You will receive your personalised quote within 1 working day.</p>
                    <p >If you would like to upload your own quote form or renewal notice, click <br><a href="/contact"><button type="button" class="btn btn-success mt-2">Here</button></a></p>
                    
                    <noscript>JavaScript Must Be Enabled To Use This Page</noscript>
                    <br>
                    <div class="result">
                    
                      <!-- Server Validation -->
                  
                      @include('layout.messages')    
                    </div>
                  
                    <br>
                    <div class="spinner">
                    </div>
                    
                    <form method="POST" action={{action('QuotesController@store')}} novalidate>

                        <!-- Details Start of Form -->
                        <div class="collapse" id="details-collapse">
                            <div class="card d-flex mx-auto justify-content-center" style="width: 65vw;">
                                <div class="card-body">
                                    <h5 class="mb-3"><strong>Progress</strong></h5>
                                    <div class="progress d-flex" style="height:20px">
                                        <div class="progress-bar bg-success border border-1" style="width:25%">
                                          <strong>1</strong>
                                        </div>
                                        <div class="progress-bar bg-white border border-1" style="width:25%; color:#000000;">
                                           <strong>2</strong>
                                        </div>
                                        <div class="progress-bar bg-white border border-1" style="width:25%; color:#000000;">
                                           <strong>3</strong>
                                        </div>
                                        <div class="progress-bar bg-white border border-1" style="width:25%; color:#000000;">
                                           <strong>4</strong>
                                        </div>
                                    </div>
                                <br>
                                    <h4 class="mb-3"><strong>Your Details</strong></h4>
                                    <small>(Fields with <i class="fas fa-asterisk fa-xs"></i> are required)</small>
                                    <div class="errors">
                                        <!-- Our Validation Errors Go Here-->
                                    </div>
                                    <div class="form-row justify-content-center flex-row mt-3">
                                        <div class="flex-column p-1">
                                            <label for="title" class="col p-0">Title <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <select class="form-control form-control-sm" id="inlineFormCustomSelect" name="Title" value="{{ old('Title') }}">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Miss">Miss</option>
                                                <option value="Ms">Ms</option>
                                                <option value="Mx">Mx</option>
                                                <option value="Dr">Dr</option>
                                                <option value="Esq">Esq</option>
                                                <option value="Hon">Hon</option>
                                                <option value="Prof">Prof</option>
                                                <option value="Rev">Rev</option>
                                            </select>
                                        </div>
                                        <div class="flex-column-4 flex-grow-1 p-1">
                                            <label for="fname" class="col">First Name <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <input type="text" id="fname" class="form-control form-control-sm" name="Firstname" value="{{ old('Firstname') }}">
                                        </div>
                                        <div class="p-1">
                                            <label for="middlename">Middle Name</label>
                                            <input type="text" id="middlename" name="MiddleInitials" class="form-control form-control-sm">
                                        </div>
                                        <div class="flex-column flex-grow-1 p-1">
                                            <label for="surname" class="col">Surname <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <input type="text" id="surname" class="form-control form-control-sm" name="Surname" value="{{ old('Surname') }}">
                                        </div>
                                        <div class="flex-column flex-grow-0 p-1">
                                            <label for="relationship" class="col p-0">Relationship to Proposer <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <select class="form-control form-control-sm" id="relationship" name="RelationshipToProposer" value="{{ old('RelationshipToProposer') }}">
                                                <option value=""></option>
                                                <option value="proposer">Proposer</option>
                                                <option value="broker">Broker/Intermediary</option>
                                                <option value="managing">Managing Or Letting Agent</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div> 
                                    </div>
                                    <div class="form-row flex-row p-1 m-3 inner">
                                        <div class="flex-column flex-grow-1 relationship">
                                            <label for="relationship-info" class="col relationship">Please Specify<small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <input type="text" id="relationship-info" class="form-control form-control-sm mb-1" name="RelationshipMoreInfo" value="{{ old('RelationshipMoreInfo') }}" placeholder="Specify Relationship...">
                                        </div>
                                    </div>
                                    <div class="form-row flex-row justify-content-center mt-1 m-3">
                                        <div class="flex-column flex-grow-1 p-1">
                                            <label for="organisation" id="organisation" class="col">Organisation <i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="If you are acting on behalf of or as the employee of an organisation, please let us know"></i></label>
                                            <input type="text" class="form-control form-control-sm" value="{{ old('Organisation') }}" name="Organisation">
                                        </div>
                                        <div class="flex-column p-1">
                                            <label for="telephone" class="col">Phone Number <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <input type="text" id="telephone" class="form-control form-control-sm" name="PhoneNumber" value="{{ old('PhoneNumber') }}">
                                        </div>
                                    </div>
                                    <div class="form-row flex-row m-3">
                                        <div class="flex-column flex-grow-1 p-1">
                                            <label for="email" class="col">Email Address <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <input type="email" id="email" name="Email" class="form-control form-control-sm" value="{{ old('Email') }}">
                                        </div>
                                        <div class="flex-column flex-grow-1 p-1">
                                            <label for="confirm-email" class="col">Confirm Email Address <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <input type="email" id="confirm-email" name="confirm-email" class="form-control form-control-sm" value="{{ old('confirm-email') }}">
                                        </div>
                                    </div>
                                    <div class="form-row flex-row justify-content-center mt-3">
                                        <div class="flex-column p-1 ml-3">
                                            <label for="corrieadd" class="col">Tick To Add Correspondance Address</label>
                                            <input type="checkbox" id="corrieadd" name="AddCorrie" class="form-check-input mb-3" value="{{ old('AddCorrie') }}">
                                        </div>
                                    </div>
                                    <div class="corrie-section mt-3">
                                        <div class="form-row flex-row justify-content-center mt-3">
                                            <div class="flex-column flex-grow-0 p-1">
                                                <label for="house-number" class="col" >House Name/Number <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="house-number" name="CorrieNumber" class="form-control form-control-sm mb-1" value="{{ old('CorrieNumber') }}">
                                            </div>
                                            <div class="flex-column flex-grow-1 p-1">
                                                <label for="street" class="col" required>First Line of Address <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="street" name="CorrieFirstLine" class="form-control form-control-sm mb-1" value="{{ old('CorrieFirstLine') }}">
                                            </div>
                                        </div>
                                        <div class="form-row flex-row mt-3">
                                            <div class="flex-column flex-grow-1 p-1"> 
                                                <label for="streetlinetwo" class="col">Second Line of Address</label>
                                                <input type="text" id="streetlinetwo" class="form-control form-control-sm mb-1" name="CorrieSecondLine" value="{{ old('CorrieSecondLine') }}">
                                            </div>
                                            <div class="flex-column flex-grow-2 p-1">
                                                <label for="city" class="col" >City <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="city" class="form-control form-control-sm mb-1" name="CorrieCity" value="{{ old('CorrieCity') }}">
                                            </div> 
                                            <div class="flex-column flex-grow-0 p-1"> 
                                                <label for="county" class="col" required>County <small><i class="fas fa-asterisk fa-xs"></i></small></label>  
                                                <select class="form-control form-control-sm" id="county" name="CorrieCounty" value="{{ old('CorrieCounty') }}">
                                                    <option value=""></option>
                                                    <option value="Aberdeenshire">Aberdeenshire</option>
                                                    <option value="Angus">Angus</option>
                                                    <option value="Antrim">Antrim</option>
                                                    <option value="Argyll & Bute">Argyll & Bute</option>
                                                    <option value="Armagh">Armagh</option>
                                                    <option value="Ayrshire">Ayrshire</option>
                                                    <option value="Banffshire">Banffshire</option>
                                                    <option value="Bedfordshire">Bedfordshire</option>
                                                    <option value="Berkshire">Berkshire</option>
                                                    <option value="Berwickshire">Berwickshire</option>
                                                    <option value="Blaenau Gwent">Blaenau Gwent</option>
                                                    <option value="Borders">Borders</option>
                                                    <option value="Bridgend">Bridgend</option>
                                                    <option value="Bristol">Bristol</option>
                                                    <option value="Buckinghamshire">Buckinghamshire</option>
                                                    <option value="Caerphilly">Caerphilly</option>
                                                    <option value="Caithness">Caithness</option>
                                                    <option value="Cambridgeshire">Cambridgeshire</option>
                                                    <option value="Cardiff">Cardiff</option>
                                                    <option value="Carmarthenshire">Carmarthenshire</option>
                                                    <option value="Ceredigion">Ceredigion</option>
                                                    <option value="Cheshire">Cheshire</option>
                                                    <option value="City of London">City of London</option>
                                                    <option value="Clackmannanshire">Clackmannanshire</option>
                                                    <option value="Conwy">Conwy</option>
                                                    <option value="Cornwall">Cornwall</option>
                                                    <option value="County Durham">County Durham</option>
                                                    <option value="Cumbria">Cumbria</option>
                                                    <option value="Denbighshire">Denbighshire</option>
                                                    <option value="Derbyshire">Derbyshire</option>
                                                    <option value="Devon">Devon</option>
                                                    <option value="Dorset">Dorset</option>
                                                    <option value="Down">Down</option>
                                                    <option value="Dumfries & Galloway">Dumfries & Galloway</option>
                                                    <option value="Dunbartonshire">Dunbartonshire</option>
                                                    <option value="East Ayrshire">East Ayrshire</option>
                                                    <option value="East Dunbartonshire">East Dunbartonshire</option>
                                                    <option value="East Lothian">East Lothian</option>
                                                    <option value="East Renfrewshire">East Renfrewshire</option>
                                                    <option value="East Riding of Yorkshire">East Riding of Yorkshire</option>
                                                    <option value="East Sussex">East Sussex</option>
                                                    <option value="Essex">Essex</option>
                                                    <option value="Fermanagh">Fermanagh</option>
                                                    <option value="Fife">Fife</option>
                                                    <option value="Flintshire">Flintshire</option>
                                                    <option value="Gloucestershire">Gloucestershire</option>
                                                    <option value="Greater London">Greater London</option>
                                                    <option value="Greater Manchester">Greater Manchester</option>
                                                    <option value="Gwynedd">Gwynedd</option>
                                                    <option value="Hampshire">Hampshire</option>
                                                    <option value="Herefordshire">Herefordshire</option>
                                                    <option value="Hertfordshire">Hertfordshire</option>
                                                    <option value="Highland">Highland</option>
                                                    <option value="Humberside">Humberside</option>
                                                    <option value="Inverclyde">Inverclyde</option>
                                                    <option value="Isle of Anglesey">Isle of Anglesey</option>
                                                    <option value="Isle of Wight">Isle of Wight</option>
                                                    <option value="Isles of Scilly">Isles of Scilly</option>
                                                    <option value="Kent">Kent</option>
                                                    <option value="Kincardineshire">Kincardineshire</option>
                                                    <option value="Lanarkshire">Lanarkshire</option>
                                                    <option value="Lancashire">Lancashire</option>
                                                    <option value="Leicestershire">Leicestershire</option>
                                                    <option value="Lincolnshire">Lincolnshire</option>
                                                    <option value="Londonderry">Londonderry</option>
                                                    <option value="Merseyside">Merseyside</option>
                                                    <option value="Merthyr Tydfil">Merthyr Tydfil</option>
                                                    <option value="Middlesex">Middlesex</option>
                                                    <option value="Midlothian">Midlothian</option>
                                                    <option value="Monmouthshire">Monmouthshire</option>
                                                    <option value="Moray">Moray</option>
                                                    <option value="Neath Port Talbot">Neath Port Talbot</option>
                                                    <option value="Newport">Newport</option>
                                                    <option value="Norfolk">Norfolk</option>
                                                    <option value="North Ayrshire">North Ayrshire</option>
                                                    <option value="North Lanarkshire">North Lanarkshire</option>
                                                    <option value="North Somerset">North Somerset</option>
                                                    <option value="North Yorkshire">North Yorkshire</option>
                                                    <option value="Northamptonshire">Northamptonshire</option>
                                                    <option value="Northumberland">Northumberland</option>
                                                    <option value="Nottinghamshire">Nottinghamshire</option>
                                                    <option value="Orkney">Orkney</option>
                                                    <option value="Oxfordshire">Oxfordshire</option>
                                                    <option value="Pembrokeshire">Pembrokeshire</option>
                                                    <option value="Perth & Kinross">Perth & Kinross</option>
                                                    <option value="Powys">Powys</option>
                                                    <option value="Renfrewshire">Renfrewshire</option>
                                                    <option value="Rhondda Cynon Taff">Rhondda Cynon Taff</option>
                                                    <option value="Rutland">Rutland</option>
                                                    <option value="Shetland">Shetland</option>
                                                    <option value="Shropshire">Shropshire</option>
                                                    <option value="Somerset">Somerset</option>
                                                    <option value="South Ayrshire">South Ayrshire</option>
                                                    <option value="South Gloucestershire">South Gloucestershire</option>
                                                    <option value="South Lanarkshire">South Lanarkshire</option>
                                                    <option value="South Yorkshire">South Yorkshire</option>
                                                    <option value="Staffordshire">Staffordshire</option>
                                                    <option value="Stirlingshire">Stirlingshire</option>
                                                    <option value="Suffolk">Suffolk</option>
                                                    <option value="Surrey">Surrey</option>
                                                    <option value="Swansea">Swansea</option>
                                                    <option value="Torfaen">Torfaen</option>
                                                    <option value="Tyne & Wear">Tyne & Wear</option>
                                                    <option value="Tyrone">Tyrone</option>
                                                    <option value="Vale of Glamorgan">Vale of Glamorgan</option>
                                                    <option value="Warwickshire">Warwickshire</option>
                                                    <option value="West Dunbartonshire">West Dunbartonshire</option>
                                                    <option value="West Lothian">West Lothian</option>
                                                    <option value="West Midlands">West Midlands</option>
                                                    <option value="West Sussex">West Sussex</option>
                                                    <option value="West Yorkshire">West Yorkshire</option>
                                                    <option value="Western Isles">Western Isles</option>
                                                    <option value="Wiltshire">Wiltshire</option>
                                                    <option value="Worcestershire">Worcestershire</option>
                                                    <option value="Wrexham">Wrexham</option>
                                                </select>
                                            </div>
                                            <div class="flex-column flex-grow-0 p-1">
                                                <label for="postcode" class="col">Post Code <small><i class="fas fa-asterisk fa-xs"></i></small></label> 
                                                <input type="text" id="postcode" name="CorriePostCode" class="form-control form-control-sm mb-1" value="{{ old('CorriePostCode') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4 class="mb-3"><strong>Proposer Details</strong></h4>
                                    <small>These are the details on which the contract will be based, please answer as honestly and completely as you can.</small>
                                    <div class="form-row flex-row mt-3 mb-3">
                                        <div class="flex-column flex-grow-1 p-1">
                                            <label for="phname" class="col">Proposer Name<small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <input type="text" id="phname" class="form-control form-control-sm" name='ProposerName' value="{{ old('ProposerName') }}">
                                        </div>
                                        <div class="flex-column flex-grow-1 p-1">
                                            <label for="rel-to-prop" class="col">Relationship To Property<small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <select id="rel-to-prop" class="form-control form-control-sm" name='RelationshipToProperty' value="{{ old('RelationshipToProperty') }}">
                                                <option value=""></option>
                                                <option value="Managing Agent">Broker</option>
                                                <option value="Freeholder">Freeholder</option>
                                                <option value="Managing Agent">Landlord</option>
                                                <option value="Leaseholder">Leaseholder</option>
                                                <option value="Managing Agent">Managing Agent</option>
                                                <option value="Managing Agent">Tennant</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mt-3 mb-3 rel-to-prop-moreinfo">
                                        <div class="col-12">
                                            <label for="rel-to-prop-moreinfo" class="col">Please Provide More Info <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <textarea rows="4" class="form-control" id= "rel-to-prop-moreinfo" name="RelToPropMoreInfo" cols="20" value="{{ old('RelToPropMoreInfo') }}"></textarea> 
                                        </div>
                                    </div>
                                    <div class="form-row flex-row mb-1">
                                        <div class="flex-column prev-ins ml-3 mb-3">
                                            <label for="previnsadd" class="col">Have You held Previous Insurance with SLIS?</label>
                                            <input type="checkbox" id="previnsadd" name="prevpol" class="form-check-input" name="PreviousPolicy" value="{{ old('PreviousPolicy') }}">
                                        </div>
                                        <div class="flex-column prevpol p-1 flex-grow-1">
                                            <label for="prevpol">Previous Policy Number<small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="This will help us find your previous details"></i></small></label> 
                                            <input type="text" id="prevpol" name="PreviousPolicyNumber" class="form-control form-control-sm" value="{{ old('PreviousPolicyNumber') }}">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row flex-row mb-3 p-1">
                                        <div class="flex-column" >
                                            <h5 style="text-align:center;"><strong>Has the Policy Holder(s) ever been:</strong></h5>
                                        </div>
                                    </div>
                                    <div class="form-group assumptions">
                                        <div class="form-row flex-row p-1">
                                            <label for="ccj" style="text-align:left;">Subject to a County Court Judgment (or Scottish Equivalent)<small><i class="fas fa-asterisk fa-xs mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="ccj" name="CCJ" value="{{ old('CCJ') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>   
                                        </div>
                                        <div class="form-row flex-row flex-grow-0 p-1">
                                            <label for="bankrupt"  style="text-align:left;">Made bankrupt, subject to bankruptcy proceedings or any voluntary/mandatory insolvency<small><i class="fas fa-asterisk fa-xs mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="bankrupt" name="Bankruptcy" value="{{ old('Bankruptcy') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-row flex-row flex-grow-0 p-1 justify-content-left ">
                                            <label for="declined" style="text-align:left;">Declined/refused insurance cover or had cover cancelled or subject to special terms in respect of any covers to which the insurance relates<small><i class="fas fa-asterisk fa-xs mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="declined" name="Declined" value="{{ old('Declined') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-row flex-row flex-grow-0 p-1">
                                            <label for="recovery" style="text-align:left;">The subject of recovery action by Her Majesty's Revenue and Customs<small><i class="fas fa-asterisk fa-xs mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="recovery" name="Recovery" value="{{ old('Recovery') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-row flex-row flex-grow-0 p-1">
                                            <label for="prosecuted" style="text-align:left;">Prosecuted or served a prohibition/improvement order under Health & Safety legislation within the last 5 years<small><i class="fas fa-asterisk fa-xs  mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="prosecuted" name="Prosecuted" value="{{ old('Prosecuted') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-row flex-row flex-grow-0 p-1">
                                            <label for="liquidated" style="text-align:left;">Involved in any company which went into receivership, administration or liquidation<small><i class="fas fa-asterisk fa-xs mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="liquidated" name="Liquidated" value="{{ old('Liquidated') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-row flex-row flex-grow-0 p-1">
                                            <label for="disqualified" style="text-align:left;">Disqualified from being a company director<small><i class="fas fa-asterisk fa-xs mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="disqualified" name="Disqualified" value="{{ old('Disqualified') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-row flex-row flex-grow-0 p-1">
                                            <label for="convictions" style="text-align:left;">The subject of any Criminal Convictions<small><i class="fas fa-asterisk fa-xs mr-1"></i></small></label>
                                            <select class="form-control col-sm-1" id="convictions" name="Convictions" value="{{ old('Convictions') }}">
                                                <option value=""></option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="more-details">
                                        <label for="info-box">Please provide explanation about the Statements where you have answered yes</label>
                                        <textarea rows="4" class="form-control moreinfotext" id="statementsinfo" name="StatementsMoreInfo" cols="50" value="{{ old('StatementsMoreInfo') }}"></textarea>
                                    </div>
                                    <nav aria-label="quote-navigation">
                                        <ul class="pagination pagination-lg justify-content-center mt-3">
                                            <li class="page-item disabled">
                                                <button class="page-link" tabindex="-1" aria-disabled="true"><i class="fas fa-chevron-left"></i></button>
                                            </li>
                                            <li class="page-item">
                                                <button class="page-link the-property" data-toggle="collapse" data-target="#property-collapse" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-chevron-right"></i></button>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Property Section of the Form -->
                        <div class="collapse" id="property-collapse">
                            <div class="card mx-auto d-flex" style="width: 65vw;">
                                <div class="card-body">
                                    <div class="card-body">
                                        <h5 class="mb-3"><strong>Progress</strong></h5>
                                        <div class="progress d-flex" style="height:20px">
                                            <div class="progress-bar bg-success border border-1" style="width:25%">
                                                <strong>1</strong>
                                            </div>
                                            <div class="progress-bar bg-success border border-1" style="width:25%;">
                                                <strong>2</strong>
                                            </div>
                                            <div class="progress-bar bg-white border border-1" style="width:25%; color:#000000;">
                                                <strong>3</strong>
                                            </div>
                                            <div class="progress-bar bg-white border border-1" style="width:25%; color:#000000;">
                                                <strong>4</strong>
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="mb-3"><strong>The Property</strong></h4>
                                        <small>(Fields with <i class="fas fa-asterisk fa-xs"></i> are required)</small>
                                        <div class="errors">
                                            <!-- Our Validation Errors Go Here-->
                                        </div>
                                        <h4 class="mb-3 mt-3"><strong>Risk Address</strong></h4>
                                        <div class="form-row flex-row mt-3">
                                            <div class="flex-column p-1">
                                                <label for="house-number">House Name/Number <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="risknum" name="RiskNumber" class="form-control form-control-sm mb-1" value="{{ old('RiskNumber') }}">
                                            </div>
                                            <div class="flex-column p-1 flex-grow-1">
                                                <label for="street">First Line of Address <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="riskstreet" name="RiskFirstLine" class="form-control form-control-sm mb-1" value="{{ old('RiskFirstLine') }}">
                                            </div>
                                        </div>
                                        <div class="form-row flex-row mt-3">
                                            <div class="flex-column p-1 flex-grow-1"> 
                                                <label for="streetlinetwo">Second Line of Address</label>
                                                <input type="text" id="risklinetwo" name="RiskSecondLine" class="form-control form-control-sm mb-1" value="{{ old('RiskSecondLine') }}">
                                            </div>                                                
                                            <div class="flex-column p-1">
                                                <label for="city" >City <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="riskcity" name="RiskCity" class="form-control form-control-sm mb-1" value="{{ old('RiskCity') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="county">County <small><i class="fas fa-asterisk fa-xs"></i></small></label> 
                                                <select class="form-control form-control-sm" id="riskcounty" name="RiskCounty" value="{{ old('RiskCounty') }}">
                                                    <option value=""></option>
                                                    <option value="Aberdeenshire">Aberdeenshire</option>
                                                    <option value="Angus">Angus</option>
                                                    <option value="Antrim">Antrim</option>
                                                    <option value="Argyll & Bute">Argyll & Bute</option>
                                                    <option value="Armagh">Armagh</option>
                                                    <option value="Ayrshire">Ayrshire</option>
                                                    <option value="Banffshire">Banffshire</option>
                                                    <option value="Bedfordshire">Bedfordshire</option>
                                                    <option value="Berkshire">Berkshire</option>
                                                    <option value="Berwickshire">Berwickshire</option>
                                                    <option value="Blaenau Gwent">Blaenau Gwent</option>
                                                    <option value="Borders">Borders</option>
                                                    <option value="Bridgend">Bridgend</option>
                                                    <option value="Bristol">Bristol</option>
                                                    <option value="Buckinghamshire">Buckinghamshire</option>
                                                    <option value="Caerphilly">Caerphilly</option>
                                                    <option value="Caithness">Caithness</option>
                                                    <option value="Cambridgeshire">Cambridgeshire</option>
                                                    <option value="Cardiff">Cardiff</option>
                                                    <option value="Carmarthenshire">Carmarthenshire</option>
                                                    <option value="Ceredigion">Ceredigion</option>
                                                    <option value="Cheshire">Cheshire</option>
                                                    <option value="City of London">City of London</option>
                                                    <option value="Clackmannanshire">Clackmannanshire</option>
                                                    <option value="Conwy">Conwy</option>
                                                    <option value="Cornwall">Cornwall</option>
                                                    <option value="County Durham">County Durham</option>
                                                    <option value="Cumbria">Cumbria</option>
                                                    <option value="Denbighshire">Denbighshire</option>
                                                    <option value="Derbyshire">Derbyshire</option>
                                                    <option value="Devon">Devon</option>
                                                    <option value="Dorset">Dorset</option>
                                                    <option value="Down">Down</option>
                                                    <option value="Dumfries & Galloway">Dumfries & Galloway</option>
                                                    <option value="Dunbartonshire">Dunbartonshire</option>
                                                    <option value="East Ayrshire">East Ayrshire</option>
                                                    <option value="East Dunbartonshire">East Dunbartonshire</option>
                                                    <option value="East Lothian">East Lothian</option>
                                                    <option value="East Renfrewshire">East Renfrewshire</option>
                                                    <option value="East Riding of Yorkshire">East Riding of Yorkshire</option>
                                                    <option value="East Sussex">East Sussex</option>
                                                    <option value="Essex">Essex</option>
                                                    <option value="Fermanagh">Fermanagh</option>
                                                    <option value="Fife">Fife</option>
                                                    <option value="Flintshire">Flintshire</option>
                                                    <option value="Gloucestershire">Gloucestershire</option>
                                                    <option value="Greater London">Greater London</option>
                                                    <option value="Greater Manchester">Greater Manchester</option>
                                                    <option value="Gwynedd">Gwynedd</option>
                                                    <option value="Hampshire">Hampshire</option>
                                                    <option value="Herefordshire">Herefordshire</option>
                                                    <option value="Hertfordshire">Hertfordshire</option>
                                                    <option value="Highland">Highland</option>
                                                    <option value="Humberside">Humberside</option>
                                                    <option value="Inverclyde">Inverclyde</option>
                                                    <option value="Isle of Anglesey">Isle of Anglesey</option>
                                                    <option value="Isle of Wight">Isle of Wight</option>
                                                    <option value="Isles of Scilly">Isles of Scilly</option>
                                                    <option value="Kent">Kent</option>
                                                    <option value="Kincardineshire">Kincardineshire</option>
                                                    <option value="Lanarkshire">Lanarkshire</option>
                                                    <option value="Lancashire">Lancashire</option>
                                                    <option value="Leicestershire">Leicestershire</option>
                                                    <option value="Lincolnshire">Lincolnshire</option>
                                                    <option value="Londonderry">Londonderry</option>
                                                    <option value="Merseyside">Merseyside</option>
                                                    <option value="Merthyr Tydfil">Merthyr Tydfil</option>
                                                    <option value="Middlesex">Middlesex</option>
                                                    <option value="Midlothian">Midlothian</option>
                                                    <option value="Monmouthshire">Monmouthshire</option>
                                                    <option value="Moray">Moray</option>
                                                    <option value="Neath Port Talbot">Neath Port Talbot</option>
                                                    <option value="Newport">Newport</option>
                                                    <option value="Norfolk">Norfolk</option>
                                                    <option value="North Ayrshire">North Ayrshire</option>
                                                    <option value="North Lanarkshire">North Lanarkshire</option>
                                                    <option value="North Somerset">North Somerset</option>
                                                    <option value="North Yorkshire">North Yorkshire</option>
                                                    <option value="Northamptonshire">Northamptonshire</option>
                                                    <option value="Northumberland">Northumberland</option>
                                                    <option value="Nottinghamshire">Nottinghamshire</option>
                                                    <option value="Orkney">Orkney</option>
                                                    <option value="Oxfordshire">Oxfordshire</option>
                                                    <option value="Pembrokeshire">Pembrokeshire</option>
                                                    <option value="Perth & Kinross">Perth & Kinross</option>
                                                    <option value="Powys">Powys</option>
                                                    <option value="Renfrewshire">Renfrewshire</option>
                                                    <option value="Rhondda Cynon Taff">Rhondda Cynon Taff</option>
                                                    <option value="Rutland">Rutland</option>
                                                    <option value="Shetland">Shetland</option>
                                                    <option value="Shropshire">Shropshire</option>
                                                    <option value="Somerset">Somerset</option>
                                                    <option value="South Ayrshire">South Ayrshire</option>
                                                    <option value="South Gloucestershire">South Gloucestershire</option>
                                                    <option value="South Lanarkshire">South Lanarkshire</option>
                                                    <option value="South Yorkshire">South Yorkshire</option>
                                                    <option value="Staffordshire">Staffordshire</option>
                                                    <option value="Stirlingshire">Stirlingshire</option>
                                                    <option value="Suffolk">Suffolk</option>
                                                    <option value="Surrey">Surrey</option>
                                                    <option value="Swansea">Swansea</option>
                                                    <option value="Torfaen">Torfaen</option>
                                                    <option value="Tyne & Wear">Tyne & Wear</option>
                                                    <option value="Tyrone">Tyrone</option>
                                                    <option value="Vale of Glamorgan">Vale of Glamorgan</option>
                                                    <option value="Warwickshire">Warwickshire</option>
                                                    <option value="West Dunbartonshire">West Dunbartonshire</option>
                                                    <option value="West Lothian">West Lothian</option>
                                                    <option value="West Midlands">West Midlands</option>
                                                    <option value="West Sussex">West Sussex</option>
                                                    <option value="West Yorkshire">West Yorkshire</option>
                                                    <option value="Western Isles">Western Isles</option>
                                                    <option value="Wiltshire">Wiltshire</option>
                                                    <option value="Worcestershire">Worcestershire</option>
                                                    <option value="Wrexham">Wrexham</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row flex-row mt-3">
                                            <div class="flex-column p-1">
                                                <label for="postcode">Post Code <small><i class="fas fa-asterisk fa-xs"></i></small></label> 
                                                <input type="text" id="riskpostcode" name="RiskPostCode" class="form-control form-control-sm mb-1" value="{{ old('RiskPostCode') }}">
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="mb-3 mt-3"><strong>Property Details</strong></h4>
                                        <div class="form-row flex-row mt-3">
                                            <div class="col-12">
                                                <label for="interest" class="col">Interested Parties <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Record Any Additional Parties That Need To Be Noted On The Policy"></i></small></label> 
                                                <input type="text" id="interest" name="InterestedParties" class="form-control form-control-sm mb-1" value="{{ old('InterestedParties') }}">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3">
                                            <div class="flex-column p-1">
                                                <label for="proptype">Policy Type <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <select class="form-control form-control-sm" id="proptype" name="PropertyType" value="{{ old('PropertyType') }}">
                                                    <option value="block-of-flats">Block of Flats</option>
                                                    <option value="commercial">Commercial</option>
                                                    <option value="let">Household Let</option>
                                                    <option value="contents-only">Landlord's Contents Only</option>
                                                </select>
                                            </div>
                                            <div class="flex-column converted p-1">
                                                <label for="converted">Purpose Built Or Conversion?<small><i class="fas fa-asterisk fa-xs"></i></small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Was The Property Originally Built As Flats Or Converted?"></i></label>
                                                <select class="form-control form-control-sm" id="converted" name="BuildType" value="{{ old('BuildType') }}">
                                                    <option value=""></option>
                                                    <option value="purpose-built">Purpose Built</option>
                                                    <option value="conversion">Conversion</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="flex-column usage p-1">
                                                <label for="resi-areas" class="col">Any Residential Areas? <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <select class="form-control form-control-sm" id="resi-areas" name="ResiAreas" value="{{ old('ResiAreas') }}">
                                                    <option value=""></option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                            <div class="flex-column numflats p-1">
                                                <label for="numflats" class="col">Number of Flats <small><i class="fas fa-asterisk fa-xs"></i><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="How Many Self-Contained Flats Does the Property Have?"></i></small></label>
                                                <input type="number" min="1" value="0" step="1" id="numflats" class="form-control form-control-sm mb-1" name="NumFlats" value="{{ old('NumFlats') }}">
                                            </div>
                                            <div class="flex-column unocflats p-1 flex-shrink-1">
                                                <label for="unocflats" class="col">Total Unoccupied At Policy Inception <small><i class="fas fa-asterisk fa-xs"></i><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="How Many Flats At The Property Will Be Unoccupied At Inception Of The Policy?"></i></small></label>
                                                <input type="number" min="0" value="0" step="1" id="unocflats" class="form-control form-control-sm mb-1" name="NumFlatsUnoccupied" value="{{ old('NumFlatsUnoccupied') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="yearbuilt" class="col">Year Of Build <small><i class="fas fa-asterisk fa-xs"></i></small><small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="What Was the Original Construction Date of the Property?"></i></small></label>
                                                <input type="number" min="1500" max="2019" step="1" id="yearbuilt" class="form-control form-control-sm mb-1" name="YearOfBuild" value="{{ old('YearOfBuild') }}">
                                            </div>
                                        </div>
                                        <div class="form-row  justify-content-center  flex-row build-type">
                                            <div class="flex-column p-1 flex-grow-1">
                                                <label for="build-type"><br>Build Type<small><i class="fas fa-asterisk fa-xs"></i></small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Please Clarify The Build Type"></i></label>
                                                <input type="text" id="build-type" class="form-control form-control-sm mb-1" name="BuildTypeInfo" value="{{ old('BuildTypeInfo') }}">
                                            </div>
                                        </div>
                                        <div class="form-row flex-row">
                                            <div class="flex-column usage p-1 flex-grow-1">
                                                <label for="usage"><br>Nature Of Business<small><i class="fas fa-asterisk fa-xs"></i></small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="What Type Of Commercial Use Takes Place At The Property?"></i></label>
                                                <input type="text" id="usage" class="form-control form-control-sm mb-1" name="BusinessUse" value="{{ old('BusinessUse') }}">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-row mb-3 mt-3">
                                            <div class="col-12">
                                                <h5><strong>Is the Property</strong></h5>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row">
                                            <div class="flex-column p-1">
                                                <label for="repair">In A Good State of Repair?<small><i class="fas fa-asterisk fa-xs"></i></small><small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="The Property is free from structural problems and does not require major maintenance"></i></small></label>
                                                <select class="form-control form-control-sm" id="repair" name="GoodStateRepair" value="{{ old('GoodStateRepair') }}">
                                                    <option value=""></option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="construction" class="col p-0">A Standard Construction Build?<small><i class="fas fa-asterisk fa-xs"></i></small><small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Standard Construction means brick/stone walls with tile/slate roofing"></i></small></label>
                                                <select class="form-control form-control-sm" id="construction" name="StandardConstruction" value="{{ old('StandardConstruction') }}">
                                                    <option value=""></option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="works" class="col p-0">Undergoing Major Works?<small><i class="fas fa-asterisk fa-xs"></i></small><small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Is the Property undergoing alteration, repair, renovation, conversion or any similar works now or within the next 12 months"></i></small></label>
                                                <select class="form-control form-control-sm" id="works" name="MajorWorks" value="{{ old('MajorWorks') }}">
                                                    <option value=""></option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-row  justify-content-center  flex-row">
                                            <div class="flex-column p-1">
                                                    <label for="listed" class="col p-0"><br>A Listed Building <small><i class="fas fa-asterisk fa-xs"></i></small><small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Does the Property Have Listed Status?"></i></small></label>
                                                    <select class="form-control form-control-sm" id="listed" name="ListedStatus" value="{{ old('ListedStatus') }}">
                                                    <option value=""></option>
                                                    <option value="no">Not Listed</option>
                                                    <option value="grade1">Grade 1</option>
                                                    <option value="grade2">Grade 2</option>
                                                    <option value="grade2*">Grade 2*</option>
                                                    <option value="cata">Category A</option>
                                                    <option value="catb">Category B</option>
                                                    <option value="catc">Category C</option>
                                                    <option value="gradea">Grade A</option>
                                                    <option value="gradeb+">Grade B+</option>
                                                    <option value="gradeb1">Grade B1</option>
                                                    <option value="gradeb2">Grade B2</option>
                                                </select>
                                                </div>
                                                <div class="flex-column p-1 hmo">
                                                    <label for="hmo" class="col p-0"><br>An HMO? <small><i class="fas fa-asterisk fa-xs"></i></small><small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Has the property been unoccupied and will continue to be unoccupied for a period of 6 concurrent months, at the point of policy inception?"></i></small></label>
                                                    <select class="form-control form-control-sm" id="hmo" name="HMO" value="{{ old('HMO') }}">
                                                        <option value=""></option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                                <div class="flex-column p-1 mt-4 unocc">
                                                    <label for="unoccupied">Unoccupied More Than 6 Concurrent Months At The Point Of Policy Inception? <small><i class="fas fa-asterisk fa-xs"></i></small><small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="A House of Multiple Occupancy has multiple tennants with shared amenities"></i></small></label>
                                                    <select class="form-control form-control-sm" id="unoccupied" name="Unoccupied" value="{{ old('Unoccupied') }}">
                                                        <option value=""></option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" mt-3 prop-details-moreinfo">
                                            <label for="info-box">Please provide further information <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <textarea rows="6" class="form-control" id="prop-details-moreinfo" name="RiskDetailsMoreInfo" cols="20" value="{{ old('RiskDetailsMoreInfo') }}"></textarea>
                                        </div>
                                        <hr>
                                        <div class="form-row  justify-content-center flex-row">
                                            <div class="flex-column p-1">
                                                <label for="numstoreys" class="col">Number of Storeys <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="How Many Total Storeys Does the Property Have?"></i></small></label>
                                                <input type="number" min="0" step="1" id="numstoreys" class="form-control form-control-sm mb-1" name="NumStoreys" value="{{ old('NumStoreys') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="numlifts" class="col">Number of Lifts <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="How Many Total Lifts Does the Property Have?"></i></small></label>
                                                <input type="number" min="0" step="1" id="numlifts" class="form-control form-control-sm mb-1" name="NumLifts" value="{{ old('NumLifts') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="sprinkler" class="col p-0">Sprinklers Installed? <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Are There Sprinklers Installed Throughout the Property?"></i></small></label>
                                                <select class="form-control form-control-sm" id="sprinkler" name="Sprinklers" value="{{ old('Sprinklers') }}">
                                                    <option value=""></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="mb-3 mt-4"><strong>Claims History</strong></h4>
                                        <div class="form-row flex-row justify-content-center mt-3">
                                            <div class="flex-column p-1 subsdec">
                                                <label for="subs" class="col p-0">Has the Property Ever Suffered from Subsidence, Heave or Landslip? <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <select class="form-control form-control-sm" id="subs" name="PrevSubs" value="{{ old('PrevSubs') }}">
                                                    <option value=""></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="flex-column p-1 flooddec">
                                                <label for="flood" class="col p-0">Has the Property Ever Suffered from Any Form of Flooding? <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <select class="form-control form-control-sm" id="flood" name="PrevFlood" value="{{ old('PrevFlood') }}">
                                                    <option value=""></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="floodsub-moreinfo mt-3">
                                            <label for="fs-info">Please provide further information <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                            <textarea rows="4" class="form-control fs-moreinfo" id="fs-info" cols="20" name="FloodSubsMoreInfo" value="{{ old('FloodSubsMoreInfo') }}"></textarea>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3">
                                            <div class="flex-column mb-3">
                                                <label for="claimdec" class="col p-0">In the last 3 years, has there been any claims, accidents or incidents at the property? <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <select class="form-control form-control-sm" id="claimdec" name="PrevClaims" value="{{ old('PrevClaims') }}">
                                                    <option value=""></option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mt-3 claim-history ">
                                            <h5 class="mb-3 mt-4"><strong>Please Provide Details For Each Claim Within 3 Years</strong></h5>
                                            <button type="button" id="add-claim" class="btn btn-primary mb-3">Add Claim</button>
                                        </div>
                                            <div class="claims"></div>
                                            <input type="hidden" name="ClaimsDetails[]" id="claims-details">
                                        <nav aria-label="quote-navigation">
                                            <ul class="pagination pagination-lg justify-content-center mt-3">
                                                <li class="page-item ">
                                                    <button class="page-link your-details" data-toggle="collapse" data-target="#details-collapse" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-chevron-left"></i></button>
                                                </li>
                                                <li class="page-item">
                                                    <button class="page-link cover-details" data-toggle="collapse" data-target="#cover-collapse" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-chevron-right"></i></button>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cover Section -->
                        <div class="collapse" id="cover-collapse">
                            <div class="card mx-auto d-flex" style="width: 65vw;">
                                <div class="card-body">
                                    <div class="card-body">
                                        <div class="progress d-flex" style="height:20px">
                                            <div class="progress-bar bg-success border border-1" style="width:25%">
                                                <strong>1</strong>
                                            </div>
                                            <div class="progress-bar bg-success border border-1" style="width:25%;">
                                                <strong>2</strong>
                                            </div>
                                            <div class="progress-bar bg-success border border-1" style="width:25%;">
                                                3
                                            </div>
                                            <div class="progress-bar bg-white border border-1" style="width:25%; color:#000000;">
                                                4
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="mb-3"><strong>Required Cover</strong></h4>
                                        <small>(Fields with <i class="fas fa-asterisk fa-xs"></i> are required)</small>
                                        <div class="errors">
                                            <!-- Our Validation Errors Go Here-->
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3">
                                            <div class="flex-column p-1">
                                                <label for="start-date" class="col">Cover Start Date <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="start-date" class="form-control form-control-sm mb-1" name="StartDate" value="{{ old('StartDate') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="rebuild" class="col">Property Rebuild Cost £ <small><i class="fas fa-asterisk fa-xs"></i><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="The Rebuild Cost, also referred to as the Buildings Declared Value (BDV), must accurately reflect the full reinstatement value for Insurance purposes at the start date of the Period of Insurance."></i></small></label>
                                                <input type="text" placeholder="" id="rebuild" class="form-control form-control-sm mb-1" name="RebuildCost" value="{{ old('RebuildCost') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="commonarea" class="col">Contents of Common Areas £ <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="'Common Parts' refers to coverage for the Contents shared by tenants in the Common areas such as the halls and stairways.
£25,000 of cover is provided automatically with no charge, you may request more if you wish. A higher coverage amount will be subject to additional premium."></i></small></label>
                                                <input type="text" value="25,000" id="commonarea" class="form-control form-control-sm mb-1" name="CommonAreas" value="{{ old('CommonAreas') }}">
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-primary m-3" data-toggle="modal" data-target="#infoModal">
                                                More Info
                                        </button>
                                        <div class="form-row justify-content-center flex-row mt-3 landlord-suminsured">
                                            <div class="flex-column p-1">
                                                <label for="landlord-suminsured" class="col">Landlord's Contents Sum Insured £ <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" id="landlord-suminsured" class="form-control form-control-sm mb-1" name="LandlordSumInsured" value="{{ old('LandlordSumInsured') }}">
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="mt-5"><strong>Current Insurance</strong></h5>
                                        <div class="form-row flex-row mt-3 justify-content-center">
                                            <h5>You do not need to provide us with details of your current policy or the renewal terms you have been offered, but the more we know about what you want from us, the more tailored the quote we will be able to
                                                offer.
                                            </h5>
                                            <br>
                                            <div class="flex-column p-1">
                                                <label for="curinsurer" class="col">Current Insurer</label>
                                                <input type="text" id="curinsurer" class="form-control form-control-sm mb-1" name="CurrentInsurer" value="{{ old('CurrentInsurer') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="curprem" class="col">Current Premium £</label>
                                                <input type="text" id="curprem" class="form-control form-control-sm mb-1" name="CurrentPremium" value="{{ old('CurrentPremium') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="curexcess" class="col">Current Excess £</label>
                                                <input type="number" min="-200" step="50" max="1000" id="curexcess" style="text-align: center;" class="form-control form-control-sm mb-1" name="CurrentExcess" value="{{ old('CurrentExcess') }}">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3">
                                            <div class="flex-column">
                                                <label for="additionalinfo" class="col">Have there Been Any Special Terms or Excesses Applied to Your Current Policy? <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Please Advise of Special Terms On Your Current Policy Such As An Additional Flood Or Subsidence Excess"></i></small></label>
                                                <textarea rows="4" class="form-control " cols="20" name="SpecialTerms" value="{{ old('SpecialTerms') }}"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <h5 class="mt-5"><strong>Optional Covers</strong></h5>
                                        <small>In addition to the standard Property Covers there are optional covers that can be added to your policy.
                                            <br>
                                                These optional covers may in turn incur additional premiums</small>
                                        <div class="form-row justify-content-center flex-row mt-3">
                                            <div class="flex-column">
                                                <input class="form-check-input checkbox-2x" type="checkbox" name="EmployerLiability" id="emplia" value="emplia" aria-label="employer-liability" value="{{ old('EmployerLiability') }}">
                                                <label class="form-check-label" for="emplia">Employer's Liability Cover <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Employers' Liability cover is available at no charge for Eligible Policy Holders"></i></small></label>
                                            </div>
                                        </div>
                                        <div class="form-row mt-3 justify-content-center emp-lia">
                                            <label for="has-staff" class="mb-2">Do You Employ Any Staff? <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Do You Employ Any Members of Staff?"></i></small></label>
                                            <input type="checkbox" id="has-staff" name="HasStaff" class="form-check-input form-check mt-4 mb-3" value="{{ old('HasStaff') }}">
                                        </div>
                                            <div class="form-row flex-row justify-content-center emp-lia">
                                                <div class="flex-column ern ml-3 mt-1">
                                                    <label for="ern" class="col">Employers Reference Number (ERN) <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Your Employer Reference Number, provided to you by HMRC, this will appear on your documents such as P60s and Payslips.
        Sometimes shown as the 'Employer PAYE reference', made up of your 'Office Number' and 'Reference Number'."></i></small></label>
                                                    <input type="text" id="ern" name="ERN" placeholder="###/######" class="form-control form-control-sm mb-2" value="{{ old('ERN') }}">
                                                </div>
                                            </div>
                                            <div class="form-row flex-row justify-content-center emp-lia">
                                                <div class="ern-exempt">
                                                    <label class="form-check-label" for="ern-exempt">ERN Exempt? <small><i class="fas fa-exclamation-triangle fa-xs ml-1" data-toggle="tooltip" data-placement="top" title="Tick if you are exempt from providing an Employer Reference Number (ERN)"></i></small></label>
                                                    <input class="form-check-input form-check ml-5 mb-4" type="checkbox" name="ERNExempt" id="ern-exempt" aria-label="dando" value="{{ old('ERNExempt') }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-2">
                                            <div class="flex-column">
                                                <input class="form-check-input checkbox-2x" type="checkbox" id="engi" name="Engineering" value="engi" aria-label="engineering" value="{{ old('Engineering') }}">
                                                <label class="form-check-label" for="engi">Lift Engineering Cover <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="If your property contains a lift, then the Health and Safety Executive's LOLER 1998 regulations require that it is 
inspected by a competent person twice a year.
This inspection by an independent engineer is required IN ADDITION to any maintenance contract you may already have in place."></i></small></label>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3 engi">
                                            <div class="flex-column p-1">
                                                <label for="engi-numstoreys" class="col">Number of Storeys <small><i class="fas fa-asterisk fa-xs"></i><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="How Many Total Storeys Does the Property Have?"></i></small></label>
                                                <input type="number" min="0" step="1" id="engi-numstoreys" class="form-control form-control-sm mb-1" value="{{ old('NumStoreys') }}">
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="engi-numlifts" class="col">Number of Lifts <small><i class="fas fa-asterisk fa-xs"></i><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="How Many Total Lifts Does the Property Have?"></i></small></label>
                                                <input type="number" min="0" step="1" id="engi-numlifts" class="form-control form-control-sm mb-1" value="{{ old('NumLifts') }}">
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3">
                                            <div class="flex-column mt-2">
                                                <input class="form-check-input checkbox-2x" type="checkbox" name="terrorism" id="terrorism" value="Terrorism" aria-label="terrorism" value="{{ old('Terrorism') }}">
                                                <label class="form-check-label" for="terrorism">Terrorism Cover <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Terrorist incidents are explicitly Excluded from the policy's cover as standard"></i></small></label>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3">
                                            <div class="flex-column mt-2">
                                                <input class="form-check-input checkbox-2x" type="checkbox" name="DAndO" id="dando" value="dando" aria-label="dando" value="{{ old('DAndO') }}"> 
                                                <label class="form-check-label" for="dando">Directors and Officers Cover <small><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Directors' and Officers' Cover is for Residential Management Companies and Residents' Associations"></i></small></label>
                                            </div>
                                        </div>
                                        <div class="form-row justify-content-center flex-row mt-3 dando-indem mr-1">
                                            <div class="flex-column p-1">
                                                <label for="dandoindem" class="col p-0">Indemnity Level Required <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <select class="form-control form-control-sm" id="dandoindem" name="IndemnityLevel" value="{{ old('IndemnityLevel') }}">
                                                    <option value=""></option>
                                                    <option value="100k">£100,000</option>
                                                    <option value="250k">£250,000</option>
                                                    <option value="500k">£500,000</option>
                                                    <option value="1mil">£1,000,000</option>
                                                    <option value="2mil">£2,000,000</option>
                                                </select>
                                            </div>
                                            <div class="flex-column p-1">
                                                <label for="dando-numflats" class="col">Number of Flats <small><i class="fas fa-asterisk fa-xs"></i><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="How Many Self-Contained Flats Does the Property Have?"></i></small></label>
                                                <input type="number" min="0" step="1" id="dando-numflats" class="form-control form-control-sm mb-1" value="{{ old('NumFlats') }}">
                                            </div>
                                        </div>
                                        <br>
                                        <nav aria-label="quote-navigation">
                                            <ul class="pagination pagination-lg justify-content-center mt-3">
                                                <li class="page-item ">
                                                    <button class="page-link the-property" data-toggle="collapse" data-target="#property-collapse" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-chevron-left"></i></button>
                                                </li>
                                                <li class="page-item ">
                                                    <button class="page-link  submit" data-toggle="collapse" data-target="#submit-collapse" role="button" aria-expanded="false" aria-controls="collapse"><i class="fas fa-chevron-right "></i></button>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Submit Area -->
                        <div class="collapse " id="submit-collapse">
                            <div class="card mx-auto d-flex" style="width: 65vw;">
                                <div class="card-body">
                                    <div class="card-body ">
                                        <div class="progress d-flex" style="height:20px">
                                            <div class="progress-bar bg-success border border-1" style="width:25%">
                                                <strong>1</strong>
                                            </div>
                                            <div class="progress-bar bg-success border border-1" style="width:25%;">
                                                <strong>2</strong>
                                            </div>
                                            <div class="progress-bar bg-success border border-1" style="width:25%;">
                                                <strong>3</strong>
                                            </div>
                                            <div class="progress-bar bg-success border border-1" style="width:25%;">
                                                <strong>4</strong>
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="mb-3 "><strong>Submit</strong></h4>
                                        <p class="lead">This form collects the information provided regarding yourself, the policy client and the property to be insured, so that we can provide a quotation for insurance cover. To see how we use and retain the data provided
                                            please check our Privacy Policy.</p>
                                        <p><strong>Please ensure that care has been given to answer all questions honestly and to the best of your knowledge. An insurance policy based on incorrect statements may be cancelled and have claims rejected.
                                            You will be able to upload supporting documents at the end of the quotation form.</strong></p>
                                        <label class="form-check-label" for="consent">
                                                    I consent to the collection, retention and use of the data provided to Stephen Lower Insurance Services Ltd
                                                  </label>
                                        <div class="form-row justify-content-center">
                                            <div class="flex-column">
                                                <input type="checkbox" id="consent" class="form-check-input checkbox-2x ml-1 mt-2">
                                            </div>
                                        </div>
                                        <br>
                                        @csrf
                                        <div class="form-row justify-content-center mt-3">
                                            <button type="submit" id="submit-btn" class="btn btn-group-lg btn-block btn-success disabled" style="cursor: not-allowed;">Submit</button>
                                        </div>
                                        <nav aria-label="quote-navigation ">
                                            <ul class="pagination pagination-lg justify-content-center mt-3 ">
                                                <li class="page-item ">
                                                    <button class="page-link cover-details " data-toggle="collapse " data-target="#cover-collapse " role="button " aria-expanded="false " aria-controls="collapse"><i class="fas fa-chevron-left "></i></button>
                                                </li>
                                                <li class="page-item disabled ">
                                                    <button class="page-link "><i class="fas fa-chevron-right "></i></button>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <br><br>
                </div>
            </div>
    </section>
@endsection

@section('modal')
<!-- Modal -->
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Rebuild Cost</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body align-items-center">
                <p class="lead">The rebuild cost is the amount that it would cost to fully rebuild the property, including:
                    <br>
                    <ul style="list-style: inside">
                        <li>Labour and Materials</li>
                        <li>Demolition and Site Clearance costs</li>
                        <li> All professional fees (e.g. architects)</li>
                    </ul>
                    <br> We strongly suggest that you engage the services of a qualified professional to attain a quotation, such as a surveyor chartered by the Royal Institute of Chartered Surveyors.</p>
                <p>The quoted value must be timely, any change to the Rebuild Cost must be declared to us immediately so that the insured amount can be updated.</p>
                <strong>If at the time of damage, the Rebuild Cost quoted is less than the actual Rebuild Cost, then the amount payed out by Insurers will be reduced proportionately.</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection