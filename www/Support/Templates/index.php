<?php
//Loggar ut användaren ifall den har varit inne på sidan för länge
if(@$_SESSION['timeout']+ 60*30 < time()){
	session_destroy();
	session_unset();
}else{
	$_SESSION['timeout'] = time();
}

?>
<!-- Script för slideshowen -->
<script>$(function(){
    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3500);
	});
</script>



<br>
<!-- Slideshow -->
<div class="fadein">
  <img class="slide_img" src="Images/black.jpg">
  <img class="slide_img" src="Images/guildwars.jpg">
  <img class="slide_img" src="Images/wow.jpg">
  <img class="slide_img" src="Images/hots.jpg">
  <img class="slide_img" src="Images/over.jpg">
  <img class="slide_img" src="Images/hearth.jpg">
  <img class="slide_img" src="Images/spirit.jpg">
</div>