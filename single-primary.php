<?php


get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Services  ›    </span><span style="white-space:nowrap">Primary Care</span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                <div class="faq-form">
                <div class="faq-info-restricter">
                
                <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			

		endwhile; // End of the loop.
		?>
                
                
                   <!-- <div class="faq-info">
                        Annual Checkups
                    </div>-->
                </div>
                    <div class="faq-content">
                    
                    
                    
                       <!-- For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis.-->
                    	<!--<div class="pic-box">
                        	<div class="pic-wrapper">
                            	<div class="pic">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                </div>
                            </div>
                            <div class="pic-wrapper">
                            	<div class="pic">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                </div>
                            </div>
                            <div class="pic-wrapper">
                            	<div class="pic">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                </div>
                            </div>
                            <div class="pic-wrapper">
                            	<div class="pic">
                            		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                </div>
                            </div>
                        </div>-->
                        <div class="available-at">
                                <div class="available-at-restricter">
                                    <div class="primary-care-info">
                                        This service is offered at the following SeMRHI Network clinics:
                                    </div>
                                </div>
                                    <div class="primary-care-content">
                                    
                                    
                                    
                                    
                        <?php

$post_objects = get_field('clinics_that_offer_this_service');

if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
        
        
        
        
            <a style="color: #83a189;" href="<?php the_permalink(); ?>"><?php the_title(); ?> ›</a>
            
            
            
            
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
                        
                      
                                    
                                    
                                    
                                       <!-- Beaumont Family Health Center ›<br>
                                        Beaumont Family Health Center ›<br>
                                        Beaumont Family Health Center ›<br>-->

                                    </div>
                        </div>
                    </div>
                </div>
                <div class="faq-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        
                        
                        
                        
                        
                        <?php

$post_objects = get_field('Clinics_that_offer_this_service');

if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
        <li>
        
        
        <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
        
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            
            </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                    
                                </div>
                                
                            </div>
            
            
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
                        
                        
                        
                        
                        
                        
                        
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Annual Checkups


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                    
                                </div>
                                <div class="faq-menu-item-content">
                                
                                	For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis. 
                                	<!--<div class="pic-box">
                                        <div class="pic-wrapper">
                                            <div class="pic">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                            </div>
                                        </div>
                                        <div class="pic-wrapper">
                                            <div class="pic">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                            </div>
                                        </div>
                                        <div class="pic-wrapper">
                                            <div class="pic">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                            </div>
                                        </div>
                                        <div class="pic-wrapper2">
                                            <div class="pic">
                                                <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:40px; height:40px;">
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="available-at">
                                <div class="available-at-restricter">
                                    <div class="primary-care-info">
                                        This service is offered at the following SeMRHI Network clinics:
                                    </div>
                                </div>
                                    <div class="primary-care-content">
                                        Beaumont Family Health Center ›<br>
                                        Beaumont Family Health Center ›<br>
                                        Beaumont Family Health Center ›<br>

                                    </div>
                        </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>
                
                
        	</div>
        </div>
        
	</div><!-- #primary -->

<?php

get_footer();
