<html lang="en">
	   <head>
		  <meta charset="utf-8"/>
		  <meta name="viewport" content="width=device-width, initial-scaled=1.0"/>
		  <meta name="description" content="About the site"/>
		  <meta name="author" content="Author name"/>
		  <title> THE TITLE </title>
		  
		  <!-- core CSS -->
		  <link href="css/bootstrap.min.css" rel="stylesheet"/>
		  <link href="css/font-awesome.min.css" rel="stylesheet"/>
		  <link href="css/animate.min.css" rel="stylesheet"/>
		  <link href="css/main.css" rel="stylesheet"/>
	  
	   </head>  
	   
	   <body>
	       <!-- following section is used for creating the menubar in the webpage -->
		   <section id="header">
		       <div class="row">
		            <div class="col-md-2" style="font-size: 30px;color:#0070FF;">______</div>
			        <div class="col-md-10" style="text-align: right">
			         
					  
					     <a href="information.php" style="margin-left: 20px;"> Update Your Information </a>
					     <a href="upload_cv.php" style="margin-left: 20px;"> Upload CV </a>
				    </div>
			   </div>	
			</section>
			
			<section id="section1">
                <div class="title" style="font-size: 30px;color:#0070FF;"> USERS </div>
				<div style="margin-left:10%;margin-right:10%;margin-top:50px;margin-bottom:50px;text-align:center;background:#0070FF;">
					<div class="row" style="padding:10px;">
						<div class="col-md-3"> User name </div>
						<div class="col-md-3"> SSN </div>
						<div class="col-md-3"> Phone Number </div>
						<div class="col-md-3"> Address </div>
						<div class="col-md-3"> E-mail </div>
						
					</div>
					
					<?php
					require_once("DBconnect.php");
					$sql="select * from user_information";
					$result= mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)!=0){
						while($row=mysqli_fetch_array($result)){
					?>	
					<div class="row" style="padding:10px;">
						<div class="col-md-3"> <?php echo $row[0];?> </div>
						<div class="col-md-3"> <?php echo $row[1];?> </div>
						<div class="col-md-3"> <?php echo $row[2];?></div>
						<div class="col-md-3"> <?php echo $row[3];?></div>
						<div class="col-md-3"> <?php echo $row[4];?></div>						
					</div>
					
						<?php
						
						}	
					}
					
					?>
					
				</div>

                
            </section>				
	   
	   
	   
	   
	   
		   <!----- Footer ----->
		   <section id="footer">
		   
		   </section>
		   
		   <script src="js/jquery.js"></script>
		   <script src="js/bootstrap.min.js"></script>
		   <script src="js/jquery.isotope.min.js"></script>
		   <script src="js/wow.min.js"></script>
	  
	    </body>
	</html>