<?php

session_start();

if(!@$_SESSION['loggedIn']){
	header('Location: login.php');
}

if(@$_SESSION['timeout']+ 60*30 < time()){
	session_destroy();
	session_unset();
	$meddelande = 'hej då';
}
else{
	$meddelande = 'hej';
	$_SESSION['timeout'] = time();
}


echo $meddelande;

?>