<link rel="stylesheet" href="assets/css/otherdivs.css">
	<style>

	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>

			<!-- main div -->
			<div id="main" class="container">

				<!-- togglebutton -->
				<a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a>

				<div class="container-fluid ml-2">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-10 mx-auto">
							<div class="card border-0 shadow m-2 mx-auto" style=" border-radius:23% 0 20% 0">
								<div class="card-body">
								<h6 class="text-center text-info mb-4">Update Password</h6>
									<p class="small text-info">You can update your password here anytime</p>
									<form class="form" method="post">
										
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Old Password" />
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="New Password" />
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="confirmpassword" placeholder="Confirm New Password" />
										</div>
										
										<button type="submit" class="btn btn-sm form-control btn-info" name="submit" id="logbutn"> Change Password &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden=""></span></button> 
									</form> 
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
	
	</script>
	
</body>
</html>
