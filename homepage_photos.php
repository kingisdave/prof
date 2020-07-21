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

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					
				<!-- This is the first carousel/Photo gallery -->
					<div class="card shadow">
						<div class="card-header">
							<h6>Personal Image Carousel</h6>
							<small>Upload and Select all your images from media gallery</small>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-3 col-sm-4 col-6">
									<div class="card shadow m-1">
				  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
										<div class="card-body">
											<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
										</div>
									</div>
					  		</div>
					  		<div class="col-md-3 col-sm-4 col-6">
					  			<div class="card shadow m-1">
				  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
										<div class="card-body">
											<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
										</div>
									</div>
					  		</div>
					  		<div class="col-md-3 col-sm-4 col-6">
					  			<div class="card shadow m-1">
				  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
										<div class="card-body">
											<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
										</div>
									</div>
					  		</div>
					  		<div class="col-md-3 col-sm-4 col-6">
					  			<div class="card shadow m-1">
				  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
										<div class="card-body">
											<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
										</div>
									</div>
					  		</div>
							</div>
							<div class="clearfix">
								<a href="./admin_gallery.php" class="btn btn-info btn-sm float-left"><span class="fa fa-plus"></span>Add from Media Gallery</a>
								<button class="btn btn-outline-primary btn-sm rounded float-right">Post Profile Photo</button>
							</div>
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
									<small>Upload and Select all your images from media gallery</small>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-3 col-sm-4 col-6">
											<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
							  		<div class="col-md-3 col-sm-4 col-6">
							  			<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
							  		<div class="col-md-3 col-sm-4 col-6">
							  			<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
									</div>
									<div class="clearfix">
										<a href="./admin_gallery.php" class="btn btn-info btn-sm float-left"><span class="fa fa-plus"></span>Add from Media Gallery</a>
										<button class="btn btn-outline-primary btn-sm rounded float-right">Post Carousel One</button>
									</div>
								</div>
							</div> 
						</div>
						<div class="col-12">
							<h6>Second Column</h6>
							<div class="card shadow m-1">
								<div class="card-header">
									<h6>Images Carousel</h6>
									<small>Upload and Select all your images from media gallery</small>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-3 col-sm-4 col-6">
											<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
							  		<div class="col-md-3 col-sm-4 col-6">
							  			<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
							  		<div class="col-md-3 col-sm-4 col-6">
							  			<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
									</div>
									<div class="clearfix">
										<a href="./admin_gallery.php" class="btn btn-info btn-sm float-left"><span class="fa fa-plus"></span>Add from Media Gallery</a>
										<button class="btn btn-outline-primary btn-sm rounded float-right">Post Carousel Two</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<h6>Third Column</h6>
							<div class="card shadow m-1">
								<div class="card-header">
									<h6>Images Carousel</h6>
									<small>Upload and Select all your images from media gallery</small>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-3 col-sm-4 col-6">
											<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
							  		<div class="col-md-3 col-sm-4 col-6">
							  			<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
							  		<div class="col-md-3 col-sm-4 col-6">
							  			<div class="card shadow m-1">
						  					<img src="assets/images/dust.png" alt="New York" class="img-fluid" />
												<div class="card-body">
													<span class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></span>
												</div>
											</div>
							  		</div>
									</div>
									<div class="clearfix">
										<a href="./admin_gallery.php" class="btn btn-info btn-sm float-left"><span class="fa fa-plus"></span>Add from Media Gallery</a>
										<button class="btn btn-outline-primary btn-sm rounded float-right">Post Carousel One</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
