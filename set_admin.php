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
			<a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a>

			<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">

				<div class="row">
					<div class="col-12">
						<div class="card m-1 border-0 shadow">
							<div class="card-body">
								<table class="table table-striped table-responsive-sm table-bordered">
									<thead class="thead-dark">
										<tr>
											<th></th>
											<th>S/N</th>
											<th>Rank</th>
											<th>Full Name</th>
											<th>Assigned</th>
											<th>Operations</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheckOne" name="example1">
											    <label class="custom-control-label" for="customCheckOne"></label>
											  </div>
											</td>
											<td>1</td>
											<td>
												<span class="badge badge-info p-1">General Admin</span>
											</td>
											<td>Prof Rom Kalilu</td>
											<td>Full Administration</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editAdminModal"><i class="fa fa-edit"></i></button>
												<button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheckTwo" name="example1">
											    <label class="custom-control-label" for="customCheckTwo"></label>
											  </div>
											</td>
											<td>2</td>
											<td>
												<span class="badge badge-info p-1">Admin</span>
											</td>
											<td>dPM DFSOPD</td>
											<td>Forum and Webinar</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editAdminModal"><i class="fa fa-edit"></i></button>
												<button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheckThree" name="example1">
											    <label class="custom-control-label" for="customCheckThree"></label>
											  </div>
											</td>
											<td>3</td>
											<td>
												<span class="badge badge-info p-1">Admin</span>
											</td>
											<td>Newref admin</td>
											<td>Gallery Administration</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm m-1" data-toggle="modal" data-target="#editAdminModal"><i class="fa fa-edit"></i></button>
												<button class="btn btn-outline-danger btn-sm m-1"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheckFour" name="example1">
											    <label class="custom-control-label" for="customCheckFour"></label>
											  </div>
											</td>
											<td>4</td>
											<td>
												<span class="badge badge-info p-1">Admin</span>
											</td>
											<td>Ffrer FSfefgeOPD</td>
											<td>Exhibition and Museum</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editAdminModal"><i class="fa fa-edit"></i></button>
												<button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<!-- Add Admin Modal Button -->
						<div class="fixed-bottom mb-2 mr-2">
							<button class="btn btn-primary rounded-circle float-right p-3 shadow-lg" data-toggle="modal" data-target="#addAdminModal"><span class="fa fa-plus"></span></button>
						</div>
						
						<!-- The Edit Modal -->
					  <div class="modal fade" id="editAdminModal">
					    <div class="modal-dialog">
					      <div class="modal-content">
					      
					        <!-- Modal Header -->
					        <div>
					          <h4 class="modal-title">Edit the Admin</h4>
					        </div>
					        
					        <!-- Modal body -->
					       <div class="modal-body">
					        	<form class="form">

					          <!-- Select from radio buttons to choose from the General Admin or Admin -->
					          	<div class="form-group">
												<div class="form-check-inline">
												  <label class="form-check-label">
												    <input type="radio" class="form-check-input" name="optradio">General Admin
												  </label>
												</div>
												<div class="form-check-inline">
												  <label class="form-check-label">
												    <input type="radio" class="form-check-input" name="optradio">Admin
												  </label>
												</div>
											</div>
						        	<!-- Admin Full Name Here -->
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="imageName" placeholder="Admin FullName Here">
						        	</div>
						        	<!-- Select from a list of pages -->
						        	<div class="form-group">
							        	<div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminArts" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminArts">Arts Gallery</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminPublication" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminPublication">Publications</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminAssesment" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminAssesment">Assessments</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminExhibition" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminExhibition">Journals</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminMuseum" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminMuseum">Museum</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminProfile" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminProfile">Profile</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminMultimedia" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminMultimedia">Multimedia</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminForum" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminForum">Forum</label>
											  </div>
											</div>
							        <div class="uploadbtnwrapper float-left">
												<button class="mybtn btn-sm">Select Image</button>
												<input type="file" name="myfile">
											</div>
											<button class="btn btn-primary btn-sm float-right"> Update Admin</button>
										</form>
					        </div>
					        
					      </div>
					    </div>
					  </div>

					  <!-- The Add Admin Modal -->
					  <div class="modal fade" id="addAdminModal">
					    <div class="modal-dialog">
					      <div class="modal-content">
					      
					        <!-- Modal Header -->
					        <div>
					          <h4 class="modal-title">Add New Admin</h4>
					        </div>
					        
					        <!-- Modal body -->
					        <div class="modal-body">
					        	<form class="form">
					          <!-- Select from radio buttons to choose from the General Admin or Admin -->
											<div class="form-group">
												<div class="form-check-inline">
												  <label class="form-check-label">
												    <input type="radio" class="form-check-input" name="optradio">General Admin
												  </label>
												</div>
												<div class="form-check-inline">
												  <label class="form-check-label">
												    <input type="radio" class="form-check-input" name="optradio">Admin
												  </label>
												</div>
											</div>
											<!-- Admin Full Name Here -->
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="imageName" placeholder="Admin FullName Here">
						        	</div>
						        	<!-- Select from a list of pages -->
						        	<div class="form-group">
							        	<div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminArts" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminArts">Arts Gallery</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminPublication" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminPublication">Publications</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminAssesment" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminAssesment">Assessments</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminExhibition" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminExhibition">Journals</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminMuseum" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminMuseum">Museum</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminProfile" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminProfile">Profile</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminMultimedia" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminMultimedia">Multimedia</label>
											  </div>
											  <div class="custom-control custom-radio custom-control-inline">
											    <input type="radio" class="custom-control-input" id="adminForum" name="example" value="myvalue">
											    <label class="custom-control-label" for="adminForum">Forum</label>
											  </div>
											</div>
							       
							        <div class="uploadbtnwrapper float-left">
												<button class="mybtn btn-sm">Select Image</button>
												<input type="file" name="myfile">
											</div>
											<button class="btn btn-primary btn-sm float-right">Add Admin</button>
										</form>
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
