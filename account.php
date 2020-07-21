<link rel="stylesheet" href="assets/css/otherdivs.css">

	<style>

	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>
		
			<!-- main div -->
			<div id="main">

				<!-- togglebutton -->
				<a href="#" onclick="openNav()" id="togglelink">
					<div></div>
					<div></div>
					<div></div>
				</a>

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					<div class="row">
						<div class="col-12 container-fluid">
							<h4>My Dashboard</h4>
							<div class="row bg-white shadow mx-auto">
								<div class="col-lg-4 col-md-4 col-sm-6 col-12 p-1">
									<div class="card border-0 mx-auto" style="width:150px; height:150px">
 						
								    <img class="card-img-top rounded-circle img-thumbnail shadow" src="assets/images/kal/img/RK_142X172_1426539309.png" alt="Card image">
								  </div>		
								</div>
								<div class="col-lg-8 col-md-8 col-sm-6 col-12 p-1">
									<div class="card border-0">
										<div class="card-body">
											<div class="row">
												<p class="col-4"><i>Fullname: </i></p><h6 class="col-8">ADMIN Administration</h6>
												<p class="col-4"><i>Mobile No: </i></p><h6 class="col-8">033593432</h6>
												<p class="col-4"><i>Email: </i></p><h6 class="col-8">033593432</h6>
												<p class="col-4"><i>Faculty: </i></p><h6 class="col-8">Fine and Applied Arts</h6>
												<p class="col-4"><i>Institution: </i></p><h6 class="col-8">Ladoke Akintola University of Technology</h6>
											</div>
											<a href="edit-profile.php" class="btn btn-sm btn-info float-right"><i>Edit Profile</i></a>
										</div>
									</div>
								</div>
							</div>

							<hr class="bg-secondary"/>
							<div class="row bg-white shadow">
								<div class="col-12">
									<div class="row">
										<div class="col-8 my-auto">
											<h5>Notifications</h5>
										</div>
										<div class="col-4 my-auto">
											<p class="text-right"><small>online</small></p>
											<p class="text-lead text-right">ADMIN Administrator</p>
										</div>
									</div>
									<div class="alert alert-info">
										<small>Please Sir, kindly take note of the following notifications.</small>
									</div>
									<small>New User Requests: 183</small>
									<div class="table">
										<table class="table table-striped table-responsive-sm">
											<tr class="thead-info text-center">
												<th>S/N</th>
												<th>Profile Picture</th>
												<th>Full Names</th>
												<th>Category</th>
												<th>Operation</th>
											</tr>
											<tr>
												<td>1</td>
												<td>
													<img src="assets/images/users/colleague/Okesola1560995564.png" class="rounded-circle" alt="Card image" width="50" height="50" />
												</td>
												<td>
													<h6>OKESOLA Emmanuel Oluwatobi</h6>
													<p>Institution: Elekoro</p>
												</td>
												<td>
													<span class="badge badge-info">Colleague</span>
												</td>
												<td>
													<button class="btn btn-sm btn-info">Approve</button>
													<button class="btn btn-sm btn-danger">Decline</button>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>
													<img src="assets/images/users/postgraduate student/Olanrewaju1561826361.jpeg" class="rounded-circle" alt="Card image" width="50" height="50"/>
												</td>
												<td>
													<h6>OLANREWAJU Daniel</h6>
													<p>Institution: Lautech</p>
												</td>
												<td>
													<span class="badge badge-info">Postgraduate Student</span>
												</td>
												<td>
													<button class="btn btn-sm btn-info">Approve</button>
													<button class="btn btn-sm btn-danger">Decline</button>
												</td>
											</tr>

											<tr>
												<td>3</td>
												<td>
													<img src="assets/images/users/postgraduate student/zxxjsdghj1560841232.jpeg" class="rounded-circle" alt="Card image" width="50" height="50" />
												</td>
												<td>
													<h6>DANOE Asdjkas</h6>
													<p>Institution: Jaskdja</p>
												</td>
												<td>
													<span class="badge badge-info">Undergraduate Student</span>
												</td>
												<td>
													<button class="btn btn-sm btn-info">Approve</button>
													<button class="btn btn-sm btn-danger">Decline</button>
												</td>
											</tr>
										</table>
									</div>
									<div class="text-center mb-2">
										<a href="notifications.php" class="btn btn-sm btn-info"><i>Read More</i></a>
									</div>
								</div>
							</div>

							<hr class="bg-secondary" style="width: 100%" />

							<div class="row mt-1 bg-white">
								<div class="col-12">
									<h5>Recents Comments</h5>
									<div class="media border p-3">
										<img src="img_avatar3.png" alt="Johnee" class="mr-5 mt-1 rounded" style="width:60px;">
										<div class="media-body">
										    <h4 class="mr-2">John Doe <small><i>Sep 29, 2019, 9:12 PM</i></small></h4>
										    <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										   	<span class="btn fa fa-thumbs-up m-3 text-primary">Approve Comment</span>
										    <span class="btn fa fa-thumbs-down m-3">Disallow</span>   
										    <span class="btn fa fa-trash m-3 text-danger">Remove Comment</span>
										</div>
									</div>
									<div class="media border p-3">
										<img src="img_avatar3.png" alt="Booee" class="mr-5 mt-1 rounded" style="width:60px;">
										<div class="media-body">
										    <h4 class="mr-2">Bo <small><i>Sep 28, 2019, 10:00 PM</i></small></h4>
										    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
										    <span class="btn fa fa-thumbs-up m-3 text-primary">Approve Comment</span>
										    <span class="btn fa fa-thumbs-down m-3">Disallow</span>   
										    <span class="btn fa fa-trash m-3 text-danger">Remove Comment</span>
										</div>
									</div>
									<div class="media border p-3">
										<img src="img_avatar3.png" alt="Johnee" class="mr-5 mt-1 rounded" style="width:60px;">
										<div class="media-body">
										    <h4 class="mr-2">Johe m<small><i>Jan 29, 2020, 9:12 PM</i></small></h4>
										    <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										   	<span class="btn fa fa-thumbs-up m-3 text-primary">Approve Comment</span>
										    <span class="btn fa fa-thumbs-down m-3">Disallow</span>   
										    <span class="btn fa fa-trash m-3 text-danger">Remove Comment</span>
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
