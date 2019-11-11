@extends('layout.layout')
@section('content')
<section>
    <div class="container" style="text-align:center;">
        <div class="card text-center m-5 mx-auto come-in" style="width: 60vw;">
            <img src="images/taps.jpeg" class="card-img-top mb-3" style="width:100%; opacity: 0.4;" alt="Taps">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h1>Claims</h1>
            </div>
            <div class="card-body align-items-center">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="newclaim-tab" data-toggle="tab" href="#newclaim" role="tab" aria-controls="newclaim" aria-selected="false">Submit a New Claim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="updateclaim-tab" data-toggle="tab" href="#updateclaim" role="tab" aria-controls="updateclaim" aria-selected="false">Update an Existing Claim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="checkclaim-tab" data-toggle="tab" href="#checkclaim" role="tab" aria-controls="checkclaim" aria-selected="false">Can I Claim?</a>
                    </li>
                </ul>
                    <!--Overview Tab -->
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                            <h3 class="m-4">Need to make a claim?</h3>
                            <h3><strong>Don't Worry</strong></h3>
                            <p class="lead mb-3">At SLIS, we aim to make the process as easy as possible for you.</p>
                            <p class="lead mb-3">Simply follow our four-step process:-</p>
                            <div class="row">
                                <div class="text-left offset-sm-2">
                                    <h4 class="m-3" style="color: #25224d"><strong>1. Stop The Damage Getting Any Worse</strong></h4>
                                    <p class="lead">For example, a water leak may require you to</p>
                                    <ul>
                                        <li style=" list-style-type: disc;">Turn off the stop cock</li>
                                        <li style=" list-style-type: disc;">Put a bucket under the leak until it can be repaired</li>
                                        <li style=" list-style-type: disc;">Arrange for a plumber to make emergency repairs</li>
                                    </ul>
                                
                                    <h4 class="m-3" style="color: #25224d"><strong>2. Notify Us As Soon As Possible</strong></h4>
                                    <ul>
                                        <li style=" list-style-type: disc;"><strong>Online - </strong>Using the Submit a Claim Tab Above</li>
                                        <li style=" list-style-type: disc;"><strong>Telephone - </strong>01303 247 047</li>
                                        <li style=" list-style-type: disc;"><strong>Email - </strong>claims@stephenlower.co.uk</li>
                                    </ul>
                                    <p><strong>Important:</strong> If you use an insurance broker, pleasure make sure to notify them too <br/>
                                    (or tick the box on the new claim web form and we will do it for you</p>

                                    <p>We will need:-</p>
                                    <ul>
                                        <li style=" list-style-type: disc;"><strong>A Completed Claim Form</strong> - Either via submitting online or downloading a PDF copy <a style="color: #000000;" href="
                                        files\SLISClaimForm.pdf">Here</a></li>
                                        <li style=" list-style-type: disc;"><strong>Photos of the Damage</strong> - A mix of close and long shots to ensure we can asses the extent, 
                                        <br/> nature and location of any damage</li>
                                        <li style=" list-style-type: disc;"><strong>Tell Us How to Pay You (BACS or Cheque)</strong> - You can do this by downloading and completing 
                                        <br/>our payment mandate form <a href="files\BACS Payment Template.pdf">Here</a></li>
                                    </ul>
                                    
                                    <h4 class="m-3" style="color: #25224d"><strong>3. Obtain Two Estimates for the Repairs and Send Them to Us</strong></h4>
                                    <p>Unlike some insurers, we do not have a panel of contractors. Our experience is that most policy <br/> 
                                    holders want to use tradesmen that they know and trust, not somebody imposed on them by <br/> their insurance company.</p>

                                    <p>However, if you do not know of anybody suitable, or need another contractor to provide a second <br/> estimate, 
                                    then these websites may be helpful:-</p>
                                    <ul>
                                        <li style=" list-style-type: disc;"><a href="https://www.checkatrade.com">Check A Trade</a></li>
                                        <li style=" list-style-type: disc;"><a href="https://www.ratedpeople.com/find-quotes">Rated People</a></li>
                                        <li style=" list-style-type: disc;"><a href="https://www.trustatrader.com">Trust A Trader</a></li>
                                    </ul>

                                    Stephen Lower is not responsible for either the content of external websites or any businesses <br/> or trades found thereon

                                    <h4 class="m-3" style="color: #25224d"><strong>4.	Get our authorisation and undertake repairs</strong></h4>
                                    <p>Once we have received all of the information that we require (claim form, photos and estimates) then <br/> our claims managers will:-</p>
                                    <ul>
                                        <li style=" list-style-type: disc;">Confirm whether the reported incident is covered by your Stephen Lower insurance policy</li>
                                        <li style=" list-style-type: disc;">If it is, inform you as to the amount that we agree to pay you to put the damage right</li>
                                        <li style=" list-style-type: disc;">For larger or more complex cases, we might appoint a loss adjuster to manage the claim.
                                            <ul>
                                            <li style=" list-style-type: circle;">Loss adjusters are independent professionals, experts in assessing <br/> 
                                                and managing insurance claims</li>
                                            <li style=" list-style-type: circle;">If they have been appointed by us, then they are paid for by your insurance company, <br/>
                                             at no cost to you </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <p class="mb-5"><strong>Important:</strong> Undertaking repairs without our authorisation will mean we are unable to make any <br/> payments towards it.
                                    This does not apply to emergency repairs, undertaken to prevent further loss <br/> or damage as mentioned in Step 1 above.</p>

                                    <h4 class="m-3" style="color: #25224d"><strong>What Happens Next?</strong></h4>
                                    <p>Once we have given the go ahead to proceed with the repairs then you should instruct the contractor <br/> to make the required repairs</p>
                                    <p>Ensure that you are totally happy with the repairs before proceeding to pay the contractor invoice,<br/> it is your property afterall.</p>
                                    <p>Once paid, submit the invoice to us and we will reimburse you for the cost minus any policy excess.<br/> We aim to make paments to you as soon as possible upon receiving an invoice.
                                    <br/><br/>You can normally expect to receive the payment within 3-5 working days.</p>
                                </div>
                            </div>
                        </div>
                    <!--New Form -->
                    <div class="tab-pane fade" id="newclaim" role="tabpanel" aria-labelledby="newclaim-tab">
                        <h3 class="mt-3">Register A New Claim</h3>
                        <small>(Fields with <i class="fas fa-asterisk fa-xs"></i> are required)</small>
                        <div>
                            <div class="m-3">
                                @include('layout.messages')
                            </div>
                        
                            <div class="errors">
                                <!-- Our Validation Errors Go Here-->
                            </div>
                            <form method="POST" class="justify-content-center" enctype="multipart/form-data" action={{action('ClaimsController@store')}}>
                                <div class="form-group flex-row">
                                    <label>Your Name <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="text"  name="Name" id="Name" class="form-control col-sm-6 offset-sm-3 text-center " value="{{ old('Name') }}" placeholder="Your Name"/>
                                </div>
                                <div class="form-group flex-row">
                                    <label>Your Phone Number <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="text"  name="PhoneNumber" id="PhoneNumber" class="form-control col-sm-4 offset-sm-4 text-center" value="{{ old('PhoneNumber') }}" placeholder="Your Phone Number" />
                                </div>
                                <div class="form-group flex-row">
                                    <label>Alternative Phone Number <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="text"  name="SecondPhoneNumber" id="SecondPhoneNumber" class="form-control col-sm-4 offset-sm-4 text-center" value="{{ old('SecondPhoneNumber') }}" placeholder="Alternative Phone Number"/>
                                </div>
                                <div class="form-group flex-row">
                                    <label>Your Email <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="email"  name="Email" id="Email" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('Email') }}"  placeholder="example@email.com" />
                                </div>
                                <div class="form-group flex-row">
                                    <label>Confirm Email <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="email"  name="confirm-email" id="confirm-email" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('confirm-email') }}" placeholder="example@email.com" />
                                </div>
                                <div class="form-group flex-row">
                                    <label>Policy Specification Number <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="text"  name="SpecificationNumber" id="SpecificationNumber" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('SpecificationNumber') }}" placeholder="e.g. 123456" />
                                </div>
                                <div class="form-group flex-row">
                                    <label>Risk Address <i class="fas fa-asterisk fa-xs"></i></label>
                                    <textarea name="RiskAddress" id="RiskAddress" rows="4" class="form-control col-sm-8 offset-sm-2 text-center" value="{{ old('RiskAddress') }}" placeholder="The Address Insured By The Policy" ></textarea>
                                </div>
                                <div class="form-group flex-row">
                                    <label>Name Of Insured <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="text" name="InsuredName" id="InsuredName"  class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('InsuredName') }}" placeholder="Name of Policyholder" />
                                </div>
                                <div class="form-group flex-row">
                                    <label>Cause Of Damage <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="text" name="DamageCause" id="DamageCause" class="form-control col-sm-10 offset-sm-1 text-center" value="{{ old('DamageCause') }}" placeholder="e.g. Burst Pipe Under Floor"/>
                                </div>
                                <div class="form-group flex-row">
                                    <label>Damage You Are Claiming For <i class="fas fa-asterisk fa-xs"></i></label>
                                    <textarea name="Damage" id="Damage" rows="4" class="form-control col-sm-8 offset-sm-2 text-center" value="{{ old('Damage') }}" placeholder="List Any Damage Here" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Did A 3rd Party Notify You Of This Incident??</label><br/>
                                    <input type="checkbox" name="Advised" id="Advised" class="form-control-check" />
                                </div>
                                <div class="advised mt-3">
                                    <div class="form-group">
                                        <label>What Is Their Name?</label>
                                        <input type="text" name="InformedBy" id="InformedBy" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('InformedBy') }}" placeholder="Enter Their Name" />
                                    </div>
                                    <div class="form-group">
                                        <label>Date You Were Advised</label>
                                        <input type="date" name="DateAdvised" id="DateAdvised"  class="form-control col-sm-4 offset-sm-4 text-center "/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Have You Already Obtained Estimates?</label><br/>
                                    <input type="checkbox" name="Estimates" id="Estimates"  class="form-control-check" />
                                </div>
                                <div class="estimates mt-3">
                                    <div class="form-group">
                                        <label>Name Of Tradesman Supplying Estimates</label>
                                        <input type="text" name="TradesmanName" id="TradesmanName" value="{{ old('TradesmanName') }}" class="form-control col-sm-6 offset-sm-3 text-center" placeholder="Enter Their Name Or Address" />
                                    </div>
                                    <div class="form-group">
                                        <label>Date Estimates Were Requested</label>
                                        <input type="date" name="DateEstimatesReceived" id="DateEstimatesReceived" class="form-control col-sm-4 offset-sm-4 text-center " />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <small><strong>(For Claims Related To Theft Or Malicious Damage)</strong></small><br/>
                                    <label>Have The Police Been Advised?</label><br/>
                                    <input type="checkbox" name="PoliceAdvised" id="PoliceAdvised" class="form-control-check" />
                                </div>
                                <div class="police-section">
                                    <div class="form-group">
                                        <label>Date The Police Were Advised</label>
                                        <input type="date" name="DatePoliceAdvised" id="DatePoliceAdvised" class="form-control col-sm-4 offset-sm-4 text-center " />
                                    </div>
                                    <div class="form-group">
                                        <label>Crime Number</label>
                                        <input type="text"  name="CrimeNumber" id="CrimeNumber" value="{{ old('CrimeNumber') }}" class="form-control col-sm-6 offset-sm-3 text-center" placeholder="Police crime number" />
                                    </div>
                                    <div class="form-group">
                                        <label>Name And Station Of Officer Dealing</label>
                                        <input type="text" name="OfficerStationDealing" id="OfficerStationDealing" value="{{ old('OfficerStationDealing') }}" class="form-control col-sm-6 offset-sm-3 text-center" placeholder="Offcer and station name"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Is The Insured/Tennant VAT Registered And Able To Recover The VAT Element? <i class="fas fa-asterisk fa-xs"></i></label>
                                    <select name="RecoverVAT" id="RecoverVAT" class="form-control col-sm-2 offset-5" >
                                        <option value="n/a">N/A</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Who Should Settlement Be Paid To? <i class="fas fa-asterisk fa-xs"></i></label>
                                    <input type="text"  name="SettlementPayee" id="SettlementPayee" value="{{ old('SetllementPayee') }}" class="form-control col-sm-6 offset-sm-3 text-center"  placeholder="Name on the cheque" />
                                </div>
                                <div class="form-group">
                                    <label>Payee Address <i class="fas fa-asterisk fa-xs"></i></label>
                                    <textarea   name="ChequeAddress" rows="4" id="ChequeAddress" class="form-control col-sm-8 offset-sm-2 text-center" value="{{ old('ChequeAddress') }}" placeholder="Address you want us to send the cheque to" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Notify My Broker</label><br/>
                                    <input type="checkbox"  name="NotifyBroker" id="NotifyBroker" class="form-control-check" value="true" />
                                </div>
                                <div class="form-group mt-4 mb-5">
                                    <small id="uploadHelp" class="form-text text-muted mb-3">Upload Any Photos Here.</small>
                                    <small id="uploadHelptwo" class="form-text text-muted mb-4">Max File Size: 5MB | File Types: JPG, JPEG, PNG</small>
                                    <input type="file" name="photos[]" multiple>
                                </div>
                                @csrf
                                <button type="reset" class="btn btn-danger ml-2 mb-2">Clear</button>
                                <button type="submit" id="submit" class="btn btn-primary mb-2">Submit</button> 
                            </form>
                        </div>
                    </div>

                    <!--Existing Form -->
                  
                    <div class="tab-pane fade" id="updateclaim" role="tabpanel" aria-labelledby="updateclaim-tab">
                    <h3 class="mt-3">Update Your Claim</h3>
                    <small>(Fields with <i class="fas fa-asterisk fa-xs"></i> are required)</small>
                    <div>
                        <div class="m-3">
                            @include('layout.messages')
                        </div>
                    
                        <div class="errors">
                            <!-- Our Validation Errors Go Here-->
                        </div>
                    </div>
                        <form method="POST" enctype="multipart/form-data" action=/claims/updatedclaims>
                            <div class="form-group flex-column">
                                <label for="PolicyholderName"><strong>Name</strong><small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                <input type="text" class="form-control mb-3 col-sm-6 offset-sm-3 text-center" id="PolicyholderName" placeholder="Your Name" value="{{ old('PolicyholderName') }}" name="PolicyholderName" required>
                                <label for="PolicyholderEmail"><strong>Email address</strong><small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                <input type="email" class="form-control col-sm-6 offset-sm-3 text-center" id="PolicyholderEmail" aria-describedby="emailHelp" value="{{ old('PolicyholderEmail') }}" placeholder="Your Email" name="PolicyholderEmail" required>
                                <small id="emailHelp" class="form-text text-muted mb-3">We'll never share your email with anyone else.</small>
                                <label for="PolicyholderPostCode"><strong>Post Code</strong><small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                <input type="text" class="form-control mb-3 col-sm-6 offset-sm-3 text-center" id="PolicyholderPostCode" value="{{ old('PolicyholderPostCode') }}" placeholder="Your Post Code" name="PolicyholderPostCode" required>
                                <label for="ClaimNumber"><strong>Claim Reference Number</strong><i class="fas fa-asterisk fa-xs"></i></label>
                                <input type="text" class="form-control mb-3 col-sm-6 offset-sm-3 text-center" id="ClaimNumber" name="ClaimNumber" value="{{ old('ClaimNumber') }}" placeholder="Your SLIS Claim Reference" required>
                                <label for="PolicyholderComments"><strong>Comments</strong><small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                <textarea class="form-control mb-3 form-control col-sm-8 offset-sm-2 text-center" rows="5" id="query" placeholder="Enter Comments" name="PolicyholderComments" value="{{ old('PolicyholderComments') }}" required></textarea>
                                <label for="PolicyholderFiles"><strong>Upload Files</strong> </label>
                                <small id="uploadHelp" class="form-text text-muted mb-3">Here you can upload PDF documents that you wish to attach.</small>
                                <small id="uploadHelptwo" class="form-text text-muted mb-3">Max File Size: 5MB</small>
                                <div class="upload">
                                    <input type="file" id="PolicyholderFiles" name="PolicyholderFiles[]" multiple> 
                                </div>
                                <br>
                                @csrf
                                <br>
                                <button type="reset" class="btn btn-danger ml-3" value="Reset">Clear Form</button>
                                <button type="submit" class="btn btn-primary ml-3" value="submit">Submit</button>
                            </div>
                        </form>
                    </div>

                    <!--Can I Claim -->
                    <div class="tab-pane fade" id="checkclaim" role="tabpanel" aria-labelledby="checkclaim-tab">
                        <h3 class="mt-3">Unsure If You Can Make A Claim?</h3>
                        <p class="lead">Has something untoward happened to your property?</p>
                        <h3><strong>Then let us know!</strong></h3>
                        <p><strong>If you are in any doubt</strong> about whether whatever has happened is covered by your Stephen Lower policy –<br/> 
                        or you have not yet decided whether you wish to pursue a claim, please get in touch.
                            <ul>
                                <li style=" list-style-type: disc;"><strong>Online - </strong>Using the Submit a Claim Tab Above</li>
                                <li style=" list-style-type: disc;"><strong>Telephone - </strong>01303 247 047</li>
                                <li style=" list-style-type: disc;"><strong>Email - </strong>claims@stephenlower.co.uk</li>
                            </ul>
                        </p>
                        <p>That is exactly what our friendly, experienced and knowledgeable claims managers are here for.<br/>  
                        They will be very happy to listen to what has happened and discuss with you whether it is <br/> covered under your Stephen Lower policy. 
                        </p>
                        <p>It is always better to notify us of an incident, even if you subsequently decide not to pursue it as a claim. </p>

                        <h5><strong>What is not covered?</strong></h5>
                        <p>The circumstances around every incident are different, which is why we always urge you to contact us.</p>
                        <p>However, things that may not be covered include </p>
                        <ul>
                            <li style=" list-style-type: disc;">Something that has happened over a long period of time</li>
                            <li style=" list-style-type: disc;">Wear and tear or lack of maintenance</li>
                            <li style=" list-style-type: disc;">An incident which has not caused any damage</li>
                        </ul>
                        <p>Even if an incident has happened that you think falls into the above categories, <br/> you should still contact us to be absolutely sure.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/>
</section>

@endsection