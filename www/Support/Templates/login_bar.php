<?php
	//Loginbar som visar olika saker baserat på om man är inloggad eller inte och ifall admin mode är på eller inte
	if(!isset($_SESSION['a_mode']))
		if (!@$_SESSION['loggedIn']) {
			echo '<p> <a href="index.php?page=Form">Register</a> <a href="index.php?page=login">Login</a> </p> ';
		}
		else{
			echo '<p> Hello! ' . $_SESSION['name'] .'<a href="login/logout.php"><button>Logout</button> </a> </p>';
		}
	else{
		if (!@$_SESSION['loggedIn']) {
			echo '<p> <a href="index.php?page=login">Login</a> </p> ';
		}
		else{
			echo '<p> Hello! ' . $_SESSION['name'] .'<a href="login/logout.php"><button>Logout</button> </a> </p>';
		}
	}
?>