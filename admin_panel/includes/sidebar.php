<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>


<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-header">
		
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			
			<span class="sr-only">Toggle Navigation</span>
			
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			
		</button>
		
		<a href="index.php?dashboard" class="navbar-brand">Admin Panel</a>
		
	</div>
	
	
	
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
			<li>
				
				<a href="index.php?dashboard">
						
						<i class="fa fa-fw fa-dashboard"></i> Dashboard
											
				</a>
								
			</li>
			<li>
				
				<a href="#" data-toggle="collapse" data-target="#products">
						
						<i class="fa fa-fw fa-tag" ></i> Appetizers
						<i class="fa fa-fw fa-caret-down" ></i>
											
				</a>
					
					<ul id="products" class="collapse">
						<li>
							<a href="index.php?insert_appe"> Add Appetizer </a>
							</li>
							 <li>
							<a href="index.php?view_appe"> View Appetizers </a>
						</li>
					</ul>			
														
			</li>
			<li>
                <a href="#" data-toggle="collapse" data-target="#manufacturer">
                        
                        <i class="fa fa-fw fa-star"></i> Soups
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="manufacturer" class="collapse">
                    <li>
                        <a href="index.php?insert_soup"> Add Soup </a>
                    </li>
                    <li>
                        <a href="index.php?view_soup"> View Soups </a>
                    </li>
                </ul>
                
            </li>
			<li>
				
				<a href="#" data-toggle="collapse" data-target="#p_cat">
						
						<i class="fa fa-fw fa-edit" ></i> Desserts
						<i class="fa fa-fw fa-caret-down" ></i>
											
				</a>
					
					<ul id="p_cat" class="collapse">
							<li>
							<a href="index.php?insert_dessert"> Add Dessert </a>
							 </li>
							 <li>
							<a href="index.php?view_dessert"> View Desserts </a>
							</li>
						
					</ul>			
														
			</li>
			
			
			
			<li>
				<a href="logout.php">
					<i class="fa fa-fw fa-power-off"></i> Logout
				</a>
			</li>
			
		</ul>
	</div>
	
</nav>

<?php } ?>












