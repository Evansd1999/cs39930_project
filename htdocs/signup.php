<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Strike | Sign Up</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/styles.css">
	</head>
	<body>
	<?php 
	$IPATH = $_SERVER["DOCUMENT_ROOT"]."/html_assets/"; 
	include($IPATH."headernav.php");
	
	?>


<section class="signup-form">
	<h2>Sign Up</h2>
	<div class="signup-form-form">
		<form action="/includes/signup.inc.php" method="post">
  		
  			<input type="text" name="name" placeholder="Full Name.."><br>
  		
  			<input type="text" name="email" placeholder="Email.."><br>
 		
  			<input type="text" name="uid" placeholder="Username.."><br>
  		
  			<input type="password" name="pwd" placeholder="Password.."><br>
  		
  			<input type="text" name="pwdrepeat" placeholder="Repeat Password.."><br>
 
  			<br><br>
  			<button type="submit" name="submit">Sign Up</button>
		</form> 
	</div>
	<?php
		if (isset($_GET["error"])){
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			else if ($_GET["error"] == "invaliduid") {
				echo "<p>Choose a proper username!</p>";
			}
			else if ($_GET["error"] == "invalidemail") {
				echo "<p>Choose a proper email!</p>";
			}
			else if ($_GET["error"] == "passwordsdontmatch") {
				echo "<p>Passwords do not match!</p>";
			}
			else if ($_GET["error"] == "stmtfailed") {
				echo "<p>Something went wrong, try again!</p>";
			}
			else if ($_GET["error"] == "usernametaken") {
				echo "<p>Username already taken!</p>";
			}
			else if ($_GET["error"] == "none") {
				echo "<p>You have signed up!</p>";
			}
		}
	?>

</section>


	
	<?php
	$IPATH = $_SERVER["DOCUMENT_ROOT"]."/html_assets/"; 
	include($IPATH."footer.php");
	
	?>
		
	<script src="/js/app.js"></script>
	</body>
</html> 