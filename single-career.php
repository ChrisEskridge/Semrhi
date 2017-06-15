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
            		<span style="color:#C4C486">Employment Opportunitites  ›</span>  <span style="white-space:nowrap"><?php the_title(); ?></span>
            	</div>
            	
        	</div>
        </div>
        <div class="news-press-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                <div class="news-press-form2">
                
                
                <?php $news_query = new WP_Query(array( 'post_type' => 'career', 'posts_per_page' => 1 )); ?>
                
                	<?php if( $news_query->have_posts() ) : 
							while( $news_query->have_posts() ) : 
							$news_query->the_post(); ?>
                            
                            <div class="faq-info-restricter">
                    <div class="news-press-info">
                    <!--<a style="color:#c4c486;" href="<?php the_permalink(); ?>">-->
                    <?php
		while ( have_posts() ) : the_post();




		endwhile; // End of the loop.
		?>
                        <?php the_title(); ?>
                        <!--</a>-->
                    </div>
                    <div class="news-press-date">
                        <?php the_date(); ?>
                    </div>
                </div>
                     <div class="news-press-content2">
                     	<div class="list-box">
                        	<div class="label-box">
                            	Location
                            </div>
                            <div class="info-box">
                        	<?php the_field('location'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Job Title
                            </div>
                            <div class="info-box">
                        	<?php the_field('job_title'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Description
                            </div>
                            <div class="info-box">
                        	<?php the_field('description'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Experience
                            </div>
                            <div class="info-box">
                        	<?php the_field('experience'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Education
                            </div>
                            <div class="info-box">
                        	<?php the_field('education'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Certifications
                            </div>
                            <div class="info-box">
                        	<?php the_field('certifications'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Mental Demands
                            </div>
                            <div class="info-box">
                        	<?php the_field('mental_demands'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Physical Demands
                            </div>
                            <div class="info-box">
                        	<?php the_field('physical_demands'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Helpful
                            </div>
                            <div class="info-box">
                        	<?php the_field('helpful'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Hours
                            </div>
                            <div class="info-box">
                        	<?php the_field('hours'); ?>
                            </div>
                        </div>
                        <div class="list-box">
                        	<div class="label-box">
                            	Shift Times
                            </div>
                            <div class="info-box">
                        	<?php the_field('shift_times'); ?>
                            </div>
                        </div>
                        <div class="apply-wrap">
                        	<!--<a  href="<?php the_permalink(); ?>">-->
                                <div class="apply" onclick="toggle_visibility('form')" style="cursor:pointer">
                                	<div class="apply-title">
                                    	APPLY FOR THIS POSITION
                                    </div>
                                    <div class="apply-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                	</div>
                                </div>
                            <!--</a>-->
                        </div>
                    	<div id="form" class="form">
                        	<?php echo do_shortcode('[ninja_forms id=6]'); ?>
                        </div>  
                    </div>
                    <!--<div class="news-press-pic-box">
                        	<div class="news-press-pic-wrapper">
                            	<div class="news-press-pic">
                            		<img src="<?php echo get_field('testimonial_photo') ?>" style="width:100%;">
                                    
                                </div>
                            </div>
                            
                        </div>-->
                        <!--<div class="name-info2">
                        <div class="testimonial-title">
                        <?php echo get_field('name'); ?></br>
                        </div>
                        <div class="testimonial-title2">
                        <?php echo get_field('city'); ?>, <?php echo get_field('state'); ?>
                        </div>
                        </div>-->
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
