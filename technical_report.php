<link rel="stylesheet" type="text/css" href="assets/css/otherdivs.css">

<?php include "includes/header.php" ?>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-12 p-1">
			<?php include "includes/buttons.php"; ?>
		</div>
		<div class="col-md-8 col-12 p-1">
			<div class="card border shadow-lg" style="border-radius: 13px">
				<div class="card-body">
					<div class="container">
						<div class="row mb-4">
							<h4 class="col-4">Technical Reports</h4>                                      
				      <div class="col-8">
				      	<div class="mykeep float-right">
					        <div class="conversation-text rounded-circle">
					          <div class="ctext-wrap">
					            <i>Hello</i>
					            <p>
					              You'll have to login to your account to download materials from this site.
					            </p>
					          </div>
					        </div>
					        <div class="image-img float-right">
					          <img src="assets/images/happy.png" class="img img-responsive" style="width:30px;" alt="Female" />
					      	</div>
					      </div>
				      </div>
				    </div>
				  <!-- </div> -->
				  <!-- <div class="container"> -->
				    <div class="row mt-5 mynextrow">
				    	<div class="col-11 auto">
				    		<div class="card p-3">
				    			<div class="card-body row">
									  <div class="col-lg-9 col-md-9 col-12">
									    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                      consequat. Duis aute irure dolor in reprehenderit in <span class="toggleShow1"><code>...</code> <a href="#" class="toggleMe" target=".toggleShow1">Read more</a></span> <span class="toggleShow1" style="display: none;">voluptate velit esse
	                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span class="toggleShow1" style="display: none;"><a href="#" class="toggleMe" target=".toggleShow1">Read less</a></span></span></p>
									  </div>
									  <div class="col-lg-3 col-md-3 col-12 mx-auto">
							  			<img src="assets/images/dust.png" alt="work-thumbnail" class="img-fluid shadow" style="width: 100px; height: 90px">
								  		<span class="btn btn-outline-info btn-sm mt-2 shadow"><a href="#"><small>Download Book</small></a></span>	
										</div>	
				    			</div>
				    		</div>
				    	</div>

				    	<div class="col-11 auto">
				    		<div class="card p-3">
				    			<div class="card-body row">
									  <div class="col-lg-9 col-md-9 col-12">
									    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                      consequat. Duis aute irure dolor in reprehenderit in <span class="toggleShow1"><code>...</code> <a href="#" class="toggleMe" target=".toggleShow1">Read more</a></span> <span class="toggleShow1" style="display: none;">voluptate velit esse
	                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span class="toggleShow1" style="display: none;"><a href="#" class="toggleMe" target=".toggleShow1">Read less</a></span></span></p>
									  </div>
									  <div class="col-lg-3 col-md-3 col-12 mx-auto">
							  			<img src="assets/images/dust.png" alt="work-thumbnail" class="img-fluid shadow" style="width: 100px; height: 90px">
								  		<span class="btn btn-outline-info btn-sm mt-2 shadow"><a href="#"><small>Download Book</small></a></span>	
										</div>	
				    			</div>
				    		</div>
				    	</div>

				    	<div class="col-11 auto">
				    		<div class="card p-3">
				    			<div class="card-body row">
									  <div class="col-lg-9 col-md-9 col-12">
									    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                      consequat. Duis aute irure dolor in reprehenderit in <span class="toggleShow1"><code>...</code> <a href="#" class="toggleMe" target=".toggleShow1">Read more</a></span> <span class="toggleShow1" style="display: none;">voluptate velit esse
	                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span class="toggleShow1" style="display: none;"><a href="#" class="toggleMe" target=".toggleShow1">Read less</a></span></span></p>
									  </div>
									  <div class="col-lg-3 col-md-3 col-12 mx-auto">
							  			<img src="assets/images/dust.png" alt="work-thumbnail" class="img-fluid shadow" style="width: 100px; height: 90px">
								  		<span class="btn btn-outline-info btn-sm mt-2 shadow"><a href="#"><small>Download Book</small></a></span>	
										</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
			  	</div>
		    </div>
	    </div>
		</div>
	</div>
</div>

<?php include "includes/footer.php"; ?>

<script>
    $(".toggleMe").click(function(e){
        e.preventDefault() ;
        target = $(this).attr("target") ;
        $(target).toggle() ;
    }) ;
   
</script>