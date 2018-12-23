   <section class="complete-content content-footer-space">
    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
          <div class="bread-crumb-wrap ibc-wrap-2">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Gallery</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>home/gallery">Gallery</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
         <div class="container">
         	
           <div class="row"> 
            
				<div class="col-xs-12 col-sm-12 col-md-12 pull-left doctors-3col-tabs gallery-3col-tabs">
         
         		
                <div class="content-tabs col-xs-12 col-sm-12">
              			<?php $res = $this->db->get("gallery")->result(); ?>
                      	<?php foreach($res as $row){ ?>
                        <div class="tab-pane fade fade-slow in active" id="all-doc">
	                        <!--Doc intro-->
	                        <div class="doctor-box col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-delay="0.5s" data-wow-offset="200">
	                        
		                          <div class="zoom-wrap">
		                          	<div class="zoom-icon"></div>
		                          	<img alt="" class="img-responsive" src="<?php echo base_url();?>lakshya/assets/images/<?php echo $row->img;?>" />
		                          </div>
	                        	<div class="doc-name">
	                            	<div class="doc-name-class"><?php echo $row->title;?></div>
	                          </div>
	                         </div>
                        </div>
           				<?php } ?>
               </div> <!--Mid Services End-->
         
         </div>
         </div>
         </div>

    <!--Mid Content End-->

  </div>
    
