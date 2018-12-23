   <section class="complete-content content-footer-space">
    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
     <div class="bread-crumb-wrap ibc-wrap-5">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Contact Us</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>home/contact">Contact Us</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
     <!--map-->
         <div class="container">
         	

            
            <!--About-us top-content-->

        	<div class="row">
            
            
            <div class="col-xs-12 col-lg-12  col-sm-12 col-md-12 pull-left contact2-wrap">
            	
               <?php if($this->uri->segment(3) == "true"){?>
               		<font color="green">Thank You for contact us. We recieve your msg, We will connect with you as soon as possible.</font>
               <?php }?>                    
                    <!--Contact form-->
                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="100">

                    	<form method="post" action="<?php echo base_url();?>home/message" class="contact2-page-form col-lg-8 col-sm-12 col-md-8 col-xs-12 no-pad contact-v2">
                        
                        
                        <div class="form-title-text no-pad">Online Appointment Form</div>
                        	
                            
                            <div class="alert alert-success hidden col-lg-12 col-sm-12 col-md-12 col-xs-12" id="contactSuccess">
								<strong>Success!</strong> Your message has been sent to us.
							</div>

							<div class="alert alert-error hidden col-lg-12 col-sm-12 col-md-12 col-xs-12" id="contactError">
								<strong>Error!</strong> There was an error sending your message.
							</div>
                        
                        	<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        	<input type="text" class="contact2-textbox" placeholder="Name*" name="name" id="name" />
                            </div>
                            
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <input type="email" class="contact2-textbox" placeholder="Email*" name="email" id="email"/>
                            </div>
                            
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                            <input type="text" placeholder="Subject*" class="contact2-textbox" name="mobile" id="subject">
                            </div>
                            
                           
                            
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                           <textarea class="contact2-textarea" placeholder="Reason of Appointment" name="message" id="message"></textarea>
                            </div>
                            
                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                            <section class="color-7" id="btn-click">
                <button class="icon-mail btn2-st2 btn-7 btn-7b" data-loading-text="Loading..." type="submit">Submit</button>
                
                </section>
                            </div>
                            
                            
                        </form>
                        
                        
                        <!--Contact Sidebar-->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    	
                    
                    	<div class="side-bar-contact">
                        	<div class="form-title-text wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="100">Contact</div>
                            <ul class="contact-page-list wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="100">
                            <li>
                                <i class="icon-globe contact-side-icon iside-icon-contact"></i>
                            <span class="contact-side-txt">Lakshya Academy	, New Khowa Mandi,<br />Rouza Ghazipur UP-233001, India</span>


                            </li>
                            <li>
                                <i class="icon-phone2 contact-side-icon"></i>
                            <span class="contact-side-txt">Mobile: <span class="iside-bar-cfont">+91 - 9455615658
                            </span></span>
                            </li>
                            <li>
                                <i class="icon-phone2 contact-side-icon"></i>
                                <span class="contact-side-txt">Mobile: <span class="iside-bar-cfont">+91 - 9452980936 
                                </span></span>
                            </li>
                            <li>
                                <i class="icon-mail contact-side-icon"></i>
                                <span class="contact-side-txt">Email: <a href="mailto:contact@imedica.com">info@lakshya-academy.com</a></span>
                            </li>
                            </ul>
                            
                            <div class="form-title-text wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="120">Social Media</div>

                            <ul class="contact-page-social-list-bottom contact-page-social-list wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="120">
                            
                            <li><a href="https://www.facebook.com/pages/Lakshya-Academy/1438892776352109">
                            <div class="contact-side-social-wrap"> 
                            <i class="icon-facebook contact-side-social-icon"></i></div></a>
                            </li>

                           <li> <a href="#">
                            <div class="contact-side-social-wrap"> <i class="icon-google-plus contact-side-social-icon"></i></div>
                            </a></li>

                            <li><a href="#">
                            <div class="contact-side-social-wrap"> <i class="icon-linkedin contact-side-social-icon"></i></div>
                            </a></li>
                            </ul>
                        </div>
                    </div><!--Contact Sidebar end-->
                    
                    
                    </div><!--Contact Form end-->
                    
                    
                    
                    
                    
                </div>
            
            </div>
            
         
         
         
        
        </div>
         <br/><br/><br/>
         <div class="pull-left map-full no-pad">
                	<div id="map-canvas-2">
                		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3598.5558349198764!2d83.57958599999999!3d25.58644!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3991ff6f254f1b55%3A0xe1ac4224dba2d8e!2sLakshya+Academy!5e0!3m2!1sen!2sin!4v1398145066948" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                	</div>
                </div>
         
         
         </div>
         

    <!--Mid Content End-->
    
    
        <!--Footer Start-->
    
    </section>
