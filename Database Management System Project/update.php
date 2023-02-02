<?php
require_once('DBconnect.php');

if(isset($_POST['sname']) && isset($_POST['sid'])&& isset($_POST['snum'])&& isset($_POST['sadd'])&& isset($_POST['smail']))
{

	$u = $_POST['sname'];
	$s = $_POST['sid'];
	$n = $_POST['snum'];
	$a = $_POST['sadd'];
	$e = $_POST['smail'];
	
	$sql = " INSERT INTO user_information VALUES('$u','$s','$n','$a','$e')";
	
	     $result = mysqli_query($conn,$sql);
	 
	     if(mysqli_affected_rows($conn)){
			 echo "Inserted successfully";
			 
	     }  else{
			 echo "Insertion failed";

		 }
		 
		 
		
	}									  
    
?>