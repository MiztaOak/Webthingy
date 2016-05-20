<?php

/*session_start();*/

if(!@$_SESSION['loggedIn']){
	/*header('Location: index.php?page=login');*/
}
if(@$_SESSION['timeout']+ 60*30 < time()){
	session_destroy();
	session_unset();
	/*$meddelande = 'hej då';*/
}else{
	/*$meddelande = 'hej';*/
	$_SESSION['timeout'] = time();
}


//echo $meddelande;

?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<script>$(function(){
	    $('.fadein img:gt(0)').hide();
	    setInterval(function(){
	      $('.fadein :first-child').fadeOut()
	         .next('img').fadeIn()
	         .end().appendTo('.fadein');}, 
	      3000);
		});
	</script>
	<title>Login</title>
</head
<body>
	<br>
	<div class="fadein">
	  <img class="slide_img" src="Images/black.jpg">
	  <img class="slide_img" src="Images/guildwars.jpg">
	  <img class="slide_img" src="Images/wow.jpg">
	  <img class="slide_img" src="Images/hots.jpg">
	  <img class="slide_img" src="Images/over.jpg">
	  <img class="slide_img" src="Images/hearth.jpg">
	  <img class="slide_img" src="Images/spirit.jpg">
	</div>

	<br>
</body>
</html>