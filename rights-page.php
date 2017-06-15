<?php
/**
Template Name: rights page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Patient Resources  ›</span>  <span style="white-space:nowrap">Patient Rights & Responsibilities</span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
            	
               
               
               
               
               <div class="nav" onclick="toggle_visibility('faq-sidebar')" style="cursor:pointer">
        	<div class="menu-button">
        		Click for Responsibilities
            </div>
        </div>
            <!--<div id="faq-sidebar" class="faq-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link" onclick="toggle_visibility('faq-item3')" style="cursor:pointer">
                                	<div class="menu-title-text">
                                		Rights:


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link" onclick="toggle_visibility('faq-item2')" style="cursor:pointer">
                                	<div class="menu-title-text">
                                		Responsibilities:


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>-->
               
               
               
               
               
               
               
               
               <div class="left-50">
                <div class="privacy-form">
                <div id="faq-item3">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        Rights:
                    </div>
                </div>
                    <div class="faq-content">
                        Every patient has a right to <br><br>
                        <?php if( have_rows('patient_rights') ): ?>

	
    

	<?php while( have_rows('patient_rights') ): the_row(); 

		// vars
		$rights = get_sub_field('_rights:');
		$responsibilities = get_sub_field('_responsibilities:');
		

		?>



<?php if( $rights ): ?>
				<?php echo $rights; ?><br><br>
			<?php endif; ?>


            


		

	<?php endwhile; ?>

	

<?php endif; ?>
                    </div>
                </div>
                </div>
                </div>
                
                <div class="right-50">
                <div class="privacy-form">
                <div id="rights-item2">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        Responsibilities:
                    </div>
                </div>
                    <div class="faq-content">
                        Every patient is responsible for<br><br>
                        <?php if( have_rows('patient_responsibilities') ): ?>

	
    

	<?php while( have_rows('patient_responsibilities') ): the_row(); 

		// vars
		$rights = get_sub_field('_rights:');
		$responsibilities = get_sub_field('responsibilities');
		

		?>



<?php if( $responsibilities ): ?>
				<?php echo $responsibilities; ?><br><br>
			<?php endif; ?>


            


		

	<?php endwhile; ?>

	

<?php endif; ?>
                    </div>
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
