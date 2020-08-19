<link rel="stylesheet" type="text/css" href="assets/css/mail.css">
<?php include "includes/header.php"; ?>
	
<div class="container-fluid">
	<div class="mywrapper">

		<div id="mySidenav" class="mySidenav">
			<div class="card border-0">
				<div class="card-body">
					<div class="clearfix">
						<img src='assets/images/dust.png' class='rounded-circle border float-left' style='width: 60px; height:60px'/>
						<span class="float-right text-center">
							<h6 class="">Prof Rom Kalilu</h6>
							<p class="small"><em>romkalilu@gmail.com</em></p>
						</span>
					</div>
					<div class="mt-4">
						<ul class="nav nav-pills flex-column" id="v-pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
							  	<a class="nav-link text-dark active" id="v-pills-inbox-tab" data-toggle="pill" href="#pills-inbox" role="tab" aria-controls="v-pills-inbox" aria-selected="true">
									<span class="h6 fa fa-inbox mr-2"></span>Inbox
									<span class="badge badge-primary float-right">1</span>
								</a>
							</li>
							<li class="nav-item">	  	
							  	<a class="nav-link text-dark" id="v-pills-draft-tab" data-toggle="pill" href="#v-pills-draft" role="tab" aria-controls="v-pills-draft" aria-selected="false">
									<span class="h6 fa fa-envelope mr-2"></span>Draft
									<span class="badge badge-info float-right">0</span> 
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-dark" id="v-pills-sent-tab" data-toggle="pill" href="#v-pills-sent" role="tab" aria-controls="v-pills-sent" aria-selected="false">
									<span class="h6 fa fa-paper-plane mr-2"></span>Sent
									<span class="badge badge-warning float-right">2</span>
								</a>
							</li>
							<li class="nav-item">
							  	<a class="nav-link text-dark" id="v-pills-spam-tab" data-toggle="pill" href="#v-pills-spam" role="tab" aria-controls="v-pills-spam" aria-selected="false">
									<span class="h6 fa fa-ad mr-2"></span>Spam
									<span class="badge badge-secondary float-right">3</span> 
								</a>
							</li>
							<li class="nav-item">
							  	<a class="nav-link text-dark" id="v-pills-archive-tab" data-toggle="pill" href="#v-pills-archive" role="tab" aria-controls="v-pills-archive" aria-selected="false">
									<i class="h6 fa fa-archive mr-2"></i>Archive
									<span class="badge badge-success float-right">0</span>
								</a>
							</li> 
							<li class="nav-item">
							  	<a class="nav-link text-dark" id="v-pills-trash-tab" data-toggle="pill" href="#v-pills-trash" role="tab" aria-controls="v-pills-trash" aria-selected="false">
									<i class="h6 fa fa-trash mr-2"></i>Trash
									<span class="badge badge-danger float-right">0</span>
								</a>
							</li>	
							<hr/>
							<li class="nav-item mt-3 ml-2"><h5>WORKS</h5></li>	
							<li>
								<a class="nav-link" href="#">
									<p> John Doe <span class="fa fa-circle text-primary"></span></p>
								</a>
							</li>
							<li>
								<a class="nav-link" href="#">
									<p> Jill Jake <span class="fa fa-circle text-primary"></span></p>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="main">
			<div class="container-fluid ml-3" style="width: 100%">

				<div class="row">
					<div class="col-12">
						<div class="card mailcard">	
							<div class="card-body">
								<div class="clearfix">
									<a href="#" class="float-left" onclick="openNav()" id="mytoggler">
										<div></div>
										<div></div>
										<div></div>
									</a>
									<form class="navbar-form float-right">
									  	<div class="input-group">
									    	<input type="text" class="form-control" placeholder="Search" />
									    	<div class="input-group-btn">
									      		<button class="btn btn-outline-danger bg-light border" type="submit">
									        		<i class="fa fa-search text-dark m-1"></i>
									      		</button>
									    	</div>
									  	</div>
									</form>
								</div>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active border p-1 rounded" id="pills-inbox" role="tabpanel" aria-labelledby="pills-inbox-tab">
										<h4 class="ml-3">INBOX</h4>
										<ul class="list-unstyled">
										  	<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2">
										      		<a href="#" class="text-dark"><h5 class="mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										  	<li class="media my-4">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body p-2 row">
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										    	</div>
										  	</li>
										  	<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
										      		Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</a> 
										    	</div>
										  	</li>
										</ul>
									</div>


									<div class="tab-pane fade border p-1 rounded" id="v-pills-draft" role="tabpanel" aria-labelledby="v-pills-draft-tab">
										<h4 class="ml-3">DRAFT</h4>
										<ul class="list-unstyled">
										  	<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										  	<li class="media my-4">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body p-2 row">
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										    	</div>
										  	</li>
											<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										</ul>
									</div>

									<div class="tab-pane fade border p-1 rounded" id="v-pills-sent" role="tabpanel" aria-labelledby="v-pills-sent-tab">
										<h4 class="ml-3">SENT</h4>
										<ul class="list-unstyled">
										  	<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										  	<li class="media my-4">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body p-2 row">
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										    	</div>
										  	</li>
											<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										</ul>
									</div>

									<div class="tab-pane fade border p-1 rounded" id="v-pills-spam" role="tabpanel" aria-labelledby="v-pills-spam-tab">
										<h4 class="ml-3">SPAM</h4>
										<ul class="list-unstyled">
										  	<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										  	<li class="media my-4">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body p-2 row">
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										    	</div>
										  	</li>
											<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										</ul>
									</div>

									<div class="tab-pane fade border p-1 rounded" id="v-pills-archive" role="tabpanel" aria-labelledby="v-pills-archive-tab">
										<h4 class="ml-3">ARCHIVE</h4>
										<ul class="list-unstyled">
										  	<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										  	<li class="media my-4">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body p-2 row">
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										    	</div>
										  	</li>
											<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										</ul>
									</div>

									<div class="tab-pane fade border p-1 rounded" id="v-pills-trash" role="tabpanel" aria-labelledby="v-pills-trash-tab">
										<h4 class="ml-3">TRASH</h4>
										<ul class="list-unstyled">
										  	<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										  	<li class="media my-4">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body p-2 row">
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										      		<div class="col-md-6 col-12">
										      			<div class="card border-0 shadow m-1">
										      				<div class="card-body row">
										      					<img src="assets/images/dust.png" class="col-md-3 col-12 rounded img-fluid" width="40" height="40" />
										      					<h6 class="col-md-6 col-12 my-auto">Template</h6>
										      					<a href="#" class="col-md-3 col-12 h5 fa fa-download text-secondary my-auto" download></a>
										      				</div>
										      			</div>
										      		</div>
										    	</div>
										  	</li>
											<li class="media">
										    	<img src="assets/images/dust.png" class="rounded-circle mr-3" alt="dust.jpg" width="50" height="50">
										    	<div class="media-body bg-ash p-2 shadow">
										      		<a href="#" class="text-dark"><h5 class="mt-0 mb-1">List-based media object <small class="float-right">12th Dec, 2018</small></h5>
									      			Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
									      			</a>
											    </div>
										  	</li>
										</ul>
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

<?php include "includes/footer.php"; ?>
<script src="assets/js/togglefunction.js"></script>