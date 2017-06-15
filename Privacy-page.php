<?php
/**
Template Name: privacy page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Patient Resources  ›  </span><span style="white-space:nowrap"><?php the_title(); ?></span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                
                
                
                
                
                
                <!--<div class="faq-sidebar">
                	<div class="contact-sidebar-wrapper">
                        
                        <div class="contact-sidebar-box">
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link" onclick="toggle_visibility('faq-item3')" style="cursor:pointer">
                                	<div class="menu-title-text">
                                		<?php the_title(); ?>



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                    
                                </div>
                                <!--<div class="faq-menu-item-content">
                                	This notice describes how medical information about you may be used [ . . . ]
 
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

                                    </div>
                        </div>
                                </div>-->
                            <!--</div>
                            
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>-->
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="privacy-form">
                <div id="faq-item3">
                <div class="faq-info-restricter">
                
                
                <?php
		while ( have_posts() ) : the_post();?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' );
			?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php semrhi_com_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	</article><!-- #post-## -->

		<?php endwhile; // End of the loop.
		?>

	

			
			<div class="left-50">
            	
					<?php echo get_field('left_column') ?>
				
                    </div>
                    <div class="right-50">
                    <?php echo get_field('right_column') ?>
                    </div>
			
            

                
                    <!--<div class="faq-info">
                        Notice of Privacy Practices

                    </div>-->
                    
                </div>     <!--get_template_part( 'template-parts/content', get_post_format() );-->
                    <!--<div class="faq-content">
                        This notice describes how medical information about you may be used [ . . . ]
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
