<link rel="stylesheet" href="assets/css/otherdivs.css">

	<style>

	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>

			<!-- main div -->
			<div id="main">
			<a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a>
				<div class="container-fluid ml-2">
				
					<form method="POST" enctype="multipart/form-data">
						<div class="modal fade" id="imageModal">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
					        <div>
						        <h4 class="float-left m-2">Change Image</h4>
						        <button type="button" class="close float-right m-2" data-dismiss="modal">&times;</button>
					        </div>
					        <div class="modal-body text-center">
					        	<!-- <p><small class="text-success">Upload Successful</small></p> -->
					        	<img src='assets/images/kal/img/lion_head_4.png' class='rounded-circle border' style='width:70%; height:auto'/></div>
					        <div id="message"></div>
					        <div class="mb-3 pr-2 pl-2">
					        	<input type="file" name="myimage" id="myimage" class="float-left ml-1" required>
					        	<button name="changeBtn" class="float-right mr-2 mb-2">
					        		<i class="fa fa-upload">Upload Image &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden=""></span></i>
					        	</button>
					        	<div id="uploadProgress"><div class="progress-bar"></div></div>
					        </div>
					      </div>
					    </div>
						</div>
					</form>
					<form method="POST">
						<div class="card mx-auto" style="width: 85%">
							<div class="card-header">
								<h4><strong>Profile Update</strong></h4>
								<small><i class="text-success">Profile Updated Successfully</i></small>
							</div>
							<div class="card-body mx-auto" style="width: 95%">
								<div class="row">
									<div class="col-6">
										<img src="assets/images/kal/img/lion_head_4.png" class="rounded-circle shadow" height="100" width="100"/>
									</div>
									<div class="col-6">
										<span class="btn btn-sm btn-info float-right mt-5 shadow" data-toggle="modal" data-target="#imageModal">
											Change Image
											<!-- <div class="buton text-center p-1" id="cupbutton" data-toggle="modal" data-target="#coverModal"><i class="text-white mt-2">Upload</i></div> -->
											<!-- <input type="file" name="uploadcover" class="upbutton" id="coverpicbtn">
											<label for="coverpicbtn"><span class="fa fa-upload"></span></label> -->
										</span>
									</div>
								</div>
								<div class="row mt-2">
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="title" value="" placeholder="Title" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="firstname" value="" placeholder="Surname" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="othername" value="" placeholder="Other Names" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="username" value="" placeholder="User Name" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="email" class="form-control shadow" name="mail" value="" placeholder="Email" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="phone" class="form-control shadow" name="phonenumber" value="" placeholder="Phone Number" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="matric" value="" placeholder="Fill your Matric Number if available" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="department" value="" placeholder="Department" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="faculty" value="" placeholder="Faculty" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="institution" value="" placeholder="Institution" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="date" class="form-control shadow" name="birthdate" value="" placeholder="Date of Birth" />
									</div>
									<div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<input type="text" class="form-control shadow" name="address" value="" placeholder="Residential Address" />
									</div>
									
									<!-- <div class="form-group col-xs-12 col-sm-12 col-md-6 mt-2">
										<textarea class="form-control" placeholder="Residential Address"></textarea>
									</div> -->
								</div>
								<input type="submit" class="form-control btn btn-info shadow mt-3 mb-3" name="profileupdate" value="Submit" />
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/togglefunction.js"></script>
	
</body>
</html>
