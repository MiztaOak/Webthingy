<?php
//Navbar som visar olika saker baserat på ifall admin mode är på eller inte
		if(!isset($_SESSION['a_mode'])){
?>
	<p> 
		<a href="index.php"><div class="knapp">Home</div></a>

		<a href="index.php?page=ticket_c"><div class="knapp">Create a Ticket</div></a>

		<a href="index.php?page=ticket_view"><div class="knapp">View your tickets</div></a>

		<a href="admin/admin_mode.php"><div class="knapp">Admin mode</div></a>
	</p>
<?php
	}
	else{
?>
	<p> 
		<a href="index.php"><div class="knapp">Home</div></a>

		<a href="index.php?page=ticket_view"><div class="knapp">View your pending tickets</div></a>

		<a href="admin/admin_mode.php"><div class="knapp">User mode</div></a>
	</p>
<?php
}
?>