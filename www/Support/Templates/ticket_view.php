<?php
 	if(@!$_SESSION['loggedIn']){ 
 	header('Location: index.php?page=login');
}

require_once('../../mysql_connect/mysql_connect_support.php');

$query = 'SELECT * FROM Ticket;';

$result = mysqli_query($dbc,$query);

while($tickets = mysqli_fetch_array($result)){
	echo '
			<div class="ticket_box">
				<p>Title: ' . $tickets['Ticket_Title'] . '</p>
				<p>Short description: ' . $tickets['Ticket_Short_Desc'] . '</p>
				<p>Description: ' . $tickets['Ticket_Description'] . '</p>
				<p>Creation date: ' . $tickets['Creation_Date'] . '</p>
			</div>
	';
}

?>