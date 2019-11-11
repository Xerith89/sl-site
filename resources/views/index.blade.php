@extends('layout.layout')
@section('content')
<div style="position:relative;">
    <nav class="jumbo">
        <div class="jumbotron jumbotron-fluid text-center">
            <h2 class="mt-3 mb-3 ml16">Stephen Lower <br> Insurance Services</h2>
            <br>
            <h5 class="mt-3 mb-5 ml3">See What We Can Do For You</h5>
            <br>
            <a href="/broker"><button type="button" class="btn btn-lg btn-info hvr-bob">Broker/Intermediary</button></a>
            <a href="/direct"><button type="button" class="btn btn-lg btn-success ml-5 hvr-bob">Policy Holders</button></a>
            <br><br><br>
        </div>
    </nav>
</div>
<section>
    <div class="container ">
        <div class="row ">
            <div class="row ">
                <div class="pl-3 come-in overlap">
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%; height:95%;">
                        <div class="card-body ">
                            <a href="/landlord"><h3 class="card-title link-hover text-danger">Landlords</h3></a>
                            <a href="/landlord"><img src="images/to-let.jpg " class="card-img-top mb-3 img-fluid " alt="To Let "></a>

                            <p class="card-text ">Our Residential Let policy is designed for landlords everywhere.</p>
                            <ul class="list-group ml-2 ">
                                <li><i class="fas fa-dot-circle fa-xs"></i> £100k Legal Expenses insurance at no extra cost</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> Malicious Damage and Theft by tenants cover included</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> Full Accidental Damage protection provided</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/landlord"> <button type="button" class="btn btn-info mt-3">More Details</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%;height:95%;">
                        <div class="card-body">
                            <a href="/commercial"><h3 class="card-title link-hover text-primary">Commercial Premises</h3></a>
                            <a href="/commercial"><img src="images/commercial.jfif " class="card-img-top mb-3 img-fluid pb-2" alt="Commerical"></a>
                            <p class="card-text ">Shops or offices, warehouses or industrial units, our Property Owners policy is designed to meet your needs.</p>
                            <ul class="list-group ml-2 ">
                                <li><i class="fas fa-dot-circle fa-xs"></i> £5m property owner's liability cover</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> Loss of Rent protection</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> Residential areas covered</li><br>
                            </ul>
                            <div class="col text-center mt-5">
                                <a href="/commerical"> <button type="button" class="btn btn-info">More Details</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%;height:95%;">
                        <div class="card-body ">
                        <a href="/flats"><h3 class="card-title link-hover text-success">Blocks of Flats</h3></a>
                        <a href="/flats"><img src="images/flats.jpg" class="card-img-top mb-3 img-fluid " alt="Blocks of Flats "></a>

                            <p class="card-text ">Specialising in Flats insurance for nearly 30 years, our market-leading policy continues to sets the standard.</p>
                            <ul class="list-group ml-2 ">
                                <li><i class="fas fa-dot-circle fa-xs"></i> £10m property owner's liability cover</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> £100k Directors' and Officers' protection free-of-charge for qualifying policy holders</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> £10m employers’ liability cover available at no additional cost</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/flats"> <button type="button" class="btn btn-info">More Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="row">
                <div class="pl-3 come-in overlap-less">
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%; height:95%;">
                        <div class="card-body ">
                            <a href="/engineering"><h3 class="card-title link-hover text-warning">Lift Engineering</h3></a>
                            <a href="/engineering"><img src="images/liftimage.jpeg" class="card-img-top mb-3 img-fluid " alt="Engineering"></a>
                            <p class="card-text ">We provide cover for engineering at properties.</p>
                            <ul class="list-group ml-2 ">
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/engineering"> <button type="button" class="btn btn-info">More Details</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%; height:95%;">
                        <div class="card-body ">
                        <a href="/dando"><h3 class="card-title link-hover text-dark">Directors & Officers</h3></a>
                        <a href="/dando"><img src="images/directors.jpeg" class="card-img-top mb-3 img-fluid " alt="Directors & Officers"></a>

                            <p class="card-text ">We provide cover for directors and officers.</p>
                            <ul class="list-group ml-2 ">
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/dando"> <button type="button" class="btn btn-info mt-3">More Details</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%; height:95%;">
                        <div class="card-body ">
                        <a href="/llcontents"><h3 class="card-title link-hover text-info">Landlord's Contents</h3></a>
                        <a href="/llcontents"><img src="images/llcontents.jpeg" class="card-img-top mb-3 img-fluid pb-1" alt="Landlord's Contents"></a>

                            <p class="card-text ">We provide other products that can cover you for things.</p>
                            <ul class="list-group ml-2">
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/llcontents"> <button type="button" class="btn btn-info">More Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="row">
                <div class="pl-3 come-in overlap-less">
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%; height:95%;">
                        <div class="card-body ">
                            <a href="/terrorism"><h3 class="card-title link-hover" style="color: #ed7321">Terrorism Cover</h3></a>
                            <a href="/terrorism"><img src="images/terrorism.jpg" class="card-img-top mb-3 img-fluid " alt="Terrorism Cover"></a>
                            <p class="card-text ">We provide cover for terrorism at properties.</p>
                            <ul class="list-group ml-2 ">
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/terrorism"> <button type="button" class="btn btn-info">More Details</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%; height:95%;">
                        <div class="card-body ">
                        <a href="/portfolios"><h3 class="card-title link-hover" style="color: #0d1d54;">Property Portfolios</h3></a>
                        <a href="/portfolios"><img src="images/portfolio.jpeg" class="card-img-top mb-3 img-fluid " alt="Property Portfolios"></a>

                            <p class="card-text">We provide cover for portfolio properties.</p>
                            <ul class="list-group ml-2 ">
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/portfolios"> <button type="button" class="btn btn-info">More Details</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-5 border hvr-grow product-card" style="width:30%; height:95%;">
                        <div class="card-body ">
                        <a href="/otherprods"><h3 class="card-title link-hover text-secondary">Other Products</h3></a>
                        <a href="/otherprods"><img src="images/umbrellas.jpg" class="card-img-top mb-3 img-fluid pb-1" alt="Other Products"></a>

                            <p class="card-text ">We provide other products that can cover you for things.</p>
                            <ul class="list-group ml-2">
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                                <li><i class="fas fa-dot-circle fa-xs"></i> <strong>Benefit</strong> We provide this benefit with our policy</li><br>
                            </ul>
                            <div class="col text-center ">
                                <a href="/otherprods"> <button type="button" class="btn btn-info">More Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection