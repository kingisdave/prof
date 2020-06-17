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

				<div class="container-fluid ml-2" style="width: 95%; border-radius: 13px">
					<!-- Greetings Text upload -->
					<!-- <div class="row bg-white"> -->
						<!-- <div class="col-12"> -->
							<h5>Greetings Text</h5>
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
						<!-- </div> -->
					<!-- </div> -->
					<hr class="text-secondary" />
						<!-- News Board Text upload -->
					<!-- <div class="row bg-white"> -->
						<!-- <div class="col-12"> -->
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
						<!-- </div> -->
					<!-- </div> -->
					<hr class="text-secondary" />
							<!-- Quotes Textbook upload -->
					<!-- <div class="row bg-white"> -->
						<!-- <div class="col-12"> -->
							<h5>Quotes</h5>
							<div class="card shadow">
								<div class="card-body">
									<form class="form">
										<div class="form-group">
											<input type="text" name="title" class="form-control" placeholder="Title" />
										</div>
										<input type="submit" class="btn btn-primary float-right2" name="post" class="float-right" />
									</form>
									
								</div>
							</div>
						<!-- </div> -->
					<!-- </div> -->
					<hr class="text-secondary" />
					<div class="row">
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