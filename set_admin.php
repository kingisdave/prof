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
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o"></i></button>
												<button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheckOne" name="example1">
											    <label class="custom-control-label" for="customCheckOne"></label>
											  </div>
											</td>
											<td>2</td>
											<td>
												<span class="badge badge-info p-1">Admin</span>
											</td>
											<td>dPM DFSOPD</td>
											<td>Forum and Webinar</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o"></i></button>
												<button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheckOne" name="example1">
											    <label class="custom-control-label" for="customCheckOne"></label>
											  </div>
											</td>
											<td>3</td>
											<td>
												<span class="badge badge-info p-1">Admin</span>
											</td>
											<td>Newref admin</td>
											<td>Gallery Administration</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o"></i></button>
												<button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
											</td>
										</tr>
										<tr>
											<td>
												<div class="custom-control custom-checkbox">
											    <input type="checkbox" class="custom-control-input" id="customCheckOne" name="example1">
											    <label class="custom-control-label" for="customCheckOne"></label>
											  </div>
											</td>
											<td>4</td>
											<td>
												<span class="badge badge-info p-1">Admin</span>
											</td>
											<td>Ffrer FSfefgeOPD</td>
											<td>Exhibition and Museum</td>
											<td class="text-center">
												<button class="btn btn-outline-info btn-sm" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o"></i></button>
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
					  <div class="modal fade" id="editModal">
					    <div class="modal-dialog">
					      <div class="modal-content">
					      
					        <!-- Modal Header -->
					        <div>
					          <h4 class="modal-title">Edit the Admin</h4>
					        </div>
					        
					        <!-- Modal body -->
					        <div class="modal-body">
					          Modal body..
					        </div>
					        
					        <!-- Modal footer -->
					        <div class="modal-footer">
					          <button type="button" class="btn btn-danger" data-dismiss="modal">Update Admin</button>
					        </div>
					        
					      </div>
					    </div>
					  </div>

					  <!-- The Add Admin Modal -->
					  <div class="modal fade" id="editModal">
					    <div class="modal-dialog">
					      <div class="modal-content">
					      
					        <!-- Modal Header -->
					        <div>
					          <h4 class="modal-title">Add New Admin</h4>
					        </div>
					        
					        <!-- Modal body -->
					        <div class="modal-body">
					          
					        </div>
					        
					        <!-- Modal footer -->
					        <div class="modal-footer">
					          <button type="button" class="btn btn-danger" data-dismiss="modal">Add New Admin</button>
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
