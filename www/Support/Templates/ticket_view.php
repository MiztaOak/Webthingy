<?php
 	if(@!$_SESSION['loggedIn']){ 
 	header('Location: index.php?page=login');
}

require_once('../../mysql_connect/mysql_connect_support.php');

$query = 'SELECT * FROM Ticket WHERE User_ID=("' . $_SESSION['User_ID'] . '");';

$result = mysqli_query($dbc,$query);

while($tickets = mysqli_fetch_array($result)){
	echo '
			<div class="ticket_box">
				<div class="text_area"><p>Title: ' . $tickets['Ticket_Title'] . '</p></div>
				<div class="text_area"><p>Short description: ' . $tickets['Ticket_Short_Desc'] . '</p></div>
				<div class="text_area"><p>Description: ' . $tickets['Ticket_Description'] . '</p></div>
				<div class="text_area"><p>Creation date: ' . $tickets['Creation_Date'] . '</p></div>
			</div>
	';
}

?>