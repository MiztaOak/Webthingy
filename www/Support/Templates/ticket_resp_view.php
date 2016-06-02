<?php
	$id =@$_GET['id']; //tar emot ticket_key från förra sidan
	//Visar alla repliese som finns för den ticketen som har valts
	require_once('../../mysql_connect/mysql_connect_support.php');
	$query = 'SELECT * FROM Replies WHERE Ticket_Key =("' . $id . '") ORDER BY Creation_Date ASC;';
	$result = mysqli_query($dbc,$query);
	$Replies = mysqli_fetch_array($result);
	if (isset($Replies)) {
		$result = mysqli_query($dbc,$query);
		while ($Replies = mysqli_fetch_array($result)) {
			switch ($Replies['Ticke_Status']) {
				case '1':
					$Status = 'In progress';
					break;
				case '2':
					$Status = 'Completed';
					break;
				default:
					$Status = 'Unknown Status';
					break;
			}
			echo '
			<div class="Replie_box">
			<div class="text_area"><p>Title: ' . $Replies['Replie_Title'] . '</p></div>
			<div class="text_area"><p>Status: ' . $Status . '</p></div>
			<div class="text_area"><p>Description: ' . $Replies['Ticket_Description'] . '</p></div>
			<div class="text_area"><p>Creation date: ' . $Replies['Creation_Date'] . '</p></div>
			</div>';
		}
	}
	//ifall det inte finns någon ticket att visa så visar sidan istället följande medelande
	else{
		echo '<div class="Replie_box"> <p class="text_area">Sorry there is no replie to this ticket at the moment our walrus supporters are currently working on your ticket and will send you a respons as soon as possible</p></div>';
	}
?>
