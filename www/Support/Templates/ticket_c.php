<?php

 	if(@!$_SESSION['loggedIn']){ 
 	header('Location: index.php?page=login');
 }

?>

<div class="ticket">
	<table class="table_ticket">
		<form action="Skickad_data_ac/ticket.php" method="POST" id="ticket">

			<tr>
				<td>
					<p>Ticket Title</p><br>
					<input type="text" name="Ticket_Title" required>
				</td>
			</tr>
			<tr>
				<td>
					<p>Ticket type</p>
					<select name="ticket_type" required>
						<option selected>Type</option>
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
					<p>Product</p>
					<select name="Product" required>
						<option selected>Games</option>
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
					<p>Short Description</p><br>
					<textarea class="short_desc" name="Short_Desc" form="ticket" required></textarea>
				</td>
			</tr>

			<tr>
				<td>
					<p>Description</p>
					<textarea  class="desc" name="Description" form="ticket" required></textarea>
				</td>
			</tr>

			<tr>
				<td>
					<input type="submit" name="Submit" value="Submit">
				</td>
			</tr>
		</form>
	</table>
</div>