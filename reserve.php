<?php
	$active='reserve';

	include("includes/header.php");
	
?>

<div id="content">
  	<div class="container reserve">
  		
  		<div class="row row justify-content-center">
  		  		
			<div id="center" class="col-md-8">

				<div class="box">
					
					<div class="box-header">
						
						<center>
							
							<h2> Make reservation </h2>
							
							<p class="text-muted">
								
								If you have any questions, write to us.
								
							</p>
							
						</center>
						
						<form action="reserve.php" method="post">
							
							<div class="form-group">
								
								<label>Name</label>
								<input type="text" class="form-control" name="name" required>
								
							</div>
							<div class="form-group">
								
								<label>E-mail</label>
								<input type="text" class="form-control" name="email" required>
								
							</div>
							<div class="form-group">
								
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Table for how many?</label>
                                <select class="custom-select mr-sm-2" name="subject" id="inlineFormCustomSelect" required>
                                    <option selected disabled>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="4">5</option>
                                    <option value="4">6</option>
                                </select>
								
							</div>
							<div class="form-group">
								
								<label>Message</label>
								<textarea name="message" class="form-control"></textarea>
								
							</div>
							
							<div class="text-center">
								
								<button type="submit" name="submit" class="btn btn-primary">
								
								<i class="fa fa-user-md"></i> Submit
								
								</button>
								
							</div>
							
						</form>
						
						<!--- Lépej velünk kapcsolatba funkció --->
						
						<?php
						
						if(isset($_POST['submit'])){
							
							$sender_name = $_POST['name'];
							$sender_email = $_POST['email'];
							$sender_subject = $_POST['subject'];
							$sender_message = $_POST['message'];
							
							$receiver_email = "adminadmin@gmail.com";
							
							mail($receiver_emial,$sender_name,$sender_subject,$sender_message,$sender_email);
							
							$email = $_POST['email'];
							
							$subject = "Üdvözöljük a weblapon";
							
							$msg = "Köszönjük, hogy felkeresett minket, amint lehetőségünk van jelentkezünk";
							
							$from = "adminadmin@gmail.com";
							
							mail($email,$subject,$msg,$from);
							
							echo "<script>alert('Üzenetét elküldtük')</script>";
            
            echo "<script>window.open('index.php?view_cats','_self')</script>";
						}
						
						?>
						
					</div>
					
				</div>

			</div>
  		</div>
          </div>
  </div>
  

<?php
	
	include("includes/footer.php");
	
?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>