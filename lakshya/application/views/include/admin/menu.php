			<div class="page-sidebar sidebar horizontal-bar">
                <div class="page-sidebar-inner">
                    <ul class="menu accordion-menu">
                        <li class="nav-heading"><span>Navigation</span></li>
                        <li <?php if($this->uri->segment(2) == ''){?>class="active"<?php }?>>
                        	<a href="<?php echo base_url();?>apanel">
                        		<span class="menu-icon icon-speedometer"></span>
                        		<p>Dashboard</p>
                        	</a>
                        </li>
                        <li <?php if($this->uri->segment(2) == 'studentRegister'){?>class="active"<?php }?>>
                        	<a href="<?php echo base_url();?>apanel/studentRegister">
                        		<span class="menu-icon icon-user"></span>
                        		<p>New Student</p>
                        	</a>
                        </li>
                        <li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
                        	<a href="<?php echo base_url();?>apanel/studentList">
                        		<span class="fa fa-list">
                        		</span><p>&nbsp;&nbsp;&nbsp;Student List</p>
                        	</a>
                        </li>
                        <li class="nav-heading"><span>Features</span></li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="fa fa-globe"></span>
                        		<p>&nbsp;&nbsp;&nbsp;Website</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url();?>apanel/noticeBoard">NOTICE BOARD</a></li>
                                <li><a href="<?php echo base_url();?>apanel/latestNews">LATEST NEWS</a></li>
                                <li><a href="<?php echo base_url();?>apanel/selectedStudent">SELECTED STUDENT</a></li>
                                <li><a href="<?php echo base_url();?>apanel/uploadbooks">UPLOAD BOOKS</a></li>
                                <li><a href="<?php echo base_url();?>apanel/uploadpdf">UPLOAD PDF</a></li>
                                <li><a href="<?php echo base_url();?>apanel/quickContact">QUICK CONTACT</a></li>
                                <li><a href="<?php echo base_url();?>apanel/gallery">GALLERY</a></li>
                                 <li><a href="<?php echo base_url();?>apanel/uploadResult">UPLOAD RESULT</a></li>
                            </ul>
                        </li>
                        <li class="droplink"><a href="#"><span class="fa fa-mobile"></span><p>&nbsp;&nbsp;&nbsp;SMS TAB</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li>
                                	<a href="<?php echo base_url();?>apanel/singleSms">
                                		<span class="icon icon-user"></span>
                                		Single SMS
                                	</a>
                                </li>
                                <li>
                                	<a href="<?php echo base_url();?>apanel/allStudent">
                                		All Student
                                	</a>
                                </li>
                            </ul>
                        </li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="menu-icon icon-credit-card"></span>
                        		<p>Fee</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
	                           <li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/takeFee">
		                        		<span class="fa fa-cc-visa"></span>
		                        		<p>&nbsp;&nbsp;&nbsp;Take Fee</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/feeSlipList">
		                        		<span class="fa fa-print">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Fee Slip</p>
		                        	</a>
	                       		</li>
                            </ul>
                        </li>
                        <li class="droplink">
                        	<a href="#">
                        		<span class="fa fa-briefcase"></span>
                        		<p>&nbsp;&nbsp;&nbsp;Accounting</p>
                        		<span class="arrow"></span>
                        	</a>
                            <ul class="sub-menu">
	                           <li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/dailyExpense">
		                        		<span class="fa fa-bar-chart">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Daily Expense</p>
		                        	</a>
	                       		</li>
	                       		<li <?php if($this->uri->segment(2) == 'studentList'){?>class="active"<?php }?>>
		                        	<a href="<?php echo base_url();?>apanel/dayBook">
		                        		<span class="fa fa-book">
		                        		</span><p>&nbsp;&nbsp;&nbsp;Day Book</p>
		                        	</a>
	                       		</li>
	                       		<li><a href="<?php echo base_url();?>apanel/feeReports"> <span
							class="fa fa-book"> </span>
						<p>&nbsp;&nbsp;&nbsp;Fee Reports</p>
					</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
            
            <div class="page-inner">
                <div class="page-breadcrumb">
                    <ol class="breadcrumb container">
                        <li class="active"><?php echo $smallTitle; ?></li>
                    </ol>
                </div>
                <div class="page-title">
                    <div class="container">
                        <h3><?php echo $bigTitle; ?></h3>
                    </div>
                </div>