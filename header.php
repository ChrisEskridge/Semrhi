<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package semrhi.com
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body class="body" <?php body_class(); ?>>
<div class="main-wrapper">
	
	<header class="header">
    	<div class="top-bar">
        <div class="mini-top-bar">
            </div>
        	<div class="top-bar-wrapper">
            
            	<div class="top-bar-item2">
                	<a href="https://semrhi.followmyhealth.com/Login/Home/Index?authproviders=0&returnArea=PatientAccess#/Index">
                		<div class="top-bar-item-image">
                    		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:20px; height:20px;">
                    	</div>
                    	<div class="top-bar-item-text">
                    		MySeMRHI
                    	</div>
                	</a>
            	</div>
            	<div class="top-bar-item">
                	<a href="<?php echo get_permalink(411); ?>">
                		<div class="top-bar-item-image">
                    		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-globe.png" style="width:20px; height:20px;">
                    	</div>
                    	<div class="top-bar-item-text">
                    		En Español
                    	</div>
                	</a>
            	</div>
            	<div class="top-bar-item">
            		<div class="top-bar-item-image">
                    	
                		<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-phone.png" style="width:20px; height:20px;">
                	</div>
                	<div class="top-bar-item-text">
                		601-545-8700
                	</div>
            	</div>
            </div>
        </div>
        <div class="brand">
        	<div class="logo-outter">
        		<div class="logo-wrapper">
                	<a href="<?php echo get_permalink(4); ?>">
            		<img src="<?php bloginfo('template_directory'); ?>/images/logo.png">
                    </a>
            	</div>
            	<div class="nav2">
        			<ul class="big-menu">
                    
                    
                    	
                        
              			<a class="main-nav" href="javascript:slideonlyone('clinics');"><li class="big-li3" style="cursor:pointer"><img src="<?php bloginfo('template_directory'); ?>/images/light-plus.png" style="width:10px; height:10px;"> Clinics</li></a>
                        <a class="main-nav" href="javascript:slideonlyone('services');"><li class="big-li3" style="cursor:pointer"><img src="<?php bloginfo('template_directory'); ?>/images/light-plus.png" style="width:10px; height:10px;"> Services</li></a>
                        <a class="main-nav" href="javascript:slideonlyone('pharmacy');"><li class="big-li3" style="cursor:pointer"><img src="<?php bloginfo('template_directory'); ?>/images/light-plus.png" style="width:10px; height:10px;"> Pharmacy</li></a>
                        <a class="main-nav" href="javascript:slideonlyone('about_us');"><li class="big-li3" style="cursor:pointer"><img src="<?php bloginfo('template_directory'); ?>/images/light-plus.png" style="width:10px; height:10px;"> About Us</li></a>
                        <a class="main-nav" href="javascript:slideonlyone('patient_resources');"><li class="big-li3" style="cursor:pointer"><img src="<?php bloginfo('template_directory'); ?>/images/light-plus.png" style="width:10px; height:10px;"> Patient Resources</li></a>
                        
                        
                    
                    
                    	<!--<li class="big-li3" onclick="toggle_visibility('clinics')" style="cursor:pointer">Clinics</li>
                        <li class="big-li3" onclick="toggle_visibility('services')" style="cursor:pointer">Services</li></a>
                        <li class="big-li3" onclick="toggle_visibility('pharmacy')" style="cursor:pointer">Pharmacy</li>
                        <li class="big-li3" onclick="toggle_visibility('about_us')" style="cursor:pointer">About Us</li></a>
                        <li class="big-li3" onclick="toggle_visibility('patient_resources')" style="cursor:pointer">Patient Resources</li></a>-->
                        
                        
                        
                        
                        
                        <a class="main-nav" href="<?php echo get_permalink(34); ?>"><li class="big-li2">Contact Us</li></a>
                    </ul>
        		</div>
            </div>
        </div>
        <div class="nav" onclick="toggle_visibility('dropdown2')" style="cursor:pointer">
        	<div class="menu-button">
        		MENU
            </div>
        </div>
        <div id="dropdown2" class="dropdown2">
        


			<a href="javascript:slideonlyone('clinics');">
            <div class="sub-nav"  style="cursor:pointer">
        	<div class="menu-button">
        		Clinics
            </div>
        	</div>
            </a>
            
        	<div id="clinics" class="clinics newboxes2">
            <div class="clinics-restricter">
            	<div class="clinic-left-wrapper">
                <!--<img src="<?php bloginfo('template_directory'); ?>/images/location.jpg" style=" max-width:100%;">
                    <p class="image-text"> Women’s Health Center Hattiesburg </p>-->
                    <?php wp_reset_query(); ?>
                	<div class="find-clinic">
                    
                    	


                    	<span style="font-weight:600;  margin-bottom:7px; display:inline-block">Find A Clinic Near You:</span><br>
                        <span style="font-weight:400; display:inline-block">Enter your ZIP code</span>
                        <div class="text-field">
                        
                        <?php echo do_shortcode('[SLPLUS center_map_at="Hattiesburg MS 39402"]'); ?>
                        <?php wp_reset_query(); ?>
                        	<!--<form>
  
  <input style="width:100%; text-align:center;"" type="text" name="firstname"><br>
  
</form>-->
                        </div>
                        <!--<div class="submit-button2">
                        	SUBMIT
                        </div>-->
                    </div>
                </div>
                <div class="center-wrapper">
                	<ul class="small-sub-ul">
                    
                    
                    	<li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('beaumont-clinics');"><div class="services-link" >Beaumont
                        	<div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                                    
                        	<ul id="beaumont-clinics" class="big-sub newboxes3">
                            <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Beaumont')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('brooklyn-clinics');"><div class="services-link" >Brooklyn
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                        	<ul id="brooklyn-clinics" class="big-sub newboxes3">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Brooklyn')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('hattiesburg-clinics');"><div class="services-link" >Hattiesburg
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                        	<ul id="hattiesburg-clinics" class="big-sub newboxes3">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Hattiesburg')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('lumberton-clinics');"><div class="services-link" >Lumberton
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                        	<ul id="lumberton-clinics" class="big-sub newboxes3">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Lumberton')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('new-augusta-clinics');"><div class="services-link" >New Augusta
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                        	<ul id="new-augusta-clinics" class="big-sub newboxes3">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'New Augusta')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('petal-clinics');"><div class="services-link" >Petal
                        	<div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                                    
                        	<ul id="petal-clinics" class="big-sub newboxes3">
                            <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Petal')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('picayune-clinics');"><div class="services-link" >Picayune
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                        	<ul id="picayune-clinics" class="big-sub newboxes3">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Picayune')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('seminary-clinics');"><div class="services-link" >Seminary
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                        	<ul id="seminary-clinics" class="big-sub newboxes3">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Seminary')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul></div>
                        </li>
                        
                        
                        
                        <li class="sub-li"  style="cursor:pointer"><div class="services-link2" ><a style="color:#68806e;" href="javascript:slideone('sumrall-clinics');"><div class="services-link" >Sumrall
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                                    </div></a>
                        	<ul id="sumrall-clinics" class="big-sub newboxes3">
                                
                                
                                
                                 <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Sumrall')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible">
								
                                <div class="menu-title-text3">
								<?php the_title(); ?>
                                </div>
                                
                                
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                                
                                
                            	
                                
                            </ul></div>
                        </li>
                        
                        
                    </ul>
                </div>
                <div class="right-wrapper">
                	<div id="no-clinics">
                                
                                
                                Click City to View Clinics
                            	
                                
                            </div>
                </div>
                </div>
                
            </div>
            
        
        
        
        
        
        
        	<!--<div class="clinics">
            	<div class="left">
                	<img src="<?php bloginfo('template_directory'); ?>/images/location.jpg" style=" max-width:100%;">
                    <p class="image-text"> Women’s Health Center Hattiesburg </p>
                </div>
                <div class="center">
                	<ul class="sub-ul">
                    	<li class="sub-li">Beaumont
                        	<ul class="big-sub">
                            	<li class="sub-li">Beaumont Family Health Center</li>
                            </ul>
                        </li>
                        
                        <li class="sub-li">Brooklyn
                        	<ul class="big-sub">
                            	<li class="sub-li">Brooklyn Family Health Center</li>
                            </ul>
                        </li>
                        <li class="sub-li">Hattiesburg
                        	<ul class="big-sub">
                            	<li class="sub-li">Hattiesburg Community Dental Center</li>
                                <li class="sub-li">Hattiesburg Family Health Center</li>
                                <li class="sub-li">Hattiesburg High School and Community Clinic</li>
                                <li class="sub-li">Hattiesburg High School Campus Clinic</li>
                                <li class="sub-li">Hattiesburg Public School and Community Clinic</li>
                                <li class="sub-li">(Hattiesburg) Minor Care Clinic</li>
                                <li class="sub-li">(Hattiesburg) N.R. Burger School and Community Clinic</li>
                                <li class="sub-li">(Hattiesburg) Women's Health Center</li>
                            </ul>
                        </li>
                        <li class="sub-li">Lumberton
                        	<ul class="big-sub">
                            	<li class="sub-li">Lumberton Family Health Center</li>
                            </ul>
                        </li>
                        <li class="sub-li">New Augusta
                        	<ul class="big-sub">
                            	<li class="sub-li">New Augusta Family Health Center</li>
                            </ul>
                        </li>
                        <li class="sub-li">Petal
                        	<ul class="big-sub">
                            	<li class="sub-li">Brooklyn Family Health Center</li>
                            </ul>
                        </li>
                        <li class="sub-li">Picayune
                        	<ul class="big-sub">
                            	<li class="sub-li">Picayune Family Health Center</li>
                            </ul>
                        </li>
                        <li class="sub-li">Seminary
                        	<ul class="big-sub">
                            	<li class="sub-li">Seminary Family Health Center</li>
                            </ul>
                        </li>
                        <li class="sub-li">Sumrall
                        	<ul class="big-sub">
                            	<li class="sub-li">Sumrall Family Health Center</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
            </div>-->
            <a href="javascript:slideonlyone('services');">
            <div class="sub-nav"  style="cursor:pointer">
        	<div class="menu-button">
        		Services
            </div>
        	</div>
            </a>
            
            <div id="services" class="services newboxes2">
            <div class="clinics-restricter">
            <div class="qtr1-wrapper">
            	<div class="qtr1">
                	<div class="dropdown-title1">
                    	<img class="serv-image" src="<?php bloginfo('template_directory'); ?>/images/primary-care.png" style="width:30px; height:30px; float:left;">
                        <div class="serv-title">
                        <strong>
                    	PRIMARY CARE
                        </strong>
                        </div>
                    </div>
                	<ul class="serv-ul">
                    
                    
                    
                    	<?php $query = new WP_Query(array( 'post_type' => 'service', 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'asc','cat' => '3' )); ?>
                    
                    	<?php if( $query->have_posts() ) : 
								while( $query->have_posts() ) : 
								$query->the_post(); ?>
                    
                    		
                            <li class="sub-li2"><a class="services-link" href="<?php the_permalink(); ?>"><div class="menu-title-text3"><?php the_title();  ?></div><div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></a></li>
                            
                            
                    
                    
                    
                    	<?php endwhile; endif; ?>

						<?php wp_reset_query(); ?>
                    
                    
                    
                    
                    
                    
                        
                    </ul>
                </div>
                </div>
                <div class="qtr1-wrapper">
                <div class="qtr2">
                	<div class="dropdown-title2">
                    	<img class="serv-image" src="<?php bloginfo('template_directory'); ?>/images/specialty-services.png" style="width:30px; height:30px; float:left;">
                        <div class="serv-title">
                        <strong>
                        SPECIALTY SERVICES
                        </strong>
                        </div>
                    </div>
                	<ul class="serv-ul">
                    
                    
                    
                    <?php $query = new WP_Query(array( 'post_type' => 'service', 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'asc','cat' => '4' )); ?>
                    
                    	<?php if( $query->have_posts() ) : 
								while( $query->have_posts() ) : 
								$query->the_post(); ?>
                    
                    		
                            <li class="sub-li2"><a class="services-link" href="<?php the_permalink(); ?>"><div class="menu-title-text3"><?php the_title();  ?></div>
                            <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></a></li>
                            
                    
                    
                    
                    	<?php endwhile; endif; ?>

						<?php wp_reset_query(); ?>
                    
                    
                    
                    
                    
                    
                       
                    </ul>
                </div>
                </div>
                <div class="qtr1-wrapper">
                <div class="qtr3">
                	<div class="dropdown-title3">
                    	<img class="serv-image" src="<?php bloginfo('template_directory'); ?>/images/dental-services.png" style="width:30px; height:30px; float:left;">
                        <div class="serv-title">
                        <strong>
                        DENTAL SERVICES
                        </strong>
                        </div>
                    </div>
                	<ul class="serv-ul">
                    
                    
                    <?php $query = new WP_Query(array( 'post_type' => 'service', 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'asc','cat' => '5' )); ?>
                    
                    	<?php if( $query->have_posts() ) : 
								while( $query->have_posts() ) : 
								$query->the_post(); ?>
                    
                    		
                            <li class="sub-li2"><a class="services-link" href="<?php the_permalink(); ?>"><div class="menu-title-text3"><?php the_title();  ?></div>
                            <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></a></li>
                            
                    
                    
                    
                    	<?php endwhile; endif; ?>

						<?php wp_reset_query(); ?>
                    
                    
                    
                        
                    </ul>
                </div>
                </div>
                <div class="qtr1-wrapper">
                <div class="qtr4">
                	<div class="dropdown-title4">
                    	<img class="serv-image" src="<?php bloginfo('template_directory'); ?>/images/social-services.png" style="width:30px; height:30px; float:left;">
                        <div class="serv-title">
                        <strong>
                        SOCIAL SERVICES
                        </strong>
                        </div>
                    </div>
                	<ul class="serv-ul">
                    
                    
                    <?php $query = new WP_Query(array( 'post_type' => 'service', 'posts_per_page' => 100, 'orderby' => 'title', 'order' => 'asc','cat' => '6' )); ?>
                    
                    	<?php if( $query->have_posts() ) : 
								while( $query->have_posts() ) : 
								$query->the_post(); ?>
                    
                            <li class="sub-li2"><a class="services-link" href="<?php the_permalink(); ?>"><div class="menu-title-text3"><?php the_title();  ?></div>
                            <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></a></li>
                            
                    
                    
                    
                    	<?php endwhile; endif; ?>

						<?php wp_reset_query(); ?>
                    
                    
                        
                    </ul>
                </div>
                </div>
                </div>
            </div>
            
            
            
            <a href="javascript:slideonlyone('pharmacy');">
            <div class="sub-nav"  style="cursor:pointer">
        	<div class="menu-button">
        		Pharmacy
            </div>
        	</div>
            </a>
            
            <div id="pharmacy" class="pharmacy newboxes2">
            <div class="clinics-restricter">
            	<div class="big-left">
                	<img src="<?php bloginfo('template_directory'); ?>/images/pharmacy.jpg" style=" max-width:100%;">
                    <p class="image-text"> Hattiesburg Pharmacy Assistance Center </p>
                </div>
                <div class="single">
                	<ul class="sub-ul">
                        <a href="<?php the_permalink(97); ?>">
                    	<li class="sub-li"><div class="services-link" >Pharmacy Assistance Center
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></div></li>
                        </a>
                        <a href="<?php the_permalink(101); ?>">
                        <li class="sub-li3"><div class="services-link" >Prescription Assistance Program
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></div></li>
                        </a>
                        
                    </ul>
                </div>
                </div>
                
            </div>
            
            
            
            <a href="javascript:slideonlyone('about_us');">
            <div class="sub-nav"  style="cursor:pointer">
        	<div class="menu-button">
        		About Us
            </div>
        	</div>
            </a>
            
            <div id="about_us" class="about-Us newboxes2">
            <div class="clinics-restricter">
            	<div class="big-left">
                	<img src="<?php bloginfo('template_directory'); ?>/images/about-us.jpg" style=" max-width:100%;">
                    <p class="image-text"> About Us </p>
                </div>
            	<div class="single">
                	<ul class="sub-ul">
                    
                    
                    <?php $query = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 293, 'orderby' => 'title', 'order' => 'asc' )); ?>
                    
                    <?php if( $query->have_posts() ) : 
							while( $query->have_posts() ) : 
							$query->the_post(); ?>
                    
                    
                    	<li class="sub-li"><a href="<?php the_permalink(); ?>"><div class="services-link" ><?php the_title(); ?>
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></div></a></li>
                        
                    
                    <?php endwhile; endif; ?>

					<?php wp_reset_query(); ?>
                    
                    
                        
                    </ul>
                </div>
                </div>
            </div>
            <!--<div class="Patient-Resources">
            	<div class="left">
                	<img src="<?php bloginfo('template_directory'); ?>/images/location.jpg" style=" max-width:100%;">
                    <p class="image-text"> Women’s Health Center Hattiesburg </p>
                </div>
                <div class="center">
                	<ul class="sub-ul">
                    	<li class="sub-li">Frequentyly Asked Questions</li>
                        <li class="sub-li">Insurance & Payment Information</li>
                        <li class="sub-li">Patient Forms</li>
                        <li class="sub-li">School Forms</li>
                        <li class="sub-li">Patient Rights & Responsibilities</li>
                        <li class="sub-li">Petal</li>
                        <li class="sub-li">Informative Links
                        	<ul class="big-sub">
                    		<li class="sub-li">City of Hattiesburg</li>
                        	<li class="sub-li">Forrest General Hospital - Hattiesburg, MS</li>
                        	<li class="sub-li">Highland Community Hospital - Picayune, MS</li>
                        	<li class="sub-li">MACSS Treatment and Resources</li>
                        	<li class="sub-li">Medical Recall</li>
                        	<li class="sub-li">Mississippi Primary Health Care Association</li>
                        	<li class="sub-li">National Association of Community Health Centers</li>
                    		</ul>
                        </li>
                    </ul>
                </div>
                
            </div>-->
           <script type="text/javascript"> 
	
	function slideone(thechosenone){      
           
     jQuery('.newboxes3').each(function(index) {
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
	
	function slideonlyone(thechosenone){      
           
     jQuery('.newboxes2').each(function(index) {
          if (jQuery(this).attr("id") == thechosenone) {
               jQuery(this).slideToggle(900);
          }
          else {
               jQuery(this).slideUp(100);
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
<!--</script>  

			<a href="javascript:slideonlyone('patient_resources');">
            <div class="sub-nav"  style="cursor:pointer">
        	<div class="menu-button">
            
        		Patient Resources
            </div>
        	</div>
            </a>
            
            <div id="patient_resources" class="patient_resources newboxes2">
            <div class="clinics-restricter">
            	<div class="big-left">
                	<img src="<?php bloginfo('template_directory'); ?>/images/resources.jpg" style=" max-width:100%;">
                    <p class="image-text"> Patient Resources </p>
                </div>
            	<div class="single">
                	<ul class="sub-ul">
                    
                    
                    <?php $query = new WP_Query(array( 'post_type' => 'page', 'post_parent' => 295, 'orderby' => 'title', 'order' => 'asc' )); ?>
                    
                    <?php if( $query->have_posts() ) : 
							while( $query->have_posts() ) : 
							$query->the_post(); ?>
                    
                    
                    	<li class="sub-li"><a href="<?php the_permalink(); ?>"><div class="services-link" ><?php the_title(); ?>
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div></div></a></li>
                        
                    
                    <?php endwhile; endif; ?>

					<?php wp_reset_query(); ?>
                    
                    
                    
                        
                        
                        
                    </ul>
                </div>
                
            </div>
            
            
            </div>
            
            <a href="<?php echo get_permalink(34); ?>">
        	<div class="sub-nav">
        	<div class="menu-button">
        		Contact US
            </div>
        	</div>
        	</a>
            
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        	
        
        
        <div class="dropdown">
        	<ul>
            	<li>
                	<div class="dropdown-title">
                    	Clinics
                    </div>
                	<ul class="sub-ul">
                    	<li class="sub-li">Beaumont</li>
                        <li class="sub-li">Brooklyn</li>
                        <li class="sub-li">Hattiesburg</li>
                        <li class="sub-li">Lumberton</li>
                        <li class="sub-li">New Augusta</li>
                        <li class="sub-li">Petal</li>
                        <li class="sub-li">Picayune</li>
                        <li class="sub-li">Seminary</li>
                        <li class="sub-li">Sumrall</li>
                    </ul>
                </li>
                
                
                
                <div id="clinics" class="clinics">
            <div class="clinics-restricter">
            	<div class="left-wrapper">
                	<img src="<?php bloginfo('template_directory'); ?>/images/location.jpg" style=" max-width:100%;">
                    <p class="image-text"> Women’s Health Center Hattiesburg </p>
                </div>
                <div class="center-wrapper">
                	<ul class="small-sub-ul">
                    	<li class="sub-li" onclick="toggle_visibility('beaumont-clinics')" style="cursor:pointer">Beaumont
                        	<div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="beaumont-clinics" class="big-sub">
                            <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Beaumont')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul>
                        </li>
                        
                        <li class="sub-li" onclick="toggle_visibility('brooklyn-clinics')" style="cursor:pointer">Brooklyn
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="brooklyn-clinics" class="big-sub">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Brooklyn')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul>
                        </li>
                        <li class="sub-li" onclick="toggle_visibility('hattiesburg-clinics')" style="cursor:pointer">Hattiesburg
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="hattiesburg-clinics" class="big-sub">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Hattiesburg')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul>
                        </li>
                        <li class="sub-li" onclick="toggle_visibility('lumberton-clinics')" style="cursor:pointer">Lumberton
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="lumberton-clinics" class="big-sub">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Lumberton')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul>
                        </li>
                        <li class="sub-li" onclick="toggle_visibility('new-augusta-clinics')" style="cursor:pointer">New Augusta
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="new-augusta-clinics" class="big-sub">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'New Augusta')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul>
                        </li>
                        
                        <li class="sub-li" onclick="toggle_visibility('picayune-clinics')" style="cursor:pointer">Picayune
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="picayune-clinics" class="big-sub">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Picayune')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul>
                        </li>
                        <li class="sub-li" onclick="toggle_visibility('seminary-clinics')" style="cursor:pointer">Seminary
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="seminary-clinics" class="big-sub">
                                <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Seminary')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; line-height:17px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                            </ul>
                        </li>
                        <li class="sub-li" onclick="toggle_visibility('sumrall-clinics')" style="cursor:pointer">Sumrall
                        <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_green.png" style="width:15px; height:15px;">
                                    </div>
                        	<ul id="sumrall-clinics" class="big-sub">
                                
                                
                                
                                 <?php $query = new WP_Query(array( 'post_type' => 'clinic', 'orderby' => 'ID', 'order' => 'asc', 'posts_per_page' => 100, 'meta_key' => 'city','meta_value'	=> 'Sumrall')); ?>
                            	<?php if( $query->have_posts() ) : 
									while( $query->have_posts() ) : 
									$query->the_post(); ?>
                            
                            
                            	<li class="clinic-sub-li">
                                <a style="display:block;"  href="<?php the_permalink(); ?>">
                                <div class="invisible" style="width:100%; min-height:14px; color:#68806e; background-color:#d1dad1; padding:10px; ">
								<?php the_title(); ?>
                                <div class="menu-title-image3">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:15px; height:15px;">
                                    </div>
                                </div>
                                </a>
                                </li>
                            
                            
                            	<?php endwhile; endif; ?>

								<?php wp_reset_query(); ?>
                                
                                
                            	
                                
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="right-wrapper">
                	<div id="no-clinics">
                                
                                
                                Click City to View Clinics
                            	
                                
                            </div>
                </div>
                </div>
                
            </div>
                
                
                
                
                
                <li>
                	<div class="dropdown-title">
                    	Services
                    </div>
                	<ul class="sub-ul">
                    	<li class="sub-li">Primary Care</li>
                        <li class="sub-li">Specialty Services</li>
                        <li class="sub-li">Dental Services</li>
                        <li class="sub-li">Social Services</li>
                    </ul>
                </li>
                <li>
                	<div class="dropdown-title">
                    	Pharmacy
                    </div>
                	<ul class="sub-ul">
                    	<li class="sub-li">Pharmacy Assistance Center</li>
                        <li class="sub-li">Prescription Assistance Program</li>
                    </ul>
                </li>
                
                <li>
                	<div class="dropdown-title">
                    	About Us
                    </div>
                	<ul class="sub-ul">
                    	<li class="sub-li">History</li>
                        <li class="sub-li">Officers & Directors</li>
                        <li class="sub-li">Board of Directors</li>
                        <li class="sub-li">Videos & Media</li>
                        <li class="sub-li">News & Press Releases</li>
                        <li class="sub-li">Employment Opportunities</li>
                    </ul>
                </li>
                
                <li>
                	<div class="dropdown-title">
                    	Patient Resources
                    </div>
                	<ul class="sub-ul">
                    	<li class="sub-li">Frequently Asked Questions</li>
                        <li class="sub-li">Insurance & Payment Information</li>
                        <li class="sub-li">Patient Forms</li>
                        <li class="sub-li">School Forms</li>
                        <li class="sub-li">Patient Rights & Responsibilities</li>
                        <li class="sub-li">Notice of Privacy Practices</li>
                    </ul>
                </li>
                
                <li>
                	<div class="dropdown-title">
                    	Contact Us
                    </div>
                	
                </li>
            </ul>
        </div>
        
        
		
	</header><!-- #masthead -->

	
