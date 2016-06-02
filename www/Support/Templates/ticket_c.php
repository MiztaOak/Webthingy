<?php

 	if(@!$_SESSION['loggedIn']){ 
 	header('Location: index.php?page=login');
 }

?>
<!-- Formulär som skapar en ticket -->
<div class="ticket">
	<table class="table_ticket">
		<form action="Skickad_data_ac/ticket.php" method="POST" id="ticket">

			<tr>
				<td>
					<br>
					<input type="text" name="Ticket_Title" placeholder="Ticket Title" required>
				</td>
			</tr>
			<tr>
				<td>
					<br>
					<select name="ticket_type" required>
						<option selected>Ticket Type</option>
						<option value="1">Login errror</option>
						<option value="2">Bug</option>
						<option value="3">Payment error</option>
						<option value="4">Character error</option>
						<option value="5">Gameplay error</option>
						<option value="6">Preformence issues</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<br>
					<select name="Product" required>
						<option selected>Product</option>
						<option value="1">White Alpine</option>
						<option value="2">Clan Battles 2</option>
						<option value="3">Galaxy of Peacecraft</option>
						<option value="4">Loosers of the Blizzard</option>
						<option value="5">Onlywatch</option>
						<option value="6">Light Spirits 2</option>
						<option value="7">Brainrock</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<br>
					<textarea class="short_desc" name="Short_Desc" form="ticket" placeholder="Short Description" required></textarea>
				</td>
			</tr>

			<tr>
				<td>
					<br>
					<textarea  class="desc" name="Description" form="ticket" placeholder="Description" required></textarea>
				</td>
			</tr>

			<tr>
				<td>
					<br>
					<input type="submit" name="Submit" value="Submit">
				</td>
			</tr>
		</form>
	</table>
</div>