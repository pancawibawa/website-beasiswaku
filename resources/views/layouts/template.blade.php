<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Beasiswaku</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('template/responsive.css') }}" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="">
                        <span>
                            Beasiswaku
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">
                                {{-- <li class="nav-item active">
                                    <a class="nav-link" href="">Home <span
                                            class="sr-only">(current)</span></a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"> Masuk</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <main>
            @yield('konten')
        </main>



        <!-- footer section -->
        <footer class="container-fluid footer_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-9 mx-auto">
                        <p>
                            &copy; 2024 Untuk kebutuhan serkom Panca Wibawa 20102113
                            <a href="https://html.design/"></a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer section -->

        <script src="{{ asset('template/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap.js') }}"></script>
        
    </div>

</body>

</html>
