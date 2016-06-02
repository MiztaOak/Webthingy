<?php
	session_start();
	$page =@$_GET['page'];
	//skriver ut ett popup medelande ifall det finns ett att skriva ut
	if(isset($_SESSION['support_msg'])){
		$message = $_SESSION['support_msg'];
		echo "<SCRIPT>
		alert('$message');
		</SCRIPT>";
		unset($_SESSION['support_msg']);
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Support</title>
		<?php
		//Laddar olika css filer baserat på ifall admin mode är på eller inte
		if (isset($_SESSION['a_mode']))	 {
			?>
			<link rel="stylesheet" type="text/css" href="Admin/a_main.css">
			<?php
		}
		else{
			?>
			<link rel="stylesheet" type="text/css" href="main.css">
			<?php
		}
		?>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> <!-- Hämtar jquery -->
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
			<!-- Main delen av sidan som är det ända som ändras på sidan, använder sig av $page variabeln för att läsa in rätt fil -->
			<main>		
				<?php
					//ifall man har admin mode på så tar den filer från mappen Admin annars så tar den filer från templates
					if(isset($_SESSION['a_mode'])){
						if (!empty($page)) {
							require("/Admin/$page.php");
						}

						else{
							require("/Admin/a_index.php");
						}
					}
					else{
						if (!empty($page)) {
							require("/templates/$page.php");
						}

						else{
							require("/templates/index.php");
						}
					}
				?>
			</main>
			<footer>
				<?php include('templates/footer.php'); ?>
			</footer>
		</div>
	</body>
</html>