<?php
/**
Template Name: officers directors page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">About Us  ›</span>  <span style="white-space:nowrap">Officers & Directors</span>
            	</div>
            	
        	</div>
        </div>
        <div class="officers-directors-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                
                <div class="upper-wrap">
                
                
                <div class="officers-directors-form">
                <div class="faq-info-restricter">
                    <div class="officers-directors-info">
                        A Letter from the CEO
                    </div>
                </div>
                    <div class="faq-content">
                    <span style="font-weight:700">Welcome to Southeast Mississippi Rural Health Initiative, Inc. (SeMRHI)</span><br><br>
                    <?php echo get_field('a_letter_from_the_ceo_') ?>
                       
                    </div>
                </div>
                <div class="officers-directors-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                        	<div class="officers-directors-side-restricter">
                        	<img src="<?php echo get_field('ceo_photo') ?>" style="width:100%;">
                            </div>
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>
                
                
                </div>
            </div>    
        </div>        
                
                
                
                
                
                
                
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
                
                
                
                
                
                
                
                
                
                
                <div class="officers">
                
                <div class="officers-restricter">
                	<div class="officers-title">
                    	Officers
                    </div>
                    <div class="officers-content">
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
                   
                   <?php if( have_rows('officers') ): ?>

	
    

	<?php while( have_rows('officers') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$name = get_sub_field('name');
		$title = get_sub_field('title');

		?>
                   
                   
                    
                    
                    <div class="officers-content-wrap">
                    	<div class="officers-content-item">
                        	<div class="officers-image">
                            
                            	<?php if( $image ): ?>
				<img src="<?php echo $image['url']; ?>" style="width:100%;" alt="<?php echo $image['alt'] ?>" />
<?php else: ?>
<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
<?php endif; ?>
                                
                            	
                            </div>
                            <div class="officers-text">
                            	<span class="name">
                                	<?php echo $name; ?><br>
                                </span>
                                <span class="title">
                                	<?php if( $title ): ?>
				<?php echo $title; ?>
			<?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    
 <?php endwhile; ?>

	

<?php endif; ?>                   
                    
                    
                    
                    
                    
                    
                    
                    
                   
                    </div>
                    
                 </div>   
                    
                    
                </div>
                <div class="directors">
                	<div class="officers-restricter">
                	<div class="directors-title">
                    	Directors
                    </div>
                    <div class="officers-content">
                    
                    
                    
                    
                    
                    
                    
                   
                    
                    
                    <?php if( have_rows('directors') ): ?>

	
    

	<?php while( have_rows('directors') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$name = get_sub_field('name');
		$title = get_sub_field('title');

		?>
                    
                    
                    <div class="officers-content-wrap">
                    	<div class="officers-content-item">
                        	<div class="officers-image">
                            
                            	<?php if( $image ): ?>
				<img src="<?php echo $image['url']; ?>" style="width:100%;" alt="<?php echo $image['alt'] ?>" />
<?php else: ?>
<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:100%;">
<?php endif; ?>
                            
                            	
                            </div>
                            <div class="directors-text">
                            	<span class="name">
                                	<?php echo $name; ?><br>
                                </span>
                                <span class="title">
                                	<?php if( $title ): ?>
				<?php echo $title; ?>
			<?php endif; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    
      <?php endwhile; ?>

	

<?php endif; ?>              
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </div>
                    
                 </div>
                </div>
                
                
        	
        
        
	</div><!-- #primary -->

<?php

get_footer();
