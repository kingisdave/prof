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

					<h5>Headers Gallery</h5>
					<!-- This is the logo upload div -->
					<div class="card shadow">
						<h6 class="card-header">Favicon</h6>
						<div class="card-body">
							<div id="my_preview"></div>
							<div class="uploadbtnwrapper float-left">
								<button class="mybtn btn-sm">Select File</button>
								<input type="file" id="postImgPrev" name="postImgPrev[]" multiple />
							</div>
							<button class="btn btn-outline-primary btn-sm rounded float-right">Upload Favicon</button>
						</div>
					</div>

					<hr class="text-secondary" />
					<!-- This is the inner pictures upload div -->
					<div class="card shadow">
						<h6 class="card-header">Header Image Upload</h6>
						<div class="card-body">
							<div id="my_preview"></div>
							<div class="uploadbtnwrapper float-left">
								<button class="mybtn btn-sm">Select File</button>
								<input type="file" id="postImgPrev" name="postImgPrev[]" multiple />
							</div>
							<button class="btn btn-outline-primary btn-sm rounded float-right">Upload Header Image</button>
						</div>
					</div>

					<hr class="text-secondary" />
					<!-- This is the inner background pictures upload div -->
					<div class="card shadow">
						<h6 class="card-header">Header Background Image Upload</h6>
						<div class="card-body">
							<div id="my_preview"></div>
							<div class="uploadbtnwrapper float-left">
								<button class="mybtn btn-sm">Select File</button>
								<input type="file" id="postImgPrev" name="postImgPrev[]" multiple />
							</div>
							<button class="btn btn-outline-primary btn-sm rounded float-right">Upload Background Image</button>
						</div>
					</div>

					<hr class="text-secondary" />
					<!-- This is the header text image upload div -->
					<div class="card shadow">
						<h6 class="card-header">Header Text Upload</h6>
						<div class="card-body">
							<div id="my_preview"></div>
							<div class="uploadbtnwrapper float-left">
								<button class="mybtn btn-sm">Select File</button>
								<input type="file" id="postImgPrev" name="postImgPrev[]" multiple />
							</div>
							<button class="btn btn-outline-primary btn-sm rounded float-right">Upload File</button>
						</div>
					</div>
					
					<hr class="text-secondary" />
			</div>
		</div>
	</div>
	<script src="assets/js/togglefunction.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
	
			$("#postImgPrev").change(function(){
				$('#my_preview').html("");
				var total_file=document.getElementById('postImgPrev').files.length;
				for(var i=0; i<total_file; i++){
					$('#my_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'/>");
				}
			});
		})
	</script>
	<!-- <script src="./js/fxn.js"></script> -->
</body>
</html>