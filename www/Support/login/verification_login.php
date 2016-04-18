<?php

session_start();

if (!isset($_POST['Username']) AND !isset($_POST['Password'])) {
	header('Location: ../index.php?page=login');
}

require_once('../../../MySQL_Connect/mysql_connect_support.php');

$query = 'SELECT u.Username,u.User_ID AS ID1,p.User_ID AS ID2, p.Password FROM Users As u JOIN Password AS p ON p.Password=PASSWORD("' . $_POST['Password'] . '") AND u.Username="' . $_POST['Username'] . '";';

$result = mysqli_query($dbc,$query);

$username = mysqli_fetch_array($result);

if ($username['ID1'] !== $username['ID2']) {
	$_SESSION['loggedIn'] = FALSE;
	header('Location: ../index.php?page=login');
}

else if($username['Username'] === $_POST['Username']){
	$_SESSION['loggedIn'] = TRUE;
	$_SESSION['timeout'] = time();
	$_SESSION['name'] = $_POST['Username'];
	$_SESSION['User_ID'] = $username['ID1'];
	header('Location: ../index.php');
}

else{
	$_SESSION['loggedIn'] = FALSE;
	header('Location: ../index.php?page=login');
}

?>