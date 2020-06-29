<?php 

 
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>


<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"> Dashboard </h1>
		
		<ol class="breadcrumb">
			<li class="active">
			
				<i class="fa fa-dashboard"></i> Dashboard
				
			</li>
		</ol>
		
	</div>
</div>


<?php } ?>























