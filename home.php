
<?php
get_header();
?>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
<div class="blog_area blog-grid pt-110" id="blog">
		<div class="container">		
			<div class="row">	
            <?php
                while( have_posts() ): the_post();
            ?>

				<div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
				<!-- Saasoft Single Blog -->
					<div class="single_blog mb-4">
						<div class="single_blog_inner">
							<div class="single_blog_thumb">
								<img src="assets/images/blog1.jpg" alt="">
							</div>
							<div class="single_blog_content pl-4 pr-4 pb-3 ml-3">
								<div class="single_blog_comment_thumb">
									<img src="assets/images/coment1.png" alt="">
								</div>
								<div class="single_blog_meta pt-35 pb-1">
									<div class="single_blog_meta_date pr-2">
										<span><?php  the_date(); ?></span>
									</div>
									<div class="single_blog_meta_name">
										<span><?php  the_author(); ?></span>
									</div>
								</div>
								<div class="single_blog_title pt-1 pb-3">
									<h4><a href="<?php  the_permalink(); ?>"><?php  the_title(); ?></a></h4>
								</div>
								<div class="single_blog_text">
                                 <?php the_excerpt();  ?>
								</div>
							</div>
						</div>
					</div>
				</div>
                <?php
                    endwhile;
                ?>
			</div>
			<!-- start pagination -->
		<!-- 	<div class="row">
				<div class="col-md-12">
					<div class="paginations">				
						<ul class="page-numbers">
							<li><span aria-current="page" class="page-numbers current">1</span></li>
							<li><a class="page-numbers" href="#">2</a></li>
							<li><a class="page-numbers" href="#">3</a></li>
							<li><a class="next page-numbers" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
						</ul>
					</div>
				</div>
			</div> -->
		</div>
	</div>



<?php
get_footer();
?>
