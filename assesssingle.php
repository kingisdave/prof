<?php include 'includes/header.php'; ?>

<!-- Login Alert	 -->
<div class="container-fluid bg-white mt-1 p-2" style="width: 98.6%; border-radius: 14px">
	<div class="mx-auto" style="width: 75vh">
		<div class="alert alert-info alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>*</strong>You have to Login first <a href="login.php" class="alert-link">Login from here</a>
		</div>
	</div>

	<!-- Paper section	 -->
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-10 col-12 mx-auto">
			<div class="card m-1">
				<div class="card-body mx-auto" style="width: 95%">
          <h4>Paper Title</h4>
          <h4>Paper Arthur</h4>
          <h5>Abstract</h5>
          <p style="text-indent: 30px;" class="text-justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde atque minus, alias id sunt dignissimos non tenetur porro accusamus dolore inventore voluptatem reprehenderit perspiciatis excepturi. Explicabo iure aspernatur inventore vel. Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque in facilis corporis quidem deserunt quis laboriosam molestias similique inventore tempore ad, facere, eos nemo rem quasi tenetur ut perspiciatis ratione. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad debitis eveniet mollitia quisquam. Obcaecati corporis itaque incidunt asperiores minima quibusdam dolorum mollitia hic voluptas repellat. Eos possimus unde nam facilis. <a type="button" class="btn btn-link text-info"><i class="fa fa-download mr-1"></i>Download Paper</a>
          </p>
   			</div>
			</div>
		</div>
	</div>
	<hr class="text-secondary"/>

<!-- Comment section	 -->
	<div class="row">
		<div class="col-lg-9 col-md-9 col-sm-10 col-12 mx-auto">
      <h4 class="text-lead">Comments</h4>
			<div class="card m-1">
				<div class="card-body mx-auto" style="width: 95%">
         	<form method="post">
            <span class="input-icon icon-right">
              <textarea rows="2" class="form-control"
              				 placeholder="Post a new comment"></textarea>
            </span>
            <div class="float-right mt-2">
              <button class="btn btn-sm btn-info">Post &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden></span></button>
            </div>
            <ul class="nav nav-pills profile-pills">
              <!-- <li>
                  <a href="#"><i class="fa fa-user"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-location-arrow"></i></a>
              </li>
              <li>
                  <a href="#"><i class=" fa fa-camera"></i></a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-smile-o"></i></a>
              </li> -->
            </ul>
        	</form>
   			</div>
			</div>
		</div>
		<div class="col-lg-9 col-md-9 col-sm-10 col-12 mx-auto">
    	<div class="media border m-1 p-3 shadow">
			  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			  <div class="media-body">
			    <h4>Adam Jansen<small class="float-right"><i>about 2 minutes ago</i><small></h4>
			    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<div>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-up"></i></a>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-down"></i></a>
	          <a href="#" class="m-1">Reply</a>
	      	</div>
				</div>
			</div>
		
			<div class="media border m-1 p-3 shadow">
			  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			  <div class="media-body">
			    <h4>Kim Ryder <small class="float-right"><i>about 4 hours ago</i></small></h4>
			    <p class="text-justify">I'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>
			    <div>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-up"></i></a>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-down"></i></a>
	          <a href="#" class="m-1">Reply</a>
	      	</div>
				</div>
			</div>

			<div class="media border m-1 p-3 shadow">
			  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			  <div class="media-body">
			    <h4>Nicolai Larson <small class="float-right"><i>10 hours ago</i></small></h4>
			    <p class="text-justify">The parallax is a little odd but O.o that house build is awesome!!.</p>
			    <div>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-up"></i></a>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-down"></i></a>
	          <a href="#" class="m-1">Reply</a>
	      	</div>
				</div>
			</div>

			<div class="media border m-1 p-3 shadow">
			  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			  <div class="media-body">
			    <h4>Adam Jansen <small class="float-right"><i>about 2 minuts ago</i></small></h4>
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
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-up"></i></a>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-down"></i></a>
	          <a href="#" class="m-1">Reply</a>
	      	</div>
			    <div class="media border p-3">
			      <img src="assets/images/dust.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
			      <div class="media-body">
			        <h4>John Smith <small class="float-right"><i>about 1 hour ago</i></small></h4>
			        <p>Wow impressive!</p>
			      </div>
			    </div> 
			  </div>
			</div>

			<div class="media border m-1 p-3 shadow">
			  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			  <div class="media-body">
			    <h4>>Kim Ryder <small class="float-right"><i>about 4 hours ago</i></small></h4>
			    <p class="text-justify">I'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>
			    <div>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-up"></i></a>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-down"></i></a>
	          <a href="#" class="m-1">Reply</a>
	      	</div>
				</div>
			</div>

			<div class="media border m-1 p-3 shadow">
			  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			  <div class="media-body">
			    <h4>Nicolai Larson <small class="float-right"><i>10 hours ago</i></small></h4>
			    <p class="text-justify">The parallax is a little odd but O.o that house build is awesome!!.</p>
			    <div>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-up"></i></a>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-down"></i></a>
	          <a href="#" class="m-1">Reply</a>
	      	</div>
				</div>
			</div>

			<div class="media border m-1 p-3 shadow">
			  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
			  <div class="media-body">
			    <h4>Adam Jansen <small class="float-right"><i>about 2 minuts ago</i></small></h4>
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
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-up"></i></a>
	          <a href="#" class="m-1"><i class="fa fa-thumbs-o-down"></i></a>
	          <a href="#" class="m-1">Reply</a>
	      	</div>
			    <div class="media border p-3">
			      <img src="assets/images/dust.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
			      <div class="media-body">
			        <h4>John Smith <small class="float-right"><i>about 1 hour ago</i></small></h4>
			        <p>Wow impressive!</p>
			      </div>
			    </div> 
			  </div>
			</div>
		</div>
	</div>
	<div class="row m-3">
		<div class="col-lg-4 col-md-5 col-sm-9 col-10 mx-auto">
			<div class="input-group mb-3 shadow disabled">
			  <input type="text" class="form-control" placeholder="ENTER ACCESS KEY" id="access" name="access">
			  <div class="input-group-append">
			    <button class="btn btn-info" type="submit">Validate Key</button>
			  </div>
			</div>
		</div>
		
	</div>
</div>

<?php include 'includes/footer.php'; ?>