<?php

if(@$_SESSION['timeout']+ 60*30 < time()){
	session_destroy();
	session_unset();
}
else{
	$_SESSION['timeout'] = time();
}
require_once('../../mysql_connect/mysql_connect_support.php');
//Räknar hur många tickets som inte har statusen "completed"
$query = 'SELECT * FROM Ticket;';
$result = mysqli_query($dbc,$query);
$i = 0;
$count = 0;
while($ids = mysqli_fetch_array($result)){
	$query2 = 'SELECT * FROM Replies WHERE Ticket_Key=("' . $ids['Ticket_Key'] . '");';
	$result2 = mysqli_query($dbc,$query2);
	while ($ticket_key = mysqli_fetch_array($result2)) {
		if ($ticket_key['Ticke_Status'] == 2) {
			$i++;
		}
	}
	if ($i == 0) {
		$count++;
	}
	$i = 0;
}
?>
<!-- Skriver ut resultatet av $count -->
<div class="ticket_amount">
	<p>Amount of unanswered tickets: <?php echo $count; ?> </p>
</div>

<img src="login/Walrus.jpg">
<br>
