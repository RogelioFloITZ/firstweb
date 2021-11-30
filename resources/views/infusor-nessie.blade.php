<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portafolio - Infusor Nessie</title>
    <link rel="icon" href="img/fav.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
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
                <li class="box-label">Menú</li>

                <li><a href="{{route('index')}}">Inicio</a></li>
                <li><a href="{{route('about')}}">Sobre mi</a></li>
                <li><a href="{{route('services')}}">Curriculum vitae</a></li>
                <li><a href="{{route('portfolio')}}">Portafolio</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="{{route('contact')}}">Contactame</a></li>

                <li class="box-label">Redes</li>

                <li class="box-social"><a href="https://www.facebook.com/profile.php?id=100070430696456"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="https://www.instagram.com/eniters.art/"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="https://vm.tiktok.com/ZM8saougR/"><i class="material-icons" style="color:white;">tiktok</i></a></li>
            </ul>
        </nav>
        <!-- end nav -->
    </div>
    
    <!-- top-bar -->
    <div class="top-bar">
        <h1>Infusor Nessie</h1>
        <p><a href="{{route('index')}}">Inicio</a> / <a href="{{route('portfolio')}}">portafolio</a> / Infusor Nessie</p>
    </div>
    <!-- end top-bar -->
    
    <!-- main-container -->
    <div class="container main-container" style="margin-left: 150px;">
        <div class="col-md-12" style="width: 1490px;">
            <img src="img/portfolio/proceso/1.png" alt="" width="350" height="350" />
            <img src="img/portfolio/proceso/2.png" alt="" width="350" height="350" />
            <img src="img/portfolio/proceso/3.png" alt="" width="350" height="350" />
            <img src="img/portfolio/proceso/4.png" alt="" width="350" height="350" />
            <img src="img/portfolio/proceso/5.png" alt="" width="350" height="350" />
            <img src="img/portfolio/proceso/6.png" alt="" width="350" height="350" />
            <img src="img/portfolio/proceso/7.png" alt="" width="350" height="350" />
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <h3 class="text-uppercase">Infusor Nessie</h3>
            <h5>Creación No. 1</h5>
            <div class="h-30"></div>
        </div>

        <div class="col-md-12">
            <p align="justify">👏🏻 [INFUSORES FÁCIL DE USAR]: simplemente llene el infusor con su té de hojas favorito y cuélguelo en su taza para disfrutar de una bebida perfectamente preparada; Estos divertidos animales se posan en el borde de su taza.</p>
            &nbsp;
            <p align="justify">🧼[LIMPIEZA SIN PROBLEMAS]: Después de usar, deseche las hojas de té sueltas y enjuague con agua caliente. Los infusores de té de silicona también son aptos para lavavajillas y microondas.</p>
            &nbsp;
            <p align="justify">♻ [Eco-Friendly]: La rutina de tirar las bolsitas de té normales aporta toneladas de desechos a los vertederos y no es sostenible para nuestro planeta. ¡Los infusores de té de silicona reutilizables son la alternativa ideal y ecológica! Puedes beber la misma cantidad de té sin desperdicio.</p>
        </div>

        {{-- <div class="col-md-3">
            <ul class="cat-ul">
                <li><i class="ion-ios-circle-filled"></i> Design</li>
                <li><i class="ion-ios-circle-filled"></i> consectetur adipiscing</li>
                <li><i class="ion-ios-circle-filled"></i> et gubernationis</li>
                <li><i class="ion-ios-circle-filled"></i> Aliter enim nosmet</li>
            </ul>
            <div class="h-10"></div>
            <h4>Redes</h4>
            <ul class="social-ul">
                <li class="box-social"><a href="https://www.facebook.com/profile.php?id=100070430696456"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="https://www.instagram.com/eniters.art/"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="https://vm.tiktok.com/ZM8saougR/"><i class="material-icons" style="color:black;">tiktok</i></a></li>
            </ul>
        </div> --}}
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