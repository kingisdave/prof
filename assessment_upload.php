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
				<!-- <a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a> -->

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					<div class="row">
						<div class="col">
							<div class="card border-0 shadow">
								<div class="card-body">
									<h5>Assessment Uploads</h5>
									<div class="row assessrow">
										<div class="col-md-3 col-sm-4 col-6">
											<div class="card m-1 shadow">
										  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
										   	<div class="card-body">
											    <p>Paper Title</p>
											    <p>Paper Author</p>
											    <a href="assesssingle.php" class="btn btn-sm btn-info float-left">Access</a>
											  	<button class="btn btn-outline-danger btn-sm float-right m-1"><i class="fa fa-trash"></i></button>
											  </div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-6">
											<div class="card m-1 shadow">
										  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
										   	<div class="card-body">
											    <p>Paper Title</p>
											    <p>Paper Author</p>
											    <a href="assesssingle.php" class="btn btn-sm btn-info float-left">Access</a>
											  	<button class="btn btn-outline-danger btn-sm float-right m-1"><i class="fa fa-trash"></i></button>					 
											  </div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-6">
											<div class="card m-1 shadow">
										  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
										   	<div class="card-body">
											    <p>Paper Title</p>
											    <p>Paper Author</p>
											    <a href="assesssingle.php" class="btn btn-sm btn-info float-left">Access</a>
											  	<button class="btn btn-outline-danger btn-sm float-right m-1"><i class="fa fa-trash"></i></button>	 
											  </div>
											</div>
										</div>
										<div class="col-md-3 col-sm-4 col-6">
											<div class="card m-1 shadow">
										  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
			
										   	<div class="card-body">
											    <p>Paper Title</p>
											    <p>Paper Author</p>
											    <a href="assesssingle.php" class="btn btn-sm btn-info float-left">Access</a>
											  	<button class="btn btn-outline-danger btn-sm float-right m-1"><i class="fa fa-trash"></i></button>
											  </div>
											</div>
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
								          <h5 class="modal-title">Assesment Upload</h5>
								         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
								        </div>
								        
								        <!-- Modal body -->
								        <div class="modal-body">
								        	<div class="form-group">
								        		<input type="text" class="form-control" name="title" placeholder="Title">
								        	</div>
								        	<div class="form-group">
								        		<input type="text" name="author" class="form-control" placeholder="Author">
								        	</div>
									        <div class="form-group">
									        	<textarea class="form-control" rows="2" name="description" placeholder="File Description"></textarea>
									        </div>
									        <div class="form-group">
								        		<input type="text" name="assesskey" class="form-control" placeholder="ACCESS KEY">
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
									        <!-- <div class="uploadbtnwrapper float-left">
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
		</div>
	</div>
	<script src="assets/js/togglefunction.js"></script>
	<script type="text/javascript">
		// $(document).ready(function(){
	
		// 	$("#postImgPrev").change(function(){
		// 		$('#my_preview').html("");
		// 		var total_file=document.getElementById('postImgPrev').files.length;
		// 		for(var i=0; i<total_file; i++){
		// 			$('#my_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'/>");
		// 		}
		// 	});
		// })
	</script>
	<!-- <script src="./js/fxn.js"></script> -->
</body>
</html>