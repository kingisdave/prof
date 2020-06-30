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
<!-- This is the first carousel/Photo gallery -->
					<div class="card shadow">
						<div class="card-header">
							<h6 class="card-header">Personal Image Carousel</h6>
							<!-- <small>Upload as many photos as possible. Select all at once</small> -->
						</div>
						<div class="card-body">
							<div id="my_preview"></div>
							<div class="uploadbtnwrapper float-left">
								<button class="mybtn btn-sm">Select File</button>
								<input type="file" id="postImgPrev" name="postImgPrev[]" multiple />
							</div>
							<button class="btn btn-outline-primary btn-sm rounded float-right">Upload Profile Photo</button>
						</div>
					</div>

					<hr class="text-secondary" />

					<!-- These are the three image galleries at the homepage  -->
					<h5>Smaller Photo Galleries</h5>
					<div class="row">
						<div class="col-12">
							<h6>First Column</h6>
							<div class="card shadow m-1">
								<div class="card-header">
									<h6>Images Carousel</h6>
									<!-- <small>Upload as many photos as possible. Select all at once</small> -->
								</div>
								<div class="card-body">
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
										<button class="btn btn-outline-primary btn-sm rounded float-right">Upload Carousel One</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<h6>Second Column</h6>
							<div class="card shadow m-1">
								<div class="card-header">
									<h6>Images Carousel</h6>
									<!-- <small>Upload as many photos as possible. Select all at once</small> -->
								</div>
								<div class="card-body">
									<div id="my_preview"></div>
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
										<button class="btn btn-outline-primary btn-sm rounded float-right">Upload Carousel One</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<h6>Third Column</h6>
							<div class="card shadow m-1">
								<div class="card-header">
									<h6>Images Carousel</h6>
									<!-- <small>Upload as many photos as possible. Select all at once</small> -->
								</div>
								<div class="card-body">
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
										<button class="btn btn-outline-primary rounded float-right">Upload Carousel Three</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>