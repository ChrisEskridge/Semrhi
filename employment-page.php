<?php
/**
Template Name: employment page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">About Us  ›</span>  <span style="white-space:nowrap">Employment Opportunities</span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                
                
                
                
                
                
                <div class="nav" onclick="toggle_visibility('faq-sidebar')" style="cursor:pointer">
        	<div class="menu-button">
        		More About Us
            </div>
        </div>
            <!--<div id="faq-sidebar" class="faq-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        
                        <?php $about_query = new WP_Query(array( 'post_parent' => 293 , 'post_type' => 'page', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100 )); ?>
                        
                        	<?php if( $about_query->have_posts() ) : 
									while( $about_query->have_posts() ) : 
									$about_query->the_post(); ?>
                                    
                                    
                                    <a  href="<?php the_permalink(); ?>"><div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                    <?php the_title(); ?>
                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                    
                                </div>
                                </div></a>
                        
                        	<?php endwhile; endif; ?>

							<?php wp_reset_query(); ?>
                        
                            
                            
                            
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>-->
                
                
                
                
                
                
                
                
                <div class="service-form-employment">
                <div class="faq-info-restricter">
                
                <?php
		//while ( have_posts() ) : the_post();

			//get_template_part( 'template-parts/content', get_post_format() );

			

		//endwhile; // End of the loop.
		?>
                
                    <div class="employment-info2">
                        Available Jobs
                    </div>
                </div>
                    <div class="faq-content">
                    	<div class="career-box-wrap">
                        <?php $career = new WP_Query(array( 'post_type' => 'career', 'orderby' => 'title', 'order' => 'asc', 'posts_per_page' => 100 )); ?>
                        
                        	<?php if( $career->have_posts() ) : 
									while( $career->have_posts() ) : 
									$career->the_post(); ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                                
                                <div class="career-box">
                                		<div class="location-box">
                                    		<?php the_field('location'); ?>
                                    	</div>
                                    	<div class="title-box">
                                    		<?php the_field('job_title'); ?>
                                    	</div>
                                        <!--<div class="details-box">
                                        	<a  href="<?php the_permalink(); ?>">
                                            	View Details
                                    		</a>
                                        </div>-->
                                        
                                            <a class="job-a"  href="<?php the_permalink(); ?>">
                                                <div class="apply">
                                                    <div class="apply-title">
                                                        VIEW DETAILS
                                                    </div>
                                                    <div class="apply-image">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                                    </div>
                                                </div>
                                            </a>
                                </div>
                                
                              
                                
                                
                                
                                
                                
                                
                                
                                
                                
                        
                        	<?php endwhile; endif; ?>

							<?php wp_reset_query(); ?>
                            </div>
                    </div>
                </div>
                
                <!--<div class="faq-form">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        Patient Testimonials
                    </div>
                </div>
                    <div class="faq-content">
                        video

                    </div>
                </div>-->
                <!--<div class="faq-form">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        Any features/recognition from local news or media
                    </div>
                </div>
                    <div class="faq-content">
                        video

                    </div>
                </div>-->
                
                <div class="service-form-employment">
                <div class="faq-info-restricter">
                    
                </div>
                    <div class="faq-content">
                    <div class="employment-box">
                    	<div class="employment-info">
                        	To apply for a position online

                    	</div>
                        <div class="employment-content2">
                        	Click “View Details” on the position you are interest in applying for. Fill out the online application form, attaching your resume and/or cover letter, and click “Submit”.
                        </div>
                    	<div class="employment-info">
                        	Contact Human Resources:
                    	</div>
                        <div class="employment-content">
                        	
                            Phone&nbsp............&nbsp<?php echo get_field('phone') ?><br>
                            Fax&nbsp...................&nbsp<?php echo get_field('fax') ?><br>
                            
                        </div>
                    </div>
                    <div class="employment-box2">
                        <div class="employment-info">
                        	To apply for a position by mail or email
                    	</div>
                        
                        
                        <div class="employment-content">
                        	Please place the JOB TITLE for which you are applying along with your COMPLETE MAILING ADDRESS on your application and/or cover letter. Applications and/or resumes received without a specific open job title will not be considered for employment. We wish you much success in your career advancement.
                        </div>
                        
                        <div class="employment-content1">
                        
                        	Mail applications and resumes to:
                        <div class="address-wrap">
                        <?php if( have_rows('address') ): ?>

	
    

	<?php while( have_rows('address') ): the_row(); 

		// vars
		$streetaddress = get_sub_field('street_address');
		$po_box = get_sub_field('po_box');
		$city = get_sub_field('city');
		$state = get_sub_field('state');
		$zip_code = get_sub_field('zip_code');
		$name_of_recipient = get_sub_field('name_of_recipient');

		?>


<div class="address">
<?php if( $name_of_recipient ): ?>
				<?php echo $name_of_recipient; ?><br>
			<?php endif; ?>
            
<?php if( $streetaddress ): ?>
				<?php echo $streetaddress; ?><br>
			<?php endif; ?>

<?php if( $po_box ): ?>
				<?php echo $po_box; ?><br>
			<?php endif; ?>  

<?php echo $city; ?>, <?php echo $state; ?> <?php echo $zip_code; ?><br><br>

	</div>
    	

	<?php endwhile; ?>

	

<?php endif; ?>
</div>
                      </div>  
                       <div class="employment-content"> 
                        
                        OR <span style="font-style:italic">email applications and resumes to</span>: &nbsp&nbsp<?php echo get_field('e-mail') ?>
                        
                        </div>
                        	<!--SeMRHI<br>
5488 US Hwy 49	<br>		
Hattiesburg, MS 39401<br><br>

P.O. Box 1729<br>
Hattiesburg, MS 39403<br><br>-->
					

                        </div>
                    
     <!--<p style="margin-top:20px; font-size:12px; line-height:16px;">*We appreciate your interest in Southeast Mississippi Rural Health Initiative, Inc. Unfortunately, we only accept applications and resumes for CURRENT JOB OPENINGS. Please place the JOB TITLE for which you are applying along with your COMPLETE MAILING ADDRESS on your application and/or cover letter. Applications and/or resumes received without a specific open job title will not be considered for employment. We wish you much success in your career advancement.</p>-->                   






                    </div>
                </div>
                
                
                
        	</div>
        </div>
        
	</div><!-- #primary -->

<?php

get_footer();
