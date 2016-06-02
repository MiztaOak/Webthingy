<?php

session_start();

//Kontrolerar så att användaren har mattat inte ett lösenord och en email
if (!isset($_POST['Username']) AND !isset($_POST['Password'])) {
	header('Location: ../index.php?page=login');
}
//Inlogning funktionen
require_once('../../../MySQL_Connect/mysql_connect_support.php');

$query = 'SELECT Email,Username,User_ID FROM Users WHERE Email="' . $_POST['Username'] . '";';

$result = mysqli_query($dbc,$query);

$username = mysqli_fetch_array($result);

$query = 'SELECT User_ID, Password FROM Password WHERE Password=PASSWORD("' . $_POST['Password'] . '");';

$result = mysqli_query($dbc,$query);

while ($password = mysqli_fetch_array($result)) {
	if ($username['User_ID'] === $password['User_ID'] && $username['Email'] === $_POST['Username']) {
		$_SESSION['loggedIn'] = TRUE;
		$_SESSION['timeout'] = time();
		$_SESSION['name'] = $username['Username'];
		$_SESSION['User_ID'] = $username['User_ID'];
	}
}
//Ifall du inte få statusen LogggedIn så skickas du tillbacka till inlognings sidan annars skickas du till start sidan
if (!$_SESSION['loggedIn']) {
	$_SESSION['loggedIn'] = FALSE;
	$_SESSION['support_msg'] = "You have entered the wrong username and/or password";
	header('Location: ../index.php?page=login');	
}

else{
	header('Location: ../index.php');
}

?>