<?php
/**
Template Name: contact page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        	<div class="contact-banner-restricter">
        		<div class="contact-banner-content">
            		Contact Us
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                <div id="con-form" class="form">
                <div class="form-info-restricter">
                    <div class="form-info">
                        Contact our Human Resources department using the form below, or find a specific clinic or department to the left or below.
                    </div>
                </div>
                    <div class="contact-menu-form">
                        <?php echo do_shortcode('[ninja_forms id=1]'); ?>
                    </div>
                </div>
                <div class="contact-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        
                        	
                            
                            
                            
                            
                            
                        
                            
                            <?php $contact_query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100 )); ?>
                            	<?php if( $contact_query->have_posts() ) : 
									while( $contact_query->have_posts() ) : 
									$contact_query->the_post(); 
									
									// vars
									$phone = get_field('phone');
									$street_address = get_field('street_address');
                                    $po_box = get_field('po_box'); ?>
                        	
                        	<div class="contact-sidebar-menu-item">
                            
                                    
                            	<div class="contact_menu-item-title" onclick="toggle_visibility('<?php the_title(); ?>')" style="cursor:pointer">
                                	<div class="menu-title-text">
                                		<?php echo get_field('clinic_name'); ?><br>

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/down_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                
                                    
                                    
                                    <div id="<?php the_title(); ?>" class="faq-item2">
                                    <a style="color:#dbe4db;" href="<?php the_permalink(); ?>">
                                <div class="menu-item-content">
                                	
                                	
                                    
                                    <?php if( $phone ): ?>
										<?php echo $phone; ?><br>
                                    <?php endif; ?>
                                    
                                    
                                    <?php if( $street_address ): ?>
										<?php echo $street_address; ?><br>
                                    <?php endif; ?>
                                    
                                    <?php if( $po_box ): ?>
										<?php echo $po_box; ?><br>
                                    <?php endif; ?>
                                    
                                    
                                    <?php echo get_field('city') ?>, <?php echo get_field('state') ?> <?php echo get_field('zip_code') ?><br>
                                </div>
                                </a>
                                </div>
                            </div>
                        	
                            <?php endwhile; endif; ?>
                                <?php wp_reset_query(); ?>
                            
                            
                            
                            
                            <!--<div class="contact-sidebar-menu-item">
                            
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                                
                            </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content-inner">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                                <div class="menu-item-content-inner">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                                <div class="menu-item-content-inner">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                                <div class="menu-item-content-inner">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                                <div class="menu-item-content-inner">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="menu-item-title">
                                	<div class="menu-title-text">
                                		Clinics – Brooklyn

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="menu-item-content">
                                	Brooklyn Family Health Center<br>
                                    601-582-1188<br>
                                    44 Brooklyn-Janice Rd.<br>
                                    (P.O. Box 357)<br>
                                    Brooklyn, MS 39425<br>
                                </div>
                            </div>-->
                            
                            
                            
                        </div>
               
                	</div>
                </div>
        	</div>
        </div>
        
	</div><!-- #primary -->
<script type="text/javascript">
<!--
    function toggle_visibility(id) 
{
    var e = document.getElementById(id);
	
	
    if (e.style.display == 'none' || e.style.display=='')
    {
        e.style.display = 'inline-block';
		
		
    }
    else 
    {
        e.style.display = 'none';
    }
	
	
    
}
//-->
</script> 
<?php

get_footer();
