<!DOCTYPE html>
<html>

<head>
    <meta name="google-site-verification" content="qZOO-tbV4SeOl-ULyXre4D2VBsdfCUeC9uYwHPfqXSE" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <title>{{ config('app.name', 'Achados e Perdidos') }}</title>
    <link rel="icon" href="ia3.png" type="image/png">
    <link rel="shortcut icon" href="favicon.ico" type="images/x-icon">

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>
    <script src="contactform/contactform.js"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>

        <!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body>
    <nav class="main-nav-outer" id="test">
        <!--main-nav-start-->
        <div class="container">
            <ul class="main-nav">
                <li><a href="../#home">Home</a></li>
                <li><a href="../#perdidos">Perdidos</a></li>
                <!--li class="small-logo"><a href="{{ url('/login') }}"><img src="images/ia3-small-logo.png" alt=""></a></li-->
                <li><a href="../#achados">Achados</a></li>
                <li><a href="../#quemSomos">Quem Somos</a></li>
                <li><a href="../#team">Time</a></li>
                <li><a href="../#contact">Contato</a></li>
                @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
            </ul>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer">
        <div class="container">
            <div class="footer-logo"><a href="#"><img src="images/ia3-footer-logo.png" alt=""></a></div>
            <span class="copyright">&copy; IFound. Todos Direitos Reservados</span>
            <div class="credits">
                <a href="https://inteligencia3.com.br/">IFound</a>
            </div>
        </div>
    </footer>


    <script type="text/javascript">
        $(document).ready(function (e) {
            $('#test').scrollToFixed();
            $('.res-nav_click').click(function () {
                $('.main-nav').slideToggle();
                return false

            });

        });
    </script>

    <script>
        wow = new WOW({
            animateClass: 'animated',
            offset: 100
        });
        wow.init();
    </script>


    <script type="text/javascript">
        $(window).load(function () {

            $('.main-nav li a, .servicelink').bind('click', function (event) {
                var $anchor = $(this);

                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top - 102
                }, 1500, 'easeInOutExpo');
    /*
     if you don't want to use the easing effects:
     $('html, body').stop().animate({
     scrollTop: $($anchor.attr('href')).offset().top
     }, 1000);
     */
     if ($(window).width() < 768) {
        $('.main-nav').hide();
    }
    event.preventDefault();
});
        })
    </script>

    <script type="text/javascript">
        $(window).load(function () {


            var $container = $('.portfolioContainer'),
            $body = $('body'),
            colW = 375,
            columns = null;


            $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
        columnWidth: colW
    }
});

            $(window).smartresize(function () {
    // check if columns has changed
    var currentColumns = Math.floor(($body.width() - 30) / colW);
    if (currentColumns !== columns) {
        // set new column count
        columns = currentColumns;
        // apply width to container manually, then trigger relayout
        $container.width(columns * colW)
        .isotope('reLayout');
    }

}).smartresize(); // trigger resize to set container width
            $('.portfolioFilter a').click(function () {
                $('.portfolioFilter .current').removeClass('current');
                $(this).addClass('current');

                var selector = $(this).attr('data-filter');
                $container.isotope({

                    filter: selector,
                });
                return false;
            });

        });
    </script>
</body>
</html>