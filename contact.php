<?php include "includes/header.php"; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-12">
			
		</div>
		<div class="col-md-8 col-12">
			
			<div class="card border-none shadow mt-1 mx-auto" style="width: 95%; border-radius:15% 0 15% 0">
				<h5 class="text-center mt-3 text-info">Contact Form</h5>
				<div class="card-body">
					<!-- <form class="form mx-auto" id="contactform" method="post">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="Enter a  valid e-mail" />
								</div>
								<div class="form-group">
									<label>Name</label>
									<input type="text" class="form-control" name="contactname" placeholder="Enter Your Name" />
								</div>
								<div class="form-group">
									<label>Subject</label>
									<input type="text" class="form-control" name="subject" placeholder="Subject" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="message">Message</label>
									<textarea class="form-control" rows="4" placeholder="Your Message Here.." id="message">
									</textarea>	
								</div>
							</div>
						</div>
							<button type="submit" class="btn btn-sm btn-primary float-right" name="submit" id="messagebutn"> Send Message &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden=""></span></button>
						 
					</form>  -->
					<form class="form-horizontal" action="#">
              <div class="row m-t-30">
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label class="col-lg-12">Email</label>
                          <div class="col-sm-12">
                              <input type="email" class="form-control myForm" required parsley-type="email" placeholder="Enter a valid e-mail" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-12">Name</label>
                          <div class="col-sm-12">
                              <input type="text" class="form-control myForm" required parsley-type="text" placeholder="Enter your Name" />
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-lg-12">Subject</label>
                          <div class="col-sm-12">
                              <input type="text" class="form-control myForm" required parsley-type="text" placeholder="Enter the Title Here" />
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <label class="col-lg-12">Message</label>
                          <div class="col-sm-12">
                              <textarea class="form-control myForm" placeholder="Your Message Here.." rows="6"></textarea>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-sm-12">
                              <button type="submit" class="btn btn-info btn-sm float-right">Send Message &nbsp;<span class="fa fa-spin fa-spinner" id="loader" hidden=""></span></button>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
				</div>
			</div>

		</div>
	</div>
</div>
