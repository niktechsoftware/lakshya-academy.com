   <section class="complete-content content-footer-space">
    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
         <div class="bread-crumb-wrap ibc-wrap-3">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Our Courses <?php echo "->".$this->uri->segment(3);?></h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="index-2.html">Course</a></li>
                <li><a href="about-us-1.html"><?php echo $this->uri->segment(3);?></a></li>
                </ul>
                </div>
            </div>
         </div>
     </div> 
     
         <div class="container">
         	
           
            
            <!--About-us top-content-->

            
            
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left blgo-full-wrap no-pad">
				
               
            	<div id="blog-larg"><!--blog-large-->
               
               <!-- Blog column -->
            	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-left">
				
				
                    <!-- Blog box -->
                	<div class="blog-box wow fadeInDown" data-wow-delay="0.5s" data-wow-offset="0">
                	   <?php 
                	   		$this->db->where("course_name",$this->uri->segment(3));
                	   		echo $this->db->get("courses")->row()->detail;
                	   ?>                        
                    </div>
                 
                	
                    
                </div> <!-- Blog column end-->
				</div> <!-- Blog column end--> 

                                <!-- Blog box -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 side-bar-blog">
                    
                    <!--Sidebar-item-->
                    <div class="catagory-list wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="0">
                    
                        <div class="side-blog-title">Subjects</div>
                        <ul>
                        	<li><a href="<?php echo base_url()?>home/course/UPSC"><i class="fa fa-angle-right about-list-arrows"></i>UPSC</a></li>
                            <li><a href="<?php echo base_url()?>home/course/SSC"><i class="fa fa-angle-right about-list-arrows"></i>SSC</a></li>
                            <li><a href="<?php echo base_url()?>home/course/BANKPO"><i class="fa fa-angle-right about-list-arrows"></i>BANK (PO/CLERK/CWE)</a></li>
                            <li><a href="<?php echo base_url()?>home/course/UPPSC"><i class="fa fa-angle-right about-list-arrows"></i>UPPSC</a></li>
                            <li><a href="<?php echo base_url()?>home/course/CPF"><i class="fa fa-angle-right about-list-arrows"></i>CPF (AC)</a></li>
                            <li><a href="<?php echo base_url()?>home/course/CDS"><i class="fa fa-angle-right about-list-arrows"></i>CDS (IMA/INA/AFA)</a></li>
                            <li><a href="<?php echo base_url()?>home/course/RAILWAY"><i class="fa fa-angle-right about-list-arrows"></i>RAILWAY</a></li>
                            <li><a href="<?php echo base_url()?>home/course/BED"><i class="fa fa-angle-right about-list-arrows"></i>B.ED</a></li>
                            <li><a href="<?php echo base_url()?>home/course/PMF"><i class="fa fa-angle-right about-list-arrows"></i>PARAMILETERY FORCES</a></li>
                            <li><a href="<?php echo base_url()?>home/course/DELHIPOLICE"><i class="fa fa-angle-right about-list-arrows"></i>DELHI POLICE</a></li>
                            <li><a href="<?php echo base_url()?>home/course/OTHER"><i class="fa fa-angle-right about-list-arrows"></i>OTHER COURSES</a></li>
                        </ul>
                     </div>
                     </div>
                     </div>
                     </div>
                     </div>
                    
    
    </section>

