<?php

session_start();

require_once('../../../mysql_connect/mysql_connect_support.php');

$query = 'INSERT INTO Replies(Admin_ID,	Ticket_Key,Replie_Title,Ticket_Status,Ticket_Description) VALUES("' . $_SESSION['User_ID'] . '","' . $_SESSION['Ticket'] . '","' . $_POST['Resp_Title'] . '","' . $_POST['Status'] . '","' . $_POST['Description'] . '");';

mysqli_query($dbc,$query);

unset($_SESSION['support_msg']);
$_SESSION['support_msg'] = "Your replie has been resived";

header('Location: ../index.php');

?>