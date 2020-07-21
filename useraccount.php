<link rel="stylesheet" href="assets/css/otherdivs.css">
	<style>

	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>
			<!-- <div class="sidenav" id="mySidenav">
				<div class="container-fluid text-white">
					<div class="text-center">
						<div class="">
							 <img src="assets/images/kal/img/lion_head_4.png" class="rounded-circle" height="50px" width="50px">
						</div>
						<div class="">
							<p>Welcome <span class="h5">Admin</span></p>
							<span class="fa fa-user m-1"></span>
							<span class="fa fa-envelope m-1"></span>
							<span class="fa fa-dropbox m-1"></span>
						</div>
					</div>
					<hr class="bg-secondary" style="width: 100%"></hr>
					<ul class="nav nav-pills flex-column">
				    <li class="nav-item">
			      	<a class="nav-link" data-toggle="pill" href="#"><span class="fa fa-info mr-2"></span>My Dashboard</a> 
				    </li>
				    <li class="nav-item">
			      	<a class="nav-link" href="edit-profile.php"><span class="fa fa-user mr-2"></span>Edit Profile</a>
				    </li>
				    <li class="nav-item">
				      	<a class="nav-link" data-toggle="pill" href="#"><span class="fa fa-microphone mr-2"></span>Forums</a>
				    </li>

				    <li class="nav-item dropdown dropright">
				     	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-users mr-2"></span>My Students</a>
				     	<div class="dropdown-menu" style=" color: #282923">
				      	<a class="dropdown-item text-dark" href="registration.php">Add Students</a>
				      	<a class="dropdown-item text-dark" href="mystudents.php">Students</a>
					    </div>
				    </li>

				    <li class="nav-item dropdown dropright">
				     	<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-users mr-2"></span>Colleagues</a>
				     	<div class="dropdown-menu" style="color: #282923">
				      	<a class="dropdown-item text-dark" href="#">Add Staff</a>
				      	<a class="dropdown-item text-dark" href="#">Staffs</a>
					    </div>
				    </li>

				    <li class="nav-item">
				      	<a class="nav-link" data-toggle="pill" href="#"><span class="fa fa-key mr-2"></span>Settings</a>
				    </li>

				    <li class="nav-item">
				      	<a class="nav-link" data-toggle="pill" href="#"><span class="fa fa-sign-out-alt"></span>Log Out</a>
				    </li>
					</ul>	
				</div>
			</div> -->

			<!-- main div -->
			<div id="main">

				<!-- togglebutton -->
				<a href="#" onclick="openNav()" id="togglelink">
					<div></div>
					<div></div>
					<div></div>
				</a>

				<div class="container-fluid ml-2 mx-auto" style="width: 95%">
					<h4>My Dashboard</h4>
					<div class="row bg-white shadow">
						<div class="col-lg-4 col-md-4 col-sm-6 col-12 p-1">
								<div class="card img-fluid rounded-circle" style="height: 35vh">
							    <img class="card-img-top" src="assets/images/kal/img/RK_142X172_1426539309.png" alt="Card image" style="height:100%">
							  </div>
							
						</div>
						<div class="col-lg-8 col-md-8 col-sm-6 col-12 p-1">
							<div class="card border-0">
								<div class="card-body">
									<div class="row">
										<p class="col-4"><i>Name: </i></p><h6 class="col-8">SURNAME first last</h6>
										<p class="col-4"><i>Matric No: </i></p><h6 class="col-8">AAAE0040D</h6>
										<p class="col-4"><i>Department: </i></p><h6 class="col-8">Fine and Applied Arts</h6>
										<p class="col-4"><i>Faculty: </i></p><h6 class="col-8">Environmental Sciences</h6>
										<p class="col-4"><i>Institution: </i></p><h6 class="col-8">Lautech, Ogbomoso</h6>
										<p class="col-4"><i>Mobile No: </i></p><h6 class="col-8">033593432343</h6>
										<p class="col-4"><i>Address: </i></p><h6 class="col-8">username str, first name junction, Second</h6>
									</div>
									<a href="edit-profile.php" class="btn btn-sm btn-info float-right"><i>Edit Profile</i></a>
								</div>
							</div>
						</div>
					</div>
					<hr class="bg-secondary"></hr>	

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