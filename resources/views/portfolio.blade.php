<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portafolio</title>
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

    <!-- top bar -->
    <div class="top-bar">
        <h1>portafolio</h1>
        <p><a href="{{route('index')}}">Inicio</a> / Portafolio</p>
    </div>
    <!-- end top bar -->

    <!-- main container -->
    <div class="main-container portfolio-inner clearfix">
        <!-- portfolio div -->
        <div class="portfolio-div">
            <div class="portfolio">
                <!-- portfolio_filter -->
                <div class="categories-grid wow fadeInLeft">
                    <nav class="categories text-center">
                        <ul class="portfolio_filter">
                            <li><a href="" class="active" data-filter="*">Todo</a></li>
                            <li><a href="" data-filter=".photography">Infusor Nessie</a></li>
                            <li><a href="" data-filter=".logo">Mandala</a></li>
                            <li><a href="" data-filter=".graphics">Agenda y Personaje</a></li>
                            <li><a href="" data-filter=".ads">Costos</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- portfolio_filter -->

                <!-- portfolio_container -->
                <div class="no-padding portfolio_container clearfix">
                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 photography">
                        <a href="{{route('infusor-nessie')}}" class="portfolio_item">
                            <img src="img/portfolio/izquierda.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Infusor Nessie</span>
                                        <em>Clickeame</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 logo">
                        <a href="{{route('mandala')}}" class="portfolio_item">
                            <img src="img/portfolio/derecha.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mandala</span>
                                        <em>Clickeame</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 graphics">
                        <a href="{{'agenda-personaje'}}" class="portfolio_item">
                            <img src="img/portfolio/centro.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Agenda y Personaje</span>
                                        <em>Clickeame</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 ads">
                        <a class="portfolio_item">
                            <img src="img/portfolio/costos1.jpg" alt="image" class="img-responsive" />
                            {{-- <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div> --}}
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 ads">
                        <a class="portfolio_item">
                            <img src="img/portfolio/costos2.jpg" alt="image" class="img-responsive" />
                            {{-- <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div> --}}
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-12 ads">
                        <a class="portfolio_item">
                            <img src="img/portfolio/costos3.jpg" alt="image" class="img-responsive" />
                            {{-- <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Photorealistic smartwatch</span>
                                        <em>Photography</em>
                                    </div>
                                </div>
                            </div> --}}
                        </a>
                    </div>
                    <!-- end single work -->

                    {{-- <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="{{route('single-project')}}" class="portfolio_item">
                            <img src="img/portfolio/06.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="{{route('single-project')}}" class="portfolio_item">
                            <img src="img/portfolio/07.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work -->

                    <!-- single work -->
                    <div class="col-md-4 col-sm-6 graphics ads">
                        <a href="{{route('single-project')}}" class="portfolio_item">
                            <img src="img/portfolio/08.jpg" alt="image" class="img-responsive" />
                            <div class="portfolio_item_hover">
                                <div class="portfolio-border clearfix">
                                    <div class="item_info">
                                        <span>Mobile devices</span>
                                        <em>Graphics / Ads</em>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- end single work --> --}}

                </div>
                <!-- end portfolio_container -->
            </div>
            <!-- portfolio -->
        </div>
        <!-- end portfolio div -->
    </div>
    <!-- end main container -->


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