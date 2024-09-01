<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/css/animate.min.css')  }}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-liberty-market.css')}}assets/css/">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
    <div class="container-fluid">
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-4 col-6 text-right">
            <div class="container">
                <div class="button-group">
                    <a href="{{ route('login') }}" class="custom-btn btn-Login">Login</a>
                    <a href="{{ route('register') }}" class="custom-btn btn-Register">Register</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <header class="header">
        <div class="container">
            <div class="row v-center">
                <div class="header-item item-center">
                    <nav class="menu">
                        <ul class="menu-main">
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Electronics-Spare Parts<i class="fa fa-right"></i></a>
                                 <div class="sub-menu mega-menu mega-menu-column-4">
                                  <div class="list-item">
                                        <h4 class="title">Devices</h4>
                                        <ul>
                                             <li><a href="{{ route('smartphone') }}">Smartphone & mobile</a></li>
                                             <li><a href="{{ route('tablette') }}">Tablette</a></li>
                                             <li><a href="{{ route('pcportable') }}">Pc Portable</a></li>
                                             <li><a href="{{ route('pcbureau') }}">Pc de bureau</a></li>
                                             <li><a href="{{ route('smartwatch') }}">Smartwatch</a></li>
                                             <li><a href="{{ route('ecran') }}">Ecran</a></li>

                                        </ul>
                                  </div>
                                  <div class="list-item">
                                    <h4 class="title">Accessories ordinateur</h4>
                                    <ul>
                                        <li><a href="{{ route('hautparleur') }}">Haut Parleur</a></li>
                                        <li><a href="{{ route('ecouteur') }}">Écouteur & Micro Casque</a></li>
                                        <li><a href="{{ route('clavier') }}">Clavier</a></li>
                                    </ul>
                                </div>

                                <div class="list-item">
                                    <h4 class="title">Composants mobile</h4>
                                    <ul>
                                        <li><a href="{{ route('lcd') }}">LCD Displays & Touch screens</a></li>
                                        <li><a href="{{ route('connectors') }}">Connectors</a></li>
                                        <li><a href="{{ route('batterie') }}">Batterie</a></li>
                                        <li><a href="{{ route('covers') }}">Covers & Housings</a></li>
                                        <li><a href="{{ route('flexcables') }}">Flex Cables</a></li>
                                        <li><a href="{{ route('simslots') }}">SIM/SD slots</a></li>
                                        <li><a href="{{ route('cartemere') }}">carte mere</a></li>
                                    </ul>
                                </div>

                                <div class="list-item">
                                    <h4 class="title">Composants pc</h4>
                                    <ul>
                                        <li><a href="{{ route('disquedur') }}">Disque dur interne</a></li>
                                        <li><a href="{{ route('chargeurpc') }}">Chargeur PC Portable</a></li>
                                        <li><a href="{{ route('batteriepc') }}">Batterie</a></li>
                                        <li><a href="{{ route('processeur') }}">Processeur</a></li>
                                        <li><a href="{{ route('memoireram') }}">Mémoire Ram</a></li>
                                        <li><a href="{{ route('ventilateur') }}">Ventilateur</a></li>
                                        <li><a href="{{ route('bloc') }}">Bloc et Cables d'alimentation</a></li>
                                        <li><a href="{{ route('cartemerepc') }}">Carte Mère</a></li>
                                        <li><a href="{{ route('cartegraphique') }}">Carte Graphique</a></li>
                                        <li><a href="{{ route('cartenetwork') }}">Carte Réseau</a></li>
                                    </ul>
                                </div>

                                <div class="list-item">
                                    <h4 class="title">Accessories phone</h4>
                                    <ul>
                                        <li><a href="{{ route('adapters') }}">Adapters & Chargers</a></li>
                                        <li><a href="{{ route('powerbanks') }}">Powerbanks</a></li>
                                        <li><a href="{{ route('carchargers') }}">Car chargers</a></li>
                                        <li><a href="{{ route('cablemanagement') }}">Cable Management</a></li>
                                        <li><a href="{{ route('cases') }}">Cases & Covers</a></li>
                                        <li><a href="{{ route('screenprotectors') }}">Screen protectors</a></li>
                                    </ul>
                                </div>

                             </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Household-Appliance-Spare Parts<i class="fa fa-angle-down"></i></a>
                                    <div class="sub-menu single-column-menu">
                                        <ul>
                                            <li><a href="{{ route('washingmachine') }}">Washing machine</a></li>
                                            <li><a href="{{ route('mixer') }}">mixer </a></li>
                                            <li><a href="{{ route('dishwasher') }}">Dishwasher</a></li>
                                            <li><a href="{{ route('refrigerator') }}">Refrigerator</a></li>
                                            <li><a href="{{ route('oven') }}">Oven</a></li>
                                            <li><a href="{{ route('coffee') }}">Coffee maker</a></li>
                                            <li><a href="{{ route('waterheater') }}">Water Heater</a></li>
                                            <li><a href="{{ route('air') }}">air conditioner</a></li>



                                        </ul>
                                    </div>

                            </li>

                        </ul>


                </div>
                <!-- menu end here -->
                <div class="header-item item-right">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="far fa-heart"></i></a>
                    <a href="#"><i class="fas fa-shopping-cart"></i></a>
                    <!-- mobile menu trigger -->
                    <div class="mobile-menu-trigger">
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
</div>
<hr>

    </header>




    @yield('content')








    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">Get monthly marketing tips and exclusive discounts straight to your inbox.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Electronics</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{ route('smartphone') }}"><i class="fa fa-angle-right mr-2"></i>Smartphone&mobile</a>
                            <a class="text-secondary mb-2" href="{{ route('tablette') }}"><i class="fa fa-angle-right mr-2"></i>Tablette</a>
                            <a class="text-secondary mb-2" href="{{ route('pcportable') }}"><i class="fa fa-angle-right mr-2"></i>Pc Portable</a>
                            <a class="text-secondary mb-2" href="{{ route('pcbureau') }}"><i class="fa fa-angle-right mr-2"></i>Pc Bureau</a>
                            <a class="text-secondary mb-2" href="{{ route('smartwatch') }}"><i class="fa fa-angle-right mr-2"></i>Smartwatch</a>
                            <a class="text-secondary mb-2" href="{{ route('ecran') }}"><i class="fa fa-angle-right mr-2"></i>Ecran</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">HouseHold-Applaince</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="{{ route('washingmachine') }}"><i class="fa fa-angle-right mr-2"></i>Washing machine</a>
                            <a class="text-secondary mb-2" href="{{ route('dishwasher') }}"><i class="fa fa-angle-right mr-2"></i>Dishwashers</a>
                            <a class="text-secondary mb-2" href="{{ route('mixer') }}"><i class="fa fa-angle-right mr-2"></i>Mixer</a>
                            <a class="text-secondary mb-2" href="{{ route('oven') }}"><i class="fa fa-angle-right mr-2"></i>Oven</a>
                            <a class="text-secondary mb-2" href="{{ route('coffee') }}"><i class="fa fa-angle-right mr-2"></i>Coffee maker</a>
                            <a class="text-secondary mb-2" href="{{ route('waterheater') }}"><i class="fa fa-angle-right mr-2"></i>Waterheater</a>
                            <a class="text-secondary mb-2" href="{{ route('air') }}"><i class="fa fa-angle-right mr-2"></i>Air Conditionair</a>
                            <a class="text-secondary mb-2" href="{{ route('refrigerator') }}"><i class="fa fa-angle-right mr-2"></i>Refrigerator</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p></p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/easing.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/js/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>




</body>

</html>



















