<?php include "includes/header.php"; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-12">
			<?php include "includes/buttons.php"; ?>
		</div>
		<div class="col-md-8 col-12">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 mx-auto">
					<div class="card border-none shadow mt-1 mx-auto" style="border-radius:23% 0 20% 0">
						<h6 class="text-center text-info mt-4">Login here</h6>
						<div class="card-body mx-auto" style="width: 95%">
							<p class="small text-center text-info">Sign in to gain access to various resources on this website</p>
							<form class="form mx-auto text-center" id="logform" method="post">
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Enter a  valid e-mail" />
								</div>
								<div class="input-group">
									<input type="password" class="form-control" placeholder="Password here" id="myinput" class="form-control" />
									<div class="input-group-append">
										<span onclick="togimage()" class="input-group-text">
											<img src="assets/images/eye.png" id="imgmi" width="25px"/>
										</span>
									</div>
								</div>
								<!-- <div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password" />
								</div> -->
								<!--<small>Forgot password? <a href="#" data-toggle="modal" data-target="#myModal" class="mya"> Click here</a></small> -->
								<div class="form-group form-check text-left float-left" id="passw">
							    <label class="form-check-label">
							    	<input class="form-check-input" type="checkbox" name="check"><small>Remember me</small>
							    </label>
						  	</div>
								<small class="float-right"><a href="forgot.php" class="mya">Forgot Password? </a></small>
								<button type="submit" class="btn btn-sm form-control btn-info" name="submit" id="logbutn"> Login &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden=""></span></button><br>
								<small class="text-center"><a href="register.php" class="mya"> New Here? Sign up now</a></small> 
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	togimage=()=>{
		if (myinput.type == "password") {
			myinput.type = "text";
			imgmi.src="assets/images/eyeclose.png";
		} else {
			myinput.type = "password";
			imgmi.src="assets/images/eye.png";
		}
	}
</script>
