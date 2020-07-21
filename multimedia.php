<?php include 'includes/header.php'; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
            <?php include "includes/buttons.php"; ?>
        </div>
        <div class="col-lg-8 col-md-8 col-12 p-1">
			<div class="card" style="border-radius:5%">
				<div class="card-body">
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#video">VIDEO</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#images">IMAGES</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#audios">AUDIO</a>
					  </li>
					</ul>

					<!-- Tab panes -->
				<!-- 	<div class="tab-content">
					  <div class="tab-pane container active" id="home">...</div>
					  <div class="tab-pane container fade" id="menu1">...</div>
					  <div class="tab-pane container fade" id="menu2">...</div>
					</div> -->

					<div class="tab-content">
            <div class="tab-pane container active" id="video">
              <div class="row m-2">
                <div class="col-md-8 mx-auto">
                  <div class="card border-0 shadow">
                  	<div class="card-body">
	                    <h4 class="mt-2 mb-1">Video Title</h4>
	                    <!-- 4:3 aspect ratio -->
	                    <div class="embed-responsive embed-responsive-16by9">
	                      <video class="embed-responsive-item" src="assets/multimedia/video/video.mp4" controls="true"></video>
	                    </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col-md-8 mx-auto">
                 <div class="card border-0 shadow">
                  	<div class="card-body">
	                    <h4 class="mt-2 mb-1">Video Title</h4>
	                    <!-- 4:3 aspect ratio -->
	                    <div class="embed-responsive embed-responsive-16by9">
	                      <video class="embed-responsive-item" src="assets/multimedia/video/video.mp4" controls></video>
	                    </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="row m-2">
                <div class="col-md-8 mx-auto">
                  <div class="card border-0 shadow">
                  	<div class="card-body">
	                    <h4 class="text-dark header-title m-t-0 m-b-30">Video Title</h4>
	                    <!-- 4:3 aspect ratio -->
	                    <!-- 
	                        <iframe class="embed-responsive-item" src="assets/multimedia/video/video.mp4"></iframe>
	                        <video class="embed-responsive-item" src="assets/multimedia/video/video.mp4" controls="true"></video>
	                     -->
	                    <div class="embed-responsive embed-responsive-4by3"><video controls>
	                    	<source src="assets/multimedia/videos/video.mp4">
	                    </video></div>
	                  </div>
                  </div>
                </div>
              </div>
        
            </div>
            <div class="tab-pane container fade" id="images">
            	<div class="row">
            		<div class="col-md-4 col-sm-6 col-12">
            			<div class="card m-1 shadow" style="width: 20vh; height: 30vh">
            				<div class="card-body">
            					<img src="./assets/images/happy.png" class="img-fluid">
            				</div>
            			</div>
            		</div>
            		<div class="col-md-4 col-sm-6 col-12">
            			<div class="card m-1 shadow" style="width: 20vh; height: 30vh">
            				<div class="card-body">
            					<img src="./assets/images/happy.png" class="img-fluid">
            				</div>
            			</div>
            		</div>
            		<div class="col-md-4 col-sm-6 col-12">
            			<div class="card m-1 shadow" style="width: 20vh; height: 30vh">
            				<div class="card-body">
            					<img src="./assets/images/happy.png" class="img-fluid">
            				</div>
            			</div>
            		</div>
            	</div>
            </div>
            <div class="tab-pane container fade" id="audios">
            	<table class="table table-striped table-responsive-sm">
            		<thead class="thead-dark">
            			<tr>
            				<th>S/N</th>
            				<th>Title</th>
            				<th>Artist</th>
            				<th>Desciption</th>
            				<th>Duration</th>
            				<th>Ratings</th>
            			</tr>
            		</thead>
            		<tbody>
            			<tr>
            				<td>1</td>
            				<td>My First</td>
            				<td>Artist One</td>
            				<td>
            					<small>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,ifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</small>
            				</td>
            				<td><i><small>3:40 mins</small></i></td>
            				<td>
            					<i class="fa fa-star text-warning"></i>
            					<i class="fa fa-star text-warning"></i>
            					<i class="fa fa-star text-warning"></i>
            					<i class="fa fa-star text-warning"></i>
            				</td>
            			</tr>
            			<tr>
            				<td>3</td>
            				<td>My Third</td>
            				<td>Artist Three</td>
            				<td>
            					<small> Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim,</small>
            				</td>
            				<td><i><small>8:00 mins</small></i></td>
            				<td>
            					<i class="fa fa-star text-warning"></i>
            					<i class="fa fa-star text-warning"></i>
   										<i class="fa fa-star text-warning"></i>
            				</td>
            			</tr>
            		</tbody>
            	</table>
              
            </div>
           
        </div>
			
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- Nav tabs -->