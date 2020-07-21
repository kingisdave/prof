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

			<div class="container-fluid ml-2 mx-auto" style="width: 92%; border-radius: 13px">
				<div class="row bg-white">
					<div class="col-12">
						<div class="card border-0 m-1 shadow">
							<div class="card-body">
								<h5>Curriculum and Resume Preview </h5>
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-5 col-12">
										<img src="./assets/images/kal/img/RK_142X172_1426538304.png" class="img-thumbnail rounded-circle shadow-lg" width="200" height="200" />
									</div>
									<div class="col-lg-8 col-md-8 col-sm-7 col-12 text-center">
										<h6 id="texttwo" class="greetingText m- mt-1">Razaq Olatunde Rom Kalilu</h6>
										<p class="otherText text-dark m-3">Ph.D, MNYAS, MISEA, MACS, MIAAA, fsna</p>
										<p class="otherText text-dark m-3">Gold Medalist, All-Africa Painting Contest, 1978-79</p>
										<p class="otherText text-dark m-3">Recipient, Universal Award of Accomplishment, 2000</p>
										<p class="otherText text-dark m-3">Justice of the Peace, Oyo State, Federal Republic of Nigeria</p>
										<p class="otherText text-dark m-3">Professor of Art and Art History</p>
										<p class="otherText text-dark m-3">Deputy Vice Chancellor (2006-2008)</p>
										<p class="otherText text-dark m-3">Ladoke Akintola University of Technology, Ogbomoso, Nigeria</p>
										
										<button class="float-right btn btn-primary" data-toggle="modal" data-target="#profilePreview"><span class="fa fa-edit"></span></button>
									</div>
								</div>
							</div>
						</div>
					</div>
						<!-- The Profile Preview Edit Modal -->
				  <div class="modal fade" id="profilePreview">
				    <div class="modal-dialog modal-dialog-centered">
				      <div class="modal-content">
				      
				        <!-- Modal Header -->
				        <div class="mx-auto py-2">
				          <h5 class="modal-title">Profile Preview</h5>
				        </div>
				      
				        <!-- Modal body -->
				        <div class="modal-body">
				        	<!-- <img src="./assets/images/kal/img/RK_142X172_1426538304.png" class="img-thumbnail rounded-circle shadow-lg" width="70" height="70"/> -->
				        	<form class="form">
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
											<input type="text" class="form-control" value="Razaq Olatunde Rom Kalilu">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Ph.D, MNYAS, MISEA, MACS, MIAAA, fsna">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Gold Medalist, All-Africa Painting Contest, 1978-79">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Recipient, Universal Award of Accomplishment, 2000">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Justice of the Peace, Oyo State, Federal Republic of Nigeria">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Professor of Art and Art History">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Deputy Vice Chancellor (2006-2008)">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Ladoke Akintola University of Technology, Ogbomoso, Nigeria">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" value="Justice of the Peace, Oyo State, Federal Republic of Nigeria">
										</div>

										<h6>Your External Links</h6>

										<!-- <div class="form-group">
											<input type="text" name="" class="form-control" placeholder="Your Facebook Profile url">
										</div>
										<div class="form-group">
											<input type="text" name="" class="form-control" placeholder="Your Twitter Profile url">
										</div>
										<div class="form-group">
											<input type="text" name="" class="form-control" placeholder="Your Instagram Profile url">
										</div>
										<div class="form-group">
											<input type="text" name="" class="form-control" placeholder="Your Youtube Channel url">
										</div>
										<div class="form-group">
											<input type="text" name="" class="form-control" placeholder="Your Pin Interest url">
										</div> -->
										<div class="input-group mb-3">
									    <div class="input-group-prepend">
									      <span class="input-group-text"><i class="fa fa-facebook"></i></span>
									    </div>
									    <input type="text" class="form-control" placeholder="Your Facebook Profile url">
									  </div>
									  <div class="input-group mb-3">
									    <div class="input-group-prepend">
									      <span class="input-group-text"><i class="fa fa-twitter"></i></span>
									    </div>
									    <input type="text" class="form-control" placeholder="Your Twitter Profile url">
									  </div>
									  <div class="input-group mb-3">
									    <div class="input-group-prepend">
									      <span class="input-group-text"><i class="fa fa-instagram"></i></span>
									    </div>
									    <input type="text" class="form-control" placeholder="Your Instagram Profile url">
									  </div>
									  <div class="input-group mb-3">
									    <div class="input-group-prepend">
									      <span class="input-group-text"><i class="fa fa-youtube"></i></span>
									    </div>
									    <input type="text" class="form-control" placeholder="Your Youtube Profile url">
									  </div>

										<button class="btn btn-primary btn-sm float-right">Update</button>
			        		</form>
				        </div>

				      </div>
				    </div>
					</div>
					
					<div class="col-12">
						<div class="card m-1 border-0 shadow">
							<div class="card-body">
								<h5>Uploaded Resume and Curriculum Vitae</h5>
								<table class="table table-striped mt-2">
									<thead class="thead-dark">
										<tr>
											<th>S/N</th>
											<th>File Name</th>
											<th>Author</th>
											<th>Uploaded By</th>
											<th>Date Uploaded</th>
											<th>Operation</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Curriculum Vitae</td>
											<td>Admin ADMIN</td>
											<td>Admin ADMIN</td>
											<td><small>3rd July, 2020</small></td>
											<td><button class="btn btn-outline-danger"><span class="fa fa-trash"></span></button></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Resume</td>
											<td>Admin ADMIN</td>
											<td>Admin ADMIN</td>
											<td><small>3rd July, 2020</small></td>
											<td><button class="btn btn-outline-danger"><span class="fa fa-trash"></span></button></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
					
				<div class="fixed-bottom mb-2 mr-2">
					<button class="btn btn-primary rounded-circle float-right p-3 shadow-lg" data-toggle="modal" data-target="#curriculumUpload"><span class="fa fa-plus"></span></button>
				</div>

				
			  <!-- The Exhibition Hall and Museum Upload Modal -->
				<div class="modal fade" id="curriculumUpload">
			    <div class="modal-dialog modal-dialog-centered">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="mx-auto py-2">
			          <h5 class="modal-title">Resume/Curriculum Vitae Upload</h5>
			         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">
			        	<form>
			        		<!-- Select from radio buttons to choose from the Resume and Curriculum Vitae -->
			        		<div class="form-group">
			        			<small class="p">Select the type of File you are uploading</small><br/>
										<div class="form-check-inline">
										  <label class="form-check-label">
										    <input type="radio" class="form-check-input" name="optradio">Resume
										  </label>
										</div>
										<div class="form-check-inline">
										  <label class="form-check-label">
										    <input type="radio" class="form-check-input" name="optradio">Curriculum Vitae
										  </label>
										</div>
									</div>
									<div class="fileinput fileinput-new" data-provides="fileinput">
									  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
									    <img data-src="holder.js/100%x100%"  alt="...">
									  </div>
									  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
									  <div>
									    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select File</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
									    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
									  </div>
									</div>

									<div class="form-group">
				        		<input type="text" class="form-control" name="Name" placeholder="Author" />
				        	</div>
				        	<div class="form-group">
				        		<input type="text" class="form-control" name="imageName" placeholder="Uploads By">
				        	</div>
				        	<div class="form-group">
				        		<input type="date" class="form-control" name="uploaddate" placeholder="Upload Date" />
				        	</div>
					        
									<button class="btn btn-primary btn-sm float-right"> Post </button>
			        	</form>
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