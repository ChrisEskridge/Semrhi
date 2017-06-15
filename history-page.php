<?php
/**
Template Name: history page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">About Us  ›  </span><span style="white-space:nowrap"><?php the_title(); ?></span>
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
            <div id="faq-sidebar" class="faq-sidebar">
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
                        
                            <!--<div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		History



                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                    
                                </div>
                                <div class="faq-menu-item-content">
                                	Southeast Mississippi Rural Health Initiative, Inc. was formally organized in May 1979 for the purpose of improving the health status of the residents of a predominantly rural area of southeast Mississippi.  After a detailed evaluation of primary health care needs and resources of a seven-county area, it was determined that three communities within the area had significant primary health care deficiencies.  These communities were targeted for clinic sites and a grant application was submitted to the Public Health Service for assistance in developing a rural health care delivery system to help alleviate the lack of health care resources and to remove other barriers to care which existed in that area.  SeMRHI received its initial operational grant from the Public Health Service in September 1979.  The organization began delivering primary care services in 1980 at its first clinic in the Town of Sumrall, serving the residents of Lamar and Covington Counties.  Later that year, a second clinic was opened in the Town of New Augusta, serving the residents of Perry County, followed by a third clinic the next year in the Town of Seminary in Covington County.

In October, 1994, SeMRHI received approval for a major expansion of services to the City of Hattiesburg through Section 330, Community Health Center funds.  A temporary facility was arranged, equipment was purchased, staff was hired and trained, and the delivery of services began in February 1995.  A 6,700 sq. ft. building to house the Hattiesburg Family Health Center operation and the administrative staff of the organization was completed in May 1997.  This building is owned by the corporation with financing arranged through a local bank.

New clinic sites were added in October 1997 and July 1998 in the towns of Brooklyn and Lumberton respectively, bringing the total of clinics in the system to six.

State funds were awarded in 1999 through the Mississippi Qualified Health Center Program and SeMRHI utilized the funds to subsidize the establishment of a dental clinic and a Social Services Department.  The department started with one full time social worker.  During the years, other social workers and nurse case managers have been added to the Social Services Department.

SeMRHI recognized another major need in the community following the opening in Hattiesburg.  HIV patients were having to travel at least 90 miles for primary care services.  The Board of Directors made a commitment to provide services for this illness.  SeMRHI received planning grant funding in 1999, and Ryan White Title III and Title IV program funding in 2000.  There are currently more than 500 HIV patients receiving excellent quality care at the Hattiesburg Family Health Center.

The Hattiesburg Community Dental Center opened for business in a modular facility configured specifically to house dental services in February 2000 and was located adjacent to the Hattiesburg Family Health Center at Old Airport Road.  During the next seven years, many  patients  received  quality  dental  services  and  plans  were  always  in  the making for a modern,  state-of-the-art  facility to house the dental clinic.  The  permanent  facility  became  a reality in May 2007 when SeMRHI announced the opening of a  cutting edge facility that boasts 6 operatories, digital x-ray, and new furnishings throughout.  A second part-time dentist has been employed since the opening of the new facility.

The Hattiesburg Family Health Center quickly became the largest of the organization’s clinics in terms of patient encounters and staff.  The community health center has a major place in health care in Hattiesburg, linking closely with many other medical providers, as well as the Mississippi Department of Health District VIII office and county offices, and numerous social services agencies in the area.

The enhanced commitment to women’s health services began in 1997 with the assumption of full prenatal and perinatal services.  These programs quickly outgrew their wing of the Hattiesburg Family Health Center, and the Women’s Health Center opened in October, 2000, adjacent to the Family Health Center.  This allowed for a holistic approach to women’s care, women centered, women friendly, and culturally sensitive, including a woman’s full life span and recognizing social and family roles as well as physical needs.

Hattiesburg Family Health Center/Downtown was opened during the summer of 2001.  This Center services the PACE Head Start Program and the general public and offers all the services provided by the existing Community Health Centers under the umbrella of Southeast Mississippi Rural Health Initiative, Inc.  The Center is located adjacent to the PACE Offices at 100 West Front Street.  The Center is open Mondays, Tuesdays and Wednesdays.

Beaumont Family Health Center was opened in February 2002 after a study revealed that the City of Beaumont was in need of full time medical services.  The existing structure at 1411 Bradley Avenue was quickly transformed to fit the needs of the Community Health Center criteria and since its opening, the residents of the area have been very receptive to the health center and it continues to grow steadily.

In 2003, SeMRHI began negotiations with the Hattiesburg Public Schools to implement a healthcare program geared toward well-student assessments.  Screening students regularly and treating health or dental problems at the onset would greatly improve the overall health of students and provide for less absenteeism in the school system.  In August 2004, the Hattiesburg Public School and Community Clinic was opened and has been very successful.  Located on the campus of the Lillie Burney Elementary School, the clinic serves the entire school district as well as the community.

In late 2004, SeMRHI was able to implement the same programs with the Forrest County School System and the Perry County School District by having a Nurse Practitioner and  Nurse go to South Forrest Attendance Center, Earl Travillion Attendance Center, Beaumont Elementary, and New Augusta Elementary and assess the students at the schools.

The Pharmacy Assistance Center, in a joint partnership with Forrest General Hospital, opened an in-house 340b pharmacy in September 2004.  The PAC offers medication to patients of SeMRHI at reduced prices.  Through the 340b program, SeMRHI is able to purchase medications  and  related  medical  supplies  at  substantially  lower  prices.  The  PAC does not accept Medicaid or Medicare and no insurance plans are accepted.  The Social Services Department  also  offers  patients  the  opportunity  to  apply for medications at free or reduced costs through various pharmaceutical companies.  For a small fee, community residents may also apply for these reduced costs without being a patient of the SeMRHI organization.

The Hattiesburg High School and Community Clinic opened in November 2005 in a classroom on the campus at Hattiesburg High School.  A modular building was placed on the campus at 605 Stadium Drive the latter part of 2006 and services are now offered from that facility.

The assistance of USDA and local financial institutions has proven to be a great asset for SeMRHI, making possible the construction of permanent buildings for Brooklyn and New Augusta Family Health Centers in 2004.  With the trust and confidence of those agencies, SeMRHI was also able to construct permanent, up-to-date, state-of-the-art facilities for Seminary in 2005 and Sumrall in 2006.

In June 2007, SeMRHI was awarded $600,000 for an Expanded Capacity Grant application submitted to add additional staff, renovation, and additional space to the Hattiesburg Family Health Center.

A Minor Care Clinic opened in April 2007 in an effort to accommodate patients needing primary care services rather than going to the emergency room for their services.  The clinic is located adjacent to the Forrest General Hospital ER.

In July, 2007, SeMRHI was awarded $650,000 to establish a health center in Picayune, Mississippi.  SeMRHI purchased a 3400 sq. ft. facility, which was completely renovated and currently houses a nurse practitioner and a physician, providing complete family medical services to residents of Picayune and the surrounding communities.

With all the achievements of the clinics as noted in this narrative, SeMRHI now boasts a  total of 14 community health centers that serve the Pinebelt area and the surrounding communities, providing access to much needed health care.  An additional 19 part-time school clinics are also listed in SeMRHI's scope of services.

Southeast Mississippi Rural Health Initiative, Inc. has provided health care services to more than 30,000 individuals in the past few years.  64% of SeMRHI patients are made up by the female patient population.  More than 80,000 health visits have been recorded during each of the past few years for the patient population served by SeMRHI.  Full prenatal care is being provided to more than 500 women annually.

Southeast Mississippi Rural Health Initiative, Inc. could not have achieved its current level of success without many effective partners in the community.  There are strong ties with Forrest General Hospital, the Mississippi Department of Health, several private physician offices, the University of Southern Mississippi, and many other social and educational agencies in Hattiesburg and the surrounding counties.

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
                                </div>
                            </div>
                            
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>-->
                
                
                
                
                
                
        	</div>
        </div>
        </div>
                
                
                
                
                
                
                
                
                <div class="service-form">
                <div class="faq-info-restricter">
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                 <?php if( have_rows('history_repeater') ): ?>

	
    

	<?php while( have_rows('history_repeater') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$text = get_sub_field('text');

		?>
		<div class='history-block'>
		<div class='history-left'>
		
			<?php if( $image ): ?>
					<img src="<?php echo $image; ?>" style="width:100%;" alt="<?php echo $image['alt'] ?>" />
                   
        	<?php endif; ?>
        
        </div>
        <div class='history-right'>
        
         	<?php echo $text; ?>
        
        </div>
        </div>
        
        
                   
                  
                    
                    
                        	
                    
 <?php endwhile; ?>

	

<?php endif; ?>  
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                    <!--<div class="faq-info">
                        History

                    </div>-->
                </div>
                    <!--<div class="faq-content">
                        Southeast Mississippi Rural Health Initiative, Inc. was formally organized in May 1979 for the purpose of improving the health status of the residents of a predominantly rural area of southeast Mississippi.  After a detailed evaluation of primary health care needs and resources of a seven-county area, it was determined that three communities within the area had significant primary health care deficiencies.  These communities were targeted for clinic sites and a grant application was submitted to the Public Health Service for assistance in developing a rural health care delivery system to help alleviate the lack of health care resources and to remove other barriers to care which existed in that area.  SeMRHI received its initial operational grant from the Public Health Service in September 1979.  The organization began delivering primary care services in 1980 at its first clinic in the Town of Sumrall, serving the residents of Lamar and Covington Counties.  Later that year, a second clinic was opened in the Town of New Augusta, serving the residents of Perry County, followed by a third clinic the next year in the Town of Seminary in Covington County.

In October, 1994, SeMRHI received approval for a major expansion of services to the City of Hattiesburg through Section 330, Community Health Center funds.  A temporary facility was arranged, equipment was purchased, staff was hired and trained, and the delivery of services began in February 1995.  A 6,700 sq. ft. building to house the Hattiesburg Family Health Center operation and the administrative staff of the organization was completed in May 1997.  This building is owned by the corporation with financing arranged through a local bank.

New clinic sites were added in October 1997 and July 1998 in the towns of Brooklyn and Lumberton respectively, bringing the total of clinics in the system to six.

State funds were awarded in 1999 through the Mississippi Qualified Health Center Program and SeMRHI utilized the funds to subsidize the establishment of a dental clinic and a Social Services Department.  The department started with one full time social worker.  During the years, other social workers and nurse case managers have been added to the Social Services Department.

SeMRHI recognized another major need in the community following the opening in Hattiesburg.  HIV patients were having to travel at least 90 miles for primary care services.  The Board of Directors made a commitment to provide services for this illness.  SeMRHI received planning grant funding in 1999, and Ryan White Title III and Title IV program funding in 2000.  There are currently more than 500 HIV patients receiving excellent quality care at the Hattiesburg Family Health Center.

The Hattiesburg Community Dental Center opened for business in a modular facility configured specifically to house dental services in February 2000 and was located adjacent to the Hattiesburg Family Health Center at Old Airport Road.  During the next seven years, many  patients  received  quality  dental  services  and  plans  were  always  in  the making for a modern,  state-of-the-art  facility to house the dental clinic.  The  permanent  facility  became  a reality in May 2007 when SeMRHI announced the opening of a  cutting edge facility that boasts 6 operatories, digital x-ray, and new furnishings throughout.  A second part-time dentist has been employed since the opening of the new facility.

The Hattiesburg Family Health Center quickly became the largest of the organization’s clinics in terms of patient encounters and staff.  The community health center has a major place in health care in Hattiesburg, linking closely with many other medical providers, as well as the Mississippi Department of Health District VIII office and county offices, and numerous social services agencies in the area.

The enhanced commitment to women’s health services began in 1997 with the assumption of full prenatal and perinatal services.  These programs quickly outgrew their wing of the Hattiesburg Family Health Center, and the Women’s Health Center opened in October, 2000, adjacent to the Family Health Center.  This allowed for a holistic approach to women’s care, women centered, women friendly, and culturally sensitive, including a woman’s full life span and recognizing social and family roles as well as physical needs.

Hattiesburg Family Health Center/Downtown was opened during the summer of 2001.  This Center services the PACE Head Start Program and the general public and offers all the services provided by the existing Community Health Centers under the umbrella of Southeast Mississippi Rural Health Initiative, Inc.  The Center is located adjacent to the PACE Offices at 100 West Front Street.  The Center is open Mondays, Tuesdays and Wednesdays.

Beaumont Family Health Center was opened in February 2002 after a study revealed that the City of Beaumont was in need of full time medical services.  The existing structure at 1411 Bradley Avenue was quickly transformed to fit the needs of the Community Health Center criteria and since its opening, the residents of the area have been very receptive to the health center and it continues to grow steadily.

In 2003, SeMRHI began negotiations with the Hattiesburg Public Schools to implement a healthcare program geared toward well-student assessments.  Screening students regularly and treating health or dental problems at the onset would greatly improve the overall health of students and provide for less absenteeism in the school system.  In August 2004, the Hattiesburg Public School and Community Clinic was opened and has been very successful.  Located on the campus of the Lillie Burney Elementary School, the clinic serves the entire school district as well as the community.

In late 2004, SeMRHI was able to implement the same programs with the Forrest County School System and the Perry County School District by having a Nurse Practitioner and  Nurse go to South Forrest Attendance Center, Earl Travillion Attendance Center, Beaumont Elementary, and New Augusta Elementary and assess the students at the schools.

The Pharmacy Assistance Center, in a joint partnership with Forrest General Hospital, opened an in-house 340b pharmacy in September 2004.  The PAC offers medication to patients of SeMRHI at reduced prices.  Through the 340b program, SeMRHI is able to purchase medications  and  related  medical  supplies  at  substantially  lower  prices.  The  PAC does not accept Medicaid or Medicare and no insurance plans are accepted.  The Social Services Department  also  offers  patients  the  opportunity  to  apply for medications at free or reduced costs through various pharmaceutical companies.  For a small fee, community residents may also apply for these reduced costs without being a patient of the SeMRHI organization.

The Hattiesburg High School and Community Clinic opened in November 2005 in a classroom on the campus at Hattiesburg High School.  A modular building was placed on the campus at 605 Stadium Drive the latter part of 2006 and services are now offered from that facility.

The assistance of USDA and local financial institutions has proven to be a great asset for SeMRHI, making possible the construction of permanent buildings for Brooklyn and New Augusta Family Health Centers in 2004.  With the trust and confidence of those agencies, SeMRHI was also able to construct permanent, up-to-date, state-of-the-art facilities for Seminary in 2005 and Sumrall in 2006.

In June 2007, SeMRHI was awarded $600,000 for an Expanded Capacity Grant application submitted to add additional staff, renovation, and additional space to the Hattiesburg Family Health Center.

A Minor Care Clinic opened in April 2007 in an effort to accommodate patients needing primary care services rather than going to the emergency room for their services.  The clinic is located adjacent to the Forrest General Hospital ER.

In July, 2007, SeMRHI was awarded $650,000 to establish a health center in Picayune, Mississippi.  SeMRHI purchased a 3400 sq. ft. facility, which was completely renovated and currently houses a nurse practitioner and a physician, providing complete family medical services to residents of Picayune and the surrounding communities.

With all the achievements of the clinics as noted in this narrative, SeMRHI now boasts a  total of 14 community health centers that serve the Pinebelt area and the surrounding communities, providing access to much needed health care.  An additional 19 part-time school clinics are also listed in SeMRHI's scope of services.

Southeast Mississippi Rural Health Initiative, Inc. has provided health care services to more than 30,000 individuals in the past few years.  64% of SeMRHI patients are made up by the female patient population.  More than 80,000 health visits have been recorded during each of the past few years for the patient population served by SeMRHI.  Full prenatal care is being provided to more than 500 women annually.

Southeast Mississippi Rural Health Initiative, Inc. could not have achieved its current level of success without many effective partners in the community.  There are strong ties with Forrest General Hospital, the Mississippi Department of Health, several private physician offices, the University of Southern Mississippi, and many other social and educational agencies in Hattiesburg and the surrounding counties.

                    	<!--<div class="pic-box">
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
	</div><!-- #primary -->

<?php

get_footer();
