@extends('layout.layout')
@section('content')
    <section>
        <div class="container">
            <br><br><br>
            <div class="card text-center m-3 come-in">
                <img src="images/contact.jpg" class="card-img-top mb-3" style="width:100%; height:50%; opacity: 0.4;" alt="Contact">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <h1>Contact</h1>
                </div>
                <div class="card-body">
                    <h3><i class="fas fa-address-book"></i> Get in Touch</h3>
                    <p class="card-text mt-3">You can contact us using phone, post and fax or simply fill in our contact form to contact a specific department.</p>
                    <br>
                    <div class="flex-row">
                        <div class="flex-column">
                            <div class="card-group">
                                <div class="card mr-3 d-flex">
                                    <div class="m-3">
                                        @include('layout.messages')
                                    </div>
                                    <h3 class="mt-3"><i class="fas fa-pencil-alt"></i><strong> Contact Form</strong></h3>
                                    <small>(Fields with <i class="fas fa-asterisk fa-xs"></i> are required)</small>
                                    <div class="card-body">
                                        <form method="POST" enctype="multipart/form-data" action={{action('ContactController@store')}}>
                                            <div class="form-group flex-column">
                                                <label for="InputName"><strong>Name</strong><small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="text" class="form-control mb-3 col-sm-6 offset-sm-3 text-center" id="InputName" placeholder="Your Name" value="{{ old('Name') }}" required name="Name">
                                                <label for="InputEmail"><strong>Email address</strong><small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <input type="email" class="form-control col-sm-6 offset-sm-3 text-center" id="InputEmail" aria-describedby="emailHelp" value="{{ old('Email') }}" placeholder="Your Email" name="Email" required>
                                                <small id="emailHelp" class="form-text text-muted mb-3">We'll never share your email with anyone else.</small>
                                                <label for="InputCompany"><strong>Company</strong><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="If you are acting on behalf of or as the employee of an organisation, please let us know"></i> </label>
                                                <input type="text" class="form-control mb-3 col-sm-6 offset-sm-3 text-center" id="InputCompany" name="Company" value="{{ old('Company') }}" placeholder="Your Company (Optional)">
                                                <label for="InputCompany"><strong>SLIS Reference Number</strong><i class="fas fa-exclamation-triangle fa-xs" data-toggle="tooltip" data-placement="top" title="Enter your policy, claim or any other reference numbers to help us find your details"></i></label>
                                                <input type="text" class="form-control mb-3 col-sm-6 offset-sm-3 text-center" id="refnumber" name="Reference" value="{{ old('Reference') }}" placeholder="Your SLIS Reference (If Applicable)">
                                                <label for="InputDep"><strong>Department Required</strong></label>
                                                <select id="dep" class="form-control form-control-sm col-sm-6 offset-sm-3 text-center mb-3" name='DepartmentRequired' value="{{ old('DepartmentRequired') }}">
                                                    <option value="general">General</option>
                                                    <option value="underwriting">Underwriting</option>
                                                    <option value="claims">Claims</option>
                                                    <option value="accounts">Accounts</option>
                                                    <option value="quotes">Quotes</option>
                                                    <option value="renewals">Renewals</option>
                                                </select>
                                                <label for="query"><strong>Your Query</strong> <small><i class="fas fa-asterisk fa-xs"></i></small></label>
                                                <textarea class="form-control mb-3 form-control col-sm-8 offset-sm-2 text-center" rows="5" id="query" placeholder="Enter Query" name="QueryBody" value="{{ old('QueryBody') }}" required></textarea>
                                                <label for="query"><strong>Upload</strong> </label>
                                                <small id="uploadHelp" class="form-text text-muted mb-3">Here you can upload PDF documents that you wish to attach.</small>
                                                <small id="uploadHelptwo" class="form-text text-muted mb-3">Max File Size: 5MB</small>
                                                <div class="upload">
                                                    <input type="file" id="file" name="Filename[]" multiple> 
                                                </div>
                                                <br>
                                                @csrf
                                                <br>
                                                <button type="reset" class="btn btn-danger ml-3" value="Reset">Clear Form</button>
                                                <button type="submit" class="btn btn-primary ml-3" value="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-row">
                                <div class="flex-column-xs">
                                    <ul class="list-group  text-center m-5">
                                        <li class="mb-3"><i class="fas fa-phone"></i><strong> Telephone</strong><br>01303 241170</li>
                                        <li class="mb-3"><i class="fas fa-fax"></i><strong> Fax</strong><br>01303 850653</li>
                                        <li class="mb-3"><i class="fas fa-at"></i><strong> Email</strong><br><a href="mailto:info@stephenlower.co.uk">info@stephenlower.co.uk</a></li>
                                        <li class="mb-3"><i class="fas fa-envelope-open-text"></i><strong> Post</strong><br>Stephen Lower Insurance Services Ltd<br> 145 New Dover Road<br> Capel-Le-Ferne<br> Folkestone<br> CT18 7JR</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br><br>
    </section>
@endsection