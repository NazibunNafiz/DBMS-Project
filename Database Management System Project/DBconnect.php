<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online platform";


//creating connection

$conn = new mysqli($servername, $username, $password);
//check connection
if($conn->connect_error){
	die("Connection failed: " . $connect_error);
    }
else{
    mysqli_select_db($conn, $dbname);
    //echo "Connection successful";
}

?>