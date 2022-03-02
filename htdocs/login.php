<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Strike | Login</title>
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
		<form action="includes/login.inc.php" method="post">

	<form>
  <label for="username">Please Enter your Username or Email: </label><br>
  <input type="text" name="uid" placeholder="Username/Email.."><br>
  <label for="password">Please Enter your Password:</label><br>
  <input type="password" name="pwd" placeholder="Password.."><br><br>
  <button type="submit" name="submit">Log In</button>
</form> 
</div>
<?php
		if (isset($_GET["error"])){
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Fill in all fields!</p>";
			}
			else if ($_GET["error"] == "wronglogin") {
				echo "<p>Incorrect Login Information!</p>";
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