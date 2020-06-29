<?php

include("../includes/db.php");

 if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 
	
	<title> Add Soup </title>
	
   	<link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    
</head>
<body>
	
	<div class="row">
		
		<div class="col-lg-12">
			
			<ol class="breadcrumb">
				
				<li class="active">
					
					<i class="fa fa-dashboard"></i> Dashboard / Add Soup
					
				</li>
				
			</ol>
			
		</div>
		
	</div>
	
	<div class="row">
		
		<div class="col-lg-12">
			
			<div class="panel panel-default">
				
				<div class="panel-heading">
					
					<h3 class="panel-title">
						
						<i class="fa fa-monex fa-fw"></i> Add Soup
						
					</h3>
					
				</div>
				
				<div class="panel-body">
					
					<form method="post" class="form-horizontal" enctype="multipart/form-data">
						
						<div class="form-group">
							
							<label class="col-md-3 control-label"> Soup name </label>
							
							<div class="col-md-6">
								
								<input name="food_name" type="text" class="form-control" required>
								
							</div>
							
						</div>
						
						<div class="form-group">
							
							<label class="col-md-3 control-label"> Soup includes </label>
							
							<div class="col-md-6">
								
								<input name="food_desc" type="text" class="form-control" required>
								
							</div>
							
						</div>
						<div class="form-group">
							
							<label class="col-md-3 control-label"> Soup price </label>
							
							<div class="col-md-6">
								
								<input name="food_price" type="text" class="form-control" required></input>
								
							</div>
							
						</div>
						<div class="form-group">
							
							<label class="col-md-3 control-label"></label>
							
							<div class="col-md-6">
								
								<input name="submit" value="Submit" type="submit" class="btn btn-primary form-control">
								
							</div>
							
						</div>
						
					</form>
					
				</div>
				
				
			</div>
			
		</div>
		
	</div>
	
	
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>



<?php 

if(isset($_POST['submit'])){
    
    $product_title = $_POST['food_name'];
    $product_keywords = $_POST['food_desc'];
    $product_desc = $_POST['food_price'];
            
    $insert_product = "insert into levesek (food_name,food_desc,food_price) values ('$product_title','$product_keywords','$product_desc')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Soup added')</script>";
        echo "<script>window.open('index.php?view_soup','_self')</script>";
        
    }
    
}

?>


<?php } ?>