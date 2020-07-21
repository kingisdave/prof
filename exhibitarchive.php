<?php include 'includes/header.php'; ?>
<style>
	h1.exhibitTitle{
		color: #00134d;
		text-shadow: 3px 3px #fff;
		/*font-size: 34px;*/
		font-size: 200%;
		/*letter-spacing: px;*/
		line-height: 60px;
		animation: changecolor 10s linear 2s infinite;

	}
	/* The animation code */
	@keyframes changecolor {
    0%   {color:#091928;text-shadow: 3px 3px #000}
    20%  {color:#99e600;}
    40%  {color:#330000;text-shadow: 3px 3px #ccc;}
    60%  {color:#223300;}
    80%  {color:#ff3333;text-shadow: 3px 3px #000;}
    100% {color:#0040ff;}
	}
	@media screen and (max-width: 1000px) and (min-width: 600px) {
		div.card .card-body small span.p{ font-size: 60%; }
	}
	 /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 60%;
  }
  .mycaro{
  	height: 80vh;
  }
  .carousel-caption{
  	top: 60%;
    z-index: 99;
    overflow: hidden;
  	overflow-y: scroll;
  }

  .carousel-caption h5{
  	font-weight: bolder;
  }
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-12 p-1">
			<div>
				<h1 class="font-weight-bold font-italic text-center exhibitTitle">PROFS EXHIBITION HALL </h1>
			</div>
		</div>
		<div class="col-lg-9 col-md-9 col-12 bg-white" style="width: 98.6%; border-radius: 14px">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-11 mx-auto"> 
					<!-- <div class="alert alert-info alert-dismissible fade show">
			    	<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>*</strong>You have to Login first. <a href="login.php" class="alert-link">Login from here</a>
					</div> -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 pt-2">
					<div class="card">
						<a href="#" data-toggle="modal" data-target="#myModal">
					  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
						</a>
					  <div class="card-body">
					    <small class="card-title">Exhibition Title
					    <span class="badge badge-info p">THE GOODNESS OF GOD</span></small>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="container-fluid bg-white mt-1 p-2"> -->
	
	
</div>
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h6 class="modal-title">Image Title here</h6>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<!-- This is the button to link you to the exhibition room -->
      	<div class="alert alert-info alert-dismissible fade show">
			    	<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>*</strong>To comment and download catalogue. <a href="login.php" class="alert-link">Register here</a>
						<!-- or -->
					<!-- <a href="exhibitionroom.php" class="btn "></a> -->
					</div>

      	<!-- <div class="row">
      		<div class="col-md-7 col-12">
      			<img class="img-thumbnail" src="assets/images/dust.png" alt="Card image" />
      		</div>
      		<div class="col-md-5 col-12">
		       	<p><strong>Image TItle:</strong> title here</p>
            <p><strong>Author:</strong> Name of creator</p>
            <p><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
      		</div>
      	</div> -->
      	<div id="demo" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active mycaro">
				      <img class="img-thumbnail" src="assets/images/dust.png" alt="Los Angeles" width="1100" 	height="500">
				      <div class="carousel-caption text-dark">
				       	<h5>Image TItle: title here</h5>
            		<h5>Author: Name of creator</h5>
            		<div class="mywords text-justify">
            			<p>Description: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
            			</p>
            			
            		</div>
				      </div>   
				    </div>
				    <div class="carousel-item mycaro">
				      <img class="img-thumbnail" src="assets/images/dust.png" alt="Chicago" width="1100" height="500">
				      <div class="carousel-caption text-dark">
				        <h5>Image TItle: title here2</h5>
            		<h5>Author: Name of creator</h5>
				        <div class="mywords text-justify">
            			<p><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  </p>
            			
            		</div>
				      </div>   
				    </div>
				    <div class="carousel-item mycaro">
				      <img class="img-thumbnail" src="assets/images/dust.png" alt="New York" width="1100" height="500">
				      <div class="carousel-caption text-dark">
				       <h5>Image TItle: title here3</h5>
            		<h5>Author: Name of creator</h5>
				        <div class="mywords text-justify">
            			<p><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            			
            		</div>
				      </div>   
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span class="carousel-control-prev-icon bg-dark"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
				    <span class="carousel-control-next-icon bg-dark"></span>
				  </a>
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

<?php include 'includes/footer.php'; ?>

