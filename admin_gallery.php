<link rel="stylesheet" href="assets/css/otherdivs.css">
	<style>
	#mediauploadrow{
		height: 50vh;
		overflow: hidden;
		overflow-y: scroll;
	}
	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>

			<!-- main div -->
			<div id="main" class="container">
	
			<!-- togglebutton -->
				<a href="#" onclick="openNav()" id="togglelink">
					<div></div>
					<div></div>
					<div></div>
				</a>
				<!-- <a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a> -->

				<div class="container-fluid ml-2" style="width: 99%; border-radius: 13px">
					<div class="card shadow-lg">
						<div class="card-body">
							<!-- This is the media gallery for all types of media storage -->
							<h3>Media Gallery</h3>
							<div class="row" id="mediauploadrow">
								<!-- This is the card for each media that has been uploaded into the database -->
								<div class="col-lg-3 col-md-3 col-sm-4 col-6">
									<div class="card m-1 border-0 shadow">
										<div class="card-body">
											<form>
											  <div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheck1" name="example1">
											    <label class="custom-control-label" for="customCheck1"></label>
											  </div>
												<div class="thumbnail">
													<a href="./assets/images/kal/img/RK_154X175_1426540484.png" target="_blank">
														<img src="./assets/images/kal/img/RK_154X175_1426540484.png" width="100%">
													</a>
												</div>
												<span class="h6">Image Title</span><br/>
												<span class="p">Caption of file</span>
												<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
											</form>
										</div>
									</div>
								</div>

								<!-- This is the card for each media that has been uploaded into the database -->
								<div class="col-lg-3 col-md-3 col-sm-4 col-6">
									<div class="card m-1 border-0 shadow">
										<div class="card-body">
											<form>
											  <div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheck2" name="example1">
											    <label class="custom-control-label" for="customCheck2"></label>
											  </div>
												<div class="thumbnail">
													<a href="./assets/images/kal/img/RK_154X175_1426540484.png" target="_blank">
														<img src="./assets/images/kal/img/RK_154X175_1426540484.png" width="100%">
													</a>
												</div>
												<span class="h6">Image Title</span><br/>
												<span class="p">Caption of file</span>
												<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
											</form>
										</div>
									</div>
								</div>

								<!-- This is the card for each media that has been uploaded into the database -->
								<div class="col-lg-3 col-md-3 col-sm-4 col-6">
									<div class="card m-1 border-0 shadow">
										<div class="card-body">
											<form>
											  <div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheck3" name="example1">
											    <label class="custom-control-label" for="customCheck3"></label>
											  </div>
												<div class="thumbnail">
													<a href="./assets/images/kal/img/RK_154X175_1426540484.png" target="_blank">
														<img src="./assets/images/kal/img/RK_154X175_1426540484.png" width="100%">
													</a>
												</div>
												<span class="h6">Image Title</span><br/>
												<span class="p">Caption of file</span>
												<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
											</form>
										</div>
									</div>
								</div>

								<!-- This is the card for each media that has been uploaded into the database -->
								<div class="col-lg-3 col-md-3 col-sm-4 col-6">
									<div class="card m-1 border-0 shadow">
										<div class="card-body">
											<form>
											  <div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheck4" name="example1">
											    <label class="custom-control-label" for="customCheck4"></label>
											  </div>
												<div class="thumbnail">
													<a href="./assets/images/kal/img/RK_154X175_1426540484.png" target="_blank">
														<img src="./assets/images/kal/img/RK_154X175_1426540484.png" width="100%">
													</a>
												</div>
												<span class="h6">Image Title</span><br/>
												<span class="p">Caption of file</span>
												<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
											</form>
										</div>
									</div>
								</div>

								<!-- This is the card for each media that has been uploaded into the database -->
								<div class="col-lg-3 col-md-3 col-sm-4 col-6">
									<div class="card m-1 border-0 shadow">
										<div class="card-body">
											<form>
											  <div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheck4" name="example1">
											    <label class="custom-control-label" for="customCheck4"></label>
											  </div>
												<div class="thumbnail">
													<a href="./assets/images/kal/img/RK_154X175_1426540484.png" target="_blank">
														<img src="./assets/images/kal/img/RK_154X175_1426540484.png" width="100%">
													</a>
												</div>
												<span class="h6">Image Title</span><br/>
												<span class="p">Caption of file</span>
												<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
											</form>
										</div>
									</div>
								</div>

							</div>

							<!-- These are the buttons for the upload and for selecting files -->
							<div class="fixed-bottom mb-2 mr-5">
								<button class="btn btn-primary btn-sm float-right m-3 shadow-lg" data-toggle="modal" data-target="#mediaUploads"><span class="fa fa-upload m-2"></span>Upload New File</button>
								<button class="btn btn-primary btn-sm float-right m-3 shadow-lg"><span class="fa fa-plus m-2"></span>Select Files</button>
							</div>

							<!-- This is the  Media Uploads Modal where you can upload all your files for selection-->
						  <div class="modal fade" id="mediaUploads">
						    <div class="modal-dialog modal-dialog-centered">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="mx-auto py-2">
						          <h5 class="modal-title">File Uploads</h5>
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">

							        <div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
											    <img data-src="holder.js/100%x100%"  alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
											    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select </span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
											    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="fileTitle" placeholder="File Title">
						        	</div>
							        <div class="form-group">
							        	<input type="text" class="form-control" name="fileCaption" placeholder="File Caption" />
							        </div>
											<button class="btn btn-primary btn-sm float-right"> Update Media </button>
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