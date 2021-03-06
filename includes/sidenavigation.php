<!DOCTYPE html>
<html>
<head>
	<title>Iconnect</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
	<link rel="stylesheet" href="./assets/bootstrap-4.3.1/bootstrap-4.0.0/docs/dist/css/jasny-bootstrap.min.css">

</head>
<body>
	<div class="sidenav" id="mySidenav">
		<div class="container-fluid text-white">
			<div class="text-center myprofiletop">
				<img src="assets/images/kal/img/lion_head_4.png" class="rounded-circle" height="50px" width="50px">
				<h5>Admin</h5>
				<!-- <span><a class="h5 fa fa-envelope m-1"></a>
					<i class="badge badge-info rounded-circle" id="notificationbadge"><small>8</small></i>
				</span> -->
				<a href="./notifications.php">
					<span class=" h5 fa fa-bell m-1"></span>
					<i class="badge badge-info rounded-circle" id="notificationbadge"><small>83</small></i>
				</a>
			</div>
			<hr class="bg-secondary" style="width: 100%"></hr>
			<ul class="nav nav-pills flex-column">
		
		    <li class="nav-item">
	      	<a class="nav-link row" href="./account.php"><span class="col-2 fa fa-tachometer-alt"></span><span class="col-10 small">Dashboard</span></a>
		    </li>
		    <li class="nav-item dropdown dropright">
	      	<a class="nav-link row dropdown-toggle" data-toggle="dropdown" href="#"><span class="col-2 fa fa-file"></span><span class="col-10 small">Pages</span></a>
		     	<div class="dropdown-menu" style=" color: #282923">
		      	<a class="dropdown-item" href="./page_headers.php">Header</a>
		      	<a class="dropdown-item" href="./homepage_links.php">Homepage Links</a>
		      	<a class="dropdown-item" href="./homepage_text.php">Homepage Texts</a>
		      	<a class="dropdown-item" href="./homepage_photos.php">Homepage Pictures</a>
			    </div>
		    </li>
		    <li class="nav-item">
	      	<a class="nav-link row" href="./create_forum.php"><span class="col-2 fa fa-rss"></span><span class="col-10 small">Forums</span></a>
		    </li>

		    <li class="nav-item dropdown dropright">
		     	<a class="nav-link row dropdown-toggle" data-toggle="dropdown" href="#"><span class="col-2 fa fa-graduation-cap"></span><span class="col-10 small">Students</span></a>
		     	<div class="dropdown-menu" style=" color: #282923">
		      	<a class="dropdown-item" href="./undergraduate.php">Undergraduate</a>
		      	<a class="dropdown-item" href="./postgraduate.php">Postgraduate</a>
		      	<a class="dropdown-item" href="./ex-student.php">Ex-Student</a>
			    </div>
		    </li>
		    <li class="nav-item">
		      	<a class="nav-link row" href="./colleagues.php"><span class="col-2 fa fa-users"></span><span class="col-10 small">Colleagues</span></a>
		    </li>
		    <li class="nav-item">
		      	<a class="nav-link row" href="./guests.php"><span class="col-2 fa fa-users"></span><span class="col-10 small">Guests</span></a>
		    </li>
		    <li class="nav-item dropdown dropright">
		     	<a class="nav-link row dropdown-toggle" data-toggle="dropdown" href="#"><span class="col-2 fa fa-upload"></span><span class="col-10 small">Uploads</span></a>
		     	<div class="dropdown-menu" style="color: #282923">
		      	<a class="dropdown-item" href="./gallery_upload.php">Gallery Upload</a>
		      	<a class="dropdown-item" href="./assessment_upload.php">Assessment Upload</a>
		      	<a class="dropdown-item" href="./group-assignment.php">Group Assignments</a>
		      	<a class="dropdown-item" href="./personal-assignment.php">Personal Assignments</a>
		      	<a class="dropdown-item" href="./curriculum_upload.php">Curriculum Vitae</a>
		      	<a class="dropdown-item" href="./multimedia_upload.php">Multimedia</a>
		      	<a class="dropdown-item"></a>
			    </div>
		    </li>

		    <li class="nav-item dropdown dropright">
		     	<a class="nav-link row dropdown-toggle" data-toggle="dropdown" href="#"><span class="col-2 fa fa-cogs"></span><span class="col-10 small">Settings</span></a>
		     	<div class="dropdown-menu" style="color: #282923">
		      	<a class="dropdown-item" href="./set_admin.php">Admin Setting</a>
		      	<a class="dropdown-item" href="./developers_admin.php">Developers Page</a>
		      	<a class="dropdown-item" href="./updatepassword.php">Reset Password</a>
			    </div>
		    </li>

		    <li class="nav-item">
		      	<a class="nav-link row" data-toggle="pill" href="./logout.php"><span class="col-2 fa fa-sign-out-alt"></span><span class="col-10 small">Log Out</span></a>
		    </li>
			</ul>	
		</div>
	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/togglefunction.js"></script>