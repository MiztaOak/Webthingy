<?php

session_start();

require_once('../../../mysql_connect/mysql_connect_support.php');
//säter in ticketen i databasen
$query = 'INSERT INTO Ticket(User_ID,Ticket_Title,Ticket_Type,Product_ID,Ticket_Short_Desc,Ticket_Description) VALUES("' . $_SESSION['User_ID'] . '","' . $_POST['Ticket_Title'] . '","' . $_POST['ticket_type'] . '","' . $_POST['Product'] . '","' . $_POST['Short_Desc'] . '","' . $_POST['Description'] . '");';

mysqli_query($dbc,$query);

unset($_SESSION['support_msg']);
$_SESSION['support_msg'] = "Your ticket has been resived";

header('Location: ../index.php');

?>