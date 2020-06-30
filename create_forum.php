<link rel="stylesheet" href="assets/css/otherdivs.css">
<style>
	#forumrow a {
	  text-decoration: none;
	  color: black;
	}
	#forumrow h6 {
		color: black;
	}
	#forumrow p {
	  color: darkgrey;
	}
	#forumrow a .card:hover{
		border: 1px solid #000;
		background: #EBEBEB;	
	}
</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>

			<!-- main div -->
			<div id="main" class="container h-100">

				<!-- togglebutton -->
				<a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a>

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					<div class="row">
						<div class="col">
							<div class="card border-0 shadow">
								<div class="card-body">
									<h5>Forum Lists</h5>
									<div class="row" id="forumrow">
										<div class="col-md-4 col-sm-6 col-12">
											<a href="forumcategory.php">
												<div class="card shadow m-1">
													<div class="card-body">
														<h6>Art History and Aesthetic Practices</h6>
														<p>Updates from Admin</p>
														<p>102 posts</p>
														<span class="btn btn-outline-danger fa fa-trash float-right"></span>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-4 col-sm-6 col-12">
											<a href="forumcategory.php">
												<div class="card shadow m-1">
													<div class="card-body">
														<h6> Visual Culture</h6>
														<p>Choosing plans, cultures and traditions</p>
														<p>54 posts</p>
														<span class="btn btn-outline-danger fa fa-trash float-right"></span>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-4 col-sm-6 col-12">
											<a href="forumcategory.php">
												<div class="card shadow m-1">
													<div class="card-body">
														<h6> Research</h6>
														<p>Choosing plans, cultures and traditions</p>
														<p>90 posts</p>
														<span class="btn btn-outline-danger fa fa-trash float-right"></span>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-4 col-sm-6 col-12">
											<a href="forumcategory.php">
												<div class="card shadow m-1">
													<div class="card-body">
														<h6>Administrative and Regulatory Issues</h6>
														<p>Updates from Admin</p>
														<p>100 posts</p>
														<span class="btn btn-outline-danger fa fa-trash float-right"></span>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-4 col-sm-6 col-12">
											<a href="forumcategory.php">
												<div class="card shadow m-1">
													<div class="card-body">
														<h6>Opportunities</h6>
														<p>Current Opportunities to choose from</p>
														<p>54 posts</p>
														<span class="btn btn-outline-danger fa fa-trash float-right"></span>
													</div>
												</div>
											</a>
										</div>
										<div class="col-md-4 col-sm-6 col-12">
											<a href="forumcategory.php">
												<div class="card shadow m-1">
													<div class="card-body">
														<h6>General Issues</h6>
														<p>What are the current issues</p>
														<p>254 posts</p>
														<span class="btn btn-outline-danger fa fa-trash float-right"></span>
													</div>
												</div>
											</a>
										</div>
									</div>
									<!-- add file button -->
									<div class="fixed-bottom mb-2 mr-2">
										<button class="btn btn-primary rounded-circle float-right p-3 shadow-lg" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span></button>
									</div>
									
									<!-- The Modal -->
								  <div class="modal fade" id="myModal">
								    <div class="modal-dialog modal-dialog-centered">
								      <div class="modal-content">
								      
								        <!-- Modal Header -->
								        <div class="mx-auto py-2">
								          <h5 class="modal-title">Forum Upload</h5>
								        </div>
								        
								        <!-- Modal body -->
								        <div class="modal-body">
								        	<div class="form-group">
									        	<input type="text" class="form-control" name="forumname" placeholder="Forum Name">
									        </div>
									        <div class="form-group">
									        	<input type="text" class="form-control" name="forumsubtitle" placeholder="Forum Subtitle">
									        </div>
									        <div class="form-group">
									        	<input type="text" class="form-control" name="forumdescription" placeholder="Forum Description">
									        </div>
									        <div class="fileinput fileinput-new" data-provides="fileinput">
													  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
													    <img data-src="holder.js/100%x100%"  alt="...">
													  </div>
													  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
													  <div>
													    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select Forum Image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
													    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
													  </div>
													</div>
													<button class="btn btn-primary btn-sm float-right">Post Forum</button>
								        </div>
								        
								        <!-- Modal footer -->
								        <!-- <div>
								          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        </div> -->
								        
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
	<script src="assets/js/togglefunction.js"></script>
	<script type="text/javascript">
		
	</script>
	<!-- <script src="./js/fxn.js"></script> -->
</body>
</html>