<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curriculum vitae</title>
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
        <!-- box header -->
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
        <!-- end box header -->

        <!-- nav -->
        <nav>
            <ul class="box-primary-nav">
                <li class="box-label">Menú</li>

                <li><a href="{{route('index')}}">Inicio</a></li>
                <li><a href="{{route('about')}}">Sobre mi</a></li>
                <li><a href="{{route('services')}}">Curriculum vitae</a> <i class="ion-ios-circle-filled color"></i></li>
                <li><a href="{{route('portfolio')}}">Portafolio</a></li>
                <li><a href="{{route('contact')}}">Contactame</a></li>

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
        <h1>curriculum vitae</h1>
        <p><a href="#">Inicio</a> / Curriculum vitae</p>
    </div>
    <!-- end top bar -->
    <div class="container main-container">
        <div class="clearfix">

            <!-- formacion-->
            <div class="col-md-5 service-box">
                <i class="ion-ios-book size-50"></i>
                <h3>Formación Académica</h3>
                <div class="h-10"></div>
                <p>Ingeniera en diseño industrial (2018-Presente)<br>
                    Preparatoria: Colegio del Centro Zacatecas, Zac.<br>
                    Bachillerato: Físico Matemático </p>
            </div>
            <!-- end service-box -->
            <!-- habilidades -->
            <div class="col-md-4 service-box">
                <i class="ion-stats-bars size-50"></i>
                
                <h3>Habilidades</h3>
                <div class="h-10"></div>
                <p>Video <span style="position: absolute; left: 170px;"><b> 07/10 </b></span><br>
                Iniciativa <span style="position: absolute; left: 170px;"><b> 10/10 </b></span><br>   
                Fotografía <span style="position: absolute; left: 170px;"><b> 08/10 </b></span><br>
                Creatividad <span style="position: absolute; left: 170px;"><b> 09/10 </b></span><br>
                Diseño gráfico <span style="position: absolute; left: 170px;"><b> 08/10 </b></span><br>  
                Dibujo conceptual <span style="position: absolute; left: 170px;"><b> 09/10 </b></span><br>
                Trabajo en equipo <span style="position: absolute; left: 170px;"><b> 07/10 </b> </p></span>   
            </div>
            <!-- end service-box -->

            <!-- software -->
            <div class="col-md-2 service-box">
                <i class="ion-android-laptop size-50"></i>
                <h3>Software</h3>
                <div class="h-10"></div>
                <p><b>• </b>Photoshop CS6<br>
                    <b>• </b>Ilustrador<br>
                    <b>• </b>Rhinoceros 6<br>
                    <b>• </b>Solidworks 2019<br>
                    <b>• </b>Suit Microsoft 2010<br>
                    <b>• </b>Filmora X<br>
                    <b>• </b>Paint to Sai<br>
                </p>
            </div>
            <!-- end service-box -->

            <!-- experiencia -->
            <div class="col-md-5  service-box">
                <i class="ion-android-folder size-50"></i>
                <h3>Experiencia</h3>
                <div class="h-10"></div>
                <p><b>• </b> Establecimiento Venta y creación artículos de madera</b><br>
                    <h5>Ayudante</h5>
                    <b>• </b> Cadena comercial reconocida</b><br>
                    <h5>Servicio al cliente</h5>
                </p>
            </div>
            <!-- end service-box -->

            <!-- extraescolar -->
            <div class="col-md-6  service-box">
                <i class="ion-heart size-50"></i>
                <h3>Extraescolar</h3>
                <div class="h-10"></div>
                <p>
                    
                    <b>• </b>Certificado en <em>manejo de impresoras 3D.</em><br>
                    <b>• </b>Certificado en <em>curso deestrategias de naming.</em><br>
                    <b>• </b>Certificado en <em>curso de creación de identidad de marca.</em><br>
                    <b>• </b>2 Primeros lugares en <em>concurso de carteles</em> en Morelos, Zac.<br>
                    <b>• </b>Certificado en <em>curso de mindfullnes y bienestar para empresas.</em><br>
                </p>
            </div>
            <!-- end service-box -->

            <!-- idiomas -->
            <div class="col-md-2  service-box">
                <i class="ion-earth size-50"></i>
                <h3>Idiomas</h3>
                <div class="h-10"></div>
                <p>
                    <b>• </b>Inglés <b> 80% </b><br>
                    <b>• </b>Español <b> Nativo </b><br>
                </p>
            </div>
            <!-- end service-box -->

        </div>
    </div>

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