<?php

require_once('../../../mysql_connect/mysql_connect_webgoaty.php');


$query = 'INSERT INTO Users(Username,Password) VALUES("' . $_POST['Username'] . '",PASSWORD("' . $_POST['Password'] . '"));';


mysqli_query($dbc,$query);

header('Location: ../main_page/index.php?page=login');

?>