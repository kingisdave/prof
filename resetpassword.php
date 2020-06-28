<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" http-equiv="Content-Type" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
  <link rel="icon" href="assets/images/kal/img/logo_1434441382.png" type="image/x-icon" />

  <title>.: Login | RomKalilu.net :.</title>

	<!-- <link rel="stylesheet" type="text/css" href="./assets/bootstrap-4.3.1/dist/css/bootstrap.css"> -->

	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/otherdivs.css">
	<link rel="stylesheet" type="text/css" href="assets/css/buttons.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<style type="text/css">
	
	</style>
</head>
<?php include "includes/header.php"; ?>
<div class="container bg-white">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-8 col-12 mx-auto">
			<div class="card m-2" style="border-radius: 12px">
				<div class="card-body">
					<h3 class="text-center">Reset Password</h3>
				  <form class="form" action="#">
						<div class="alert alert-info alert-dismissible fade show">
					    <button type="button" class="close" data-dismiss="alert">&times;</button>
					    A password reset instructions has been sent to the email you provided.
					  </div>
	          <p class="m-1">Enter the E-mail you used for registration </p>
	          <div class="form-group">        
              <input type="email" class="form-control" required parsley-type="email" placeholder="Enter a valid e-mail" />
	          </div>

	          <div class="form-group">
              <button type="submit" class="btn btn-info float-right">
                  Reset
              </button>
              <!-- <a href="login.php" class="help-block"><u>Login</u></a> -->
	          </div>
	      </form>
				</div>
			</div>
		</div>
	</div>
</div>
