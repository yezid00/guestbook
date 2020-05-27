<?php 
require_once('insert.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>Guest</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="container right">
		<a href="admin.php" class="btn-admin">Admin</a>
	</div>
		
		
	<form action="" method="post">

		<div class="container">
			<h1>Guestbook</h1>
			<p>Please fill to get an appointment</p>
			<hr>

			<label for="name"><b>Name</b></label>
			<input type="text" name="name">

			<label for ="email"><b>Email</b></label>
			<input type="email" name="email" >

			<label for ="subject"><b>Subject</b></label>
			<input type="text" name="subject" >

			<label for="message"><b>Message</b></label>
			<textarea name="message" cols="50" rows="5"></textarea>

			<!-- <label for ="message"><b>Password</b></label>
			<input type="Password" name="psw">

			<label for="psw-repeat">Repeat Password</label>
			<input type="password" name="psw-repeat" > -->
			<hr>
			<button type="submit" class="registerbtn" name = "submit">Submit</button>
			<!-- <button type="submit" class="resetbtn" name = "reset">Reset</button> -->
			
		</div>
	</form>
</body>
</html>