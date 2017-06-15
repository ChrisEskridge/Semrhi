<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package semrhi.com
 */

get_header(); ?>




<div class="content">
    	<div class="contact-banner">
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">About Us  ›</span>  <span style="white-space:nowrap">News & Press Releases</span>
            	</div>
            	
        	</div>
        </div>
        <div class="news-press-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                <div class="news-press-form2">
                
                
                <?php $news_query = new WP_Query(array( 'post_type' => 'post', 'posts_per_page' => 1 )); ?>
                
                	<?php if( $news_query->have_posts() ) : 
							while( $news_query->have_posts() ) : 
							$news_query->the_post(); ?>
                            
                            <div class="faq-info-restricter">
                    <div class="news-press-info">
                    <a style="color:#c4c486;" href="<?php the_permalink(); ?>">
                    <?php
		while ( have_posts() ) : the_post();




		endwhile; // End of the loop.
		?>
                        <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="news-press-date">
                        <?php the_date(); ?>
                    </div>
                </div>
                     <div class="news-press-content">
                        <?php the_content(); ?>
                    	
                    </div>
                    <div class="news-press-pic-box">
                        	<div class="news-press-pic-wrapper">
                            	<div class="news-press-pic">
                            		<img src="<?php echo get_field('news_photo') ?>" style="width:100%;">
                                </div>
                            </div>
                            
                        </div>
                        
                    <div class="tag-box">
                    	<?php the_tags(); ?>
                    </div>       
                            	
                            
                            
                            
                            
                <?php endwhile; endif; ?>

				<?php wp_reset_query(); ?>
                
                <!--<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		

		</main><!-- #main -->
	<!--</div>--><!-- #primary -->
                
                <!--<div class="faq-info-restricter">
                    <div class="news-press-info">
                        New Hours at the Pharmacy Assistance Center to Better Serve You
                    </div>
                    <div class="news-press-date">
                        posted March 3, 2016
                    </div>
                </div>
                    <div class="news-press-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis nibh ac nunc malesuada, sed maximus mauris ultricies. Nulla placerat urna at odio condimentum, in blandit massa venenatis. Cras auctor ipsum et tellus ultrices, in rhoncus eros tincidunt. Vestibulum hendrerit nec purus in cursus. Nunc risus eros, faucibus id nisi molestie, euismod pretium leo. Curabitur quis aliquam nisi, ac commodo turpis. 

Sed sed ante iaculis, tempor velit at, condimentum magna. Vivamus convallis blandit venenatis. Etiam semper consectetur consectetur. Vivamus vitae velit condimentum, accumsan massa ut, bibendum purus. Suspendisse finibus massa et magna condimentum viverra. Duis consequat sed dolor sit amet faucibus. Sed consequat ligula ut ornare blandit. Duis non massa sit amet erat placerat pulvinar. Praesent egestas eleifend dui in tincidunt. Curabitur pharetra egestas est.
                    	
                    </div>
                    <div class="news-press-pic-box">
                        	<div class="news-press-pic-wrapper">
                            	<div class="news-press-pic">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
                                </div>
                            </div>
                            
                        </div>
                    <div class="tag-box">
                    	tags: Hattiesburg, Hours, Pharmacy, Pharmacy Assistance Center
                    </div>
                 
                
                
                <div class="faq-info-restricter">
                    <div class="news-press-info">
                        New Hours at the Pharmacy Assistance Center to Better Serve You
                    </div>
                    <div class="news-press-date">
                        posted March 3, 2016
                    </div>
                </div>
                    <div class="news-press-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus venenatis nibh ac nunc malesuada, sed maximus mauris ultricies. Nulla placerat urna at odio condimentum, in blandit massa venenatis. Cras auctor ipsum et tellus ultrices, in rhoncus eros tincidunt. Vestibulum hendrerit nec purus in cursus. Nunc risus eros, faucibus id nisi molestie, euismod pretium leo. Curabitur quis aliquam nisi, ac commodo turpis. 

Sed sed ante iaculis, tempor velit at, condimentum magna. Vivamus convallis blandit venenatis. Etiam semper consectetur consectetur. Vivamus vitae velit condimentum, accumsan massa ut, bibendum purus. Suspendisse finibus massa et magna condimentum viverra. Duis consequat sed dolor sit amet faucibus. Sed consequat ligula ut ornare blandit. Duis non massa sit amet erat placerat pulvinar. Praesent egestas eleifend dui in tincidunt. Curabitur pharetra egestas est.
                    	
                    </div>
                    <div class="news-press-pic-box">
                        	<div class="news-press-pic-wrapper">
                            	<div class="news-press-pic">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
                                </div>
                            </div>
                            
                        </div>
                    <div class="tag-box">
                    	tags: Hattiesburg, Hours, Pharmacy, Pharmacy Assistance Center
                    </div>-->
                </div>
                
        </div>
        
	</div><!-- #primary -->
















	

<?php
get_footer();
