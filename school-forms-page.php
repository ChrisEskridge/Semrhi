<?php
/**
Template Name: school form page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="contact-banner-content">
            		<span style="color:#C4C486">Patient Resources  ›</span>  <span style="white-space:nowrap"><?php the_title(); ?></span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                <div class="school-based-form">
                <div class="school-based-form-info-restricter">
                	
                    <div class="school-based-form-info">
                       <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			

		endwhile; // End of the loop.
		?> 
                    </div>
                </div>
                    <div class="school-based-menu-form">
                        <img src="<?php echo get_field('page_photo') ?>" style="width:100%;">
                    </div>
                </div>
                <div class="school-based-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

	




                        
                        
                        
                       
                    
                    
                    <?php if( have_rows('patient_forms') ): ?>

	
    

	<?php while( have_rows('patient_forms') ): the_row(); 

		// vars
		$patient_group_name = get_sub_field('patient_group_name');
		
		

		?>    
                        
                        
                        
                        
                        <div class="contact-sidebar-menu-item">
                        	<a href="javascript:showonlyone('<?php echo $patient_group_name; ?>');">
                            	<div class="school-menu-item-title">
                                	<div class="menu-title-text">
                                		<?php echo $patient_group_name; ?>

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/down_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                </a>
                                <div id="<?php echo $patient_group_name; ?>" class="menu-item-contentb newboxes7" style="display:none;">
                                
                                	
                                    <div class="menu-item-content-title2">
                                     
                                     
                                     
                                     <?php if( have_rows('form_list') ): ?>

	
    

	<?php while( have_rows('form_list') ): the_row(); 

		// vars
		$form_file = get_sub_field('patient_form_file');
		$form_title = get_sub_field('form_title');
		
		
		

		?>
                                     <div class="form-wrap">
                                    <?php echo $form_title; ?>
                                    <a style="float:right;" href="<?php echo $form_file; ?>"><div class="form-link"><img src="<?php bloginfo('template_directory'); ?>/images/download-arrow.png" style="width:15px; height:15px;">&nbsp;&nbsp;FORM</div></a>
                                    </div>
                                     
                                     
                                     
                                     
                                     
                                    
                                    
                                     
                                     
                      <?php endwhile; ?>

	

<?php endif; ?>               
                                     
                                    
                                    
                                		

                                    </div>
                                    <!--<div class="menu-item-content-link">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/down_arrow_white.png" style="width:20px; height:20px;">
                                    </div>-->
                                    
                                </div>
                                
                            </div>
                        
                        
                        
                        
                        
                        <?php endwhile; ?>

	

<?php endif; ?>
                        
                        
                        
                        
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>
        	</div>
        </div>
        
	</div><!-- #primary -->



<script type="text/javascript"> 
	
	function showonlyone(thechosenone){      
           
     jQuery('.newboxes7').each(function(index) {
          if (jQuery(this).attr("id") == thechosenone) {
               jQuery(this).toggle();
          }
          else {
               jQuery(this).hide();
          }
		  
		  
		  
		  
		  
     });

	}
	
    

     </script> 




<?php

get_footer();
