<!DOCTYPE html>
<html lang="hu">
    <head>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Shrimp bar</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About us</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#foodmenu">Menu</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="reserve.php">Reservation</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <div class="containerr">
            <div class="video-container">
			<iframe width="1900" height="900" src="https://www.youtube.com/embed/QEgbYIk77vI?&loop=1&playlist=3JWTaaS7LdU;rel=0&amp;controls=0&amp;loop=1&amp;autoplay=1&amp;mute=1&amp;start=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            </div>   
       

        <section id="about" class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-cake"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">About us</h3>
                <p class="textt">Even the all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate text-center">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-meeting"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <img class="about-img" src="images/lunch-4.jpg" alt="">
              </div>
            </div>    
          </div>
          
        </div>
			</div>
		</section>

		<?php

			$con = mysqli_connect("sql109.epizy.com","epiz_26127453","bqCH30fUUDyh","epiz_26127453_menu");

		?>
    
    <section class="ftco-section bg-light">
    
			
<div class="row">
<div id="foodmenu" class="container containerrr">
	<h1>Menu card</h1>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					
					<thead>
            
						<tr>
							<th> <h3 class="textt">Appetizer</h3> </th>
              <th><p class="textt">Includes:</p></th>
              <th> <p class="textt">Price:</p> </th>
						</tr>
					</thead>
					
					<tbody>
						
						<?php 
	  
							$i=0;
						
							$get_pro = "select * from eloetel";
							
							$run_pro = mysqli_query($con,$get_pro);
	  
							while($row_pro=mysqli_fetch_array($run_pro)){
								
								$food_id = $row_pro['food_id'];
								
								$food_name = $row_pro['food_name'];
								
								$food_desc = $row_pro['food_desc'];
								
								$food_price = $row_pro['food_price'];
															
								$i++;
						
						?>
						
						<tr>
							
							<td> <?php echo $food_name; ?> </td>

							<td> <?php echo $food_desc; ?> </td>

							<td> <?php echo "$ "; echo $food_price; ?> </td>
							
						</tr>
						
						<?php } ?>
						
          </tbody>
          
					<thead>
          <br>
						<tr>
							<th> <h3 class="textt">Soups</h3> </th>
              <th><p class="textt">Includes:</p></th>
              <th> <p class="textt">Price:</p> </th>
						</tr>
					</thead>
					
					<tbody>
						
						<?php 
	  
							$i=0;
						
							$get_pro = "select * from levesek";
							
							$run_pro = mysqli_query($con,$get_pro);
	  
							while($row_pro=mysqli_fetch_array($run_pro)){
								
								$food_id = $row_pro['food_id'];
								
								$food_name = $row_pro['food_name'];
								
								$food_desc = $row_pro['food_desc'];
								
								$food_price = $row_pro['food_price'];
															
								$i++;
						
						?>
						
						<tr>
							
							<td> <?php echo $food_name; ?> </td>

							<td> <?php echo $food_desc; ?> </td>

							<td> <?php echo "$ "; echo $food_price; ?> </td>
							
						</tr>
						
						<?php } ?>
						
					</tbody><thead>
						<tr></tr>
            <tr>
							<th> <h3 class="textt">Main dishes</h3> </th>
              <th><p class="textt">Includes:</p></th>
              <th> <p class="textt">Price:</p> </th>
						</tr>
					</thead>
					
					<tbody>
						
						<?php 
	  
							$i=0;
						
							$get_pro = "select * from foetelek";
							
							$run_pro = mysqli_query($con,$get_pro);
	  
							while($row_pro=mysqli_fetch_array($run_pro)){
								
								$food_id = $row_pro['food_id'];
								
								$food_name = $row_pro['food_name'];
								
								$food_desc = $row_pro['food_desc'];
								
								$food_price = $row_pro['food_price'];
															
								$i++;
						
						?>
						
						<tr>
							
							<td> <?php echo $food_name; ?> </td>

							<td> <?php echo $food_desc; ?> </td>

							<td> <?php echo "$ "; echo $food_price; ?> </td>
							
						</tr>
						
						<?php } ?>
						
					</tbody>
          <thead>
					
          <tr>
            
							<th> <h3 class="textt">Desserts</h3> </th>
              <th><p class="textt">Includes:</p></th>
              <th> <p class="textt">Price:</p> </th>
						</tr>
					</thead>
					
					<tbody>
						
						<?php 
	  
							$i=0;
						
							$get_pro = "select * from desszertek";
							
							$run_pro = mysqli_query($con,$get_pro);
	  
							while($row_pro=mysqli_fetch_array($run_pro)){
								
								$food_id = $row_pro['food_id'];
								
								$food_name = $row_pro['food_name'];
								
								$food_desc = $row_pro['food_desc'];
								
								$food_price = $row_pro['food_price'];
															
								$i++;
						
						?>
						
						<tr>
							
							<td> <?php echo $food_name; ?> </td>

							<td> <?php echo $food_desc; ?> </td>

							<td> <?php echo "$ "; echo $food_price; ?> </td>
							
						</tr>
						
						<?php } ?>
						
					</tbody>
					
				</table>
			</div>
		</div>
	</div>
</section>
</div>    
      
<?php include ("includes/footer.php"); ?>
   
