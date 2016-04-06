<?php

session_start();

if (!isset($_POST['Username']) AND !isset($_POST['Password'])) {
	header('Location: ../index.php?page=login');
}

require_once('../../../MySQL_Connect/mysql_connect_webgoaty.php');

$query = 'SELECT Username, Password FROM users WHERE Password=PASSWORD("' . $_POST['Password'] . '") AND Username="' . $_POST['Username'] . '";';

$result = mysqli_query($dbc,$query);

$username = mysqli_fetch_array($result);


if($username['Username'] === $_POST['Username']){
	$_SESSION['loggedIn'] = TRUE;
	$_SESSION['timeout'] = time();
	$_SESSION['name'] = $_POST['Username'];
	header('Location: ../index.php');
}

else{
	$_SESSION['loggedIn'] = FALSE;
	header('Location: ../index.php?page=login');
}

?>