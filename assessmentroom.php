<?php include 'includes/header.php'; ?>

<div class="container-fluid bg-white mt-1 p-2" style="width: 98.6%; border-radius: 14px">
	<div class="mx-auto" style="width: 75vh">
		<div class="alert alert-info alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>*</strong>You have to Login first <a href="login.php" class="alert-link">Login from here</a>
		</div>
		<!-- <div class="input-group mb-3 shadow disabled">
		  <input type="text" class="form-control" placeholder="ENTER ACCESS KEY" id="access" name="access">
		  <div class="input-group-append">
		    <button class="btn btn-info" type="submit">Validate Key</button>
		  </div>
		</div> -->
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
		    <div class="card-body">
		    	<div class="row">
		    		<div class="col-lg-5 col-md-6 col-sm-9 col-12 ml-auto">
				    	<div class="form-group float-left mr-2" style="width: 47%">
				    		<select class="form-control">
				    			<option value="">Search Parameter</option>
		              <option disabled></option>
		              <option value="author">Search by author</option>
		              <option value="title"> Search by title</option>
				    		</select>
				    	</div>
							<div class="input-group float-right" style="width: 50%">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
							    <button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
							  </div>
							</div>
				    </div>
			    </div>
		    </div>
		  </div>
		</div>

	</div>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 shadow pt-2">
			<div class="card">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal"> -->
			  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
				<!-- </a> -->
			   <div class="card-body">
			    <p>Paper Title</p>
			    <p class="float-left">Paper Author</p>
			    <a href="assesssingle.php" class="btn btn-sm btn-info float-right">Assess</a>
			    <!-- <span class="badge badge-info">THE GOODNESS OF GOD</span></small> -->
			  </div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 shadow pt-2">
			<div class="card">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal"> -->
			  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
				<!-- </a> -->
			  <div class="card-body">
			    <p>Paper Title</p>
			    <p class="float-left">Paper Author</p>
			    <a href="#" class="btn btn-sm btn-info float-right">Assess</a>
			    <!-- <span class="badge badge-info">THE GOODNESS OF GOD</span></small> -->
			  </div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 shadow pt-2">
			<div class="card">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal"> -->
			  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
				<!-- </a> -->
			   <div class="card-body">
			    <p>Paper Title</p>
			    <p class="float-left">Paper Author</p>
			    <a href="#" class="btn btn-sm btn-info float-right">Assess</a>
			    <!-- <span class="badge badge-info">THE GOODNESS OF GOD</span></small> -->
			  </div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 shadow pt-2">
			<div class="card">
				<!-- <a href="#" data-toggle="modal" data-target="#myModal"> -->
			  	<img class="card-img-top" src="assets/images/dust.png" alt="Card image">
				<!-- </a> -->
			   <div class="card-body">
			    <p>Paper Title</p>
			    <p class="float-left">Paper Author</p>
			    <a href="#" class="btn btn-sm btn-info float-right">Assess</a>
			    <!-- <span class="badge badge-info">THE GOODNESS OF GOD</span></small> -->
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