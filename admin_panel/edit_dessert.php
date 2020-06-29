<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_dessert'])){
        
        $edit_id = $_GET['edit_dessert'];
        
        $get_p = "select * from desszertek where food_id='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['food_id'];
        
        $p_title = $row_edit['food_name'];
                        
        $p_keywords = $row_edit['food_desc'];
        
        $p_desc = $row_edit['food_price'];
        
    }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Edit Dessert </title>
</head>
<body>
    
<div class="row">
    
    <div class="col-lg-12">
        
        <ol class="breadcrumb">
            
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Dessert
                
            </li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Edit Dessert
                   
               </h3>
               
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Dessert name </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="food_name" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                          
                      </div>
                       
                   </div>
                                      
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Dessert includes </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="food_desc" type="text" class="form-control" required value="<?php echo $p_keywords; ?>">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Dessert price </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="food_price" type="text" class="form-control" required value="<?php echo $p_desc; ?>">
                              
                              
                              
                          </input>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6">
                          
                          <input name="update" value="Update" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                       
                   </div>
                   
               </form>
               
           </div>
            
        </div>
        
    </div>
    
</div>
   
    <script src="js/tinymce/tinymce.min.js"></script>
    
</body>
</html>



<?php 

if(isset($_POST['update'])){
    
    $product_title = $_POST['food_name'];
    $product_keywords = $_POST['food_desc'];
    $product_desc = $_POST['food_price'];    

    
    $update_product = "update desszertek set food_name='$product_title' ,food_desc='$product_keywords',food_price='$product_desc' where food_id='$p_id'";
    
    $run_product = mysqli_query($con,$update_product);
    
    if($run_product){
        
       echo "<script>alert('Product updated')</script>"; 
        
       echo "<script>window.open('index.php?view_dessert','_self')</script>"; 
        
    }
    
}

?>

<?php } ?>