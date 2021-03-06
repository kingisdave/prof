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
								<table class="table table-striped table-responsive-md shadow">
									<tr class="thead-info">
										<th>S/N</th>
										<th>Full Name</th>
										<th>Matric No</th>
										<th>Topic</th>
										<th>Category</th>
										<th>Duration From</th>
										<th>Duration To</th>
										<th>Operation</th>
									</tr>
									<tr>
										<td>1</td>
										<td>
											<h6>DANOE Asdjkas</h6>
											<p class="small">Institution: Jaskdja</p>
										</td>
										<td>
											<i>2848320HT</i>
										</td>
										<td>
											<h6 class="text-info">Assessing Engineering in Arts</span>
										</h6>
										<td>
											<span class="badge badge-info">Undergraduate</span>
										</td>
										<td>
											<p class="text-info small">3rd-July-2019</p>
										</td>
										<td>
											<p class="text-info small">15th-July-2019</p>
										</td>
										<td>
											<button class="btn btn-sm btn-info">Assign</button>
											<button class="btn btn-sm btn-danger">Remove</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<h6>OLANREWAJU Daniel</h6>
											<p class="small">Institution: Jaskdja</p>
										</td>
										<td>
											<i>2848320HT</i>
										</td>
										<td>
											<h6 class="text-info">Assessing Engineering in Arts</span>
										</h6>
										<td>
											<span class="badge badge-info">Postgraduate</span>
										</td>
										<td>
											<p class="text-info small">3rd-July-2019</p>
										</td>
										<td>
											<p class="text-info small">15th-July-2019</p>
										</td>
										<td>
											<button class="btn btn-sm btn-info">Assign</button>
											<button class="btn btn-sm btn-danger">Remove</button>
										</td>
									</tr>				
								</table>
								<div class="text-center mb-2">
									<button class="btn btn-info btn-sm mx-auto">Read More</button>
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
						          <h5 class="modal-title">Assignment Information</h5>
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">
							        <div class="form-group">
							        	<input class="form-control" name="fullname" placeholder="Participant Name" />
							        </div>
							        <div class="form-group">
							        	<input type="text" class="form-control" name="institution" placeholder="Institution">
							        </div>
							        <div class="form-group">
							        	<input type="text" class="form-control" name="matricno" placeholder="Matric No">
							        </div>
							        <div class="form-group">
							        	<input type="text" class="form-control" name="title" placeholder="Assignment Title">
							        </div>
							        <div class="form-group">
							          <select class="form-control" name="selectCategory">
							          	<option value="">--Select Category--</option>
							          	<option value="Group One">Undergraduates</option>
							          	<option value="Group Two">Postgraduates</option>
							          	<option value="Group One">Ex-students</option>
							          	<option value="Group Two">Colleagues</option>
							          </select>
							        </div>
							        <div class="form-group">
							        	<input type="date" class="form-control" name="datefrom" placeholder="Date From">
							        </div>
							        <div class="form-group">
							        	<input type="date" class="form-control" name="dateto" placeholder="Date To">
							        </div>
							       <!--  <div class="uploadbtnwrapper float-left">
												<button class="mybtn btn-sm">Select File</button>
												<input type="file" name="myfile">
											</div> -->
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