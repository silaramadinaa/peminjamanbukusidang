<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Borrowing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">Book<span>Borrowing</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('books') }}" class="nav-link">Books</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/w1.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span>
                        <a href="{{ route('about') }}">About <i class="ion-ios-arrow-forward"></i></a>
                        <a href="{{ route('services') }}">Services <i class="ion-ios-arrow-forward"></i></a>
                        <a href="{{ route('books') }}">Books <i class="ion-ios-arrow-forward"></i></a>
                        <a href="{{ route('contact') }}">Contact <i class="ion-ios-arrow-forward"></i></a></span>
                    </p>
                    <h1 class="mb-3 bread">Choose Your Books</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/fiksi1.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Pulang</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Tere Liye</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                                    href="{{ route('pulang') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/fiksi3.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Perahu Kertas</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Dewi Lestari</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                                    href="{{ route('perahu') }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/fiksi4.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Koala Kumal</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Raditya Dika</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                                    href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/roman1.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Dilan</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Pidi Baiq</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                                    href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/roman4.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Ayat Ayat Cinta</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Habiburrahman El Shirazy</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                                    href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/roman5.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Teluk Alaska</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Eka Aryani</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a
                                    href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/komik3.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Dragon Ball</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Akira Toriyama</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/komik4.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Godam Gundala</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Harya Suraminata</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/komik5.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Hulk</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Dr.Bruce Banner</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/inspi1.png);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Laskar Pelangi</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Andrea Hirata</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/inspi3.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Mendayung Impian</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Reyhan M Abdurrohman</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/inspi5.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Cinta Sujudku</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Diana Febi</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/horror1.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Danur</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Risa Saraswati</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/horror2.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Aku Tahu Kapan Kamu Mati</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Aviv Elham</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end"
                            style="background-image: url(assets/images/horror5.jpg);">
                        </div>
                        <div class="text">
                            <h2 class="mb-0"><a href="car-single.html">Kisah Tanah Jawa</a></h2>
                            <div class="d-flex mb-3">
                                <span class="cat">Bonaventura D Genta</span>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a>
                                <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2"><a href="#" class="logo">Book<span>Borrowing</span></a>
                        </h2>
                        <p>Salah satu peminjaman buku di indonesia yang sangat banyak menyediakan buku dan terdapat
                            berbagai buku dengan karakter yang berbeda.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Information</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('home') }}" class="py-2 d-block">Home</a></li>
                            <li><a href="{{ route('books') }}" class="py-2 d-block">Books</a></li>
                            <li><a href="{{ route('about') }}" class="py-2 d-block">About</a></li>
                            <li><a href="{{ route('contact') }}" class="py-2 d-block">Contact</a></li>
                            <li><a href="{{ route('services') }}" class="py-2 d-block">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Customer Support</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">FAQ</a></li>
                            <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                            <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Bandung,
                                        Majapahit Street, Gasibu Field, West Java</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62
                                            123 456 789</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">infoperpus@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        All rights reserved | This template is made with <i class="icon-heart color-danger"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('assets/js/google-map.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
