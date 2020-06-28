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
				<a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a>

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					<div class="row">
						<div class="col-12">
							<div class="card border-0 shadow">
								<div class="card-body">

									<!-- Nav tabs -->
									<ul class="nav nav-tabs text-center bg-dark pt-2">
					          <li class="nav-item flex-fill">
									    <a class="nav-link active" data-toggle="tab" href="#artsformsgallery">Gallery</a>
									  </li>
									  <li class="nav-item flex-fill">
									    <a class="nav-link" data-toggle="tab" href="#librarypublications">Libraries</a>
									  </li>	
								   	<li class="nav-item flex-fill">
							      	<a class="nav-link" data-toggle="tab" href="#exhibitionhall">Exhibition</a>
									  </li>		  
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">

										<!-- For the arts and form materials technology -->
										<div class="tab-pane container active pt-3" id="artsformsgallery">

											<!-- For the arts gallery and the form and materials technology upload -->
									  	<h4>Arts Gallery</h4>
											<div class="row assessrow myartrow">
												<div class="col-12 card">
													<div class="card-body">

														<!-- my art work card -->
														<h6>My Art Works</h6>
														<div class="row">
															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>
														</div>

													</div>
												</div>

												<div class="col-12 card">
													<div class="card-body">

														<!-- my art work card -->
														<h6>Other Art Works</h6>
														<div class="row">
															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>

											<hr class="text-secondary" />

											<!-- For forms and materials Technolooogy uploads -->
											<h4>Forms and Materials Technology</h4>
											<div class="row">
												<div class="col-12 card">
													<div class="card-body">

														<div class="row">
															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>

															<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 p-1">
																<div class="card">
																	<a href="#" data-toggle="modal" data-target="#myModal">
																  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
																	</a>
																  <div class="card-body">
																    <h6 class="card-title"> Image name</h6>
																    <p class="badge badge-info p-1"><strong>Category:</strong> Drawing</p>
																    <button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
																  </div>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>


											<div class="modal fade" id="myModal">
											  <div class="modal-dialog modal-lg">
											    <div class="modal-content">

											      <!-- Modal Header -->
											      <div class="">
											        <ul class="nav nav-tabs">
															  <li class="nav-item">
															    <a class="nav-link active" data-toggle="tab" href="#myimages">Images</a>
															  </li>
															  <li class="nav-item">
															    <a class="nav-link" data-toggle="tab" href="#videos">Videos</a>
															  </li>
															</ul>
											        <button type="button" class="close" data-dismiss="modal">&times;</button>
											      </div>

											      <!-- Modal body -->
											      <div class="modal-body">
											        <h6>Title here</h6>
											      	<div class="tab-content">
															  <div class="tab-pane container active" id="myimages">
															  	<div class="row">
													      		<div class="col-md-7 col-12">
													      			<div id="demo" class="carousel slide" data-ride="carousel">

																			  <!-- Indicators -->
																			  <ul class="carousel-indicators">
																			    <li data-target="#demo" data-slide-to="0" class="active"></li>
																			    <li data-target="#demo" data-slide-to="1"></li>
																			    <li data-target="#demo" data-slide-to="2"></li>
																			  </ul>

																			  <!-- The slideshow -->
																			  <div class="carousel-inner">
																			    <div class="carousel-item active">
																			      <img class="img-thumbnail" src="assets/images/dust.png" alt="Card image"/>
																			    </div>
																			    <div class="carousel-item">
																			      <img class="img-thumbnail" src="assets/images/dust.png" alt="Card image"/>
																			    </div>
																			    <div class="carousel-item">
																			      <img class="img-thumbnail" src="assets/images/dust.png" alt="Card image"/>
																			    </div>
																			  </div>

																			  <!-- Left and right controls -->
																			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
																			    <span class="carousel-control-prev-icon"></span>
																			  </a>
																			  <a class="carousel-control-next" href="#demo" data-slide="next">
																			    <span class="carousel-control-next-icon"></span>
																			  </a>

																			</div>
													      		</div>
													      		<div class="col-md-5 col-12">
															       	<p><strong>Image TItle:</strong> title here</p>
												              <p><strong>Authour:</strong> Name of creator</p>
												              <p><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
													      		</div>
													      	</div>
															  </div>
															  <div class="tab-pane container fade" id="videos">
															  	<div class="row">
													      		<div class="col-md-7 col-12">
													      			<!-- <img class="img-thumbnail" src="assets/images/dust.png" alt="Card image" /> -->
													      			<video src="assets/multimedia/videos/video.mp4" class="img-fluid"></video>
													      		</div>
													      		<div class="col-md-5 col-12">
															       	<p><strong>Image TItle:</strong> title here</p>
												              <p><strong>Authour:</strong> Name of creator</p>
												              <p><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
													      		</div>
													      	</div>
															  </div>
															</div>
											      </div>

											      <!-- Modal footer -->
											      <div class="modal-footer">
											        <button type="button" class="btn btn-outline-info btn-sm" data-dismiss="modal">Close</button>
											        <button type="button" class="btn btn-info btn-sm">Download</button>
											      </div>

													</div>
												</div>
											</div>
											<div class="fixed-bottom mb-2 mr-2">
												<button class="btn btn-primary rounded-circle float-right p-3 shadow-lg" data-toggle="modal" data-target="#myArtsGallery"><span class="fa fa-plus"></span></button>
											</div>
										</div>


										<!-- For the Publications includings Theses, Books, Journals, Lectures and others. -->
									  <div class="tab-pane container fade pt-3" id="librarypublications">
									  	<h5>Academic Publications</h5>
											<div class="row assessrow">
												<div class="col-12">
									    		<div class="card p-2 m-1">
									    			<div class="card-body row">
														  <div class="col-lg-9 col-md-9 col-12">
														    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						                      consequat. Duis aute irure dolor in reprehenderit in <span class="toggleShow1"><code>...</code> <a href="#" class="toggleMe" target=".toggleShow1">Read more</a></span> <span class="toggleShow1" style="display: none;">voluptate velit esse
						                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span class="toggleShow1" style="display: none;"><a href="#" class="toggleMe" target=".toggleShow1">Read less</a></span></span></p>
														  </div>
														  <div class="col-lg-3 col-md-3 col-12 mx-auto">
												  			<img src="assets/images/dust.png" alt="work-thumbnail" class="img-fluid shadow" style="width: 100px; height: 90px">
													  		<span class="btn btn-outline-info btn-sm mt-2 shadow"><a href="#"><small>Download Book</small></a></span>	
													  		<button class="btn btn-outline-danger mt-4 float-right rounded-circle"><i class="fa fa-trash"></i></button>
															</div>	
									    			</div>
									    		</div>
									    	</div>
									    	<div class="col-12">
									    		<div class="card p-2 m-1">
									    			<div class="card-body row">
														  <div class="col-lg-9 col-md-9 col-12">
														    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						                      consequat. Duis aute irure dolor in reprehenderit in <span class="toggleShow1"><code>...</code> <a href="#" class="toggleMe" target=".toggleShow1">Read more</a></span> <span class="toggleShow1" style="display: none;">voluptate velit esse
						                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <span class="toggleShow1" style="display: none;"><a href="#" class="toggleMe" target=".toggleShow1">Read less</a></span></span></p>
														  </div>
														  <div class="col-lg-3 col-md-3 col-12 mx-auto">
												  			<img src="assets/images/dust.png" alt="work-thumbnail" class="img-fluid shadow" style="width: 100px; height: 90px">
													  		<span class="btn btn-outline-info btn-sm mt-2 shadow"><a href="#"><small>Download Book</small></a></span>	
													  		<button class="btn btn-outline-danger mt-4 float-right rounded-circle"><i class="fa fa-trash"></i></button>
															</div>	
									    			</div>
									    		</div>
									    	</div>
													<!-- <table class="table table-striped table-responsive-sm table-bordered">
														<thead class="thead-dark">
															<tr>
																<th>S/N</th>
																<th>Category</th>
																<th>Title</th>
																<th>Overview</th>
																<th>Operation</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>
																	<span class="badge badge-info p-1">Authored Books</span>
																</td>
																<td><h6>History of Fine Arts</h6></td>
																<td>
																	<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
																	</small></p>	
																</td>
																<td class="text-center">
																	<button class="btn btn-outline-danger btn-sm mt-2"><i class="fa fa-trash"></i></button>
																</td>
															</tr>
															<tr>
																<td>2</td>
																<td>
																	<span class="badge badge-info p-1">Edited Books</span>
																</td>
																<td><h6>History of Fine Arts</h6></td>
																<td>
																	<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
																	</small></p>	
																</td>
																<td class="text-center">
																	<button class="btn btn-outline-danger btn-sm mt-2"><i class="fa fa-trash"></i></button>
																</td>
															</tr>
															<tr>
																<td>3</td>
																<td>
																	<span class="badge badge-info p-1">Book Reviews</span>
																</td>
																<td><h6>History of Fine Arts</h6></td>
																<td>
																	<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
																	</small></p>	
																</td>
																<td class="text-center">
																	<button class="btn btn-outline-danger btn-sm mt-2"><i class="fa fa-trash"></i></button>
																</td>
															</tr>
															<tr>
																<td>4</td>
																<td>
																	<span class="badge badge-info p-1">Journals</span>
																</td>
																<td><h6>History of Fine Arts</h6></td>
																<td>
																	<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini
																	</small></p>	
																</td>
																<td class="text-center">
																	<button class="btn btn-outline-danger btn-sm mt-2"><i class="fa fa-trash"></i></button>
																</td>
															</tr>
														</tbody>
													</table> -->
												<div class="fixed-bottom mb-2 mr-2">
													<button class="btn btn-primary rounded-circle float-right p-3 shadow-lg" data-toggle="modal" data-target="#mylibrary"><span class="fa fa-plus"></span></button>
												</div>
											</div>
										</div>

										<!-- For the Exhibition Hall. -->
									  <div class="tab-pane container fade pt-3" id="exhibitionhall">
									  	<h5>Exhibition Hall and Museum</h5>
											<div class="row assessrow">
												<div class="col-lg-3 col-md-3 col-sm-4 col-12">
													<div class="card shadow m-1">
														<div class="card-body text-center border-0">
															<img src="assets/images/kal/img/lion_head_2.png" class="mx-auto rounded-circle" width="70" height="70">
															<p>Name</p>
															<p>Specialization</p>
															<a href="#" class="float-left" data-toggle="modal" data-target="#artistdetails">Details</a>
															<span class="btn btn-outline-danger btn-sm rounded-circle float-right"><i class="fa fa-trash"></i></span>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4 col-12">
													<div class="card shadow m-1">
														<div class="card-body text-center border-0">
															<img src="assets/images/kal/img/lion_head_2.png" class="mx-auto rounded-circle" width="70" height="70">
															<p>Name</p>
															<p>Specialization</p>
															<a href="#" class="float-left" data-toggle="modal" data-target="#artistdetails">Details</a>
															<span class="btn btn-outline-danger btn-sm rounded-circle float-right"><i class="fa fa-trash"></i></span>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4 col-12">
													<div class="card shadow m-1">
														<div class="card-body text-center border-0">
															<img src="assets/images/kal/img/lion_head_2.png" class="mx-auto rounded-circle" width="70" height="70">
															<p>Name</p>
															<p>Specialization</p>
															<a href="#" class="float-left" data-toggle="modal" data-target="#artistdetails">Details</a>
															<span class="btn btn-outline-danger btn-sm rounded-circle float-right"><i class="fa fa-trash"></i></span>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4 col-12">
													<div class="card shadow m-1">
														<div class="card-body text-center border-0">
															<img src="assets/images/kal/img/lion_head_2.png" class="mx-auto rounded-circle" width="70" height="70">
															<p>Name</p>
															<p>Specialization</p>
															<a href="#" class="float-left" data-toggle="modal" data-target="#artistdetails">Details</a>
															<span class="btn btn-outline-danger btn-sm rounded-circle float-right"><i class="fa fa-trash"></i></span>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4 col-12">
													<div class="card shadow m-1">
														<div class="card-body text-center border-0">
															<img src="assets/images/kal/img/lion_head_2.png" class="mx-auto rounded-circle" width="70" height="70">
															<p>Name</p>
															<p>Specialization</p>
															<a href="#" class="float-left" data-toggle="modal" data-target="#artistdetails">Details</a>
															<span class="btn btn-outline-danger btn-sm rounded-circle float-right"><i class="fa fa-trash"></i></span>
														</div>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-4 col-12">
													<div class="card shadow m-1">
														<div class="card-body text-center border-0">
															<img src="assets/images/kal/img/lion_head_2.png" class="mx-auto rounded-circle" width="70" height="70">
															<p>Name</p>
															<p>Specialization</p>
															<a href="#" class="float-left" data-toggle="modal" data-target="#artistdetails">Details</a>
															<span class="btn btn-outline-danger btn-sm rounded-circle float-right"><i class="fa fa-trash"></i></span>
														</div>
													</div>
												</div>
											</div>

											<hr class="text-secondary" />

											<div class="row">
												<div class="col-12">
													<h5>Poster</h5>
													<button class="btn btn-outline-danger float-right"><i class="fa fa-trash"></i></button>
													<div class="row">
														<div class="col-md-3 col-sm-4 col-6">
															<div class="card shadow m-1">
																<div class="card-body">
																	<div class="custom-control custom-checkbox">
																    <input type="checkbox" class="custom-control-input" id="customCheckOne" name="example1">
																    <label class="custom-control-label" for="customCheckOne"><h5 class="p-3">Poster One</h5></label>
																  </div>
																</div>
															</div>
														</div>
														<div class="col-md-3 col-sm-4 col-6">
															<div class="card shadow m-1">
																<div class="card-body">
																	<div class="custom-control custom-checkbox">
																    <input type="checkbox" class="custom-control-input" id="customCheckTwo" name="example1">
																    <label class="custom-control-label" for="customCheckTwo"><h5 class="p-3">Poster One</h5></label>
																  </div>
																</div>
															</div>
														</div>
														<div class="col-md-3 col-sm-4 col-6">
															<div class="card shadow m-1">
																<div class="card-body">
																	<div class="custom-control custom-checkbox">
																    <input type="checkbox" class="custom-control-input" id="customCheckThree" name="example1">
																    <label class="custom-control-label" for="customCheckThree"><h5 class="p-3">Poster One</h5></label>
																  </div>
																</div>
															</div>
														</div>
														<div class="col-md-3 col-sm-4 col-6">
															<div class="card shadow m-1">
																<div class="card-body">
																	<div class="custom-control custom-checkbox">
																    <input type="checkbox" class="custom-control-input" id="customCheckFour" name="example1">
																    <label class="custom-control-label" for="customCheckFour"><h5 class="p-3">Poster One</h5></label>
																  </div>
																</div>
															</div>
														</div>
													</div>
													<div class="row mt-2">
														<div class="col-lg-10 col-md-10 col-sm-11 col-12 mx-auto">
															<div class="card shadow border-0">
																<div class="card-body">
																	<form class="form">
																		<div class="form-group">
																			<input type="text" name="posterTitle" class="form-control" placeholder="Title of the Poster">
																		</div>
																		<div class="form-group">
																			<input type="text" name="postermain" class="form-control" placeholder="Insert the Main Text">
																		</div>
																		<div class="uploadbtnwrapper float-left">
																			<button class="mybtn btn-sm">Select File</button>
																			<input type="file" name="myfile">
																		</div>
																		<button class="btn btn-info float-right">Submit Post</button>
																	</form>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<hr class="text-secondary" />

											<div class="row mt-2">
												<div class="col-lg-10 col-md-10 col-sm-11 col-12 mx-auto">
													<div class="card shadow border-0">
														<div class="card-body">
																<h5><strong>Notices Uploads</strong></h5>
																<form class="form">
																	<div class="form-group">
																		<select class="form-control">
																			<option value="instruction to artists">Instruction to Artists</option>
																			<option value="instruction to orators">Instruction to Orators</option>
																			<option value="instruction to audience">Instruction to Audience</option>
																		</select>
																	</div>
																	<div class="form-group">
																		<textarea class="form-control" name="notices" placeholder="Write your text here..."></textarea>
																	</div>
																	<button class="btn btn-info float-right">Post Notices</button>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="fixed-bottom mb-2 mr-2">
												<button class="btn btn-primary rounded-circle float-right p-3 shadow-lg" data-toggle="modal" data-target="#myExhibitionMuseum"><span class="fa fa-plus"></span></button>
											</div>
											
										</div>
								  </div>
								</div>
						  </div>
									
								<!-- The Arts Gallery Modal -->
						  <div class="modal fade" id="myArtsGallery">
						    <div class="modal-dialog modal-dialog-centered">
						      <div class="modal-content">
						      
						        <!-- Modal Header -->
						        <div class="mx-auto py-2">
						          <h5 class="modal-title">Art Gallery Upload</h5>
						         <!--  <button type="button" class="close" data-dismiss="modal">&times;</button> -->
						        </div>
						        
						        <!-- Modal body -->
						        <div class="modal-body">

						        	<!-- Select from radio buttons to choose from the arts gallery and form materials -->
											<div class="form-check-inline">
											  <label class="form-check-label">
											    <input type="radio" class="form-check-input" name="optradio">Arts Gallery
											  </label>
											</div>
											<div class="form-check-inline">
											  <label class="form-check-label">
											    <input type="radio" class="form-check-input" name="optradio">Form Materials
											  </label>
											</div>
						        	<div class="form-group">
						        		<select class="form-control">
						        			<option>Choose the Artist</option>
						        			<option>My Art Works</option>
						        			<option>Other Art Works</option>
						        		</select>
						        	</div>
						        	<div class="form-group">
						        		<select class="form-control">
						        			<option>--Choose the Category--</option>
						        			<option value="ceramics">Ceramics</option>
						        			<option value="sculpture">Sculpture</option>
						        			<option value="graphic">Graphic Designs</option>
						        			<option value="drawing">Drawing</option>
						        		</select>
						        	</div>
						        	<div class="form-group">
						        		<input type="text" class="form-control" name="imageName" placeholder="Image Name">
						        	</div>
							        <div class="form-group">
							        	<input type="file" class="form-control" name="video" placeholder="Video Files" />
							        </div>
							        <div class="uploadbtnwrapper float-left">
												<button class="mybtn btn-sm">Select File</button>
												<input type="file" name="myfile">
											</div>
											<button class="btn btn-primary btn-sm float-right"> Post </button>
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
							        <div class="uploadbtnwrapper float-left">
												<button class="mybtn btn-sm">Select File</button>
												<input type="file" name="myfile">
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
												<div class="form-group">
							        		<input type="text" class="form-control" name="Name" placeholder="Name of Exhibition Hall/ Museum" />
							        	</div>
							        	<div class="form-group">
							        		<input type="text" class="form-control" name="imageName" placeholder="Artist/Curators' Name">
							        	</div>
							        	<div class="form-group">
							        		<input type="text" class="form-control" name="specialization" placeholder="Artist/Curators' Specialization">
							        	</div>
							        	<div class="form-group">
							        		<input type="text" class="form-control" name="institution" placeholder="Institution of Artist/Curator">
							        	</div>
								        <div class="form-group">
								        	<input type="file" class="form-control" name="video" placeholder="Video Files" />
								        </div>
								        <div class="uploadbtnwrapper float-left">
													<button class="mybtn btn-sm">Select Image</button>
													<input type="file" name="myfile">
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