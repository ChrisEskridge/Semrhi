<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package semrhi.com
 */

?>
</div>
	

	<footer class="footer">
    <div class="shadow2">
        </div>
    	<div class="footer-wrapper">
		<div class="social">
        
        
        
        
        
        
        	<a href="<?php echo get_field('twitter_address', 4) ?>">
            <div class="social-link">
            	<div class="social-image">
                	<img src="<?php bloginfo('template_directory'); ?>/images/twitter.jpg" style="width:20px; height:20px;">
                </div>
                <div class="social-text">
                	Follow us on Twitter
                </div>
                
            </div>
            </a>
            
            
            
            <a href="<?php echo get_field('facebook_address', 4) ?>">
            <div class="social-link">
            	<div class="social-image">
                	<img src="<?php bloginfo('template_directory'); ?>/images/facebook.jpg" style="width:20px; height:20px;">
                </div>
                <div class="social-text">
                	Like us on Facebook
                </div>
            </div>
            </a>
            
            <a href="<?php echo get_field('instagram_address', 4) ?>">
            <div class="social-link">
            	<div class="social-image">
                	<img src="<?php bloginfo('template_directory'); ?>/images/insta.png" style="width:20px; height:20px;">
                </div>
                <div class="social-text">
                	Like us on Instagram
                </div>
            </div>
            </a>
            
        </div>
        
            
        <div class="footer-links">
        	<a href="<?php the_permalink(125); ?>">
        	<div class="link">
            	<div class="link-image">
                	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow.png" style="width:20px; height:20px;">
                </div>
                <div class="link-text">
                	Employment Opportunities
                </div>
            </div>
            </a>
            <a href="<?php the_permalink(114); ?>">
            <div class="link">
            	<div class="link-image">
                	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow.png" style="width:20px; height:20px;">
                </div>
                <div class="link-text">
                	Patient Rights & Responsibilities
                </div>
            </div>
            </a>
            <a href="<?php the_permalink(116); ?>">
            <div class="link">
            	<div class="link-image">
                	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow.png" style="width:20px; height:20px;">
                </div>
                <div class="link-text">
                	Notice of Privacy Practices
                </div>
            </div>
            </a>
            <a href="http://intranet.semrhi.com/quizapp/login/index.php">
            <div class="link">
            	<div class="link-image">
                	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow.png" style="width:20px; height:20px;">
                </div>
                <div class="link-text">
                	Employee Intranet Login
                </div>
            </div>
        </div>
        </a>
        <div class="brand-info">
        	<div class="footer-info">
                <div class="footer-logo">
                    <img src="<?php bloginfo('template_directory'); ?>/images/image_logo.jpg" style="width:75px; height:75px;">
                </div>
                <div class="footer-text">
                    <span style="font-weight:bold; color:#ABBFAF; font-size:11px; line-height:10px;">
                        Southeast Mississippi Rural Health Initiative, Inc.<br>
                    </span>
                    <span style="color:#83A189; font-size:11px; line-height:10px;">
                        is an equal opportunity service provider.
                        This health center is a Health Center Program grantee 
                        under 42 U.S.C. 254b, and a deemed Public Health 
                        Service employee under 42 U.S.C. 233(g)-(n).<br>
                    </span>
                    <span style="font-weight:100; color:#708074; font-size:11px; line-height:10px;">
                        ©2016 Southeast Mississippi Rural Health Initiative, Inc. All rights reserved.
                    </span>
                </div>
        	</div>
        </div>
        </div>
	</footer>



<?php wp_footer(); ?>


</body>
</html>
