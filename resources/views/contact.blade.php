<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contacto</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="img/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid">
        <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="{{route('index')}}"><img src="img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menú</span><span class="box-menu-icon"></span>
            </a>
            <!-- box-primary-nav-trigger -->
        </header>
        <!-- end box-header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Contactame</li>

                <li><a href="{{route('index')}}">Inicio</a></li>
                <li><a href="{{route('about')}}">Sobre mi</a></li>
                <li><a href="{{route('services')}}">Curriculum vitae</a></li>
                <li><a href="{{route('portfolio')}}">Portafolio</a></li>
                <li><a href="{{route('contact')}}">Contactame</a> <i class="ion-ios-circle-filled color"></i></li>

                <li class="box-label">Redes</li>

                <li class="box-social"><a href="https://www.facebook.com/profile.php?id=100070430696456"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="https://www.instagram.com/eniters.art/"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="https://vm.tiktok.com/ZM8saougR/"><i class="material-icons" style="color:white;">tiktok</i></a></li>
            </ul>
        </nav>
        <!-- end nav -->

    </div>

    <!-- top bar -->
    <div class="top-bar">
        <h1>contactame</h1>
        <p><a href="#">Inicio</a> / contactame</p>
    </div>
    <!-- end top bar -->

    <!-- main-container -->
    <div class="container main-container">
        <div class="col-md-6" hidden>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="name">
                            <span>your name</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-contact">
                            <input type="text" name="email">
                            <span>your email</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-contact">
                            <input type="text" name="object">
                            <span>object</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="textarea-contact">
                            <textarea name="message"></textarea>
                            <span>message</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="btn btn-box">Send</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <h3 class="text-uppercase">contactame</h3>
            <h5>ESTUDIANTE INGENIERIA EN DISEÑO INDUSTRIAL</h5>
            <div class="h-30"></div>
            <p> Cualquier duda o aclaración puede contactarse conmigo mediante teléfono o correo electrónico. </p>
            <div class="contact-info">
                <p><i class="ion-android-call"></i> 4922881230</p>
                <p><i class="ion-ios-email"></i> virginiatubiotrejo@gmail.com</p>
            </div>
        </div>


    </div>
    <!-- end main-container -->

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <p class="copyright">© Box Portfolio 2016</p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>
    
    <!-- google analytics  -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-76796224-1', 'auto');
        ga('send', 'pageview');
    </script>

</body>

</html>