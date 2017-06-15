<?php


get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Services  ›  </span><span style="white-space:nowrap"><?php global $post; $category = get_the_category($post->ID); echo $category[0]->name; ?></span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
            
            
            
            
            
            
            
            
            
            <div class="nav" onclick="toggle_visibility('faq-sidebar')" style="cursor:pointer">
        	<div class="menu-button">
        		More <?php global $post; $category = get_the_category($post->ID); echo $category[0]->name; ?> Services
            </div>
        </div>
            <div id="faq-sidebar" class="faq-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        
                        
                                                
 

 <?php
 $service_category = get_the_category($post->ID);
 $service_category = $service_category[0]->name;
 $service_query = new WP_Query( array( 'post_type' => 'service', 'showposts' => 100, 'category_name' => $service_category, 'orderby' => 'title', 'order' => 'asc' ) );
  if ( $service_query->have_posts() ) : while ( $service_query->have_posts() ) : $service_query->the_post();
?>
<a  href="<?php the_permalink(); ?>">
<div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
<?php the_title(); ?>
</div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                    
                                </div>
                                
                            </div></a>
<?php endwhile; endif; wp_reset_query(); ?>
 
 


                        
                        
                        
                        
                        
                        
                        
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>
            
            
            
            
            
            
            
            
            
            
            
            
                <div class="service-form">
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
                                    <div class="service-info">
                                        This service is offered at the following SeMRHI Network clinics:
                                    </div>
                                </div>
                                    <div class="primary-care-content">
                                            
               <?php $clinic_query = new WP_Query(array( 'post_type' => 'clinic', 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'asc', 'meta_query'=> array(
	array(
		'key' => 'service_object',
		'value' => '"' . get_the_ID() . '"',
		'compare' => 'LIKE'
		)
	))); ?>
                     
            <?php if( $clinic_query->have_posts() ) : 
	while( $clinic_query->have_posts() ) : 
	$clinic_query->the_post(); ?>              
                          
                 <a  href="<?php the_permalink(); ?>" style="color:#83a189; "><div class="clinic-pop-up"><?php the_title(); ?> ›</div></a><br>     
                          
                 <?php endwhile; endif; wp_reset_query(); ?>         
                          
                                    
                                    
                         
                       
                                    
                                    
                                    
                                       <!-- Beaumont Family Health Center ›<br>
                                        Beaumont Family Health Center ›<br>
                                        Beaumont Family Health Center ›<br>-->

                                    </div>
                        </div>
                    </div>
                </div>
                
                
                
        	</div>
        </div>
        
	</div><!-- #primary -->

<?php

get_footer();
