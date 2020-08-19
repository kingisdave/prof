<link rel="stylesheet" href="assets/css/otherdivs.css">
	<style>

	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation-users.php" ?>

			<!-- main div -->
			<div id="main">

				<!-- togglebutton -->
				<a href="#" onclick="openNav()" id="togglelink">
					<div></div>
					<div></div>
					<div></div>
				</a>
				<!-- <a href="#">
					<span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a>
 -->
				<div class="container-fluid ml-2 mx-auto" style="width: 95%; border-radius: 13px">
					<h4>My Dashboard</h4>
					<div class="row bg-white shadow">
						<div class="col-lg-4 col-md-4 col-sm-6 col-12 p-1">
							<div class="card border-0">				
						    	<img class="card-img-top rounded-circle img-thumbnail shadow mx-auto" src="assets/images/users/colleague/Okesola1560995564.png" alt="Card image" style="width:150px; height:150px" />
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
					<hr class="bg-secondary"></hr>
					<div class="row bg-white shadow">
						<div class="col-12">
							<div class="row">
								<div class="col-8 my-auto">
									<h5>Notifications</h5>
								</div>
								<div class="col-4 my-auto">
									<p class="text-right"><small>online</small></p>
									<p class="text-lead text-right">Users Student</p>
								</div>
							</div>
							<div class="alert alert-info">
								<small>Please Sir, kindly take note of the following notifications.</small>
							</div>
							<small>New User Notifications: 3</small>
							<table class="table table-striped table-responsive-md shadow text-center">
								<thead class="thead thead-info">
									<tr>
										<th>S/N</th>
										<th>Title</th>
										<th>Date</th>
										<th title="Operation">Opertn</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>
											<p>The Technology in Arts</p>
											<p class="small">Personal Assignment</p>
											<span class="badge badge-success text-white">Completed</span>
										</td>
										<td>
											<p class="small">1st January, 2020</p>
											<p class="small">To </p>
											<p class="small">20 June, 2020</p>
										</td>
										<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
									</tr>
									<tr>
										<td>2</td>
										<td>
											<p>The Technology in Arts</p>
											<p class="small">Group Assignment</p>
											<span class="badge badge-warning text-white">Uncompleted</span>
										</td>
										<td>
											<p class="small">30th January, 2020</p>
											<p class="small"> To </p>
											<p>---</p>
										</td>
										<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
									</tr>						
								</tbody>
							</table>
							<div class="text-center mb-2">
								<a href="notifications.php" class="btn btn-sm btn-info"><i>Read More</i></a>
							</div>
						</div>
					</div>	
					<hr class="bg-secondary" style="width: 100%"></hr>
					<div class="row mt-1 bg-white">
						<div class="col-12">
							<h5>Recents Comments</h5>
							<div class="media border p-3">
								<img src="img_avatar3.png" alt="Johnee" class="mr-5 mt-1 rounded" style="width:60px;">
								<div class="media-body">
								    <h4 class="mr-2">John Doe <small><i>Sep 29, 2019, 9:12 PM</i></small></h4>
								    <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								    <span class="fa fa-thumbs-up m-3"></span>
								    <span class="fa fa-thumbs-down m-3"></span>
								    <span class="btn btn-outline-danger fa fa-trash m-3"></span>
								</div>
							</div>
							<div class="media border p-3">
								<img src="img_avatar3.png" alt="Booee" class="mr-5 mt-1 rounded" style="width:60px;">
								<div class="media-body">
								    <h4 class="mr-2">John Doe <small><i>Sep 28, 2019, 10:00 PM</i></small></h4>
								    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
								    <span class="fa fa-thumbs-up m-3"></span>
								    <span class="fa fa-thumbs-down m-3"></span>
								    <span class="btn btn-outline-danger fa fa-trash m-3"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center mb-2">
							<a href="notifications.php" class="btn btn-sm btn-info"><i>Read More</i></a>
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
