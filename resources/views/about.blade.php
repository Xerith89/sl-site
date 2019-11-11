@extends('layout.layout')
@section('content')
<section>
    <div class="container">
        <br><br><br>
        <div class="card text-center m-5 come-in">
            <img src="images/about.jfif" class="card-img-top mb-3" style="width:100%; opacity: 0.4;" alt="About">
            <div class="card-img-overlay d-flex flex-column justify-content-end">
                <h1>About Us</h1>
            </div>
            <div class="card-body mt-3 align-items-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Who We Are</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="think-tab" data-toggle="tab" href="#think" role="tab" aria-controls="think" aria-selected="false">What Our Customers Think</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="meet-tab" data-toggle="tab" href="#meet" role="tab" aria-controls="meet" aria-selected="false">Meet The Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="defaqto-tab" data-toggle="tab" href="#defaqto" role="tab" aria-controls="defaqto" aria-selected="false">Who Are Defaqto ?</a>
                    </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br><br>
                        <h3><strong>Who We Are</strong></h3>
                        <p class="lead m-4">Some standout info about the company</p>
                        <img class="ml-4 rounded" src="images/ms-amlin-logo.png" style="width:40%; height:30%;" alt="Amlin">
                        <p class="m-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <h3><strong>What We Do</strong></h3>
                        <p class="lead m-4 ">Some standout info about the company</p>
                        <img src="images/Landlord_Home_Insurance_5_Standard_RGB.jpg " alt="Defato ">
                        <p class="m-5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="tab-pane fade" id="think" role="tabpanel" aria-labelledby="think-tab"><br><br>
                        <h3><strong>What Our Customers Say</strong></h3>
                        <p class="lead m-4 ">Some punch info about customer experience</p>
                        <p class="m-5 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div class="quote mb-0 "><i class="fa fa-quote-left fa-2x "></i></div>
                        <div id="carouselInterval" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="8000 ">
                                    <blockquote class="blockquote ">
                                        <p class="mb-0 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer ">A Happy Customer</footer>
                                    </blockquote>
                                </div>
                                <div class="carousel-item " data-interval="8000">
                                    <blockquote class="blockquote">
                                        <p class="mb-0 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer ">A Happy Customer</footer>
                                    </blockquote>
                                </div>
                                <div class="carousel-item " data-interval="8000">
                                    <blockquote class="blockquote">
                                        <p class="mb-0 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <footer class="blockquote-footer">A Happy Customer</footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="tab-pane fade" id="meet" role="tabpanel" aria-labelledby="meet-tab">
                <br><br>
                <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="8000 ">
                            <div class="card mx-auto inner-card d-flex">                
                                <div>
                                    <img src="images/test-person.jpg" class="img-thumbnail img-fluid mt-2" alt="staff member">
                                </div>
                                <div>
                                    <div class="card-body">
                                        <h5 class="card-title ">Staff Member 1</h5>
                                        <ul style="padding-left:0px;">
                                            <li><strong>Position :</strong> Company Director</li>
                                            <li><strong>Time With Company :</strong> Many Years</li>
                                            <li><strong>Hobbies & Interests :</strong> Water polo and taxidermy</li>
                                            <li><strong>Motto :</strong> Live fast, die old</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="8000">
                            <div class="card mx-auto inner-card d-flex">
                                <div>
                                    <img src="images/test-person.jpg" class="img-thumbnail img-fluid mt-2" alt="staff member">
                                </div>
                                <div>
                                    <div class="card-body">
                                        <h5 class="card-title ">Staff Member 2</h5>
                                        <ul style="padding-left:0px;">
                                            <li><strong>Position :</strong> Company Director</li>
                                            <li><strong>Time With Company :</strong> Many Years</li>
                                            <li><strong>Hobbies & Interests :</strong> Water polo and taxidermy</li>
                                            <li><strong>Motto :</strong> Live fast, die old</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="8000 ">
                            <div class="card mx-auto inner-card d-flex">
                                <div>
                                    <img src="images/test-person.jpg" class="img-thumbnail img-fluid mt-2" alt="staff member">
                                </div>
                                <div>
                                    <div class="card-body">
                                        <h5 class="card-title">Staff Member 3</h5>
                                        <ul style="padding-left:0px;">
                                            <li><strong>Position :</strong> Company Director</li>
                                            <li><strong>Time With Company :</strong> Many Years</li>
                                            <li><strong>Hobbies & Interests :</strong> Water polo and taxidermy</li>
                                            <li><strong>Motto :</strong> Live fast, die old</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fas fa-undo text-dark mb-5"></i></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fas fa-redo text-dark mb-5"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="defaqto" role="tabpanel" aria-labelledby="defaqto-tab">
                Insert Content Here
                </div>
            </div>
            
            <h3 class="mt-5 "><strong>See What We Can Do For You</strong></h3>
            <a href="/quote">
                <button type="button " class="btn btn-success btn-lg mb-3 mt-3 ">Get a Quote</button>
            </a>
        </div>
        <br><br>
</section>

@endsection