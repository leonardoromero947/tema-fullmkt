
<?php
get_header();
?>

<?php
    while( have_posts() ): the_post();
?>


    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
<div class="feature_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title center mb-2">
                        <h1 class="lang fuente-titulo azul-texto" ><?php  the_title(); ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="single_feature mb-4">
                        
                        <div class="single_feature_title pt-3">
                            <p class="lang fuente-comun"> <?php  the_content(); ?> </p>
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
<?php
    endwhile;
?>
<?php
get_footer();
?>
