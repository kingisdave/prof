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
					<h4>Group Assignments</h4>
					<div class="row bg-white shadow p-2">
						<div class="col-12 mx-auto">
							<p class="text-info small">These are the recent assignments</p>
						
							<div class="table mx-auto">
								<table class="table table-striped table-responsive-md shadow">
									<tr class="thead-info">
										<th>S/N</th>
										<th>Group</th>
										<th>Participants</th>
										<th>Course</th>
										<th>Institution</th>
										<th>Topic</th>
										<th>Category</th>
										<th>Duration From</th>
										<th>Duration To</th>
										<th>Operation</th>
									</tr>
									<tr>
										<td>1</td>
										<td>
											Group One
										</td>
										<td>
											<small>OKESOLA Emmanuel Oluwatobi</small>
											<small>OLANREWAJU Daniel</small>
											<small>DANOE Asdjkas</small>
										</td>
										<td>
											<p class="small">Elekoro</p>
										</td>
										<td>
											<p class="small">FAA 104</p>
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
											Group Two
										</td>
										<td>
											<small>OLANREWAJU Daniel</small>
											<small>DANOE Asdjkas</small>
											<small>OKESOLA Emmanuel Oluwatobi</small>
										</td>
										<td>
											<p class="small">Lautech</p>
										</td>
										<td>
											<p class="small">FAA 104</p>
										</td>
										<td>
											<h6 class="text-info">Global Information about Arts</span>
										</h6>
										<td>
											<span class="badge badge-info">Postgraduate</span>
										</td>
										<td>
											<p class="text-info small">1st-July-2019</p>
										</td>
										<td>
											<p class="text-info small">20th-July-2019</p>
										</td>
										<td>
											<button class="btn btn-sm btn-info">Assign</button>
											<button class="btn btn-sm btn-danger">Remove</button>
										</td>
									</tr>				
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
						        	<form class="form">
						        	<div class="form-group">
							          <input type="text" class="form-control" name="group" placeholder="Group">
							        </div>
							        </div>
							        <div class="form-group">
							        	<textarea class="form-control" name="participants" placeholder="Name of Participants"></textarea>
							        </div>
							        <div class="form-group">
							        	<input type="text" class="form-control" name="course" placeholder="Course">
							        </div>
							        <div class="form-group">
							        	<input type="text" class="form-control" name="institution" placeholder="Institution">
							        </div>
							        <div class="form-group">
							        	<input type="text" class="form-control" name="title" placeholder="Assignment Title">
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
	<script src="assets/js/togglefunction.js"></script>
	<script type="text/javascript">

	</script>
</body>
</html>