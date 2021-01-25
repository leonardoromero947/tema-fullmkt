
<?php
get_header();
?>
<div id="pagina_principal">

    <!-- ============================================================== -->
    <!-- Start - mkt Slider Area -->
    <!-- ============================================================== -->
    <div class="slider_area" id="home">

        <div class="container">

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <video playsinline autoplay muted loop poster="<?php echo get_template_directory_uri();?>/assets/images/slider-1.png" id="bgvid">
                    <source src="<?php echo get_template_directory_uri();?>/assets/video/back.mp4" type="video/mp4">
                </video>
                <ol class="carousel-indicators" style="margin-bottom: 200px;">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_slider">
                                    <div class="slider_content">
                                        <div class="slider_text pt-60 ajuste_contenedor_principal">
                                            <div class="slider_text_inner slider-text-ajuste">
                                                <h1 class="lang texto-titulo" key="creatividad"></h1>
                                                <h4 class="lang texto-subtitulo" key="titulo_secundario_c"></h4>
                                                <p class="lang descripcion-titulo" key="descripcion_principal_c"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider_shape">
                                <div class="slider_shape_inner1 bounce-animate">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/creatividad.png" alt="" />
                                </div>
                                <div class="slider_shape_inner2 bounce-animate">
                                    <!-- <img src="assets/images/shape1.png" alt="" /> -->
                                </div>
                                <div class="slider_shape_inner3 bounce-animate">
                                    <!-- <img src="assets/images/shape3.png" alt="" /> -->
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="slider-thumb mt-5 pt-5">
                                    <div class="slider-thumb-inner bounce-animate mt-5 pt-5">
                                        <!-- <img src="assets/images/slider-app.png" alt="" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_slider">
                                    <div class="slider_content">
                                        <div class="slider_text pt-60 ajuste_contenedor_principal">
                                            <div class="slider_text_inner slider-text-ajuste">
                                                <h1 class="lang texto-titulo" key="estrategia"></h1>
                                                <h4 class="lang texto-subtitulo" key="titulo_secundario_e"></h4>
                                                <p class="lang descripcion-titulo" key="descripcion_principal_e"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider_shape">
                                <div class="slider_shape_inner1 bounce-animate">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/estrategian.png" alt="" />
                                </div>
                                <div class="slider_shape_inner2 bounce-animate">
                                    <!-- <img src="assets/images/shape1.png" alt="" /> -->
                                </div>
                                <div class="slider_shape_inner3 bounce-animate">
                                    <!-- <img src="assets/images/shape3.png" alt="" /> -->
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="slider-thumb mt-5 pt-5">
                                    <div class="slider-thumb-inner bounce-animate mt-5 pt-5">
                                        <!-- <img src="assets/images/slider-app.png" alt="" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single_slider">
                                    <div class="slider_content">
                                        <div class="slider_text pt-60 ajuste_contenedor_principal">
                                            <div class="slider_text_inner slider-text-ajuste">
                                                <h1 class="lang texto-titulo" key="promocion"></h1>

                                                <h4 class="lang texto-subtitulo" key="titulo_secundario_p"></h4>
                                                <p class="lang descripcion-titulo" key="descripcion_principal_p"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slider_shape">
                                <div class="slider_shape_inner1 bounce-animate">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/promocionn.png" alt="" />
                                </div>
                                <div class="slider_shape_inner2 bounce-animate">
                                    <!-- <img src="assets/images/shape1.png" alt="" /> -->
                                </div>
                                <div class="slider_shape_inner3 bounce-animate">
                                    <!-- <img src="assets/images/shape3.png" alt="" /> -->
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="slider-thumb mt-5 pt-5">
                                    <div class="slider-thumb-inner bounce-animate mt-5 pt-5">
                                        <!-- <img src="assets/images/slider-app.png" alt="" /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" style=" margin-right: 140px;" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" style=" margin-left: 110px;" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End - mkt Slider Area -->
    <!-- ============================================================== -->
    <div class="counter_area d-md-none d-lg-block d-sm-none d-none titulo-fix">
        <div class="container container-fix casos_fix">
            <div class="row top_bar pt-30 pb-4">

                <div class="col-lg-12 col-sm-6">
                    <div class="single_counter_fix">
                        <div class="">
                            <h1 class="lang fuente-titulo azul-texto" key="nosotros"></h1>
                        </div>
                        <!--  <div class="counter_des">
							<h5>Happy Client</h5>
						</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start - mkt Nosotros  Area -->
    <!-- ============================================================== -->
    <div class="download_area">
        <div class="container">
            <div class="row hidden-md  hidden-lg d-xl-none">
                <div class="col-lg-12">
                    <div class="section_title center mb-5">
                        </br>
                        </br>
                        </br>
                        <h1 class="lang fuente-titulo azul-texto" key="nosotros"></h1>
                        <!-- <p>The point of using Lorem Ipsum is that it has a more or less normal distribution of letters as opposed.</p> -->
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="download_thumb">
                            <div class="download_thumb_inner">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/mapa.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="main_skill">
                        <section id="section-quote">
                            <div class="container-pe-quote left d-none">
                                <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                                    <div class="img animated bounce"></div>
                                </div>
                            </div>
                            <div class="container-quote carousel-on ">
                                <div class="quote quote-text-1 show" data-ppquote="li-quote-1">
                                    <div class="container-info">
                                        <div class="name lang texto-ajustes fuente-comun" key="mision"></div>
                                        <div class="job lang texto-ajustes fuente-comun-nosotros" key="text-mision"></div>
                                    </div>
                                </div>
                                <div class="quote hide-bottom quote-text-2" data-ppquote="li-quote-2">
                                    <div class="container-info">
                                        <div class="name lang texto-ajustes fuente-comun" key="vision"></div>
                                        <div class="job lang texto-ajustes fuente-comun-nosotros" key="text-vision"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-pe-quote right d-none">
                                <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                                    <div class="img animated bounce"></div>
                                </div>
                                <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                                    <div class="img animated bounce"></div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End - mkt Nosotros  Area -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start - mkt Nosotros Area -->
    <!-- ============================================================== -->
    <!--     <div id="testimonial-section" class="testimonial-bg pt-150">
		<div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">

		</div>
	</div> -->
    <!-- ============================================================== -->
    <!-- End - mkt Nosotros Area -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Start - mkt Feature Area -->
    <!-- ============================================================== -->
    <div id="servicios">

    </div>
    <div class="feature_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title center mb-5">
                        <h1 class="lang fuente-titulo azul-texto" key="titulo_servicio"></h1>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_feature mb-4">
                        <div class="single_feature_icon rotateme">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/feature-icon1.png" alt="" />
                        </div>
                        <div class="single_feature_title pt-3">
                            <h4 class="lang fuente-comun" key="sevicio1"></h4>
                        </div>
                        <div class="single_feature_text pt-3">
                            <p class="lang punto-servicio fuente-comun" key="sevicio1-1"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio1-2"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio1-3"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio1-4"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio1-5"></p>
                            <a href="<?php echo get_site_url(); ?>"><stong><p class="lang punto-servicio azul-texto" key="ver_mas"></p></stong></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_feature mb-4 mt-5">
                        <div class="single_feature_icon rotateme2">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/feature-icon2.png" alt="" />
                        </div>
                        <div class="single_feature_title pt-3">
                            <h4 class="lang fuente-comun" key="sevicio2"></h4>
                        </div>
                        <div class="single_feature_text pt-3">
                            <p class="lang punto-servicio fuente-comun" key="sevicio2-1"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio2-2"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio2-3"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio2-4"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio2-5"></p>
                            <a href="<?php echo get_site_url(); ?>"><stong><p class="lang punto-servicio azul-texto" key="ver_mas"></p></stong></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_feature mb-4">
                        <div class="single_feature_icon rotateme">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/feature-icon3.png" alt="" />
                        </div>
                        <div class="single_feature_title pt-3">
                            <h4 class="lang fuente-comun" key="sevicio3"></h4>
                        </div>
                        <div class="single_feature_text pt-3">
                            <p class="lang punto-servicio fuente-comun" key="sevicio3-1"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio3-2"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio3-3"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio3-4"></p>
                            <a href="<?php echo get_site_url(); ?>"><stong><p class="lang punto-servicio azul-texto" key="ver_mas"></p></stong></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single_feature mb-4 mt-5">
                        <div class="single_feature_icon rotateme2">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/feature-icon4.png" alt="" />
                        </div>
                        <div class="single_feature_title pt-3">
                            <h4 class="lang fuente-comun" key="sevicio4"></h4>
                        </div>
                        <div class="single_feature_text pt-3">
                            <p class="lang punto-servicio fuente-comun" key="sevicio4-1"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio4-2"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio4-3"></p>
                            <p class="lang punto-servicio fuente-comun" key="sevicio4-4"></p>
                            <a href="<?php echo get_site_url(); ?>"><stong><p class="lang punto-servicio azul-texto" key="ver_mas"></p></stong></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="feature_shape_bottom">
                        <div class="feature_shape_bottom_inner bounce-animate">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/feature-shap1.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <!--<div class="error d-md-none d-lg-block d-sm-none d-none">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="error_content">
					<div class="error_content_title pt-5 section_title">
						<h2 class="lang fuente-titulo azul-texto" key="titulo_servicio"></h2>
					</div>
					<div class="error_button pt-3">
					</div>
					<div class="error_thumb">
						<img id="mapa_servicios" src="<?php /*echo get_template_directory_uri();*/?>/assets/images/servicios_esp.png" alt="" />
					</div>

				</div>
			</div>
		</div>
	</div>
</div>-->
    <!-- ============================================================== -->
    <!-- End - mkt Feature Area -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Start - mkt Team Area -->
    <!-- ============================================================== -->
    <div id="showcase">
        </br>
        </br>
        </br>
    </div>
    <div class="counter_area d-md-none d-lg-block d-sm-none d-none">
        <div class="container container-fix">
            <div class="row top_bar_fix pt-30 titulo-fix">

                <div class="col-lg-12 col-sm-6">
                    <div class="single_counter_fix">
                        <div class="">
                            <h4 class="lang  fuente-titulo blanco-texto" key=""></h4>
                        </div>
                        <!--  <div class="counter_des">
						<h5>Happy Client</h5>
					</div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="screenshot_area casos_fix">
        <div class="counter_area fix_casos d-md-none d-lg-block d-sm-none d-none">
            <div class="container container-fix">
                <div class="row top_bar_fix pt-30 pb-4 titulo-fix">

                    <div class="col-lg-12 col-sm-6">
                        <div class="single_counter_fix">
                            <div class="">
                                </br>
                                <h1 class="lang fuente-titulo blanco-texto" key="casos"></h1>
                            </div>
                            <!-- <div class="counter_des">
								<h5>Happy Client</h5>
							 </div>  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row hidden-md hidden-lg d-xl-none">
                <div class="col-lg-12">
                    <div class="section_title center mb-5">
                        </br>
                        <h1 class="lang fuente-titulo blanco-texto" key="casos"></h1>
                        <!-- <p>The point of using Lorem Ipsum is that it has a more or less normal distribution of letters as opposed.</p> -->
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="single_team mb-4">
                        <div class="single_team_thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/01.png" alt="" />
                            <div class="single_team_icon">
                                <p class="text-caso fuente-comun" id="nombre">Eventos</p>
                                <div class="contact_button mb-5">
                                    <button type="submit" data-toggle="modal" data-target="#dance-moms" class="btn fuente-comun lang" key="veer-mas">
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team mb-4">
                        <div class="single_team_thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/02.png" alt="" />
                            <div class="single_team_icon">
                                <p class="text-caso fuente-comun" id="nombre">Foros</p>
                                <div class="contact_button mb-5">
                                    <button type="submit" data-toggle="modal" data-target="#foro-dermatologico" class="btn fuente-comun lang" key="veer-mas">
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team mb-4">
                        <div class="single_team_thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/03.png" alt="" />
                            <div class="single_team_icon">
                                <p class="text-caso fuente-comun" id="nombre">Lanzamientos</p>
                                <div class="contact_button mb-5">
                                    <button type="submit" data-toggle="modal" data-target="#lans-modal" class="btn fuente-comun lang" key="veer-mas">
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_team mb-4">
                        <div class="single_team_thumb">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/04.png" alt="" />
                            <div class="single_team_icon">
                                <p class="text-caso fuente-comun" id="nombre">Streaming</p>
                                <div class="contact_button mb-5">
                                    <button type="submit" data-toggle="modal" data-target="#streaming-modal" class="btn fuente-comun lang" key="veer-mas">
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- 		<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
        <!-- ============================================================== -->
    <!-- Start - mkt BLOG -->
    <!-- ============================================================== -->
    
    <div class="pricing_area" id="blog">
    
    <div id="testimonial-section" class="testimonial-bg pt-150">
    <div class="col-lg-12">
				
        <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote center">
        
            <section id="section-quote">
            <div class="col-lg-12">
					<div class="section_title center">
                    <a href="#"><h1 class="lang fuente-titulo azul-texto" >BLOG</h1></a>
					</div>
					<div class="testi_bg_thumb center">
						<div class="testi_bg_thumb_inner center">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/feature-shap1.png" alt="">
						</div>
					</div>
				</div>
                <!--Left Bubble Images-->
                <div class="container-pe-quote left">
                   
                    <?php  
                        $contador = 1;
                        $args = array('post_type'=> 'post','orderby'    => 'ID','post_status' => 'publish','order'    => 'DESC','posts_per_page' => -1 );
                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ) : 
                        while ( $result->have_posts() ) : $result->the_post();
                    ?>
                      <div class="bubble pp-quote li-quote-<?php echo $contador;?> " data-textquote="quote-text-<?php  echo $contador;?>"></div>
                    
                    <?php  $contador +=1;?>  
                    <?php endwhile; 
                        endif; wp_reset_postdata(); 
                    ?>
                </div>
                <!--Left Bubble Images-->
                <!--Center Testimonials-->
                <div class="container-quote">
                    <!--Testimonial 1-->
                    <?php  
                        $contador = 1;
                        $args = array('post_type'=> 'post','orderby'    => 'ID','post_status' => 'publish','order'    => 'DESC','posts_per_page' => -1 );
                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ) : 
                        while ( $result->have_posts() ) : $result->the_post();
                    ?>
                     <div class="quote quote-text-<?php echo $contador;  ?>  <?php if($contador == 1){ echo 'show';}else{ echo 'hide-bottom';}  ?>" data-ppquote="li-quote-<?php  echo $contador;  ?>">
                        <div class="container-info">
                            <div class="name center"><?php the_title(); ?></div>
                            <div class="job center"><?php  the_date(); ?></div>
                        </div>
                        <a href="<?php  the_permalink(); ?>"><p class="center"> <?php the_excerpt();  ?></p></a>
                    </div>
                    
                    <?php  $contador +=1;?>  
                    <?php endwhile; 
                        endif; wp_reset_postdata(); 
                    ?>
                </div>
                <!--Right Bubble Images-->
                <div class="container-pe-quote right">
                    
                    <?php  
                        $contador = 7;
                        $args = array('post_type'=> 'post','orderby'    => 'ID','post_status' => 'publish','order'    => 'DESC','posts_per_page' => -1 );
                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ) : 
                        while ( $result->have_posts() ) : $result->the_post();
                    ?>
                     <div class="bubble pp-quote li-quote-<?php echo $contador;?>" data-textquote="quote-text-<?php echo $contador;?>">
                    </div>
                    
                    <?php  $contador +=1;?>  
                    <?php endwhile; 
                        endif; wp_reset_postdata(); 
                    ?>
                </div>
            </section>
        </div>
        </div>
    </div>
    </div>

    <!-- ============================================================== -->
    <!-- End - mkt BLOG -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start - mkt Vacantes Area -->
    <!-- ============================================================== -->
 
    <div class="pricing_area" id="pricing">
        <div class="container centrado_vacantes">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="slider_text_inner">
                        <h2 class="lang texto-vacante azul-texto" key="vacante1">
                        </h2>
                        <h4 class="lang texto-vacante-subtitulo azul-texto" key="vacante2">
                        </h4>
                        <h4 class="lang texto-vacante-subtitulo azul-texto" key="vacante3">
                        </h4>
                        <h4 class="lang texto-vacante-subtitulo azul-texto" key="vacante5"></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </br>
    </br>
    </br>
    <!-- ============================================================== -->
    <!-- End - mkt Vacantes Area -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Start - Corona Contact Now Area -->
    <!-- ============================================================== -->
    <div id="contact">

    </div>
    <div class="contact_now_area pt-80 pb-70">
        <div class="counter_area fix_casos d-md-none d-lg-block d-sm-none d-none">
            <div class="container container-fix">
                <div class="row top_bar_fix pt-30 pb-4 titulo-fix">

                    <div class="col-lg-12 col-sm-6">
                        <div class="single_counter_fix">
                            <div class="">
                                </br>
                                <h1 class="lang fuente-titulo blanco-texto" key="contacto"></h1>
                            </div>
                            <!--  <div class="counter_des">
							<h5>Happy Client</h5>
						</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row hidden-md hidden-lg d-xl-none">
                <div class="col-lg-12">
                    <div class="section_title center mb-5">
                        <h1 class="lang fuente-titulo" key="contacto"></h1>
                        <!-- <p>The point of using Lorem Ipsum is that it has a more or less normal distribution of letters as opposed.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single_contact_now">
                        <div class="single_contact_now_inner">
                            <div class="single_contact_now_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="single_contact_now_content">
                                <h2 class="lang fuente-comun" key="telefono"></h2>
                                <p class="lang fuente-comun" key="num-telefono"></p>
                                </br>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single_contact_now">
                        <div class="single_contact_now_inner">
                            <div class="single_contact_now_icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="single_contact_now_content">
                                <h2 class="lang fuente-comun" key="email"></h2>
                                <p class="lang fuente-comun" key="dir-email"></p>
                                </br>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="single_contact_now">
                        <div class="single_contact_now_inner">
                            <div class="single_contact_now_icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="single_contact_now_content">
                                <h2 class="lang fuente-comun" key="direccion"></h2>
                                <p class="lang fuente-comun" key="dir"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Start - Corona Contact Now Area -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- Start - mkt Contact Area -->
    <!-- ============================================================== -->
    <div class="contact_area pb-50" id="">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="contact_form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="message-field" id="message" cols="30" rows="5" required data-error="Please type your message" placeholder="Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact_button mb-5">
                                        <button type="submit" class="btn fuente-comun">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- CONTACT_AREA END -->
                    <div class="google_map_area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="google_map_area">
                                    <div style="width: 100%"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.2839180168157!2d-99.18636968422693!3d19.356855348112216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fff381e3aebd%3A0x10bc01f72511dce4!2sAv.%20Insurgentes%20Sur%201814%2C%20Florida%2C%20%C3%81lvaro%20Obreg%C3%B3n%2C%2001030%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1605815845953!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End - mkt Screenshot  Area -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Start - Modal Area -->
    <!-- ============================================================== -->
    <div class="modal fade" id="dance-moms" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExample" data-slide-to="1"></li>
                            <li data-target="#carouselExample" data-slide-to="2"></li>
                            <li data-target="#carouselExample" data-slide-to="3"></li>
                            <li data-target="#carouselExample" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/DanceMoms/Dance1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/DanceMoms/Dance2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/DanceMoms/Dance3.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/DanceMoms/Dance4.png" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/DanceMoms/Dance5.png" alt="Five slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="foro-dermatologico" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="dermatologico" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#dermatologico" data-slide-to="0" class="active"></li>
                            <li data-target="#dermatologico" data-slide-to="1"></li>
                            <li data-target="#dermatologico" data-slide-to="2"></li>
                            <li data-target="#dermatologico" data-slide-to="3"></li>
                            <li data-target="#dermatologico" data-slide-to="4"></li>
                            <li data-target="#dermatologico" data-slide-to="5"></li>
                            <li data-target="#dermatologico" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/ForoDerm/Hills1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/ForoDerm/Hills2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/ForoDerm/Hills3.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/ForoDerm/Hills4.png" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/ForoDerm/Hills5.png" alt="Five slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/ForoDerm/Hills6.png" alt="Six slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/ForoDerm/Hills7.png" alt="Seven slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#dermatologico" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#dermatologico" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lans-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="lans" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#lans" data-slide-to="0" class="active"></li>
                            <li data-target="#lans" data-slide-to="1"></li>
                            <li data-target="#lans" data-slide-to="2"></li>
                            <li data-target="#lans" data-slide-to="3"></li>
                            <li data-target="#lans" data-slide-to="4"></li>
                            <li data-target="#lans" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Lans/Lans1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Lans/Lans2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Lans/Lans3.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Lans/Lans4.png" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Lans/Lans5.png" alt="Five slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Lans/Lans6.png" alt="Six slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#lans" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#lans" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="streaming-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="hills" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#hills" data-slide-to="0" class="active"></li>
                            <li data-target="#hills" data-slide-to="1"></li>
                            <li data-target="#hills" data-slide-to="2"></li>
                            <li data-target="#hills" data-slide-to="3"></li>
                            <li data-target="#hills" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Hills/Stream1.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Hills/Stream2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Hills/Stream3.png" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Hills/Stream4.png" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="<?php echo get_template_directory_uri();?>/assets/images/Hills/Stream5.png" alt="Five slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#hills" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#hills" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End - Modal Area -->
    <!-- ============================================================== -->

</div>
<?php
get_footer();
?>
