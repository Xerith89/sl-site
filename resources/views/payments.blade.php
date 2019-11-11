@extends('layout.layout')
@section('content')
<section>
    <div class="container" style="text-align:center;">
        <div class="card text-center m-5 mx-auto come-in" style="width: 60vw;">
            <img src="images/payments.jpg" class="card-img-top mb-3" style="width:100%; opacity: 0.4;" alt="Payments">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h1>Make A Payment</h1>
            </div>
            <div class="card-body align-items-center">
                <h3 class="mb-4">Paying for your policy couldn't be easier!</h3>
                <p class="lead mb-3">You can pay over the phone on <strong>01303 241180</strong> or online using the form below.</p>
                <img src="images/cards.png" class="img-fluid" alt="Payment Methods">
                <br>
                <p>Alternatively, you can pay for your policy by BACS or Direct Debit <img src="images/directdebit.png" class="sm-link" alt="Direct Debit"></p>

                <div class="container">
                    <p><u>Any Queries?</u> <br> You can also get in touch with our accounts team by heading over to the <a href="/contact">Contact Us Page</a> to send us a query 
                    <br>or give them a call on <strong>01303 241180</strong></p>
                </div>
                <br>
                <hr>
                <h3 class="mt-3"><u>Your Details</u></h3>
                <small>(Fields with <i class="fas fa-asterisk fa-xs"></i> are required)</small>
                <div>
                    <div class="m-3">
                        @include('layout.messages')
                    </div>
                   
                    <div class="errors">
                        <!-- Our Validation Errors Go Here-->
                    </div>
                    <form method="POST" class="justify-content-center" enctype="form-data" action={{action('PaymentsController@store')}}>
                        <div class="form-group">
                            <label>Your Name <i class="fas fa-asterisk fa-xs mr-2"></i> </label>
                            <input type="text"  name="Name" id="Name" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('Name') }}" placeholder="Your Name"/>
                        </div>
                        <div class="form-group flex-row mt-2">
                            <label>Your Phone Number <i class="fas fa-asterisk fa-xs mr-2"></i></label>
                            <input type="text"  name="PhoneNumber" id="PhoneNumber" class="form-control col-sm-4 offset-sm-4 text-center" value="{{ old('PhoneNumber') }}" placeholder="Your Phone Number" />
                        </div>
                        <div class="form-group flex-row mt-2">
                            <label>Your Email <i class="fas fa-asterisk fa-xs mr-2"></i></label>
                            <input type="email"  name="EmailAddress" id="EmailAddress" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('Email') }}"  placeholder="example@email.com" />
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group flex-row mt-2">
                            <label>Confirm Email <i class="fas fa-asterisk fa-xs mr-2"></i></label>
                            <input type="email"  name="ConfirmEmail" id="ConfirmEmail" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('confirm-email') }}" placeholder="example@email.com" />
                        </div>
                        <h3 class="mt-3"><u>Details Of The Policy Being Paid For</u></h3>
                        <div class="form-group flex-row mt-2">
                            <label>Specification Number <i class="fas fa-asterisk fa-xs"></i></label>
                            <input type="text"  name="SpecificationNumber" id="SpecificationNumber" class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('IdentificationNumber') }}" placeholder="e.g. 123456-01" />
                        </div>
                        <div class="form-group flex-row">
                            <label>Risk Address Post Code <i class="fas fa-asterisk fa-xs"></i></label>
                            <input type="text" name="RiskPostCode" id="RiskPostCode"  class="form-control col-sm-6 offset-sm-3 text-center" value="{{ old('RiskPostCode') }}" placeholder="AA01 0AA" />
                        </div>
                        <div class="form-group flex-row">
                            <label>Cover Start Date <i class="fas fa-asterisk fa-xs"></i></label>
                            <input type="date" name="StartDate" id="StartDate" class="form-control col-sm-4 offset-sm-4 text-center" value="{{ old('StartDate') }}"/>
                        </div>
                        <div class="form-group flex-row">
                            <label>Any Comments </i></label>
                            <textarea name="Comments" id="Comments" rows="4" class="form-control col-sm-8 offset-sm-2 text-center" value="{{ old('Comments') }}" placeholder="Comments" ></textarea>
                        </div>
                        <!--PLACEHOLDER DATA FOR TESTING ONLY -->
                        <input type="hidden" name="AmountPaid" value="17.99">
                        @csrf
                        <button type="reset" class="btn btn-danger ml-2 mb-2">Clear</button>
                        <button type="submit" id="submit" class="btn btn-primary mb-2">Pay Now</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.4.1.min.js " integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin=" anonymous "></script>
<script type="text/javascript" src="{{ asset('js/payment.js') }}"></script>
@endsection