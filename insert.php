<?php
require_once('db.php');

if(isset($_POST['submit'])){
	//$id = $_POST['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	if(empty($id) || empty($name) || empty($email) || empty($subject) || empty($message)){
		echo "All fields are required";
	}
	
	$sql = "INSERT INTO `entries` (`name`, `email`, `subject`,`message`) VALUES ('".$name."', '".$email."','".$subject."','".$message."')";

      	 $successful = $conn->query($sql);

      	 if ($successful) {
      	 	echo "registration successful!";
      	 }else{
      	 	echo "registration failed!";
      	 }


	header("location:index.php");

}