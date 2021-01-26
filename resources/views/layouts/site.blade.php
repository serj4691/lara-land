<!doctype html>
<html>
<head>
    <meta charset="utf-8" lang="ru">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>Парикмахер-стилист</title>

    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css">

<!--[if lt IE 9]>
    <script src="{{ asset('assets/js/respond-1.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
    <script src="{{ asset('assets/js/html5element.js') }}"></script>
<![endif]-->

</head>
<body>

<!--Header_section-->
<header id="header_wrapper">
    <div class="container">
        <div class="header_box">
            <div class="logo"><a href="#"><img src="{{ asset('assets/img/logo_nadya_inst.png') }}" alt="logo" width="70px"></a></div>
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                            data-target="#main-nav"><span class="sr-only">Toggle navigation</span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="main-nav" class="collapse navbar-collapse navStyle">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
                        <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
                        <li><a href="#service" class="scroll-link">Services</a></li>
                        <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>
                        <li><a href="#clients" class="scroll-link">Clients</a></li>
                        <li><a href="#team" class="scroll-link">Team</a></li>
                        <li><a href="#contact" class="scroll-link">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--Header_section-->

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container">
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-5 col-sm-7">
                        <div class="top_left_cont zoomIn wow animated">
                            <h2>Парикмахер-стилист
                                Мотыхляева Надежда</h2>
                            <p>Добро пожаловать на мою страничку!
                                Здесь Вы можете просматривать мои работы, задавать вопросы,
                                следить за новинками и участвовать в акциях и розыгрешах.</p>
                            <a href="#service" class="read_more2">Read more</a></div>
                    </div>
                    <div class="col-lg-7 col-sm-5">
                        <img src="{{ asset('assets/img/instuments.jpg') }}" class="zoomIn wow animated" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero_Section-->
<section>
    <div class="container">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="{{ asset('assets/img/001.jpg') }}" alt="My 1 foto" style="width:100%;">
                    <div class="carousel-caption">
{{--                        <h3>Los Angeles</h3>--}}
{{--                        <p>LA is always so much fun!</p>--}}
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/img/002.jpg') }}" alt="My 2 foto" style="width:100%;">
                    <div class="carousel-caption">
{{--                        <h3>Chicago</h3>--}}
{{--                        <p>Thank you, Chicago!</p>--}}
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/img/003.jpg') }}" alt="My 3 foto" style="width:100%;">
                    <div class="carousel-caption">
{{--                        <h3>New York</h3>--}}
{{--                        <p>We love the Big Apple!</p>--}}
                    </div>
                </div>

                <div class="item">
                    <img src="{{ asset('assets/img/004.jpg') }}" alt="My 4 foto" style="width:100%;">
                    <div class="carousel-caption">
{{--                        <h3>New York</h3>--}}
{{--                        <p>We love the Big Apple!</p>--}}
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<section id="aboutUs"><!--Aboutus-->
    <div class="inner_wrapper">
        <div class="container">
            <h2>About Us</h2>
            <div class="inner_section">
                <div class="row">
                    <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img
                            src="{{ asset('assets/img/visitka.jpg') }}"
                            class="img-circle delay-03s animated wow zoomIn" alt=""></div>
                    <div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated" id="wow_div">
                            <h3>Lorem Ipsum has been the industry's standard dummy text ever..</h3><br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book.PageMaker
                                including versions of Lorem Ipsum.</p> <br/>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged like Aldus PageMaker including versions of Lorem
                                Ipsum.</p>
                        </div>
                        <div class="work_bottom"><span>Want to know more..</span> <a href="#contact"
                                                                                     class="contact_btn">Contact Us</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
<!--Aboutus-->


<!--Service-->
<section id="service">
    <div class="container">
        <h2>Services</h2>
        <div class="service_wrapper">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service_block">
                        <div class="service_icon delay-03s animated wow  zoomIn"><span><i
                                    class="fa fa-android"></i></span></div>
                        <h3 class="animated fadeInUp wow">Android</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft">
                    <div class="service_block">
                        <div class="service_icon icon2  delay-03s animated wow zoomIn"><span><i class="fa fa-apple"></i></span>
                        </div>
                        <h3 class="animated fadeInUp wow">Apple IOS</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft">
                    <div class="service_block">
                        <div class="service_icon icon3  delay-03s animated wow zoomIn"><span><i class="fa fa-html5"></i></span>
                        </div>
                        <h3 class="animated fadeInUp wow">Design</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
            <div class="row borderTop">
                <div class="col-lg-4 mrgTop">
                    <div class="service_block">
                        <div class="service_icon delay-03s animated wow  zoomIn"><span><i
                                    class="fa fa-dropbox"></i></span></div>
                        <h3 class="animated fadeInUp wow">Concept</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft mrgTop">
                    <div class="service_block">
                        <div class="service_icon icon2  delay-03s animated wow zoomIn"><span><i class="fa fa-slack"></i></span>
                        </div>
                        <h3 class="animated fadeInUp wow">User Research</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                <div class="col-lg-4 borderLeft mrgTop">
                    <div class="service_block">
                        <div class="service_icon icon3  delay-03s animated wow zoomIn"><span><i class="fa fa-users"></i></span>
                        </div>
                        <h3 class="animated fadeInUp wow">User Experience</h3>
                        <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Service-->


<!-- Portfolio -->
<section id="Portfolio" class="content">

    <!-- Container -->
    <div class="container portfolio_title">

        <!-- Title -->
        <div class="section-title">
            <h2>Portfolio</h2>
        </div>
        <!--/Title -->

    </div>
    <!-- Container -->

    <div class="portfolio-top"></div>

    <!-- Portfolio Filters -->
    <div class="portfolio">

        <div id="filters" class="sixteen columns">
            <ul class="clearfix">
                <li><a id="all" href="#" data-filter="*" class="active">
                        <h5>All</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".prototype">
                        <h5>Prototype</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".design">
                        <h5>Design</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".android">
                        <h5>Android</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".appleIOS">
                        <h5>Apple IOS</h5>
                    </a></li>
                <li><a class="" href="#" data-filter=".web">
                        <h5>Web App</h5>
                    </a></li>
            </ul>
        </div>
        <!--/Portfolio Filters -->

        <!-- Portfolio Wrapper -->
        <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;"
             id="portfolio_wrapper">

            <!-- Portfolio Item -->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four   appleIOS isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic1.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">SMS Mobile App</h4>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item -->

            <!-- Portfolio Item-->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four  design isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic2.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">Finance App</h4>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item -->

            <!-- Portfolio Item -->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four  design  isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic3.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">GPS Concept</h4>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item-->

            <!-- Portfolio Item-->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four  android  prototype web isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic4.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">Shopping</h4>
                    </div>
                </div>
            </div>
            <!-- Portfolio Item -->

            <!-- Portfolio Item -->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four  design isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic5.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">Managment</h4>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item -->

            <!-- Portfolio Item -->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four  web isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic6.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">iPhone</h4>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item -->

            <!-- Portfolio Item  -->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four  design web isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic7.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">Nexus Phone</h4>
                    </div>
                </div>
            </div>
            <!--/Portfolio Item -->

            <!-- Portfolio Item -->
            <div
                style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
                class="portfolio-item one-four   android isotope-item">
                <div class="portfolio_img"><img src="{{ asset('assets/img/portfolio_pic8.jpg') }}" alt="Portfolio 1">
                </div>
                <div class="item_overlay">
                    <div class="item_info">
                        <h4 class="project_name">Android</h4>
                    </div>
                </div>
                <!--/Portfolio Item -->

            </div>
            <!--/Portfolio Wrapper -->

        </div>
        <!--/Portfolio Filters -->

        <div class="portfolio_btm"></div>


        <div id="project_container">
            <div class="clear"></div>
            <div id="project_data"></div>
        </div>
    </div>

</section>
<!--/Portfolio -->

<section class="page_section" id="clients"><!--page_section-->
    <h2>Clients</h2>
    <!--page_section-->
    <div class="client_logos"><!--client_logos-->
        <div class="container">
            <ul class="fadeInRight animated wow">
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo1.png') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo2.png') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo3.png') }}" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="{{ asset('assets/img/client_logo4.png') }}" alt=""></a></li>
            </ul>
        </div>
    </div>
</section>
<!--client_logos-->

<section class="page_section team" id="team"><!--main-section team-start-->
    <div class="container">
        <h2>Team</h2>
        <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
        <div class="team_section clearfix">
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-03s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    <img src="{{ asset('assets/img/team_pic1.jpg') }}" alt="">
                    <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-03s">Tom Rensed</h3>
                <span class="wow fadeInDown delay-03s">Chief Executive Officer</span>
                <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                    consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team_area">
                <div class="team_box  wow fadeInDown delay-06s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    <img src="{{ asset('assets/img/team_pic2.jpg') }}" alt="">
                    <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-06s">Kathren Mory</h3>
                <span class="wow fadeInDown delay-06s">Vice President</span>
                <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                    consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-09s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    <img src="{{ asset('assets/img/team_pic3.jpg') }}" alt="">
                    <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-09s">Lancer Jack</h3>
                <span class="wow fadeInDown delay-09s">Senior Manager</span>
                <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin
                    consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
            </div>
        </div>
    </div>
</section>
<!--/Team-->
<!--Footer-->
<footer class="footer_wrapper" id="contact">
    <div class="container">
        <section class="page_section contact" id="contact">
            <div class="contact_section">
                <h2>Contact Us</h2>
                <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 wow fadeInLeft">
                    <div class="contact_info">
                        <div class="detail">
                            <h4>UNIQUE Infoway</h4>
                            <p>104, Some street, NewYork, USA</p>
                        </div>
                        <div class="detail">
                            <h4>call us</h4>
                            <p>+1 234 567890</p>
                        </div>
                        <div class="detail">
                            <h4>Email us</h4>
                            <p>support@sitename.com</p>
                        </div>
                    </div>


                    <ul class="social_links">
                        <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i
                                    class="fa fa-pinterest"></i></a></li>
                        <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i
                                    class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-8 wow fadeInLeft delay-06s">
                    <div class="form">
                        <input class="input-text" type="text" name="" value="Your Name *"
                               onFocus="if(this.value==this.defaultValue)this.value='';"
                               onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <input class="input-text" type="text" name="" value="Your E-mail *"
                               onFocus="if(this.value==this.defaultValue)this.value='';"
                               onBlur="if(this.value=='')this.value=this.defaultValue;">
                        <textarea class="input-text text-area" cols="0" rows="0"
                                  onFocus="if(this.value==this.defaultValue)this.value='';"
                                  onBlur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                        <input class="input-btn" type="submit" value="send message">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="footer_bottom"><span>Copyright © 2014,    Template by <a
                    href="http://webthemez.com">WebThemez.com</a>. </span></div>
    </div>
</footer>

<script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-scrolltofixed.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.nav.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/wow.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>
