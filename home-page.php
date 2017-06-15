<?php
/**
Template Name: home page
**/

get_header(); ?>

	<div class="content">
    	<div class="banner">
        
        <div class="shadow">
        </div>
        	<div class="banner-restricter">
        		<div class="banner-content">
            		<div class="banner-title">
        				Welcome to SeMRHI
                	</div>
                	<div class="banner-text">
                    	<?php echo get_field('welcome_message') ?>
                	</div>
            	</div>
            	<div class="banner-slider">
            		<!--<?php echo do_shortcode('[soliloquy id="9"]'); ?>-->
                    <?php echo do_shortcode('[meteor_slideshow]'); ?>
            	</div>
        	</div>
        </div>
        <div class="news-testimonial-wrapper">
        	<div class="news-testimonial-restricter">
            
            <div class="floating-menu">
            	<div class="shadow3">
        		</div>
                <a href="<?php the_permalink(176); ?>">
                <div class="qtr" style="background-color:#84a0a0;">
                	<div class="title-image" style="width:100%; text-align:center; padding-top:20px;">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/primary-care.png" style="width:100px; height:100px;">
                        		</div>
                	<div class="testimonial-title3" style="width:100%; text-align:center;">
                    
                    	PRIMARY CARE
					
                    </div>
                    <div class="testimonial-title4" style="width:100%; text-align:center;">
                    	
                    	LEARN MORE ›
                        
                    </div>
                </div>
                </a>
                <a href="<?php the_permalink(648); ?>">
                <div class="qtr" style="background-color:#9eb5a2;">
                	<div class="title-image" style="width:100%; text-align:center; padding-top:20px;">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/specialty-services.png" style="width:100px; height:100px;">
                        		</div>
                	<div class="testimonial-title3" style="width:100%; text-align:center;">
                    	SPECIALTY SERVICES

                    </div>
                    <div class="testimonial-title4" style="width:100%; text-align:center;">
                    	
                    	LEARN MORE ›
                        
                    </div>
                </div>
                </a>
                <a href="<?php the_permalink(188); ?>">
                <div class="qtr" style="background-color:#aba2b4;">
                	<div class="title-image" style="width:100%; text-align:center; padding-top:20px;">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/dental-services.png" style="width:100px; height:100px;">
                        		</div>
                	<div class="testimonial-title3" style="width:100%; text-align:center;">
                    	DENTAL SERVICES

                    </div>
                    <div class="testimonial-title4" style="width:100%; text-align:center;">
                    	
                    	LEARN MORE ›
                        
                    </div>
                </div>
                </a>
                <a href="<?php the_permalink(253); ?>">
                <div class="qtr" style="background-color:#d1c8b6;">
                	<div class="title-image" style="width:100%; text-align:center; padding-top:20px;">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/social-services.png" style="width:100px; height:100px;">
                        		</div>
                	<div class="testimonial-title3" style="width:100%; text-align:center;">
                    	SOCIAL SERVICES

                    </div>
                    <div class="testimonial-title4" style="width:100%; text-align:center;">
                    	
                    	LEARN MORE ›
                        
                    </div>
                </div>
                </a>
            </div>
                <div class="news">
                    <div class="title-green">
                        Latest News <a href="<?php the_permalink(48); ?>"><span style="font-size:11px; color:#c4c486">// SEE ALL</span></a>
                    </div>
                    <div class="news-loop">
                        <?php $news_query = new WP_Query(array( 'post_type' => 'post', 'posts_per_page'=>3 )); ?>
                        <?php if ( $news_query->have_posts() ) : while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                    
                        <div class="news-excerpt">
                            <div class="news-image">
                                <img src="<?php echo get_field('news_photo') ?>" style="width:75px; height:75px;">
                            </div>
                            <div class="home-news-press-info">
                            <a class="home-news-title" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                            </div>
                            <div class="news-text">
                                <?php the_excerpt(); ?>
                                <a class="news-continue" href="<?php the_permalink(); ?>">
                                    Continue Reading &raquo;
                                </a>
                            </div>
                            
                        </div>
                    
                        <?php endwhile; endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                </div>
                <div class="testimonials">
                	<div class="testimonial-wrapper">
                        <div class="title-green">
                        <?php $testimonial_query = new WP_Query(array( 'post_type' => 'testimonial', 'posts_per_page'=>1, 'orderby' => 'rand' )); ?>
                            <?php if ( $testimonial_query->have_posts() ) : while ( $testimonial_query->have_posts() ) : $testimonial_query->the_post(); ?>
                            Patient Testimonials  <!--<a href="<?php the_permalink(); ?>"><span style="font-size:11px; color:#c4c486">// SEE ALL</span></a>-->
                        </div>
                        <div class="testimonial-box">
                            
                        
                            <div class="testimonial-excerpt">
                                
                                
                                <div class="testimonial-text">
                                    <?php the_excerpt(); ?>
                                    <a class="testimonial-continue" href="<?php the_permalink(); ?>">
                                        Continue Reading &raquo;
                                    </a>
                                </div>
                                <div class="testimonial-bottom">
                                    <div class="testimonial-image">
                                        <img src="<?php echo get_field('testimonial_photo') ?>" style="width:75px; height:75px;">
                                    </div>
                                    <a class="testimonial-title" href="<?php the_permalink(); ?>">
                                        <?php echo get_field('name') ?>
                                    </a>
                                    <a class="testimonial-title2" href="<?php the_permalink(); ?>">
                                        <?php echo get_field('city') ?>, <?php echo get_field('state') ?>
                                    </a>
                                </div>
                            </div>
                        
                            <?php endwhile; endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
               
                	</div>
                </div>
        	</div>
        </div>
        <div class="why-choose-us">
        
        <div class="shadow2">
        </div>
        
        	<div class="why-choose-us-restricter">
        	<div class="title-white">
            	Why Choose Us?
                <div class="white-line">
                </div>
            </div>
            <div class="main-box-wrapper">
            	<div class="box-wrapper">
            		<div class="box1">
                		<div class="why-choose-us-box">
                    		<div class="choose-box-title">
                        		<div class="title-image">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/pig.jpg" style="width:75px; height:75px;">
                        		</div>
                        		<div class="title-text">
                            		We are Affordable.
                        		</div>
                    		</div>
                            
                    		<div class="choose-box-content">
                            	
                            	<?php echo get_field('insurance_&_payment_information') ?>
                                
                    		</div>
                		</div>
                		<div class="bottom-link">
                			<a style="color:#dbe4db;" href="<?php the_permalink(108); ?>">Insurance & Payment Information ›</a>
                		</div>
            		</div>
            	</div>
            	<div class="box-wrapper">
            		<div class="box">
                		<div class="why-choose-us-box">
                    		<div class="choose-box-title">
                        		<div class="title-image">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/map.jpg" style="width:75px; height:75px;">
                        		</div>
                        		<div class="title-text">
                            		We are Accessible.
                        		</div>
                    		</div>
                    		<div class="choose-box-content">
                            <?php echo get_field('clinic_locations_info') ?>
                    		</div>
                		</div>
                		<div class="bottom-link">
                			<a style="color:#dbe4db;" href="<?php the_permalink(34); ?>">See all Our Clinic Locations ›</a>
                		</div>
            		</div>
            	</div>
            	<div class="box-wrapper">
            		<div class="box3">
                		<div class="why-choose-us-box">
                    		<div class="choose-box-title">
                        		<div class="title-image">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/clock.jpg" style="width:75px; height:75px;">
                        		</div>
                        		<div class="title-text">
                            		We are Convenient.
                        		</div>
                    		</div>
                    		<div class="choose-box-content">
                            <?php echo get_field('mysemrhi_info') ?>
                    		</div>
                		</div>
                		<div class="bottom-link">
                			<a style="color:#dbe4db;" href="https://semrhi.followmyhealth.com/Login/Home/Index?authproviders=0&returnArea=PatientAccess#/Index">Sign up for MySemrhi ›</a>
                		</div>
            		</div>
            	</div>
            </div>
        </div>
        </div>
	</div><!-- #primary -->

<?php

get_footer();
