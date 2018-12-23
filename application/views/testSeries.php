<section class="complete-content">
	<div class="about-intro-wrap pull-left">
		<div class="bread-crumb-wrap ibc-wrap-1">
        	<div class="container">
    			<!--Title / Beadcrumb-->
	            <div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
	                <div class="bread-heading"><h1>Test Result</h1></div>
	                <div class="bread-crumb pull-right">
		                <ul>
			                <li><a href="index-2.html">Home</a></li>
			                <li><a href="about-us-1.html">Test Result</a></li>
		                </ul>
	                </div>
	            </div>
         	</div>
		</div>
     
		<div class="container">
			<div class="row">
				<div class="col-md-12 no-pad col-xs-12 col-sm-12 pull-left heading-content elemnts-wrap wow fadeInLeft animated" data-wow-delay="0.5s" data-wow-offset="200">
            		<h2>Select Exam ID</h2>
            		<p>
            			<select id="btn12">
            				<option value="">Exam Id</option>
            				<?php $a = $this->db->query("SELECT DISTINCT test_id FROM result_test")->result();?>
            				<?php foreach($a as $row):?>
							<option value="<?php echo $row->test_id;?>"><?php echo $row->test_id;?></option>
							<?php endforeach;?>
						</select>
					</p>
            	</div>
				<div class="col-md-12 no-pad col-xs-12 col-sm-12 pull-left" id='result'></div>
			</div>
		</div>
	</div>
</section>