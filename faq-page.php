<?php
/**
Template Name: faq page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Patient Resources  ›</span>  <span style="white-space:nowrap">Frequently Asked Questions</span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
            
            
            
            
            
            
            
            <div class="nav" onclick="toggle_visibility('faq-sidebar')" style="cursor:pointer">
        	<div class="menu-button">
        		More Questions
            </div>
        </div>
            <div id="faq-sidebar" class="faq-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <?php if( have_rows('frequently_asked_questions') ): $i = 0;?>

	
    

	<?php while( have_rows('frequently_asked_questions') ): the_row(); 

		// vars
		$question = get_sub_field('question');
		$answer = get_sub_field('answer');
		$i++;
		

		?>
                        
                        <div class="contact-sidebar-menu-item">
                        	<a href="javascript:showonlyone('<?php echo $i; ?>');">
                            	<div class="faq-link"  style="cursor:pointer"> <!--onclick="toggle_visibility('<?php echo $i; ?>')"-->
                                
                                	<div class="menu-title-text">
                                		<?php if( $question ): ?>
				<?php echo $question; ?>
			<?php endif; ?>


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                    
                                </div></a>
                                                            </div>
                        
                        <?php endwhile; ?>

	

<?php endif; ?>
                        
                        
                        
                        
                            <!--<div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Are my medical records confidential?


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                    
                                </div>
                                <div class="faq-menu-item-content">
                                	For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis. 
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Do I need to make an appointment?


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="faq-menu-item-content">
                                	For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis. 
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
										Do you accept Medicare, MSCAN, 
										Medicaid, CHIP, & Tricare?


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="faq-menu-item-content">
                                	For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis. 
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Do you accept private insurance?


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="faq-menu-item-content">
                                	For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis. 
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		How much does an office visit cost?

                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="faq-menu-item-content">
                                	For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis. 
                                </div>
                            </div>-->
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>
            
            
            
            
            
            
            
            
            
            
            	<div class="faq-form">
                <div class="faq-info-restricter">
                    <!--<div class="faq-info">
                        
                    </div>-->
                </div>
                    <div class="faq-content">
                         <?php if( have_rows('frequently_asked_questions') ): $i = 0; ?>

	
    

	<?php while( have_rows('frequently_asked_questions') ): the_row();

		// vars
		$question = get_sub_field('question');
		$answer = get_sub_field('answer');
		$i++;

		?>

<div id="<?php echo $i; ?>" class="faq-item3 newboxes4">
<div class="faq-info">
<?php if( $question ): ?>
				<?php echo $question; ?>
			<?php endif; ?>
</div>
<?php if( $answer ): ?>
				<?php echo $answer; ?><br><br>
			<?php endif; ?>
            

</div>
		

	<?php endwhile; ?>

	

<?php endif; ?>








                    </div>
                </div>
                
                
                
                
                
                
                
                
                <!--<div class="faq-form">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        Do I need to make an appointment?
                    </div>
                </div>
                    <div class="faq-content">
                        For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis.
                    </div>
                </div>
                <div class="faq-form">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        Do you accept Medicare, MSCAN, 
										Medicaid, CHIP, & Tricare?
                    </div>
                </div>
                    <div class="faq-content">
                        For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis.
                    </div>
                </div>
                <div class="faq-form">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        Do you accept private insurance?
                    </div>
                </div>
                    <div class="faq-content">
                        For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis.
                    </div>
                </div>
                <div class="faq-form">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        How much does an office visit cost?
                    </div>
                </div>
                    <div class="faq-content">
                        For the convenience of our patients, we work by an appointment schedule. You are encouraged to call for an appointment in advance for routine checkups. For urgent problems, same day appointments are usually available, but we recommend that you call as early as possible in the day. Walk-ins are also seen on a work-in basis.
                    </div>
                </div>-->
                
        	</div>
        </div>
        
	</div><!-- #primary -->


<script type="text/javascript"> 
	
	function showonlyone(thechosenone){      
           
     jQuery('.newboxes4').each(function(index) {
          if (jQuery(this).attr("id") == thechosenone) {
               jQuery(this).toggle();
          }
          else {
               jQuery(this).hide();
          }
		  
		  
		  
		  
		  
     });

	}
	
    

     </script> 

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
