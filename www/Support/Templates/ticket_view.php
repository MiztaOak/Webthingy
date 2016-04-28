<?php
 	if(@!$_SESSION['loggedIn']){ 
 	header('Location: index.php?page=login');
}

require_once('../../mysql_connect/mysql_connect_support.php');

if(!isset($_SESSION['a_mode'])){
	$query = 'SELECT * FROM Ticket WHERE User_ID=("' . $_SESSION['User_ID'] . '");';
}
else{
	$query = 'SELECT * FROM Ticket ORDER BY User_ID ASC;';
}

$result = mysqli_query($dbc,$query);

while($tickets = mysqli_fetch_array($result)){
	$query = 'SELECT Product_Name FROM Products WHERE Product_ID=("' . $tickets['Product_ID'] . '");';
	$result2 = mysqli_query($dbc,$query);
	$Product = mysqli_fetch_array($result2);
	switch ($tickets['Ticket_Type']) {
		case '1':
			$type = 'Login error';
			break;
		case '2':
			$type = 'Bug';
			break;
		case '3':
			$type = 'Payment error';
			break;
		case '4':
			$type = 'Character error';
			break;
		case '5':
			$type = 'Gameplay error';
			break;
		case '6':
			$type = 'Preformence issues';
			break;
		default:
			$type = 'No ticket type resived';
			break;
	}
	echo '
			<div class="ticket_box">';
	if(isset($_SESSION['a_mode'])){
		$query = 'SELECT Username FROM Users WHERE User_ID=("' . $tickets['User_ID'] . '");';
		$result3 = mysqli_query($dbc,$query);
		$name = mysqli_fetch_array($result3);
		echo '<div class="text_area"><p>Username: ' . $name['Username'] . ' </p></div>';

	}
	echo'		<div class="text_area"><p>Title: ' . $tickets['Ticket_Title'] . '</p></div>
				<div class="text_area"><p>Product: ' . $Product['Product_Name'] . '</p></div>
				<div class="text_area"><p>Ticket type: ' . $type . '</p></div>
				<div class="text_area"><p>Short description: ' . $tickets['Ticket_Short_Desc'] . '</p></div>
				<div class="text_area"><p>Description: ' . $tickets['Ticket_Description'] . '</p></div>
				<div class="text_area"><p>Creation date: ' . $tickets['Creation_Date'] . '</p></div>';
	if(isset($_SESSION['a_mode'])){
		echo '	<a href=index.php?id=' . $tickets['Ticket_Key'] . '>
				<button>Respond</button>
				</a>';
	}
	echo'	</div>';

}

?>