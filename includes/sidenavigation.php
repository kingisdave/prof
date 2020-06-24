<!DOCTYPE html>
<html>
<head>
	<title>Iconnect</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/otherdivs.css">
	<script type="text/javascript" src="assets/js/togglefunction.js"></script>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="sidenav" id="mySidenav">
		<div class="container-fluid text-white">
			<div class="text-center myprofiletop">
				<img src="assets/images/kal/img/lion_head_4.png" class="rounded-circle" height="50px" width="50px">
				<h5>Admin</p>
				<span><span class="h5 fa fa-envelope m-1"></span>
					<i class="badge badge-info rounded-circle" id="notificationbadge"><small>8</small></i>
				</span>
				<span><span class="h5 fa fa-bell m-1"></span>
					<i class="badge badge-info rounded-circle" id="notificationbadge"><small>83</small></i>
				</span>
			</div>
			<hr class="bg-secondary" style="width: 100%"></hr>
			<ul class="nav nav-pills flex-column">
		
		    <li class="nav-item">
	      	<a class="nav-link row" href="./account.php"><span class="col-2 fa fa-info"></span><span class="col-10 small">Dashboard</span></a>
		    </li>
		    <li class="nav-item dropdown dropright">
	      	<a class="nav-link row dropdown-toggle" data-toggle="dropdown" href="#"><span class="col-2 fa fa-users"></span><span class="col-10 small">Pages</span></a>
		     	<div class="dropdown-menu" style=" color: #282923">
		      	<a class="dropdown-item" href="./page_headers.php">Header</a>
		      	<a class="dropdown-item" href="./homepage-text.php">Homepage Texts</a>
		      	<a class="dropdown-item" href="./homepage-pictures.php">Homepage Pictures</a>
			    </div>
		    </li>
		    <li class="nav-item">
	      	<a class="nav-link row" href="./forum.php"><span class="col-2 fa fa-blog"></span><span class="col-10 small">Forums</span></a>
		    </li>

		    <li class="nav-item dropdown dropright">
		     	<a class="nav-link row dropdown-toggle" data-toggle="dropdown" href="#"><span class="col-2 fa fa-users"></span><span class="col-10 small">Students</span></a>
		     	<div class="dropdown-menu" style=" color: #282923">
		      	<a class="dropdown-item" href="./undergraduate.php">Undergraduate</a>
		      	<a class="dropdown-item" href="./postgraduate.php">Postgraduate</a>
		      	<a class="dropdown-item" href="./ex-student.php">Ex-Student</a>
			    </div>
		    </li>
		    <li class="nav-item">
		      	<a class="nav-link row" href="./colleagues.php"><span class="col-2 fa fa-bell"></span><span class="col-10 small">Colleagues</span></a>
		    </li>
		    <li class="nav-item">
		      	<a class="nav-link row" href="./guests.php"><span class="col-2 fa fa-bell"></span><span class="col-10 small">Guests</span></a>
		    </li>
		    <li class="nav-item dropdown dropright">
		     	<a class="nav-link row dropdown-toggle" data-toggle="dropdown" href="#"><span class="col-2 fa fa-users"></span><span class="col-10 small">Uploads</span></a>
		     	<div class="dropdown-menu" style="color: #282923">
		      	<a class="dropdown-item" href="./gallery_upload.php">Gallery Upload</a>
		      	<a class="dropdown-item" href="./assessment_upload.php">Assessment Upload</a>
		      	<a class="dropdown-item" href="./group-assignment.php">Group Assignments</a>
		      	<a class="dropdown-item" href="./personal-assignment.php">Personal Assignments</a>   	
		      	<a class="dropdown-item" href="./curriculum.php">Curriculum Vitae</a>
		      	<a class="dropdown-item" href="./multimedia-upload.php">Multimedia</a>
		      	<a class="dropdown-item" href="#"></a>
			    </div>
		    </li>
		    <!-- <li class="nav-item">
		      	<a class="nav-link row" href="./notifications.php"><span class="col-2 fa fa-bell"></span><span class="col-10 small">Notifications</span></a>
		    </li> -->
		    <li class="nav-item">
		      	<a class="nav-link row" href="./update-password.php"><span class="col-2 fa fa-key"></span><span class="col-10 small">Settings</span></a>
		    </li>

		    <li class="nav-item">
		      	<a class="nav-link row" data-toggle="pill" href="./logout.php"><span class="col-2 fa fa-sign-out-alt"></span><span class="col-10 small">Log Out</span></a>
		    </li>
			</ul>	
		</div>
	</div>
	<script>
		// function openNav() {
		//     mySidenav.style.width = "250px";
		//     // main.style.marginLeft = "250px";
		//     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		// }

		// function closeNav() {
		//    mySidenav.style.width = "0";
		//    document.body.style.backgroundColor = "#fff";
		//     // main.style.marginLeft= "0";
		// }
	</script>
	
</body>
</html>