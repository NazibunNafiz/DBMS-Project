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
		            <div class="col-md-2" style="font-size: 30px;color:#F2674A;">"User Name"</div>
			        <div class="col-md-10" style="text-align: right">
			         
					  <a href="index.php"> Home </a>
					     <a href="update_info.php" style="margin-left: 20px;"> Go Back </a>
					     <a href="upload_cv.php" style="margin-left: 20px;"> Upload CV </a>
				    </div>
			   </div>	
			</section>
			
			<section id="section1">
                <div class="title"> Update Information </div>
				<br/>
                <form action="update.php" class="form_design" method="post">
                    User name:<input type="text" name="sname"> <br/>
					<br/>
                    SSN:<input type="text" name="sid"> <br/> 
					<br/>
                    Phone Number:<input type="text" name="snum"> <br/>
					<br/>
					Address:<input type="text" name="sadd"> <br/>
					<br/>
					E-mail::<input type="text" name="smail"> <br/>
					<br/>
					<br/>
					<input type="submit" value="Add to database"> 
                </form>
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