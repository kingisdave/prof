<link rel="stylesheet" href="assets/css/otherdivs.css">
<script type="text/javascript" src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
	<style>
	#tablelister{
		height: 90%;
		width: 95%;
		overflow: hidden;
	}
	</style>
<?php include "includes/header.php"; ?>

	<div class="container-fluid">
		<div class="row">
			<?php include "./includes/sidenavigation.php" ?>

			<!-- main div -->
			<div id="main" class="container">

				<!-- togglebutton -->
				<a href="#"><span onclick="openNav()" class="navbar-toggler-icon" id="togglelink">&#9776;</span></a>

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					<div class="card m-1 border-0 shadow" id="tablelister">
						<div class="card-body">
							<h4>Text Lists</h4>
							<table class="table table-striped table-bordered">
								<thead class="thead-dark">
									<tr>
										<th>S/N</th>
										<th>Header Image and Text</th>
										<th>Paragraph/Other Info</th>
										<th>Guest Speaker</th>
										<th>Date/Time</th>
										<th>Operation</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td><strong>Technology in Arts</strong></td>
										<td><small>Are You Maximizing Your Opportunity in Technology?</small></td>
										<td>Prof AA OF A</td>
										<td>3rd July, 2020  18:30:00</td>
										<td>
											<button class="btn btn-outline-danger">
												<span class="fa fa-trash"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td><strong>Technology in Arts</strong></td>
										<td><small>Are You Maximizing Your Opportunity in Technology?</small></td>
										<td>Prof AA OF A</td>
										<td>3rd July, 2020  18:30:00</td>
										<td>
											<button class="btn btn-outline-danger">
												<span class="fa fa-trash"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td><strong>Technology in Arts</strong></td>
										<td><small>Are You Maximizing Your Opportunity in Technology?</small></td>
										<td>Prof AA OF A</td>
										<td>3rd July, 2020  18:30:00</td>
										<td>
											<button class="btn btn-outline-danger">
												<span class="fa fa-trash"></span>
											</button>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<!-- Welcome Text upload -->
					<h5>Webinar Header Background and Topic</h5>
					<div class="card shadow">
						<div class="card-body">
							<form class="form">
								<div class="form-group">
									<input type="text" class="form-control" name="webinarTopic" placeholder="Webinar Topic" />
								</div>
								<div class="form-group">
									<input type="text" class="form-control" name="webinarSubtitle" placeholder="Webinar Subtitle" />
								</div>
								<div class="form-group">
									<input type="date" class="form-control" name="webinardate" placeholder="Webinar Date" />
								</div>
								<div class="fileinput fileinput-new" data-provides="fileinput">
								  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
								    <img data-src="holder.js/100%x100%"  alt="...">
								  </div>
								  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
								  <div>
								    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
								    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
								  </div>
								</div>
								<input type="submit" class="btn btn-primary float-right" name="post" class="float-right" />
							</form>
						</div>
					</div>

					<hr class="text-secondary" />

					<!-- Paragraph and Other Texts -->
					<div class="row">
						<div class="col-12">
							<h5>Paragraph and Other Information</h5>
							<div class="card shadow">
								<div class="card-body">
									<div id="editor">
										Write your Webinar Information here
									</div>
									<script>
										ClassicEditor
											.create(document.querySelector('#editor'))
											.then( editor => {
												console.log( editor );
											})
											.catch(error => {
												console.error( error );
											})
									</script>
									<button class="btn btn-sm btn-primary float-right">Post</button>	
								</div>
							</div>
						</div>
					</div>

					<hr class="text-secondary" />

					<div class="row">
						<div class="col-12">
							<h5>Information on the Main Speaker</h5>
							<div class="card shadow">
								<div class="card-body">
									<form class="form">
										<div class="form-group">
											<input type="text" class="form-control" name="guestSpeaker" placeholder="Name of the Guest Speaker">
										</div>
										<div class="form-group">
											<input type="text" name="guesttitle" class="form-control" placeholder="Title of Office of the Guest">
										</div>
										<div class="fileinput fileinput-new" data-provides="fileinput">
										  <div class="fileinput-new img-thumbnail" style="width: 200px; height: 150px;">
										    <img data-src="holder.js/100%x100%"  alt="...">
										  </div>
										  <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 200px; max-height: 150px;"></div>
										  <div>
										    <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
										    <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
										  </div>
										</div class="form-group">
										<button class="btn btn-info btn-sm float-right">Post Guest</button>
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
		// $(document).ready(function(){
	
		// 	$("#postImgPrev").change(function(){
		// 		$('#my_preview').html("");
		// 		var total_file=document.getElementById('postImgPrev').files.length;
		// 		for(var i=0; i<total_file; i++){
		// 			$('#my_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'/>");
		// 		}
		// 	});
		// })
	</script>
	<!-- <script src="./js/fxn.js"></script> -->
</body>
</html>