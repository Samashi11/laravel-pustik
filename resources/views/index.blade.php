<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>PUSTIK - Perpustakaan Pesantren PeTIK</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('template') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/templatemo-cyborg-gaming.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/owl.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    @vite(['resources/scss/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('partials.navbar')
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Welcome To PUSTIK</h6>
                                    <h4><em>Perpustakaan</em> Pesantren PeTIK</h4>
                                    <div class="main-button">
                                        <a href="{{ route('books') }}">Browse Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Most Popular Books</em> Right Now</h4>
                                </div>
                                <div class="row">
                                    @foreach ($books as $book)
                                        <div class="col-lg-3 col-sm-6">
                                            <a href="{{ url('detail' . '/' . $book->id) }}">
                                                <div class="item">
                                                    <img src="{{ asset('upload' . '/' . $book->cover) }}"
                                                        alt="">
                                                    <h4>
                                                        {{ $book->title }}<br><span>{{ $book->author }}</span>
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                                @endforeach
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <a href="{{ route('books') }}">Discover Popular</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Most Popular End ***** -->


            </div>
        </div>
    </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                        <br>Design: <a href="https://templatemo.com" target="_blank"
                            title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('template') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('template') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="{{ asset('template') }}/assets/js/isotope.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/owl-carousel.js"></script>
    <script src="{{ asset('template') }}/assets/js/tabs.js"></script>
    <script src="{{ asset('template') }}/assets/js/popup.js"></script>
    <script src="{{ asset('template') }}/assets/js/custom.js"></script>


</body>

</html>
