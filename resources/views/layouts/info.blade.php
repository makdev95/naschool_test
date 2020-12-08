<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">

<head>

    <!--meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--meta tags ends-->

    <title>Naschool- Découverte</title>

    <!--- Links to google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800%7cRoboto+Mono:400,700%7cMerriweather:300%7cAbril+Fatface'
          rel='stylesheet' >
    <!-- Links to fonts ends -->

    <!-- Bootstrap stylesheet -->
    <link href="{{ asset('info/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Popup Images -->
    <link rel="stylesheet" type="text/css" href="{{ asset('info/css/magnific-popup.css') }}">

    <!-- css animation -->
    <link rel="stylesheet" type="text/css" href="{{ asset('info/css/animate.css') }}">

    <!-- custom stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('info/css/main.css') }}">

</head>

<body>


<!-- DOCUMENT WRAPPER STARTS -->
    <main>


        <!-- Start: Preloader section -->
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>
        <!-- End: Preloader section -->


  @include('layouts.nav-info')

  @yield('content')



         <!-- footer section starts -->
        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper clearfix page wow fadeInUp">
                    <div class="col-md-6 footer-left">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="footer-link footer-link-1">
                                    <h4></h4>
                                    <ul>
                                       
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="footer-link footer-link-2">
                                    <h4></h4>
                                    <ul>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 footer-text">
                        <p></p>
                        <span>&copy; 2020 &amp; By <a href="#" target="_blank">SFAR-IT S.A.S</a></span>
                    </div>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </footer>
        <!-- footer section ends -->

    </main>
<!-- DOCUMENT WRAPPER ENDS -->



<!-- SCRIPTS -->

    <!-- jQuery (necessary for all the plugins) -->
    <script src="{{ asset('info/js/jquery-1.11.2.min.js') }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{ asset('info/js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('info/js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('info/js/wow.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="{{ asset('info/js/gmaps.js') }}"></script>
    <script src="{{ asset('info/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('info/js/main.js') }}"></script>

<!-- SCRIPTS ENDS -->
</body>

</html>