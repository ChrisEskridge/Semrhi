<?php
/**
Template Name: clinics page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Clinics  ›  Hattiesburg  ›</span>  <span style="white-space:nowrap">Hattiesburg Family Health Center</span>
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
                                            <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
    
    
                                        </div>
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="clinic-menu-1-content">
                            	<?php $clinic_query = new WP_Query(array( 'post_type' => 'clinic', 'posts_per_page'=>1, )); ?>
                            	<?php if ( $clinic_query->have_posts() ) : while ( $clinic_query->have_posts() ) : $clinic_query->the_post(); ?>
                                
                                        <div class="clinics-address">
                                        	<div class="address-title">
                                        		ADDRESS  
                                            </div>
                                            <div class="address-content">
                                        		<?php echo get_field('street_address') ?><br>
                                                <?php echo get_field('po_box') ?><br>
                                                <?php echo get_field('city') ?>, <?php echo get_field('state') ?> <?php echo get_field('zip-code') ?> 
                                                
                                                <div class="map">
                                                	MAP
                                                </div>
                                            </div>
    
                                        </div>
                                        
                                        <div class="clinics-address">
                                        	<div class="address-title">
                                        		CONTACT  
                                            </div>
                                            <div class="address-content">
                                        		<?php echo get_field('phone') ?><br>
												<?php echo get_field('email') ?>

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
    <?php endwhile; endif; ?>
                                        </div>
                                        
                            </div>
                            
                            
                            
                            
                            
                            
                            
                            
                                    
                                    
                                    
                                
                        
                            
                        </div>
                	</div>
                </div>
                <div class="clinic-menu-1">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="clinic-menu-sidebar-box">
                        
                        	<div class="clinic-menu-1-title">
                                	<div class="clinics-menu-title-text">
                                		Services Offered
									</div>
									
                            </div>
                            <div class="contact-sidebar-menu-item-wrapper">
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Annual Checkups


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Comprehensive Exams



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
										Diabetic Screening/Care



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Diagnostic Lab



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Family Planning


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		General Medical Care



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Immunizations



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Mammogram Referral



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Minor Injury Treatment



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Nutrition Education



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Physicals


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		X-Ray Referral


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                            
                            
                            
                            </div>
                                    
                                    
                                    
                                
                        
                            
                        </div>
                	</div>
                </div>
                <div class="clinic-menu-1b">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="clinic-menu-sidebar-box">
                        
                        	<div class="clinic-menu-1-title">
                                	<div class="clinics-menu-title-text">
                                		Clinic Information
									</div>
									
                            </div>
                            <div class="clinic-menu-1-content">
                            	
                                        <div class="clinics-employee-box">
                                        	
                                            <div class="employee-photo">
                                        		 <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
                                            </div>
    										<div class="employee-name">
                                        		<span style="color:#58595B; font-weight:500;">Shermanda Brumfield</span><br>  <span style="white-space:nowrap; font-size:12px;">FNP-BC</span>
                                            </div>
                                        </div>
                                        
                                        <div class="clinics-employee-box">
                                        	
                                            <div class="employee-photo">
                                        		 <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
                                            </div>
    										<div class="employee-name">
                                        		<span style="color:#58595B; font-weight:500;">Dr. Quenyatta</span> <br> <span style="white-space:nowrap; font-size:12px;"></span>  
                                            </div>
                                        </div>
                                        
                                        <div class="clinics-employee-box">
                                        	
                                            <div class="employee-photo">
                                        		 <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
                                            </div>
    										<div class="employee-name">
                                        		<span style="color:#58595B; font-weight:500;">Annie Green</span> <br> <span style="white-space:nowrap; font-size:12px;">FNP-BC</span>  
                                            </div>
                                        </div>
                                        
                                        <div class="clinics-employee-box">
                                        	
                                            <div class="employee-photo">
                                        		 <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
                                            </div>
    										<div class="employee-name">
                                        		<span style="color:#58595B; font-weight:500;">Stephanie Myers</span> <br> <span style="white-space:nowrap; font-size:12px;">NP</span>  
                                            </div>
                                        </div>
                                        
                                        <div class="clinics-employee-box">
                                        	
                                            <div class="employee-photo">
                                        		 <img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
                                            </div>
    										<div class="employee-name">
                                        		<span style="color:#58595B; font-weight:500;">Dr. Catharine Thomas</span> <br> <span style="white-space:nowrap; font-size:14px;"></span>  
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
