
<?php
get_header();
?>

<?php
    while( have_posts() ): the_post();
?>

<?php
    endwhile;
?>

</br>
    </br>
    </br>
    </br>
    </br>
    </br>

<div class="blog_area blog-grid blog-details-area pt-100 pb-100" id="blog">
		<div class="container">		
			<div class="row">	
				<div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
					<div class="blog_bd_dtl">
							<div class="blog_details">
								
								<div class="blog_dtl_content">
									<div class="blog_dtl_top_bs mb-4">
									</div>
									<h2><?php  the_title(); ?></h2>
									<div class="saasoft-blog-meta pt-3 pb-3">
										<div class="saasoft-blog-meta-left">
											<span><i class="fa fa-calendar"></i><?php  the_date(); ?> <?php  the_author(); ?> </span>
										</div>	
									</div>
									
									<!-- BLOG META -->
									<?php  the_content(); ?>
								</div>
								
							</div>
					</div>	
						
				</div>
				<div class=" col-lg-4 col-md-5 col-sm-12 col-xs-12 sidebar-right content-widget pdsr">
					<div class="blog-left-side widget">
						<div id="em_recent_post_widget-7" class="widget sn_bd_dtl_wd widget_recent_data">
							<div class="single-widget-item">
								<h2 class="widget-title">Posts</h2>	
                                <?php  
                                    $args = array(
                                        'post_type'=> 'post',
                                        'orderby'    => 'ID',
                                        'post_status' => 'publish',
                                        'order'    => 'DESC',
                                        'posts_per_page' => -1 // this will retrive all the post that is published 
                                        );
                                        $result = new WP_Query( $args );
                                        if ( $result-> have_posts() ) : ?>
                                        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                                        <div class="recent-post-item"><!-- 
                                            <div class="recent-post-image">
                                            </div> -->
                                            <div class="recent-post-text">
                                                <span class="rcomment"><?php  the_date(); ?></span>
                                                <h4><a href="<?php  the_permalink(); ?>">
                                                    <?php the_title(); ?>  										
                                                    </a>
                                                </h4>					
                                                
                                            </div>
								        </div>
                                        
                                        <?php the_excerpt();  ?>
                                        <?php endwhile; ?>
                                        <?php endif; wp_reset_postdata(); 
                                ?>			
								
							</div>
						</div>		
					</div>
				</div>

			</div>
		</div>
	</div>
<?php
get_footer();
?>
