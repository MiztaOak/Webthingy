<?php

require_once('../../../mysql_connect/mysql_connect_support.php');


$query = 'INSERT INTO Users(Email,Username,First_Name,Last_Name) VALUES("' . $_POST['Email'] . '","' . $_POST['Username'] . '","' . $_POST['First_Name'] . '","' . $_POST['Last_Name'] . '");';


mysqli_query($dbc,$query);

$query= 'INSERT INTO Password(Password) VALUES(PASSWORD("' .$_POST['Password'] . '"));';

mysql_query($dbc,$query);

header('Location: ../index.php?page=login');

?>