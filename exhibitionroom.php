<?php include 'includes/header.php'; ?>
<div class="container-fluid m-1">
	<div class="row">
		<!-- Catalogue section  -->
		<div class="col-md-4 col-sm-6 col-11 mx-auto">
			<div class="card shadow mb-2" style="height: 65vh">
				<div class="card-body">
					<button name="downloadCatalogue" class="btn btn-sm btn-info float-right mr-2 mb-2">
        		Download Catalogue &nbsp;<i class="fa fa-download"><span class="fa fa-spin fa-spinner" id="loader" hidden=""></span></i>
        	</button>
				</div>
			</div>
		</div>
		<div class="col-md-8 col-sm-6 col-12 mx-auto" style="width: 98.6%; border-radius: 14px">
			<div class="card border-0 shadow">
				<div class="card-body">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#exhibitiontitle">Exhibition Title</a>
					  </li>

					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#video">Video</a>
					  </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content pt-2">
					  <div class="tab-pane container active m-2" id="exhibitiontitle">
					  	<div class="row mt-2">
					  		<div class="col-12">
							  	<div id="demo" class="carousel slide mx-auto shadow" data-ride="carousel" style="width:97%;">
									  <ul class="carousel-indicators">
									    <li data-target="#demo" data-slide-to="0" class="active"></li>
									    <li data-target="#demo" data-slide-to="1"></li>
									    <li data-target="#demo" data-slide-to="2"></li>
									  </ul>
									  <div class="carousel-inner">
									    <div class="carousel-item active">
									     	<div class="card border-0">
									     		<img src="assets/images/dust.png" class="img-thumbnail" alt="Los Angeles">
									     		<div class="card-body">
										        <h3>Los Angeles</h3>
										        <p>We had such a great time in LA!</p>		
									     		</div>
									     	</div>
									      <div class="carousel-caption text-dark">
									      </div>
									    </div>
									    <div class="carousel-item">
									      <div class="card border-0">
									      	<img src="assets/images/dust.png" class="img-thumbnail" alt="Chicago">
									      	<div class="card-body">
										        <h3>Chicago</h3>
										        <p>Thank you, Chicago!</p>	
									      	</div>
									      </div>
									      <div class="carousel-caption text-dark">
									      </div>   
									    </div>
									    <div class="carousel-item">
									      <div class="card border-0">
									      	<img src="assets/images/dust.png" class="img-thumbnail" alt="New York">
									      	<div class="card-body">
										        <h3>New York</h3>
										        <p>We love the Big Apple!</p>	
									      	</div>
									      </div>
									      <div class="carousel-caption text-dark">
									      </div>   
									    </div>
									  </div>
									  <a class="carousel-control-prev" href="#demo" data-slide="prev">
									    <span class="carousel-control-prev-icon"></span>
									  </a>
									  <a class="carousel-control-next" href="#demo" data-slide="next">
									    <span class="carousel-control-next-icon"></span>
									  </a>
									</div>
								</div>
							</div>
							<div class="row mb-2 mt-3">
					  		<div class="col-md-3 col-sm-4 col-6 ">
					  			<img src="assets/images/dust.png" alt="New York" class="img-fluid shadow" />
					  		</div>
					  		<div class="col-md-3 col-sm-4 col-6">
					  			<img src="assets/images/dust.png" alt="New York" class="img-fluid shadow" />
					  		</div>
					  		<div class="col-md-3 col-sm-4 col-6">
					  			<img src="assets/images/dust.png" alt="New York" class="img-fluid shadow" />
					  		</div>
					  		<div class="col-md-3 col-sm-4 col-6">
					  			<img src="assets/images/dust.png" alt="New York" class="img-fluid shadow" />
					  		</div>
					  	</div>
					  	<!-- Comments section -->
					  	<div class="row mt-2">
								<div class="col-12 mx-auto">
						      <h4 class="text-lead">Comments</h4>
									<div class="card m-1 shadow">
										<div class="card-body mx-auto" style="width: 95%">
						         	<form method="post">
						            <span class="input-icon icon-right">
						              <textarea rows="2" class="form-control"
						              				 placeholder="Post a new comment"></textarea>
						            </span>
						            <div class="float-right mt-2">
						              <button class="btn btn-sm btn-info">Post &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden></span></button>
						            </div>
						        	</form>
						   			</div>
									</div>
								</div>

								<div class="col-12 mx-auto">
						    	<div class="media border m-1 p-3 shadow text-secondary">
									  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
									  <div class="media-body mycomments">
									    <span class="h4 text-dark">Adam Jansen</span><small class="float-right mt-2"><i>about 2 minutes ago</i></small>
									    <p class="text-justify mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<div>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-up"></i></a>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-down"></i></a>
							          <a href="#" class="m-2 text-secondary">Reply</a>
							      	</div>
										</div>
									</div>
								
									<div class="media border m-1 p-3 shadow text-secondary">
									  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
									  <div class="media-body">
									    <span class="h4 text-dark">Kim Ryder </span><small class="float-right mt-2"><i>about 4 hours ago</i></small>
									    <p class="text-justify mt-2">I'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>
									    <div>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-up"></i></a>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-down"></i></a>
							          <a href="#" class="m-2 text-secondary">Reply</a>
							      	</div>
										</div>
									</div>

									<div class="media border m-1 p-3 shadow text-secondary">
									  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
									  <div class="media-body mycomments">
									    <span class="h4 text-dark">Nicolai Larson </span><small class="float-right mt-2"><i>10 hours ago</i></small>
									    <p class="text-justify mt-2">The parallax is a little odd but O.o that house build is awesome!!.</p>
									    <div>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-up"></i></a>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-down"></i></a>
							          <a href="#" class="m-2 text-secondary">Reply</a>
							      	</div>
										</div>
									</div>

									<div class="media border m-1 p-3 shadow text-secondary">
									  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
									  <div class="media-body mycomments">
									    <span class="h4 text-dark">Adam Jansen </span><small class="float-right mt-2"><i>about 2 minuts ago</i></small>
									    <p>Story based around the idea of time lapse, animation to post soon!</p>
									    <div class="m-1">
						            <a href="">
						                <img src="assets/images/dust.png" class="img-thumbnail" style="width:60px">
						            </a>
						            <a href="">
						                <img src="assets/images/dust.png" class="img-thumbnail" style="width:60px">
						            </a>
						            <a href="">
						                <img src="assets/images/dust.png" class="img-thumbnail" style="width:60px">
						            </a>
						        	</div>
						        	<div class="mb-3">
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-up"></i></a>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-down"></i></a>
							          <a href="#" class="m-2 text-secondary">Reply</a>
							      	</div>
									    <div class="media border p-3">
									      <img src="assets/images/dust.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
									      <div class="media-body mycomments">
									        <span class="h4 text-dark">John Smith </span><small class="float-right mt-2"><i>about 1 hour ago</i></small>
									        <p>Wow impressive!</p>
									        <div class="">
									          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-up"></i></a>
									          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-o-down"></i></a>
									          <a href="#" class="m-2 text-secondary">Reply</a>
									      	</div>
									      </div>
									    </div> 
									  </div>
									</div>

									<div class="float-left m-1">
										<a href="#top" class="btn btn-default border shadow">
											Top<i class="fa fa-arrow-circle-o-up"></i>
										</a>
									</div>
									<div class="text-center m-1">
										<a href="" class="btn btn-default border shadow">Load More...</a>
									</div>
								</div>
					  	</div>
					  </div>

					  <!-- my arts videos -->
					  <div class="tab-pane container fade" id="video">
					  	<div class="row">
					  		<div class="col-md-4 col-sm-6 col-12">
					  			<div class="card border-0">
					  				<div class="card-body">
							  			<div class="embed-responsive embed-responsive-4by3">
										    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
										  </div>
										  <p>Video One</p>
					  				</div>
					  			</div>
					  		</div>
					  		<div class="col-md-4 col-sm-6 col-12">
					  			<div class="card border-0">
					  				<div class="card-body">
							  			<div class="embed-responsive embed-responsive-4by3">
										    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
										  </div>
										  <p>Video Two</p>
					  				</div>
					  			</div>
					  		</div>
					  		<div class="col-md-4 col-sm-6 col-12">
					  			<div class="card border-0">
					  				<div class="card-body">
							  			<div class="embed-responsive embed-responsive-4by3">
										    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
										  </div>
										  <p>Video Three </p>
					  				</div>
					  			</div>
					  		</div>
					  		<div class="col-md-4 col-sm-6 col-12">
					  			<div class="card border-0">
					  				<div class="card-body">
							  			<div class="embed-responsive embed-responsive-4by3">
										    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
										  </div>
										  <p>Video One</p>
					  				</div>
					  			</div>
					  		</div>
					  		<div class="col-md-4 col-sm-6 col-12">
					  			<div class="card border-0">
					  				<div class="card-body">
							  			<div class="embed-responsive embed-responsive-4by3">
										    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
										  </div>
										  <p>Video Two</p>
					  				</div>
					  			</div>
					  		</div>
					  		<div class="col-md-4 col-sm-6 col-12">
					  			<div class="card border-0">
					  				<div class="card-body">
							  			<div class="embed-responsive embed-responsive-4by3">
										    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
										  </div>
										  <p>Video Three </p>
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

<?php include 'includes/footer.php'; ?>

