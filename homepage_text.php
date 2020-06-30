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
										<th>Text Name</th>
										<th>Title</th>
										<th>Notes</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td><strong>Welcome Text</strong></td>
										<td>Poster One</td>
										<td><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</small>
										</td>
										<td>
											<button class="btn btn-outline-danger">
												<span class="fa fa-trash"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td><strong>Welcome Text</strong></td>
										<td>Poster Two</td>
										<td><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</small>
										</td>
										<td>
											<button class="btn btn-outline-danger">
												<span class="fa fa-trash"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td><strong>News Board Text</strong></td>
										<td>Poster One</td>
										<td><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</small>
										</td>
										<td>
											<button class="btn btn-outline-danger">
												<span class="fa fa-trash"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td><strong>News Board Text</strong></td>
										<td>Poster Two</td>
										<td><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</small>
										</td>
										<td>
											<button class="btn btn-outline-danger">
												<span class="fa fa-trash"></span>
											</button>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td><strong>Ouotes</strong></td>
										<td>Poster One</td>
										<td><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</small>
										</td>
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
					<h5>Welcome Text</h5>
					<div class="card shadow">
						<div class="card-body">
							<form class="form">
								<div class="form-group">
									<textarea class="form-control" name="mytext" rows="4" placeholder="Write your text here"></textarea>
								</div>
								<input type="submit" class="btn btn-primary float-right" name="post" class="float-right" />
							</form>
						</div>
					</div>

					<hr class="text-secondary" />
						<!-- News Board Text upload -->
					<h5>News Board Text</h5>
					<div class="card shadow">
						<div class="card-body">
							<form class="form">
								<div class="form-group">
									<input type="text" name="title" class="form-control" placeholder="Title" />
								</div>
								<div class="form-group">
									<textarea class="form-control" name="inform" rows="2" placeholder="Write the news here"></textarea>
								</div>
								<input type="submit" class="btn btn-primary float-right" name="post" class="" />
							</form>
						</div>
					</div>

					<hr class="text-secondary" />
					<!-- Quotes Textbook upload -->
					<h5>Quotes</h5>
					<div class="card shadow">
						<div class="card-body">
							<form class="form">
								<div class="form-group">
									<textarea name="quotes" class="form-control" placeholder="Quotes for the day"></textarea>
								</div>
								<input type="submit" class="btn btn-primary float-right" name="post" />
							</form>
							
						</div>
					</div>
					<hr class="text-secondary" />

					<!-- Footer Text -->
					<div class="row">
						<div class="col-12">
							<h5>Footer</h5>
							<div class="card shadow">
								<div class="card-body">
									<div id="editor">
										Write your Footer here
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
									<!-- <form class="form">
										<div class="form-group">
											<input type="text" name="title" class="form-control" placeholder="Title" />
										</div>
										<div class="form-group">
											<textarea class="form-control" name="inform" rows="2" placeholder="Write the news here"></textarea>
										</div>
										<input type="submit" class="btn btn-primary float-right" name="post" class="" />
									</form> -->
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