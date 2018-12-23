

    
    <!--Mid Content Start-->
    
    
     <div class="about-intro-wrap pull-left">
     
     <div class="bread-crumb-wrap ibc-wrap-5">
    	<div class="container">
    <!--Title / Beadcrumb-->
         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
            	<div class="bread-heading"><h1>Register Here</h1></div>
                <div class="bread-crumb pull-right">
                <ul>
                <li><a href="http://lakshya-academy.com/">Home</a></li>
                <li><a href="http://lakshya-academy.com/home/contact">Register</a></li>
                </ul>
                </div>
            </div>
         </div>
     </div>
     
     <!--map-->
         <div class="container">
         	

            
            <!--About-us top-content-->

        	<div id="main-wrapper" class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form class="form-horizontal" action="<?php echo base_url()?>home/saveRegister" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Candidate Name</label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" name="name" placeholder="Candidate Name" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Father's Name</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="fname" class="form-control" placeholder="Father's Name" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Full Address</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="address" class="form-control" placeholder="Full Address" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your City</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="city" class="form-control" placeholder="Your City" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Your State</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="state" class="form-control" placeholder="Your State" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Area Pin Code</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="pin" class="form-control" placeholder="Area Pin Code" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Contact Number</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="mobile" class="form-control" placeholder="Contact Number" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Date of birth</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="dob" class="form-control date-picker" placeholder="Date of birth" required="required">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Heighest Qualification</label>
                                            <div class="col-sm-4">
                                                <input type="text" name="heighQ" class="form-control" placeholder="Heighest Qualification" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Course Applied for</label>
                                            <div class="col-sm-4">
                                                <select name="courseApplied" class="form-control" required="required">
													<option value="">-Select Course-</option>
																											<option value="UPSC">UPSC</option>
																											<option value="SSC">SSC</option>
																											<option value="BANKPO">BANKPO</option>
																											<option value="UPPSC">UPPSC</option>
																											<option value="CPF">CPF</option>
																											<option value="CDS">CDS</option>
																											<option value="RAILWAY">RAILWAY</option>
																											<option value="BED">BED</option>
																											<option value="PMF">PMF</option>
																											<option value="DELHIPOLICE">DELHIPOLICE</option>
																											<option value="OTHER">OTHER</option>
																									</select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select batch timing</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="timing" required="required">
			                                    	<option value="">-Select batch time-</option>
			                                    															<option value="7:00 AM - 9:15 AM">7:00 AM - 9:15 AM</option>
																											<option value="9:30 AM - 11:45 AM">9:30 AM - 11:45 AM</option>
																											<option value="12:00 PM - 2:00 PM">12:00 PM - 2:00 PM</option>
																											<option value="4:00 PM - 6:15 PM">4:00 PM - 6:15 PM</option>
																                                    </select>
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Select Gender</label>
                                            <div class="col-sm-4">
                                                <select  class="form-control" name="gender" required="required">
			                                    	<option value="">-Select Gender-</option>
			                                    	<option value="Male">Male</option>
			                                    	<option value="Female">Female</option>
			                                    </select>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
                                            <div class="col-sm-4">
                                                <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
                                            </div>
                                            <label for="inputEmail3" class="col-sm-2 control-label">Choose A password</label>
                                            <div class="col-sm-4">
                                                <input type="password" name="password" class="form-control" placeholder="Choose A password" required="required">
                                            </div>
                                        </div>
                                        
                                        <hr/>
                                        
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                            	<input type="hidden" name="submitType" value="admin">
                                                <button type="submit" class="btn btn-success">Save Student Information</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
        	
         

    <!--Mid Content End-->
    
    
       