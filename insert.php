<?php
require_once('db.php');

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	
	if(empty($name) || empty($email) || empty($subject) || empty($message)){
		echo "All fields are required";
	}
	else{
		$sql = "INSERT INTO `entries` (`name`, `email`, `subject`,`message`,`time_sent`) VALUES ('".$name."', '".$email."','".$subject."','".$message."','".$datetime."')";

      	 $successful = $conn->query($sql);

      	 if ($successful) {
      	 	$message = "Message sent";
      	 	header("location:admin.php?message".$message);
      	 	

      	 }else{
      	 	$message = "Message not sent";
      	 	header("location:index.php?message".$message);
      	 }

      	 
	
	}

	

}