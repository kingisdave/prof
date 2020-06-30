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

				<div class="container-fluid ml-2 mx-auto" style="width: 95%; border-radius: 13px">
						<h4>Notifications</h4>
					<div class="row bg-white shadow p-2">
							
						<div class="alert alert-info">
							<small>Please Sir, kindly take note of the following notifications.</small>
						</div>
						<div class="table mx-auto">
							<table class="table table-striped table-responsive-md shadow">
								<thead class="thead-info">
									<tr>
										<th>S/N</th>
										<th>Category</th>
										<th>Title</th>
										<th>Status</th>
										<th>Date Started</th>
										<th>Completed</th>
										<th>Operation</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Personal Assignment</td>
										<td>The Technology in Arts</td>
										<td class="badge badge-success text-white">Completed</td>
										<td>1st January, 2020</td>
										<td>20 June, 2020</td>
										<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Group Assignment</td>
										<td>The Technology in Arts</td>
										<td class="badge badge-warning text-white">Uncompleted</td>
										<td>30th January, 2020</td>
										<td>-</td>
										<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Personal Assignment</td>
										<td>Techno and Arts</td>
										<td class="badge badge-warning text-white">Uncompleted</td>
										<td>30th January, 2020</td>
										<td>-</td>
										<td><span class="btn btn-outline-danger fa fa-trash"></span></td>
									</tr>
								</tbody>
							</table>
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