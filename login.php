<?php
/**
Template Name: login
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">About Us  ›</span>  <span style="white-space:nowrap">Board Login</span>
            	</div>
            	
        	</div>
        </div>
        <div class="contact-menu-form-wrapper">
        	<div class="contact-menu-form-restricter">
                <?php wp_login_form(); ?>
                
        	</div>
        </div>
        
	</div><!-- #primary -->

<?php

get_footer();
