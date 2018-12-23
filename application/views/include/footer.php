          <!--Footer Start-->
            
            </div>            
            <div class="complete-footer">
            <footer id="footer">
            
            	<div class="container">
                	<div class="row">
                    	<!--Foot widget-->
                    	<div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                        <a href="#"><div class="foot-logo col-xs-12 no-pad"></div></a>
                        
                        <address class="foot-address">
                        	<div class="col-xs-12 no-pad">
                        		<i class="icon-globe address-icons"></i>
                        			Lakshya Academy <br />
                        			New Khowa Mandi <br />
                        			Rouza Ghazipur UP
                        	</div>
                            <div class="col-xs-12 no-pad"><i class="icon-phone2 address-icons"></i>+91 9455615658</div>
                            <div class="col-xs-12 no-pad"><i class="icon-file address-icons"></i>+91 9452980936</div>
                            <div class="col-xs-12 no-pad"><i class="icon-mail address-icons"></i>info@lakshya-academy.com</div>
                        </address>
                        </div>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>                      
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-6 recent-post-foot foot-widget">
							<div class="fb-page" data-href="https://www.facebook.com/Lakshya-Academy-191275734815687/?modal=admin_todo_tour" data-width="500" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div></div>
                        </div>
                        
                        <!--Foot widget-->
                        <div class="col-xs-12 col-sm-6 col-md-3 foot-widget">
                        	<div class="foot-widget-title">Quick Contact</div>
                            <div class="news-subscribe">
                            	<input type="text" name="email" style="width: 100%;" class="news-tb" placeholder="Email Address" /><br/><br/>
                            	<input type="text" name="mobile" style="width: 100%;" class="news-tb" placeholder="Mobile Number" /><br/><br/>
                            	<input type="text" name="msg" style="width: 100%;" class="news-tb" placeholder="Your Meaasge" /><br/><br/>
                            	<button class="news-button">Send</button>
                            </div>
                        </div>
                        
                    </div>
               	 </div>       
                 
            </footer>
            
            <div class="bottom-footer">
            <div class="container">
            
                <div class="row">
                    <!--Foot widget-->
                    <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
                    <p class="col-xs-12 col-md-5 no-pad">Copyright 2015-16 Lakshya Academy | Powered by Gfinch Technology</p>
                    <ul class="foot-menu col-xs-12 col-md-7 no-pad">  
	                    <li><a href="<?php echo base_url()?>home/contact">Contact</a></li> 
	                    <li><a href="<?php echo base_url()?>home/gallery">Gallery</a></li> 
	                    <li><a href="<?php echo base_url()?>home/testSeries">Test Series</a></li>      
	                    <li><a href="<?php echo base_url()?>home/course/UPSC">Courses</a></li> 
	                    <li><a href="<?php echo base_url()?>home/about">About Us</a></li>   
	                    <li><a href="<?php echo base_url()?>">Home</a></li>  
                    </ul>
                    </div>
                </div>
            </div> 
            </div>
            
            </div>
            
        	
        
    <!--JS Inclution-->
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.10.3.custom.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-new/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.sticky.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.imedica.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/custom-imedicajs.min.js"></script>
	<script type='text/javascript'>
		$(window).load(function(){
			$('#loader-overlay').fadeOut(900);
			$("html").css("overflow","visible");
			$('#btn12').change(function(){
				var classv = $("#btn12").val();
				
				$.post("<?php echo site_url("home/result") ?>",{classv : classv}, function(data){
					$("#result").html(data);
					});
			});
		});
	</script>

    </body>
</html>
