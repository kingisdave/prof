<?php include "includes/header.php"; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
		</div>
		<div class="col-lg-8 col-md-8 col-12">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 mx-auto">
					<div class="card border-none shadow-lg mt-1 pb-1 mx-auto" style="border-radius: 8px">
						<div class="card-body mx-auto" style="width:95%">
							<form class="form" method="POST">
								<h6 class="text-center text-info"><strong>Create an Account</strong></h6>
								<small class="text-info">Choose a registration option</small>
								<div class="form-group">
									<select class="form-control">
										<option>--Choose Category--</option>
										<!-- <option value="myStudent">My Student</option> -->
										<option value="undergraduate">My Undergraduate Student</option>
										<option value="postgraduate">My Postgraduate Student</option>
										<option value="exstudent">My Ex-student</option>
										<option value="colleague">Colleague</option>
										<option value="guest">Guest</option>
										<option value="guest">Forum Participant</option>
									</select>
								</div>
<!-- 								<div class="form-group">
									<select class="form-control">
										<option>Choose Title</option>
										<option value="miss">Miss</option>
										<option value="mr">Mr.</option>
										<option value="mrs">Mrs.</option>
										<option value="engr">Engr.</option>
										<option value="architect">Arc.</option>
										<option value="dr">Dr.</option>
										<option value="professor">Professor</option>
									</select>
								</div> -->
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Title" name="title" id="title" required>
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Surname" name="surname" id="surname" required>
								</div>
								<div class="form-group">
									<input type="text" placeholder="Other Names" class="form-control" name="othernames" id="othernames" required>
								</div>
								<div class="form-group">
									<input type="text" placeholder="Institution" class="form-control" name="institution" id="institution" required>
								</div>
								<div class="form-group">
									<input type="phone" placeholder="Mobile Phone Number" class="form-control" name="phonenumber" id="phonenumber" required>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Residential Address"></textarea>
								</div>
								<div class="form-group">
									<input type="text" name="username" placeholder="Username" class="form-control" />
								</div>
								<div class="form-group mt-2">
									<input type="password" placeholder="Enter your Password" class="form-control" name="pword" id="pword">
								</div>
								<div class="form-group mt-2">
									<input type="password" placeholder="Confirm Password" class="form-control" name="pword" id="pword">
								</div>
								<div class="form-group row">
									<label class="col-4"><small>Passport Image</small></label>
									<input type="file" class="col-8" name="passportimg" id="passportimg" />
									<small class="text-info ml-3"><em>Upload size must be less than 1MB</em></small>
								</div>
								<div class="form-group form-check" id="passw">
							    <label class="form-check-label">
							    	<input class="form-check-input mt-2" type="checkbox" name="check">
							    	<small class="mr-1" style="color: #797981">By registering on this site, I agree all terms and conditions of usage of this website.</small>
							    </label>
						  	</div>
								<!-- </div> -->
								<div class="form-group mt-2">
									<input type="submit" class="btn btn-sm btn-primary form-control shadow" name="regbutton"\>
								</div>
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