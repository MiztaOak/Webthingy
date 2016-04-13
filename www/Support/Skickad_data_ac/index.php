<?php

require_once('../../../mysql_connect/mysql_connect_support.php');

$query = 'INSERT INTO Users(Email,Username,First_Name,Last_Name) VALUES("' . $_POST['Email'] . '","' . $_POST['Username'] . '","' . $_POST['First_Name'] . '","' . $_POST['Last_Name'] . '");';

mysqli_query($dbc,$query);

$query = 'SELECT User_ID FROM Users WHERE Email=("' . $_POST['Email'] . '");';

$result = mysqli_query($dbc,$query);

$email = mysqli_fetch_array($result);

$query= 'INSERT INTO password(User_ID,Password) VALUES("' . $email['User_ID'] . '",PASSWORD("' .$_POST['Password'] . '"));';

mysqli_query($dbc,$query);
header('Location: ../index.php?page=login');

?>