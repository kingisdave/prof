<style type="text/css">
.myh2{ text-shadow: 2px 2px 4px #000000;}
.divtextheight{ height: 50%;}

#museum_list a {
    text-decoration: none;
    color: black;
}

.card h4{ font-size: 1.5em }

#museum_list div.card{ 
    height: 96%;
    font-size: 80%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 }

#museum_list div.card:hover{
    border: 1px solid #000;
    background: #EBEBEB !important;
    opacity: 0.5;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

</style>

 <?php include 'includes/header.php'; ?>  <!-- included header -->
<div class="container-fluid mt-1 p-2" style="width: 98.6%;">   <!-- Container body for the museum list -->
    <h2 class="myh2">Museum</h2>   <!-- Title of the page -->
    <p class="small"><em>This page consist of the museum pages with their information</em></p>
	<div class="row" id="museum_list">   <!-- Row div for the museum list with the id of museum_list -->
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">  <!-- Column div for the museum list -->
            <a href="museum.php">  <!-- anchor tag/link for a museum page -->
                <div class="card m-1">  <!-- card for the museum list -->
                    <img class="card-img-top" src="assets/images/blog/1.jpg" alt="Card image" />   <!--image for the museum list -->
                    <div class="card-body">   
                        <h4 class="card-title text-center myh4">First Museum</h4>   <!-- Title of the museum page -->
                        <div class="divtextheight"> 
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>     <!-- Summary of the museum page -->
                        </div>
                        <div class="clearfix mt-2">
                            <div class="float-left small">
                                <p>20:00 WAT, Monday 17 Oct, 2020</p>      <!-- Time for new exhibit on the museum page -->
                            </div>
                            <div class="float-right">
                                <a href="/museum.php" class="text-primary"><i class="fa fa-arrow-right shadow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">  <!-- Column div for the museum list -->
            <a href="museum.php">  <!-- anchor tag/link for an museum page -->
                <div class="card m-1">  <!-- card for the museum list -->
                    <img class="card-img-top" src="assets/images/blog/2.jpg" alt="Card image" />   <!--image for the museum list -->
                    <div class="card-body">   
                        <h4 class="card-title text-center">Second Museum</h4>   <!-- Title of the museum page -->
                        <div class="divtextheight">
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua</p>   <!-- Summary of the museum page -->
                        </div>
                        <div class="clearfix mt-2">
                            <div class="float-left small">
                                <p>00:00 WAT, Saturday 10 Oct, 2020</p>  <!-- Time for new exhibit on the museum page -->
                            </div>
                            <div class="float-right">
                                <a href="/museum.php" class="text-primary"><i class="fa fa-arrow-right shadow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12">  <!-- Column div for the museum list -->
            <a href="museum.php">  <!-- anchor tag/link for an museum page -->
                <div class="card m-1">  <!-- card for the museum list -->
                    <img class="card-img-top" src="assets/images/blog/3.jpg" alt="Card image" />   <!--image for the museum list -->
                    <div class="card-body">   
                        <h4 class="card-title text-center">Third Museum</h4>   <!-- Title of the museum page -->
                        <div class="divtextheight">
                            <p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Some example text...</p>   <!-- Summary of the museum page -->
                        </div>
                        <div class="clearfix mt-2">
                            <div class="float-left small">
                                <p>10:00 WAT, Monday 12 Oct, 2020</p>   <!-- Time for new exhibit on the museum page -->
                            </div>
                            <div class="float-right">
                                <a href="/museum.php" class="text-primary"><i class="fa fa-arrow-right shadow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>