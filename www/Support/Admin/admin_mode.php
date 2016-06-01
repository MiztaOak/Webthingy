<?php
session_start();
if(isset($_SESSION['a_mode'])){
	session_destroy();
	session_unset();
	session_start();
}
else{
	session_destroy();
	session_unset();
	session_start();
	$_SESSION['a_mode'] = TRUE;
}

header('Location: ../index.php?page=login');
?>