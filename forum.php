<style type="text/css">
#forumrow a {
  text-decoration: none;
  color: black;
}
#forumrow h6 {
	color: black;
}
#forumrow p {
  color: darkgrey;
}
#forumrow a .card:hover{
	border: 1px solid #000;
	background: #EBEBEB;	
}

</style>

<?php include 'includes/header.php'; ?>
<div class="container-fluid mb-1">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-11 mx-auto"> 
			<div class="alert bg-white alert-info alert-dismissible fade show">
	    	<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>*</strong>You have to Login first. <a href="login.php" class="alert-link">Login from here</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<?php include "includes/buttons.php"; ?>
		</div>
		<div class="col-lg-8 col-md-8 col-12">
			<div class="card shadow" style="border-radius: 13px">
				<div class="card-body">
					<!-- Forum Sections where to enter into the forum discussion -->
					<div class="row">
						<div class="col-7">
							<h4><strong><span class="text-primary">F</span><span class="text-dark">o</span><span class="text-danger">r</span><span class="text-success">u</span><span class="text-dark">m</span></strong></h4>
							<p><i><small>Click on any to join discussion</small></i></p>	
						</div>
						<div class="col-5">
							<a href="createdforum.php" class="btn btn-sm btn-info text-white float-right"><i class="fa fa-plus"></i>New Forum</a>	
						</div>
					</div>
					<div class="row" id="forumrow">
						<div class="col-md-4 col-sm-6 col-12">
							<a href="forumcategory.php">
								<div class="card shadow m-1">
									<div class="card-body">
										<h6>Art History and Aesthetic Practices</h6>
										<p>Updates from Admin</p>
										<p>102 posts</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6 col-12">
							<a href="forumcategory.php">
								<div class="card shadow m-1">
									<div class="card-body">
										<h6> Visual Culture</h6>
										<p>Choosing plans, cultures and traditions</p>
										<p>54 posts</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6 col-12">
							<a href="forumcategory.php">
								<div class="card shadow m-1">
									<div class="card-body">
										<h6> Research</h6>
										<p>Choosing plans, cultures and traditions</p>
										<p>90 posts</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6 col-12">
							<a href="forumcategory.php">
								<div class="card shadow m-1">
									<div class="card-body">
										<h6>Administrative and Regulatory Issues</h6>
										<p>Updates from Admin</p>
										<p>100 posts</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6 col-12">
							<a href="forumcategory.php">
								<div class="card shadow m-1">
									<div class="card-body">
										<h6>Opportunities</h6>
										<p>Current Opportunities to choose from</p>
										<p>54 posts</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 col-sm-6 col-12">
							<a href="forumcategory.php">
								<div class="card shadow m-1">
									<div class="card-body">
										<h6>General Issues</h6>
										<p>What are the current issues</p>
										<p>254 posts</p>
									</div>
								</div>
							</a>
						</div>
					</div>
					<hr class="text-secondary" />
					<div class="row" id="forumrow">
						<div class="col-12 pt-1">
							<h5>Featured</h5>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card m-1">
										<div class="card-body">
											<h6><a href="#">General Issues</a></h6>
											<i class="float-right">4</i>
											<p><a href="#">What are the current issues</a></p>
											<p><small class="text-secondary">May 29 2020 by Admin</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card m-1">
										<div class="card-body">
											<h6><a href="#">Opportunities</a></h6>
											<i class="float-right">4</i>
											<p><a href="#">Current Opportunities to choose from</a></p>
											<p><small class="text-secondary">April 2 2020 by Admin</small></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr class="text-secondary" />
					<div class="row" id="forumrow">
						<div class="col-12 pt-1">
							<h5>Latest</h5>
							<div class="row">
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card m-1">
										<div class="card-body">
											<h6><a href="#">General Issues</a></h6>
											<i class="float-right">4</i>
											<p><a href="#">What are issues?</a></p>
											<p><small class="text-secondary">2 minutes ago by Admin</small></p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="card m-1">
										<div class="card-body">
											<h6><a href="#">Opportunities</a></h6>
											<i class="float-right">4</i>
											<p><a href="#">Opportunities to choose</a></p>
											<p><small class="text-secondary">20hrs ago by Admin</small></p>
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

