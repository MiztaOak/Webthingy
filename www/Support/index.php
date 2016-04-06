<?php

	$page =@$_GET['page'];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Support</title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="shortcut icon" href="templates/favicon.ico" type="image/x-icon" />
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="wrapper">

		<header>
			<?php include('templates/header.php'); ?>
		</header>

		<nav>
			<?php include('templates/nav.php'); ?>
		</nav>
		
		<div id="login_bar">
			<?php include('templates/login_bar.php'); ?>
		</div>
		<br>
		<br>
		<main>
			
			<?php

				if (!empty($page)) {
					require("/templates/$page.php");
				}

				else{
					require("/templates/index.php");
				}

			?>

		</main>

		<footer>
			<?php include('templates/footer.php'); ?>
		</footer>

		</div>
	</body>
</html>