<link rel="stylesheet" href="assets/css/otherdivs.css">
	<style>

	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>

			<!-- main div -->
			<div id="main" class="container h-100">

				<!-- togglebutton -->
				<a href="#" onclick="openNav()" id="togglelink">
					<div></div>
					<div></div>
					<div></div>
				</a>

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					<div class="row">
						<div class="col">
							<div class="card border-0 shadow">
								<div class="card-body">
									<h5>Documents</h5>
									<div class="table">
										<table class="table table-striped table-hover">
											<thead class="thead-dark">
												<th>S/N</th>
												<th>Title</th>
												<th>Desciption</th>
												<th>Size</th>
												<th>Operations</th>
											</thead>
											<tbody>
												<tr>
													<td colspan="5">
														<p>You have not uploaded any document here</p>
													</td>
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
								          <h5 class="modal-title">Document Upload</h5>
								         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
								        </div>
								        
								        <!-- Modal body -->
								        <div class="modal-body">
								        	<div class="form-group">
									          <select class="form-control" name="selectTitle">
									          	<option value="" disabled="">Title</option>
									          	<option value="Assessed Works">Assessed Works</option>
									          	<option value="Draft Thesis">Draft Thesis</option>
									          	<option value="Projects">Projects</option>
									          	<option value="Research Paper">Research Paper</option>
									          	<option value="Others">Others</option>
									          </select>
									        </div>
									        <div class="form-group">
									        	<input type="text" class="form-control" name="description" placeholder="File Description">
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
		</div>
	</div>
	<script src="assets/js/togglefunction.js"></script>
	<script type="text/javascript">
	
	</script>
	<!-- <script src="./js/fxn.js"></script> -->
</body>
</html>