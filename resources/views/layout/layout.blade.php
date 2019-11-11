<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{ ('Stephen Lower Insurance Services') }}</title>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/styles.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/products.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/about.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sitemap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" content="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" content="text/css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ml-auto navbar-dark navigation">
            <img src="images/logo.png" alt="SLIS Logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                    <a href="/" class="btn btn-lg nav-button">Home</a>
                    </li>
                    <li class="nav-item ">
                    <a class="btn btn-lg nav-button" href="/quote">Get a Quote</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-lg nav-button dropdown-toggle" href="#" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
                            Products
                        </a>
                        <div class="dropdown-menu" id="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #2c536d;">
                            <a class="dropdown-item btn nav-button" href="/landlord">Landlord</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/commercial">Commerical Premises</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/flats">Blocks Of Flats</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/engineering">Lift Engineering</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/dando">Directors and Officers</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/llcontents">Landlord's Contents</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/terrorism">Terrorism Cover</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/portfolios">Property Portfolios</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/otherprods">Other Products</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                    <a  class="btn btn-lg nav-button" href="/about">About Us</a>
                    </li>
                    <li class="nav-item ">
                    <a class="btn btn-lg nav-button" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                    <div class="dropdown">
                        <button class="btn btn-lg nav-button dropdown-toggle" type="button" id="existingDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Existing Customers
                        </button>
                        <div class="dropdown-menu" id="existingMenu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item btn nav-button" href="/claims">Make A Claim</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item btn nav-button" href="/payments">Make A Payment</a>
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <nav class="navbar ml-auto navbar-dark bg-dark ">
            <br><br><br><br>
            <div class="container ">
                <span><img src="images/footer_logo.png" alt="footerlogo"></span>
                <span><a href="/sitemap">Sitemap</a>
                |
                <a href="/contact">Contact Us</a>
                |
                <a href="/privacy">Privacy Policy</a>
                |
                <a href="/careers">Careers</a>
                <a href="https://www.linkedin.com/company/stephen-lower-insurance-services-ltd "><i class="fab fa-linkedin "></i></a>
                </span>
            </div>                  
        <div>
            <small class="ml-5">Registered office: 145 New Dover Road, Capel-Le-Ferne, Folkestone CT18 7JR</small> <br>
            <small class="ml-5">Stephen Lower Insurance Services Limited is authorised and regulated by the Financial Conduct Authority, Financial Services Register number 628613
            Registered in England and Wales No.4930449.</small><br>         
        </div>
        </nav>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js " integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin=" anonymous "></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script> 
    <script type="text/javascript" src="{{ asset('js/index.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/claim.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/effects.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/quote.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/agency.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/direct.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>

</body>
@yield('modal')
</html>