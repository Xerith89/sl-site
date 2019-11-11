@extends('layout.layout')
@section('content')
<section>
    <div class="container">
        <br><br><br>
        <div class="card text-center m-5 mx-auto come-in" style="width: 60vw;">
            <img src="images/direct.jpeg" class="card-img-top mb-3" style="width:100%; height:33%; opacity: 0.4;" alt="Broker">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h1>Direct</h1>
            </div>
            <div class="card-body mt-3 align-items-center">
            @include('layout.messages')
            <h2><strong>Standout Title</strong></h2>
            <br>
            <p class="lead">At Stephen Lower we understand that you expect top service and things like that. Our aim is to give you the very best service etc
            etc</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac aliquam sem. Fusce consequat, leo in pellentesque dapibus, lorem felis placerat turpis, sit amet auctor lacus leo id nunc. Praesent aliquam posuere est, quis luctus metus efficitur sit amet. Phasellus rutrum bibendum tristique. </p>
            <br>
            <ul class="list-group" style="list-style-type: none;">
                <li><i class="fas fa-check fa-2x " style=" color: #008000;"></i> No Push Button Phone Menus</li><br>
                <li><i class="fas fa-check fa-2x " style=" color: #008000;"></i> Competitive Pricing</li><br>
                <li><i class="fas fa-check fa-2x " style=" color: #008000;"></i> Exceptional Claims Service</li>
            </ul>
            </div>
            <h3 class="m-2"><strong>Ready For A Quote?</strong></h3>
            <a href="/quote">
                <button type="button " class="btn btn-primary btn-lg mb-3 mt-3 ">Get a Quote</button>
            </a>
            <div>
                <h3 class="mt-2"><strong>Renewal Not Due Yet?</strong></h3>
                <p class="lead">We can take a few details now and come back to you nearer the time.</p>
            </div>
            <form method="POST" enctype="multipart/form-data" action={{action('QuickQuotesController@store')}}>
                <div class="form-group mb-2 ml-4 mr-4">
                    <label for="name" class="mt-2"><strong>Your Name</strong></label> <input type="text" class="form-control col-sm-6 offset-sm-3 form-control-sm" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required>
                    
                    <label for="email" class="mt-2"><strong>Your Email</strong></label> <input type="email" class="form-control col-sm-6 offset-sm-3 form-control-sm" id="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required>
                    
                    <label for="phone" class="mt-2"><strong>Your Phone Number</strong></label> <input type="text" class="form-control col-sm-6 offset-sm-3 form-control-sm" id="phone" name="phone" placeholder="Phone Number" value="{{ old('phone') }}" required>
                    
                    <label for="risk" class="mt-2"><strong>Risk Property Address</strong></label> <textarea rows="4" class="form-control col-sm-8 offset-sm-2 form-control-sm" id="risk" name="risk" placeholder="The Insured Property" value="{{ old('risk') }}" required> </textarea>
                    
                    <label for="rebuild" class="mt-2"><strong>Rebuild Cost</strong></label> <input type="text" class="form-control col-sm-4 offset-sm-4 form-control-sm" id="rebuild" name="rebuild" placeholder="Property Rebuild Cost" value="{{ old('rebuild') }}" required>
            
                    <label for="start-date" class="mt-2"><strong>Renewal Date</strong></label><input type="text" id="start-date" class="form-control col-sm-4 offset-sm-4 form-control-sm" name="startdate" placeholder="Your Renewal Date" value="{{ old('startdate') }}" required>

                    <label for="premium" class="mt-2"><strong>Current Premium</strong></label><input type="text" id="premium" class="form-control col-sm-4 offset-sm-4 form-control-sm mb-2" name="currentpremium" placeholder="Your Current Premium" value="{{ old('currentpremium') }}">

                    <label for="query"><strong>Upload</strong> </label>
                    <small id="uploadHelp" class="form-text text-muted mb-3">Here you can upload PDF documents that you wish to attach.</small>
                    <small id="uploadHelptwo" class="form-text text-muted mb-3">Max File Size: 5MB</small>
                    <input type="file" id="file" name="file[]" multiple> 
                </div>
                <br>
                @csrf
                <button type="reset" class="btn btn-danger" value="reset">Clear</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
        </div>
    </div>
    <br><br>
</section>
@endsection