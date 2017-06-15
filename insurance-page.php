<?php
/**
Template Name: insurance page
**/

get_header(); ?>

	<div class="content">
    	<div class="contact-banner">
        <div class="shadow2">
        </div>
        	<div class="contact-banner-restricter">
        		<div class="faq-banner-content">
            		<span style="color:#C4C486">Patient Resources  ›</span>  <span style="white-space:nowrap">Insurance & Payment Information</span>
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
                        
                        <?php if( have_rows('insurance_&_payment_information') ): $i = 0;?>

	
    

	<?php while( have_rows('insurance_&_payment_information') ): the_row(); 

		// vars
		$question = get_sub_field('question');
		$answer = get_sub_field('answer');
		$i++;
		

		?>
                        
                        <div class="contact-sidebar-menu-item">
                        	<a href="javascript:showonlyone('<?php echo $i; ?>');">
                            	<div class="faq-link" style="cursor:pointer">  <!--onclick="toggle_visibility('<?php echo $i; ?>')"-->
                                	<div class="menu-title-text">
                                		<?php if( $question ): ?>
				<?php echo $question; ?>
			<?php endif; ?>


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/across_arrow_white.png" style="width:20px; height:20px;">
                                    </div>
                                    
                                </div>
                                </a>
                                
                            </div>
                        
                        <?php endwhile; ?>

	

<?php endif; ?>
                        
                            <!--<div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Do you accept Medicare, MSCAN, Medicaid, CHIP, & Tricare?


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                    
                                </div>
                                <div class="faq-menu-item-content">
                                	Yes, we accept assignment of fees for Medicare, Medicaid, CHIP, and Tricare. After receiving payments, you will be expected to pay any deductible or co-payment balance at the time of service. 
                                </div>
                            </div>
                            <div class="contact-sidebar-menu-item">
                            	<div class="faq-link">
                                	<div class="menu-title-text">
                                		Do you accept Private Insurance?


                                    </div>
                                    <div class="menu-title-image">
                                    	<img src="<?php bloginfo('template_directory'); ?>/images/top-bar-log.png" style="width:25px; height:25px;">
                                    </div>
                                </div>
                                <div class="faq-menu-item-content">
                                	Yes, even through your insurance policy may cover a portion or all of your medical expenses, our policy is to expect payment from you in full the day of your visit unless prior arrangements have been made.
We file your insurance company as a courtesy to you; however you are responsible for your charges. Any insurance payments made directly to SeMRHI will be credited to your account and will be reflected on your account.
 
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
                                	We base our fees on the amount of time spent with you and degree of medical difficulty your particular care involves. Any lab tests ordered by your doctor will be an additional charge. Our fee structure is consistent with those in other medical offices. Payment is requested for office services at the time they are rendered. This keeps our cost down and our fees low.
We have an adjusted fee method of payment available for individuals without health insurance.
In order to qualify, you must have documented proof of income. Below are a few examples of acceptable proofs of income.
									United States Income Tax forms (1040, 1040-EZ, etc.)
Use Adjusted Gross Income (can be used once per year)
Documents from the Social Security Department (proof of SSI or disability)
Documents from the State Department of Human Services showing amounts of
Earned/Unearned Income, Child Support, or SNAP Award Letter showing 
Earned/Unearned Income and must be stamped by the county that provides the benefits.
One (1) month's proof of income (consecutive dated check stubs) and/or W2 from employer
Mississippi State Unemployment Commission Notice of Weekly Benefits or printout from website of four weekly deposits


                                </div>
                            </div>-->
                            
                            
                            
                            
                            
                            
                        </div>
               
                	</div>
                </div>
                
                
                
                
                
                
                
                
                
                
                <div class="faq-form">
                <div class="faq-info-restricter">
                    <!--<div class="faq-info">
                        Do you accept Medicare, MSCAN, Medicaid, CHIP, & Tricare?
                    </div>-->
                </div>
                    <div class="faq-content">
                    
                    
                    
                        <?php if( have_rows('insurance_&_payment_information') ): $i = 0;?>

	
    

	<?php while( have_rows('insurance_&_payment_information') ): the_row(); 

		// vars
		$question = get_sub_field('question');
		$answer = get_sub_field('answer');
		$i++;

		?>

<div id="<?php echo $i; ?>" class="faq-item3 newboxes5">
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
                        Do you accept Private Insurance?
                    </div>
                </div>
                    <div class="faq-content">
                        Yes, even through your insurance policy may cover a portion or all of your medical expenses, our policy is to expect payment from you in full the day of your visit unless prior arrangements have been made.
We file your insurance company as a courtesy to you; however you are responsible for your charges. Any insurance payments made directly to SeMRHI will be credited to your account and will be reflected on your account.

                    </div>
                </div>
                <div class="faq-form">
                <div class="faq-info-restricter">
                    <div class="faq-info">
                        How much does an office visit cost?
                    </div>
                </div>
                    <div class="faq-content">
                        We base our fees on the amount of time spent with you and degree of medical difficulty your particular care involves. Any lab tests ordered by your doctor will be an additional charge. Our fee structure is consistent with those in other medical offices. Payment is requested for office services at the time they are rendered. This keeps our cost down and our fees low.
We have an adjusted fee method of payment available for individuals without health insurance.
In order to qualify, you must have documented proof of income. Below are a few examples of acceptable proofs of income.
									United States Income Tax forms (1040, 1040-EZ, etc.)
Use Adjusted Gross Income (can be used once per year)
Documents from the Social Security Department (proof of SSI or disability)
Documents from the State Department of Human Services showing amounts of
Earned/Unearned Income, Child Support, or SNAP Award Letter showing 
Earned/Unearned Income and must be stamped by the county that provides the benefits.
One (1) month's proof of income (consecutive dated check stubs) and/or W2 from employer
Mississippi State Unemployment Commission Notice of Weekly Benefits or printout from website of four weekly deposits

                    </div>
                </div>-->
                
                
                
        	</div>
        </div>
        
	</div><!-- #primary -->
    
    
    
    <script type="text/javascript"> 
	
	function showonlyone(thechosenone){      
           
     jQuery('.newboxes5').each(function(index) {
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
