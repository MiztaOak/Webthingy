<?php

session_start();
if(!@$_SESSION['loggedIn']){
	header('Location: ../main_page/index.php?page=login');
}
if(@$_SESSION['timeout']+ 60*30 < time()){
	session_destroy();
	session_unset();
	$meddelande = 'hej då';
}else{
	$meddelande = 'hej';
	$_SESSION['timeout'] = time();
}


echo $meddelande;

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<br>
	<img src="../login/Walrus.jpg">
	<br>
	<a href="../login/logout.php">
	<button>Logout</button>
	</a>
</body>
</html>