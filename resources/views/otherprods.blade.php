@extends('layout.productbase')
@section('header')
<img src="images/umbrellas.jpg" class="card-img-top mb-3" style="width:100%; height:60%; opacity: 0.4;" alt="Commerical">
<div class="card-img-overlay d-flex flex-column justify-content-end">
    <h1>Other Products</h1>
</div>
@endsection
       
@section('summary')
    <p class="lead">Headline about the policy and what it offers</p>
    <p class="m-2"> Some more text about the policy and things</p>
    <ul class="list-group m-5 text-center">
        <li class="mb-3"><strong>Feature One</strong> <br> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
        <li class="mb-3"><strong>Feature Two</strong> <br> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
        <li class="mb-3"><strong>Feature Three</strong> <br> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
        <li class="mb-3"><strong>Feature Four</strong> <br> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
    </ul>
    <a href="/quote">
        <button type="button" class="btn btn-success btn-lg mb-3">Get a Quote</button>
    </a>
@endsection

@section('documents')
    <p class="lead">Headline about the policy documentss</p>
    <p> Some more text about the policy documents</p>
    <ul class="list-group m-5 text-center">
        <li class="mb-3"><strong>Policy Documents</strong> <br> Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio Cras justo odio</li>
        <li class="mb-3 list-group-item"><i class="fas fa-file-alt"></i> Link to document one - For policies taken out from.....</li>
        <li class="mb-3 list-group-item"><i class="fas fa-file-alt"></i> Link to document two - For policies taken out from.....</li>
        <li class="mb-3 list-group-item"><i class="fas fa-file-alt"></i> Link to document three - For policies taken out from.....</li>
    </ul>
@endsection

@section('terms')
    <p class="lead">Terms and Conditions</p>
    <p> Lots of interesting info about terms and conditions</p>
    <p> Lots more interesting info about terms and conditions</p>
@endsection