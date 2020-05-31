<?php include 'includes/header.php'; ?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			
		</div>
		<div class="col-md-8 p-1">
			<div class="card" style="border-radius:5%">
				<div class="card-body">
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link active" data-toggle="tab" href="#home">VIDEO</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#profile">IMAGES</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" data-toggle="tab" href="#messages">AUDIO</a>
					  </li>
					</ul>

					<!-- Tab panes -->
				<!-- 	<div class="tab-content">
					  <div class="tab-pane container active" id="home">...</div>
					  <div class="tab-pane container fade" id="menu1">...</div>
					  <div class="tab-pane container fade" id="menu2">...</div>
					</div> -->

					<div class="tab-content">
            <div class="tab-pane container active" id="home">
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
            <div class="tab-pane container fade" id="profile">
            </div>
            <div class="tab-pane container fade" id="messages">
              <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
            <div class="tab-pane" id="settings">
              <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
        </div>
			
				</div>
			</div>
			
		</div>
	</div>
</div>
<!-- Nav tabs -->