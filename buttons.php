<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" http-equiv="Content-Type" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

 <link rel="shortcut icon" href="assets/images/favicon.ico"> -->
 <!--  <link rel="icon" href="assets/images/kal/img/logo_1434441382.png" type="image/x-icon" />

  <title>.: Welcome to Rom Kalilu Official Website :.</title>

	<link rel="stylesheet" type="text/css" href="./assets/bootstrap-4.3.1/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./assets/bootstrap-4.3.1/fontawesome-free-5.11.2-web/css/all.css">
 -->
	<!-- <link rel="stylesheet" type="text/css" href="./assets/bootstrap-4.3.1/dist/css/w3.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="./assets/bootstrap-4.3.1/dist/css/w3pro.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="./assets/bootstrap-4.3.1/fontawesome/css/css/fontawesome-all.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/otherdivs.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
	<script type="text/javascript" src="./assets/bootstrap-4.3.1/dist/jquery3.3.1.js"></script>
	<script type="text/javascript" src="./assets/bootstrap-4.3.1/dist/popper.js"></script>
	<script type="text/javascript" src="./assets/bootstrap-4.3.1/dist/js/bootstrap.js"></script> -->

<?php include 'includes/header.php'; ?>

<style type="text/css">
	.mycircle button{
		padding: 0;
		height: 80px;
		width: 80px;
		font-size: 8px;
		border: 8px solid #ccc;
	}
	.ddd{
		width: 165px;
		height: 165px;
		position: absolute;
		top: 35%;
		margin-left: 85px;
		border: 20px solid #ccc;
	}

	#btnOne{
		background: linear-gradient(#FFE5FF, #FFE5FF);
	}
	#btnTwo{
		background: linear-gradient(#E5FFE5, #E5FFE5);
/**/
	}
	#btnThree{
		background: linear-gradient(#FFFFE5, #FFFFE5);
	}
	#btnFour{
		background: linear-gradient(#E5F2FF, #E5F2FF);	
	}
	#btnFive{
		background: linear-gradient(#ffffff, #ffffff);	
	}
	#btnSix{
		background: linear-gradient(#ECECF9, #ECECF9);	
	}
	#btnSeven{
		background: linear-gradient(#FFF5E5, #FFF5E5);
	}
	#btnEight{
		background: linear-gradient(#F9F2EC, #F9F2EC);	
	}
	#btnNine{
		background: linear-gradient(#F0F0F5, #F0F0F5);	
	}
	#btnTen{
		background: linear-gradient(#E5FAFF, #E5FAFF);	
	}
	#btnEleven{
		background: linear-gradient(#E5F2FF, #E5F2FF);	
	}
</style>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-12">
			<div class="flex-row mycircle">
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="hide('Ceramics <br/> &amp; Glass')" onmouseover="reveal('Ceramics <br/> &amp; Glass')" id="btnOne">Ceramics <br/> &amp; Glass</button></a>
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Communication Design')" id="btnTwo">Communication Design</button></a>		
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Drawing')" id="btnThree">Drawing</button></a>
			</div>
				
			<div class="d-flex flex-column mycircle">
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Electronics <br/> &amp; Digital Arts')" id="btnFour">Electronics <br/> &amp; Digital Arts</button></a>
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Form <br/> &amp; Material Technology')" id="btnFive">Form <br/> &amp; Material Technology</button></a>
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('All')" id="btnSix">All</button></a>

				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Furniture &amp; <br/> Material Decoration')" id="btnSeven">Furniture &amp; <br/> Material Decoration</button></a>

				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Painting')" id="btnEight">Painting</button></a>
			</div>
			<div class="flex-row mycircle">
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Sculpture')" id="btnNine">Sculpture</button></a>
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Textile Design <br/> &amp; <br/> Cutting')" id="btnTen">Textile Design <br/> &amp; <br/> Cutting</button></a>
				<a href="#"><button class="btn rounded-circle mybtns" onmouseout="outer()" onmouseover="reveal('Others')" id="btnEleven">Others</button></a>
			</div>			
			<div class="ddd rounded-circle" id="dddone"></div>
			<!-- <div class="ddd rounded-circle" id="dddtwo"></div>
			<div class="ddd rounded-circle" id="dddthree"></div>
			<div class="ddd rounded-circle" id="dddfour"></div>
			<div class="ddd rounded-circle" id="dddfive"></div>
			<div class="ddd rounded-circle" id="dddsix"></div>
			<div class="ddd rounded-circle" id="dddseven"></div>
			<div class="ddd rounded-circle" id="dddeight"></div>
			<div class="ddd rounded-circle" id="dddnine"></div>
			<div class="ddd rounded-circle" id="dddten"></div>
			<div class="ddd rounded-circle" id="dddeleven"></div> -->
		</div>
	</div>
</div>
<script type="text/javascript">
	function show(""){

	}
	function hide(){

	}
	// var x = document.getElementsByClassName("mybtns");
 //  function reveal(v){
 //  	ddd.innerHTML = x;
  	// ddd.innerHTML = document.getElementsByClassName("mybtns").background;
  // }
  // function outer(){
  // 	ddd.innerHTML = "";
  // }
  // $(this).html('Requested').css({"background-color":"#4CAF50", "font-color":"fff"});
  	// $(this).siblings('button').html('Add Friend').css({"background": "#0069D9", "font-color":"#fff"});
    			// $(this).each(function(){
    		// $(this).parents('form').hide();

      	// $("myrow").children('button.addFriend').html('Add Friend').css({"background": "#0069D9", 
  $(document).ready(function(){
  	// $(".ddd").hide()
		$(".hamburger").click(function(){
			$(".wrapper").toggleClass("collap");
		});

		// $(".mybtns").mouseover(function(){
			// $(this).toggleClass("ddd");
			// $(this).toggleClass("ddd").css({"width": "165px", "height": "165px", "position": "absolute",
				// "top": "35%","margin-left": "85px","border": "20px solid #ccc"});
		// });
		
	});
  
</script>
