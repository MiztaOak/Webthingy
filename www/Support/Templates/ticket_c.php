<?php
	session_start(); 

 	if(@!$_SESSION['loggedIn']){ 
 	header('Location: index.php?page=login');
 }

?>

<table>
				
				<form action="" method="POST" id="ticket">

					<tr>
						<td>
							<p>Ticket Title</p><br>
							<input type="text" name="Ticket_Title" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Short Description</p><br>
							<textarea name="Short_Desc" form="ticket" required></textarea>
						</td>
					</tr>

					<tr>
						<td>
							<p>Description</p>
							<textarea name="Description" form="ticket" required></textarea>
						</td>
					</tr>

					<tr>
						<td>
							<input type="submit" name="Submit" value="Submit">
						</td>
					</tr>

				</form>


			</table>