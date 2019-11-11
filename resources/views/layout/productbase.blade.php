@extends('layout.layout')
@section('content')
<section>
    <div class="container">
        <br><br><br>
        <div class="card text-center m-5 come-in">
            @yield('header')
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-summary-tab" data-toggle="tab" href="#nav-summary" role="tab" aria-controls="nav-summary" aria-selected="true">Summary</a>
                    <a class="nav-item nav-link" id="nav-wordings-tab" data-toggle="tab" href="#nav-wordings" role="tab" aria-controls="nav-wordings" aria-selected="false">Policy Wordings</a>
                    <a class="nav-item nav-link" id="nav-conditions-tab" data-toggle="tab" href="#nav-conditions" role="tab" aria-controls="nav-conditions" aria-selected="false">Terms and Conditions</a>
                </div>
            </nav>
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-summary" role="tabpanel" aria-labelledby="nav-summary-tab">
                @yield('summary')
                </div>
                <div class="tab-pane fade" id="nav-wordings" role="tabpanel" aria-labelledby="nav-wordings-tab">
                @yield('documents')
                </div>
                <div class="tab-pane fade" id="nav-conditions" role="tabpanel" aria-labelledby="nav-conditions-tab">
                @yield('terms')
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br>
</section>

@endsection