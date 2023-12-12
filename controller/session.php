<?php 

session_start();

if(isset($_SESSION["user_id"])){
	
			include ("../config/connections.php");
		$user_id = $_SESSION["user_id"];
		
		$get_record = mysqli_query ($connections,"SELECT * FROM user where user_id ='$user_id' ");
		$row = mysqli_fetch_assoc($get_record);
		 $db_fullname = $row["fullname"];
         $db_email = $row["email"];
		
	
}else{
	
	echo "<script>window.location.href='../';</script>";
	
}

?>