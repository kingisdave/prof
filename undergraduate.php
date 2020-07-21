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
				<a href="#" onclick="openNav()" id="togglelink">
					<div></div>
					<div></div>
					<div></div>
				</a>

				<div class="container-fluid ml-2 mx-auto" style="width: 95%; border-radius: 13px">
						<h4>Undergraduates</h4>
					<div class="row bg-white shadow p-2">
						<div class="col-12 mx-auto">
						<h5 class="m-2">New Undergraduates</h5>
						<p class="text-info small">These are the new Undergraduates</p>
					
						<div class="table mx-auto">
							<table class="table table-striped table-responsive-md shadow">
								<tr class="thead-info">
									<th>S/N</th>
									<th>Images</th>
									<th>Full Names</th>
									<th>Category</th>
									<th>Operation</th>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<img src="assets/images/users/colleague/Okesola1560995564.png" class="rounded-circle" alt="Card image" width="50" height="50" />
									</td>
									<td>
										<h6>OKESOLA Emmanuel Oluwatobi</h6>
										<p class="small">Institution: Elekoro</p>
									</td>
									<td>
										<span class="badge badge-info">Undergraduate</span>
									</td>
									<td>
										<button class="btn btn-sm btn-info">Approve</button>
										<button class="btn btn-sm btn-danger">Decline</button>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>
										<img src="assets/images/users/postgraduate student/Olanrewaju1561826361.jpeg" class="rounded-circle" alt="Card image" width="50" height="50"/>
									</td>
									<td>
										<h6>OLANREWAJU Daniel</h6>
										<p class="small">Institution: Lautech</p>
									</td>
									<td>
										<span class="badge badge-info">Undergraduate</span>
									</td>
									<td>
										<button class="btn btn-sm btn-info">Approve</button>
										<button class="btn btn-sm btn-danger">Decline</button>
									</td>
								</tr>

								<tr>
									<td>3</td>
									<td>
										<img src="assets/images/users/postgraduate student/zxxjsdghj1560841232.jpeg" class="rounded-circle" alt="Card image" width="50" height="50" />
									</td>
									<td>
										<h6>DANOE Asdjkas</h6>
										<p class="small">Institution: Jaskdja</p>
									</td>
									<td>
										<span class="badge badge-info">Undergraduate</span>
									</td>
									<td>
										<button class="btn btn-sm btn-info">Approve</button>
										<button class="btn btn-sm btn-danger">Decline</button>
									</td>
								</tr>
								
							</table>
							<div class="text-center mb-2">
								<button class="btn btn-info btn-sm mx-auto">Read More</button>
							</div>

							<h5>My Undergraduate Students</h5>
							<div class="table mx-auto">
							<table class="table table-striped table-responsive-md shadow">
								<tr class="thead-info">
									<th>S/N</th>
									<th>Images</th>
									<th>Full Names</th>
									<th>Recent Topic</th>
									<th>Assign. Status</th>
									<th>Recent Score</th>
									<th>Assign. Count</th>
									<th>Avg. Score</th>
									<th>Operation</th>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<img src="assets/images/users/colleague/Okesola1560995564.png" class="rounded-circle" alt="Card image" width="50" height="50" />
									</td>
									<td>
										<h6>OKESOLA Emmanuel Oluwatobi</h6>
										<p class="small">Institution: Elekoro</p>
									</td>
									<td>
										<span class="badge badge-info">Assessment of Fine Art</span>
									</td>
									<td>
										<span class="text-info small"><i>Completed</i></span>
									</td>
									<td>
										<span class="text-info small"><i>99.9%</i></span>
									</td>
									<td>
										<span class="text-info small"><i>5</i></span>
									</td>
									<td>
										<span class="text-info small"><i>95.9%</i></span>
									</td>
									
									<td>
										<!-- <button class="btn btn-sm btn-info"></button> -->
										<button class="btn btn-sm btn-danger">Remove</button>
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>
										<img src="assets/images/users/postgraduate student/Olanrewaju1561826361.jpeg" class="rounded-circle" alt="Card image" width="50" height="50"/>
									</td>
									<td>
										<h6>OLANREWAJU Daniel</h6>
										<p class="small">Institution: Lautech</p>
									</td>
									<td>
										<span class="badge badge-info">Assessment of Fine Art</span>
									</td>
									<td>
										<span class="text-info small"><i>Uncompleted</i></span>
									</td>
									<td>
										<span class="text-info small"><i>99.9%</i></span>
									</td>
									<td>
										<span class="text-info small"><i>5</i></span>
									</td>
									<td>
										<span class="text-info small"><i>95.9%</i></span>
									</td>
									<td>
										<!-- <button class="btn btn-sm btn-info"></button> -->
										<button class="btn btn-sm btn-danger">Remove</button>
									</td>
								</tr>

								<tr>
									<td>3</td>
									<td>
										<img src="assets/images/users/postgraduate student/zxxjsdghj1560841232.jpeg" class="rounded-circle" alt="Card image" width="50" height="50" />
									</td>
									<td>
										<h6>DANOE Asdjkas</h6>
										<p class="small">Institution: Jaskdja</p>
									</td>
									<td>
										<span class="badge badge-info">Assessment of Fine Art</span>
									</td>
									<td>
										<span class="text-info small"><i>Uncompleted</i></span>
									</td>
									<td>
										<span class="text-info small"><i>98.9%</i></span>
									</td>
									<td>
										<span class="text-info small"><i>5</i></span>
									</td>
									<td>
										<span class="text-info small"><i>93.9%</i></span>
									</td>
									<td>
										<!-- <button class="btn btn-sm btn-info"></button> -->
										<button class="btn btn-sm btn-danger">Remove</button>
									</td>
								</tr>
								
							</table>
							<div class="text-center mb-2">
								<button class="btn btn-info btn-sm mx-auto">Read More</button>
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

	</script>
</body>
</html>