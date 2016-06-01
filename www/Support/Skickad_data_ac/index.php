<?php
session_start();

require_once('../../../mysql_connect/mysql_connect_support.php');

$query = 'SELECT * FROM Users WHERE Email=("' . $_POST['Email'] . '");';

$result = mysqli_query($dbc,$query);

$row = mysqli_fetch_array($result);

if(isset($row)){
	$_SESSION['support_msg'] = "The email you have chosen is in use";
	header('Location: ../index.php?page=Form');
}

else{
	$query = 'INSERT INTO Users(Email,Username,First_Name,Last_Name) VALUES("' . $_POST['Email'] . '","' . $_POST['Username'] . '","' . $_POST['First_Name'] . '","' . $_POST['Last_Name'] . '");';

	mysqli_query($dbc,$query);

	$query = 'SELECT User_ID FROM Users WHERE Email=("' . $_POST['Email'] . '");';

	$result = mysqli_query($dbc,$query);

	$email = mysqli_fetch_array($result);

	$query= 'INSERT INTO password(User_ID,Password) VALUES("' . $email['User_ID'] . '",PASSWORD("' . $_POST['Password'] . '"));';

	mysqli_query($dbc,$query);
	
	$_SESSION['support_msg'] = "Your account has been created, please login to access the account";
	
	header('Location: ../index.php?page=login');
}

?>