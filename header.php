<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FULLMKT</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="<?php echo get_template_directory_uri();?>/assets/images/fav-icon/icon.ico">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/responsive.css" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.min.css" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/theme-default.css" type="text/css" media="all" />
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- Testimonial CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/testimonial.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.theme.default.min.css" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.transitions.css" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/venobox/venobox.css" type="text/css" media="all" />
    <!-- animated CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animated-text.css" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/widget.css" type="text/css" media="all" />
    <!-- MKT CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>

</head>

<body <?php body_class(); ?>>
<!---->
    <header class="site-header">

    </header>

<!-- ============================================================== -->
<!-- Start - mkt Main Menu Area -->
<!-- ============================================================== -->
<div id="sticky-header" class="mkt_main_menu d-md-none d-lg-block d-sm-none d-none">
    <div class="mkt_nav_manu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a class="logo_img" href="http://fullmkt.com.mx/" title="mkt">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/1.png" alt="" />
                        </a>
                        <a class="logo_tranalte" href="http://fullmkt.com.mx/" title="mkt">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/logo-white.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <nav class="mkt_menu ln">
                        <ul class="nav_scroll">
                            <li><a class="lang fuente-comun" key="inicio" href="#home"> Home</a>
                            </li>
                            <!-- <li>
								<a class="lang" key="nosotros" href="#about"> </a>
							</li> -->
                            <li>
                                <a class="lang fuente-comun" key="servicios" href="#servicios"> </a>
                            </li>
                            <li>
                                <a class="lang fuente-comun" key="casos" href="#showcase"> </a>
                            </li>
                            <li>
                                <a class="lang fuente-comun" key="vacantes" href="#pricing"></a>
                            </li>
                            <li>
                                <a class="lang fuente-comun" key="blog" href="#blog"></a>
                            </li>
                            <li>
                                <a class="lang fuente-comun" key="contacto" href="#contact"></a>
                            </li>
                        </ul>
                        <div class="mkt-btn-header style2 ml-5">
                            <a class="singin translate fuente-comun" id="en">Eng</a>
                            <a class="singup translate fuente-comun" id="es">Esp</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End - mkt Main Menu Area -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Start - Mobile Menu Area -->
<!-- ============================================================== -->
<div class=" mkt_main_menu  hidden-md  hidden-lg d-xl-none">
    <div class="menu_area mobile-menu">
        <nav class="mkt_menu">
            <ul class="nav_scroll">
                <li>
                    <a class="lang fuente-comun" key="inicio" href="#home"> </a>
                </li>
                <!--  <li>
					<a class="lang" key="nosotros" href="#about"> </a>
				</li> -->
                <li>
                    <a class="lang fuente-comun" key="servicios" href="#servicios"> </a>
                </li>
                <li>
                    <a class="lang fuente-comun" key="casos" href="#showcase"> </a>
                </li>
                <li>
                    <a class="lang fuente-comun" key="vacantes" href="#pricing"></a>
                </li>
                <li>
                    <a class="lang fuente-comun" key="blog" href="#blog"></a>
                </li>
                <li>
                    <a class="lang fuente-comun" key="contacto" href="#contact"></a>
                </li>
                <li>
                    <a class="singin translate fuente-comun" id="en">Eng</a>
                    <a class="singup translate fuente-comun" id="es">Esp</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- End - Mobile Menu Area -->
<!-- ============================================================== -->
