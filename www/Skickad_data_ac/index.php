<?php

require_once('../../mysql_connect_.php');


$query = 'INSERT INTO Users(Username,Password,Mail,Vertified)
VALUES("'
. $_POST['Username'] . '","'
. $_POST['Password'] . '","'
. $_POST['Mail'] . '","'
. $_POST['Vertified'] . '");';


mysqli_query($dbc,$query);

?>