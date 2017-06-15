<?php
/**
Template Name: pharmacy page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Pharmacy  ›</span>  <span style="white-space:nowrap">Pharmacy Assistance Center</span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                
                <div class="clinic-menu-1">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="clinic-menu-sidebar-box">
                        
                        	<div class="clinic-menu-1-title">
                                	<div class="clinics-menu-title-text">
                                		Clinic Information
									</div>
									<div class="clinics-menu-title-image">
                                            <img src="<?php echo get_field('pharmacy_photo') ?>" style="width:100%;">
    
    
                                        </div>
                            </div>
                            <div class="clinic-menu-1-content">
                            	
                                        <div class="clinics-address">
                                        
                                        	<div class="address-title">
                                        		ADDRESS  
                                            </div>
                                            <div class="address-content">
                                        		<?php echo get_field('street_address') ?><br>
<?php echo get_field('city') ?>, <?php echo get_field('state') ?> <?php echo get_field('zip_code') ?>
                                                <a href="<?php echo get_field('map_link') ?>" target="_blank">
                                                <div class="map">
                                                	MAP
                                                </div>
                                                </a>
                                            </div>
    
                                        </div>
                                        
                                        <div class="clinics-address">
                                        	<div class="address-title">
                                        		CONTACT  
                                            </div>
                                            <div class="address-content">
                                        		<?php echo get_field('phone') ?>
                                                <?php echo get_field('e-mail') ?>

                                            </div>
    
                                        </div>
                                        
                                        <div class="clinics-address">
                                        	<div class="address-title">
                                        		HOURS  
                                            </div>
                                            <div class="address-content">
                                        		Sunday........... 	 <?php echo get_field('sunday') ?><br>
                                                Monday.......... 	 <?php echo get_field('monday') ?><br>
                                                Tuesday......... 	 <?php echo get_field('tuesday') ?><br>
                                                Wednesday.... 	 <?php echo get_field('wednesday') ?><br>
                                                Thursday........ 	 <?php echo get_field('thursday') ?><br>
                                                Friday............. 	 <?php echo get_field('friday') ?><br>
                                                Saturday......... 	 <?php echo get_field('saturday') ?> 
                                            </div>
    
                                        </div>
                                        
                                        
                                        
                            </div>
                                    
                                    
                                    
                                
                        
                            
                        </div>
                	</div>
                </div>
                
                
                <div class="pharm-form">
                <div class="faq-info-restricter">
                
                
                <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				

			endwhile; // End of the loop.
			?>
                
                
                
                    <!--<div class="faq-info">
                        <?php the_title();?>
                    </div>
                </div>
                    <div class="faq-content">
                    <?php the_content();?>-->


					<a href="<?php the_permalink(101); ?>">
					<div class="button">
                    	Click Here to Read About the Prescription Assistance Program
                    </div>
                    </a>
                    
                    
                    
                    
                    <div class="clinic-menu-1c">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="clinic-menu-sidebar-box">
                        
                        	<div class="clinic-menu-1-title">
                                	<div class="clinics-menu-title-text">
                                		Pharmacy Assistance Center Staff
									</div>
									
                            </div>
                            <div class="clinic-menu-1-content">
                            	
                                
                                
                                
                                
                                
                                
                                
                                
                                <?php if( have_rows('employee') ): ?>

	
    

	<?php while( have_rows('employee') ): the_row(); 

		// vars
		$image = get_sub_field('employee_photo');
		$name = get_sub_field('employee_name');
		$title = get_sub_field('employee_title');

		?>

		
<div class="clinics-employee-box">
			
<div class="employee-photo">
<?php if( $image ): ?>
				<img src="<?php echo $image['url']; ?>" style="width:100%;" alt="<?php echo $image['alt'] ?>" />
<?php else: ?>
<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
<?php endif; ?>
</div>
<div class="employee-name">
<span style="color:#58595B; font-weight:500;">
<?php echo $name; ?>
</span><br>
<span style="white-space:nowrap; font-size:12px;">
<?php if( $title ): ?>
				<?php echo $title; ?>
			<?php endif; ?>
</span>
</div>
</div>			

	<?php endwhile; ?>

	

<?php endif; ?>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                        
                                        
                                        
                                        
                                        
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
