<?php
	if (!@$_SESSION['loggedIn']) {
		echo '<p> <a href="index.php?page=Form">Register</a> <a href="index.php?page=login">Login</a> </p> ';
	}
	else{
		echo '<p> Hello! ' . $_SESSION['name'] .'<a href="login/logout.php"><button>Logout</button> </a> </p>';
	}
?>