<?php 

    session_start();
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
    <title>Duna Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper">
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <?php
                
                if(isset($_GET['dashboard'])){ 
					
                        include("dashboard.php"); 
						}
				if(isset($_GET['insert_appe'])){
					
						include("insert_appe.php");
						}
				if(isset($_GET['view_appe'])){
					
						include("view_appe.php");
						}
				if(isset($_GET['edit_appe'])){
					
						include("edit_appe.php");
						}
				if(isset($_GET['delete_appe'])){
					
						include("delete_appe.php");
						}
				if(isset($_GET['view_soup'])){
					
						include("view_soup.php");
						}
				if(isset($_GET['delete_soup'])){
					
						include("delete_soup.php");
						}
				if(isset($_GET['edit_soup'])){
					
						include("edit_soup.php");
						}
				if(isset($_GET['insert_soup'])){
					
						include("insert_soup.php");
						}
				if(isset($_GET['insert_main'])){
                        
                        include("insert_main.php");
                        }
				if(isset($_GET['view_main'])){
                        
                        include("view_main.php");
                        }   
				if(isset($_GET['edit_main'])){
                        
                        include("edit_main.php");
                        }
				if(isset($_GET['delete_main'])){
                        
                        include("delete_main.php");
                        } 
				if(isset($_GET['insert_dessert'])){
                        
                        include("insert_dessert.php");
                        } 
				if(isset($_GET['view_dessert'])){
                        
                        include("view_dessert.php");
                      	}  
				if(isset($_GET['delete_dessert'])){
                        
                        include("delete_dessert.php");
                       	} 
				if(isset($_GET['edit_dessert'])){
                        
                        include("edit_dessert.php");
                        }
		
		
                ?>
                
            </div>
        </div>
    </div>

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>


<?php } ?>