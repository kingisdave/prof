<?php include 'includes/header.php'; ?>
<div class="container-fluid mb-1" style="width: 99%">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-11 mx-auto"> 
			<!-- <div class="alert bg-white alert-info alert-dismissible fade show">
	    	<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>*</strong>You have to Login first. <a href="login.php" class="alert-link">Login from here</a>
			</div> -->
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<?php include "includes/buttons.php"; ?>
		</div> 
		<div class="col-lg-8 col-md-8 col-12 bg-white p-2" style="width: 90%; border-radius: 10px">
			<h5 class="m-2 text-center"><strong>Start a new Forum</strong></h5>
			<div class="row">
				<div class="col-12">
					<div class="card shadow m-1 mx-auto" id="forumcard" style="width:90%; border-radius: 13px">
						<div class="card-body mx-auto" style="width: 90%">
							
							<form class="messageform">
								<div class="form-group">
									<small><i>Choose the forum to join</i></small>
									<select class="form-control">
										<option value="">Select one the forums</option>
										<option value="Administrative and Regulatory Issues">Administrative and Regulatory Issues</option>
										<option value="Art History and Aesthetic Practices">Art History and Aesthetic Practices</option>
										<option value="General Issues">General Issues</option>
										<option value="Opportunities">Opportunities</option>
										<option value="Research">Research</option>
										<option value="Visual Culture">Visual Culture</option>
										<option value="New">New</option>
									</select>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="forumtitle" placeholder="Title" />
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="subtitleforum" placeholder="Summarize the topic here" />
								</div>
								<div class="form-group">
									<textarea name="myforum" id="myforum" class="form-control" placeholder="Post a new message"></textarea>
								</div>
								<div class="uploadbtnwrapper float-left">
									<button class="fa fa-plus mybtn"><span class="ml-2">Add media file</span></button>
									<input type="file" name="myfile">
								</div>
								<button name="submit" id="sendforum" class="btn btn-primary btn-sm float-right">Send Message &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden></span></button>
							</form>

						</div>
					</div>
				</div>
			</div>
			<hr class="text-secondary" />
			<div class="row">
				<div class="col-12">
					<div class="card shadow m-1 mx-auto" style="width:90%; border-radius: 13px">
						<div class="card-body mx-auto">
							<h5 class="m-2 text-center"><strong>Join a discussion</strong></h5>
							<div class="media border m-2 mb-2 p-3 text-secondary">
							  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
							  <div class="media-body mycomments">
							    <span class="h4 text-dark">Adam Jansen</span><small class="float-right mt-2"><i>about 2 minutes ago</i></small>
							    <p class="text-justify mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<div>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
					          <a href="#" class="m-2 text-secondary">Reply</a>
					      	</div>
								</div>
							</div>
						
							 <div class="media border m-2 mb-2 p-3 text-secondary">
							  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
							  <div class="media-body">
							    <span class="h4 text-dark">Kim Ryder </span><small class="float-right mt-2"><i>about 4 hours ago</i></small>
							    <p class="text-justify mt-2">I'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>
							    <div>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
					          <a href="#" class="m-2 text-secondary">Reply</a>
					      	</div>
								</div>
							</div>

							 <div class="media border m-2 mb-2 p-3 text-secondary">
							  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
							  <div class="media-body mycomments">
							    <span class="h4 text-dark">Nicolai Larson </span><small class="float-right mt-2"><i>10 hours ago</i></small>
							    <p class="text-justify mt-2">The parallax is a little odd but O.o that house build is awesome!!.</p>
							    <div>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
					          <a href="#" class="m-2 text-secondary">Reply</a>
					      	</div>
								</div>
							</div>

							 <div class="media border m-2 mb-2 p-3 text-secondary">
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
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
					          <a href="#" class="m-2 text-secondary">Reply</a>
					      	</div>
							    <div class="media border p-2">
							      <img src="assets/images/dust.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
							      <div class="media-body mycomments">
							        <span class="h4 text-dark">John Smith </span><small class="float-right mt-2"><i>about 1 hour ago</i></small>
							        <p>Wow impressive!</p>
							        <div class="">
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
							          <a href="#" class="m-2 text-secondary">Reply</a>
							      	</div>
							      </div>
							    </div> 
							  </div>
							</div>

							 <div class="media border m-2 mb-2 p-3 text-secondary">
							  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
							  <div class="media-body mycomments">
							    <span class="h4 text-dark">Kim Ryder </span><small class="float-right mt-2"><i>about 4 hours ago</i></small>
							    <p class="text-justify mt-2">I'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.</p>
							    <div>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
					          <a href="#" class="m-2 text-secondary">Reply</a>
					      	</div>
								</div>
							</div>

							 <div class="media border m-2 mb-2 p-3 text-secondary">
							  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
							  <div class="media-body mycomments">
							    <span class="h4 text-dark">Nicolai Larson </span><small class="float-right mt-2"><i>10 hours ago</i></small>
							    <p class="text-justify mt-2">The parallax is a little odd but O.o that house build is awesome!!.</p>
							    <div>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
					          <a href="#" class="m-2 text-secondary">Reply</a>
					      	</div>
								</div>
							</div>

							 <div class="media border m-2 mb-2 p-3 text-secondary">
							  <img src="assets/images/dust.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px">
							  <div class="media-body mycomments">
							    <span class="h4 text-dark">Adam Jansen </span><small class="float-right mt-2"><i>about 2 minuts ago</i></small>
							    <p class="text-justify mt-2">Story based around the idea of time lapse, animation to post soon!</p>
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
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
					          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
					          <a href="#" class="m-2 text-secondary">Reply</a>
					      	</div>
							    <div class="media border p-3">
							      <img src="assets/images/dust.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:60px; height: 60px;">
							      <div class="media-body mycomments">
							        <span class="h4 text-dark">John Smith </span><small class="float-right mt-2"><i>about 1 hour ago</i></small>
							        <p class="text-justify mt-2">Wow impressive!</p>
							        <div class="">
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-up"></i></a>
							          <a href="#" class="m-2 text-secondary"><i class="fa fa-thumbs-down"></i></a>
							          <a href="#" class="m-2 text-secondary">Reply</a>
							      	</div>
							      </div>
							    </div> 
							  </div>
							</div>
							<div class="float-left m-1">
								<a href="#top" class="btn btn-default border shadow">
									Top<i class="fa fa-arrow-circle-up ml-2"></i>
								</a>
							</div>
							<div class="text-center m-1">
								<a href="" class="btn btn-default border shadow">Load More...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
