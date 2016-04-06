<?php 
	DEFINE('DB_USER','root');
	DEFINE('DB_HOST','localhost');
	DEFINE('DB_PASSWORD','j0h4ng04t');
	DEFINE('DB_DATABASE','chat');
	$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	
	if(isset($_GET['msg'])){
		$query = "INSERT INTO chat (msg) VALUES ('".$_GET['msg']."')";
	$result= mysqli_query($dbc,$query);
	
	}
	
	$query = "SELECT * FROM (SELECT * FROM chat ORDER BY id DESC LIMIT 31) AS result ORDER BY id ASC ";
	$result= mysqli_query($dbc,$query);
	echo '<table><br><br>';
	
	while($row=mysqli_fetch_array($result)){
		echo $row['msg']."<br>";
	}
?>
</table>