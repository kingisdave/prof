<link rel="stylesheet" href="assets/css/otherdivs.css">
	<style>

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

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					
				<!-- This is the section for the navigation links -->
					<div class="card shadow">
						<div class="card-header">
							<h4>Navigation Bar Links</h4>
						</div>
						<div class="card-body">
							<small>Insert your links for your navigation links</small>
							<div class="row">
								<div class="col-12">
									<table class="table table-striped table-responsive-md">
										<thead class="thead-dark">
											<tr>
												<th>Link</th>
												<th>Sublinks</th>
												<th>Operations</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Home</td>
												<td>-</td>
												<td>
													<button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#editLink">Edit</button>
													<button class="btn btn-sm btn-outline-danger">Delete</button>
												</td>
											</tr>
											<tr>
												<td>Gallery</td>
												<td>
													<a href="#">Art Gallery</a>
													<a href="#">Academic Publications</a>
													<a href="#">Theses Gallery</a>
													<a href="#">Public Lectures</a>
													<a href="#">Creative Writing</a>
													<a href="#">Form and Material Technology</a>	
													<a href="#">Multimedia</a>
													<a href="#">Exhibition Hall</a>
													<a href="#">Museum</a>	
												</td>
												<td>
													<button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#editLink">Edit</button>
													<button class="btn btn-sm btn-outline-danger">Delete</button>
												</td>
											</tr>
											<tr>
												<td>Forum</td>
												<td>-</td>
												<td>
													<button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#editLink">Edit</button>
													<button class="btn btn-sm btn-outline-danger">Delete</button>
												</td>
											</tr>
											<tr>
												<td>Conference</td>
												<td>
													<a href="#">Assessment Room</a>
													<a href="#">Discussion Centre</a>
													<a href="#">Webinar</a>
												</td>
												<td>
													<button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#editLink">Edit</button>
													<button class="btn btn-sm btn-outline-danger">Delete</button>
												</td>
											</tr>
											<tr>
												<td>Register</td>
												<td>-</td>
												<td>
													<button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#editLink">Edit</button>
													<button class="btn btn-sm btn-outline-danger">Delete</button>
												</td>
											</tr>
											<tr>
												<td>Profile</td>
												<td>
													<a href="#">Resume</a>
													<a href="#">Curriculum Vitae</a>
													<a href="#">Profile Multimedia</a>
													<a href="#">Private Multimedia</a>
												</td>
												<td>
													<button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#editLink">Edit</button>
													<button class="btn btn-sm btn-outline-danger">Delete</button>
												</td>
											</tr>
											<tr>
												<td>Profile</td>
												<td>
													<a href="#">Contact Us</a>
													<a href="#">Webmail</a>
												</td>
												<td>
													<button class="btn btn-sm btn-outline-info" data-toggle="modal" data-target="#editLink">Edit</button>
													<button class="btn btn-sm btn-outline-danger">Delete</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<!-- The Link Update Modal -->
				  <div class="modal fade" id="editLink">
				    <div class="modal-dialog modal-dialog-centered">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="mx-auto py-2">
				          <h5 class="modal-title">Link Update</h5>
				        </div>
				        
				        <!-- Modal body -->
				        <div class="modal-body">
				        	
									<div class="form-group">
										<input type="text" class="form-control" name="linktitle" placeholder="Name/Title of Link">
									</div>
									<div class="form-group">
										<input type="url" class="form-control" name="websiteurl" placeholder="Link/website Url">
									</div>
									<div class="form-group">
										<small><em>Choose whether to add sublinks inside</em></small>
										<div class="custom-control custom-checkbox">
									    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
									    <label class="custom-control-label" for="customCheck">Add Sublinks</label>
										</div>
									</div>
				        	<div class="form-group">
				        		<input type="text" name="sublinks" class="form-control" placeholder="Write new links">
				        	</div>
				        	<div class="form-group">
				        		<input type="text" name="sublinksurl" class="form-control" placeholder="Write new links website url">
				        	</div>
					        
									<button class="btn btn-primary btn-sm float-right"> Update Link </button>
				        </div>

				      </div>
				    </div>
				  </div>

					<hr class="text-secondary" />

					<!-- This is the section for uploading and updating the link under the book on the homepage  -->
					<div class="row">
						<div class="col-12 bg-white">
							<h4>Other Links</h4>
							<div class="row">
								<!-- These are the images for the links  -->
								<div class="col-lg-3 col-md-3 col-sm-3 col-6">
									<div class="card border-0 shadow mx-auto">
										<img src="./assets/images/kal/images/researchgate.png" class="rounded-circle" width="80" height="80" />
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6">
									<div class="card border-0 shadow mx-auto">
										<img src="./assets/images/kal/images/Lautech.png" class="rounded-circle" width="80" height="80" />
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6">
									<div class="card border-0 shadow mx-auto">
										<img src="./assets/images/kal/images/shadow.png" class="rounded-circle" width="80" height="80" />
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3 col-6">
									<div class="card border-0 shadow mx-auto">
										<img src="./assets/images/kal/images/academia.png" class="rounded-circle" width="80" height="80" />
									</div>
								</div>
							</div>
							<div class="clearfix m-3">
								<button class="btn btn-outline-info btn-sm float-left" data-toggle="modal" data-target="#newLinkModal">Update Link</button>
								<button class="btn btn-sm btn-info float-right">Post Link</button>
							</div>
						</div>
					</div>
							<!-- The Link upload Modal -->
						  <div class="modal fade" id="newLinkModal">
						    <div class="modal-dialog modal-dialog-centered">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="mx-auto py-2">
						          <h5 class="modal-title">Link Icons Upload</h5>
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">

						        	<!-- Select from radio buttons to choose from the arts gallery and form materials -->
						        	<div class="form-group">
												<div class="form-check-inline">
												  <label class="form-check-label">
												    <input type="radio" class="form-check-input" name="optradio">Navigation Links
												  </label>
												</div>
												<div class="form-check-inline">
												  <label class="form-check-label">
												    <input type="radio" class="form-check-input" name="optradio">Others/Books
												  </label>
												</div>
											</div>
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
											    <img data-src="holder.js/100%x100%"  alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
											    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
											    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
											<div class="form-group">
												<input type="text" class="form-control" name="linktitle" placeholder="Name/Title of Link">
											</div>
											<div class="form-group">
												<input type="url" class="form-control" name="websiteurl" placeholder="Link/website Url">
											</div>
											<div class="form-group">
												<small><em>Choose whether to add sublinks inside</em></small>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
											    <label class="custom-control-label" for="customCheck">Add Sublinks</label>
  											</div>
											</div>
						        	<div class="form-group">
						        		<input type="text" name="sublinks" class="form-control" placeholder="Write new links name">
						        	</div>
						        	<div class="form-group">
						        		<input type="text" name="sublinks" class="form-control" placeholder="Write new links url">
						        	</div>
							        
											<button class="btn btn-primary btn-sm float-right"> Update Link </button>
						        </div>

						      </div>
						    </div>
						  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
