<?php
/**
Template Name: Prescription Page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Pharmacy  ›  </span><span style="white-space:nowrap">Prescription Assistance Program</span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                
                
                
                
                
                <div class="nav" onclick="toggle_visibility('faq-sidebar')" style="cursor:pointer">
        	<div class="menu-button">
        		More Options
            </div>
        </div>
                <div id="faq-sidebar" class="faq-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        	<a href="<?php the_permalink(97); ?>"><div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Pharmacy Assistance Center





                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                </div>
                                
                            </div></a>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link" onclick="toggle_visibility('faq-item3')" style="cursor:pointer">
                                	<div class="menu-title-text">
                                		Prescription Assistance Program 




                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                    
                                </div>
                                <!--<div class="faq-menu-item-content">
                                	 The Prescription Assistance Program provides patients with a 3-month supply of certain medications at a discounted price.<br><br>

All patients using the Prescription Assistance Program are required to see their medical provider every three months. Patients will also be required to provide several proofs of income.<br><br>

For more information, please contact the Medication Assistance Clerk at 601-544-7500. 
                                	<div class="pic-box">
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
                                    </div>
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

                                    </div>-->
                        </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
                
                
                
                
                
                
                
                
                
                
                <div class="service-form">
                <div id="faq-item3">
                <div class="faq-info-restricter">
                <?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				

			endwhile; // End of the loop.
			?>
                
                    <!--<div class="faq-info">
                        Prescription Assistance Program


                    </div>-->
                </div>
                </div>
                    <!--<div class="faq-content">
                        The Prescription Assistance Program provides patients with a 3-month supply of certain medications at a discounted price.<br><br>

All patients using the Prescription Assistance Program are required to see their medical provider every three months. Patients will also be required to provide several proofs of income.<br><br>

For more information, please contact the Medication Assistance Clerk at 601-544-7500.
                    	<div class="pic-box">
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
                        </div>
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
                    </div>-->
                </div>
                
               
                	</div>
                </div>
                
                
                
                
                
                
        	</div>
        </div>
        
	</div><!-- #primary -->

<?php

get_footer();
