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

				<div class="container-fluid ml-2 mx-auto" style="width: 95%; border-radius: 13px">
					<h4>Personal Assignments</h4>
					<div class="row bg-white shadow p-2">
						<div class="col-12 mx-auto">
							<p class="text-info small">These are recent assignments</p>
						
							<div class="table mx-auto">
								<table class="table table-striped table-responsive-md shadow text-center">
									<thead class="thead-info">
										<tr>
											<th>S/N</th>
											<th>Category</th>
											<th>Title</th>
											<th>Status</th>
											<th>Date Started</th>
											<th>Completed</th>
											<th>Operation</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Personal Assignment</td>
											<td>The Technology in Arts</td>
											<td><span class="badge badge-success text-white">Completed</span></td>
											<td>1st January, 2020</td>
											<td>20 June, 2020</td>
											<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Group Assignment</td>
											<td>The Technology in Arts</td>
											<td><span class="badge badge-warning text-white">Uncompleted</span></td>
											<td>30th January, 2020</td>
											<td>-</td>
											<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Personal Assignment</td>
											<td>Techno and Arts</td>
											<td><span class="badge badge-warning text-white">Uncompleted</span></td>
											<td>30th January, 2020</td>
											<td>-</td>
											<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
										</tr>
									</tbody>
								</table>
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
						          <h5 class="modal-title">Assignment Information</h5>
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">
							    
							        <div class="form-group">
							        	<input type="text" class="form-control" name="title" placeholder="Assignment Title">
							        </div>
							        <div class="form-group">
							        	<input type="date" class="form-control" name="datefrom" placeholder="Date From">
							        </div>
							        <div class="form-group">
							        	<input type="date" class="form-control" name="dateto" placeholder="Date To">
							        </div>
							        <div class="uploadbtnwrapper float-left">
												<button class="mybtn btn-sm">Select File</button>
												<input type="file" name="myfile">
											</div>
											<button class="btn btn-primary btn-sm float-right">Save</button>
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
</body>
</html>