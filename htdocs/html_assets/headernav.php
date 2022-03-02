<?php
	session_start();
?>

<head>

<link rel="stylesheet" type="text/css" href="/styles.css">
</head>

<div class="nav-container">
		<div id="navbar">

		
			<h1 id="navbar-logo"><span style="color: red">ST</span>RIKE</h1>
			<div class="menu-toggle" id="mobile-menu">
			<span class="bar"></span>
			<span class="bar"></span>
			<span class="bar"></span>
		</div>
			<ul class="nav-menu">
				<li><a href="/index.php/" class="nav-links">Home</a></li>
				<li><a href="/leagues.php/" class="nav-links">Leagues</a></li>
				<li><a href="/aboutus.php/" class="nav-links">About Us</a></li>
				<li><a href="/contactus.php/" class="nav-links">Contact Us</a></li>

				<?php
				if (isset($_SESSION["useruid"])){
					echo "<li><a href='/profile.php/' class='nav-links nav-links-btn'>Profile</a></li>";
					echo "<li><a href='/logout.php/' class='nav-links nav-links-btn'>Log Out</a></li>";
				}
				else{
					echo "<li><a href='/signup.php/' class='nav-links nav-links-btn'>SignUp</a></li>";
					echo "<li><a href='/login.php/' class='nav-links nav-links-btn'>Login</a></li>";
				}

				?>


			</ul>
		</div>
	</div>