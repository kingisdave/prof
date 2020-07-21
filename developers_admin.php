<link rel="stylesheet" href="assets/css/otherdivs.css">
	<style>
		.assessrow a.btn, 
			.assessrow button{
				font-size: 75%;
		}
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
						<div class="col-12">
							<div class="card border-0 shadow">
								<div class="card-body">
									<table class="table table-striped table-responsive-sm">
										<thead class="thead thead-dark">
											<tr>
												<th>S/N</th>
												<th>Developer</th>
												<th>Job</th>
												<th>Operation</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>David O. Ayangunna</td>
												<td>Frontend Developement</td>
												<td>
													<span class="btn h6 fa fa-edit text-info mr-2" data-toggle="modal" data-target="#developerdetails"></span>
													<span class="btn h6 fa fa-trash text-danger"></span>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Okesola O. Oreoluwa</td>
												<td>Backend Developer</td>
												<td>
													<span class="btn h6 fa fa-edit text-info mr-2" data-toggle="modal" data-target="#developerdetails"></span>
													<span class="btn h6 fa fa-trash text-danger"></span>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="fixed-bottom mb-2 mr-2">
										<button class="btn btn-primary rounded-circle float-right p-3 shadow-lg" data-toggle="modal" data-target="#addtodeveloper"><span class="fa fa-plus"></span></button>
									</div>
							
								</div>
							</div>
					  </div>
		
								<!-- The Developer Edit Modal -->
						  <div class="modal fade" id="developerdetails">
						    <div class="modal-dialog modal-dialog-centered">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="mx-auto py-2">
						          <h5 class="modal-title">Edit Profile</h5>
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">
						        	<!-- This  is the developer profile picture -->
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
											    <img data-src="assets/images/dust.png/100%x100%"  alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
											    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
											    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="developerName" placeholder="Name of Developer">
						        	</div>
						        	<div class="form-group">
						        		<input type="email" class="form-control" name="developerEmail" placeholder="Enter Email Address">
						        	</div>
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="developerJob" placeholder="Job of Developer">
						        	</div>
						        	<div class="form-group">
						        		<input type="url" class="form-control" name="developerUrl" placeholder="Website of Developer">
						        	</div>
							        <div class="form-group">
						        		<textarea class="form-control" rows="2" name="developerOther" placeholder="Other Information"></textarea>
						        	</div>
							        <div class="clearfix">
												<button class="btn btn-primary btn-sm float-right"> Update</button>
						        	</div>
						        </div>

						      </div>
						    </div>
						  </div>

						  		<!-- The Add New Developer Modal -->
						  <div class="modal fade" id="addtodeveloper">
						    <div class="modal-dialog modal-dialog-centered">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="mx-auto py-2">
						          <h5 class="modal-title">Add New Developer</h5>
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">
						        	<!-- This  is the developer profile picture -->
											<div class="fileinput fileinput-new" data-provides="fileinput">
											  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
											    <img data-src="assets/images/dust.png/100%x100%"  alt="...">
											  </div>
											  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
											  <div>
											    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
											    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
											  </div>
											</div>
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="developerName" placeholder="Name of Developer">
						        	</div>
						        	<div class="form-group">
						        		<input type="email" class="form-control" name="developerEmail" placeholder="Enter Email Address">
						        	</div>
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="developerJob" placeholder="Job of Developer">
						        	</div>
						        	<div class="form-group">
						        		<input type="url" class="form-control" name="developerUrl" placeholder="Website of Developer">
						        	</div>
							        <div class="form-group">
						        		<textarea class="form-control" rows="2" name="developerOther" placeholder="Other Information"></textarea>
						        	</div>
							        <div class="clearfix">
												<button class="btn btn-primary btn-sm float-right"> Post </button>
						        	</div>
						        </div>

						      </div>
						    </div>
						  </div>

								<!-- The Library Modal{ Including the Books, Journals, Publications} -->
						  <div class="modal fade" id="myLibrary">
						    <div class="modal-dialog modal-dialog-centered">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="mx-auto py-2">
						          <h5 class="modal-title">Library Upload</h5>
						         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">
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
						        		<select class="form-control">
						        			<option>--Choose the Category--</option>
						        			<option value="Authored Book">Authored Book</option>
						        			<option value="Edited Book">Edited Book</option>
						        			<option value="Contribution to Book">Contributions to Books</option>
						        			<option value="Book Review">Book Reviews</option>
						        			<option value="Learned and Journal Article">Learned and Journal Article</option>
						        			<option value="Edited Learned Journal">Edited Learned Journal</option>
						        			<option value="Technical Report">Technical Report</option>
						        			<option value="Public Lecture">Public Lecture</option>
						        			<option value="Creative Writing">Creative Writing</option>
						        		</select>
						        	</div>
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="title" placeholder="Title">
						        	</div>
						        	<div class="form-group">
						        		<input type="text" name="author" class="form-control" placeholder="Author">
						        	</div>
							        <div class="form-group">
							        	<textarea class="form-control" rows="2" name="description" placeholder="File Description"></textarea>
							        </div>
							        
											<button class="btn btn-primary btn-sm float-right">Save</button>
						        </div>

						      </div>
						    </div>
						  </div>

						  <!-- The Exhibition Hall and Museum Upload Modal -->
							<div class="modal fade" id="myExhibitionMuseum">
						    <div class="modal-dialog modal-dialog-centered">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="mx-auto py-2">
						          <h5 class="modal-title">Exhibition Hall/Museum Upload</h5>
						         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">
						        	<form>
						        		<!-- Select from radio buttons to choose from the arts gallery and form materials -->
						        		<div class="form-group">
													<div class="form-check-inline">
													  <label class="form-check-label">
													    <input type="radio" class="form-check-input" name="optradio">Exhibition Hall
													  </label>
													</div>
													<div class="form-check-inline">
													  <label class="form-check-label">
													    <input type="radio" class="form-check-input" name="optradio">Museum
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
							        		<input type="text" class="form-control" name="Name" placeholder="Name of Exhibition Hall/ Museum" />
							        	</div>
							        	<div class="form-group">
							        		<input type="text" class="form-control" name="imageName" placeholder="Artist/Curators' Name">
							        	</div>
							        	<div class="form-group">
							        		<input type="email" class="form-control" name="artistEmail" placeholder="Artist/Curators' Email">
							        	</div>
							        	<div class="form-group">
							        		<input type="phone" class="form-control" name="imagePhone" placeholder="Artist/Curators' Contact Number">
							        	</div>
							        	<div class="form-group">
							        		<input type="text" class="form-control" name="specialization" placeholder="Artist/Curators' Specialization">
							        	</div>
							        	<div class="form-group">
							        		<input type="text" class="form-control" name="institution" placeholder="Institution of Artist/Curator">
							        	</div>
								        <div class="clearfix">
													<button class="btn btn-primary btn-sm float-right"> Post </button>
						        		</div>
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
</body>
</html>