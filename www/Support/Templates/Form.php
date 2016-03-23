<!DOCTYPE html>
<html>
	<head>
		<title>Acount thingy</title>
	</head>

	<body>
			<hi>CREATE ACCOUNT</hi>

			<table>
				
				<form action="../Skickad_data_ac/index.php" method="POST">

					<tr>
						<td>
							<p>Username</p><br>
							<input type="text" name="Username" required>
						</td>
					</tr>

					<tr>
						<td>
							<p>Password</p><br>
							<input type="password" name="Password" required>
						</td>
					</tr>


					<tr>
						<td>
							<input type="submit" name="Submit" value="Skicka">
						</td>
					</tr>

				</form>

			</table>
			<br>
			<a href=../main_page/index.php?page=login>
   				<button>Login</button>
			</a>
	</body>

</html>

<?php
	/*			<tr>
						<td>
						<p>Mail</p><br>
							<input type="text" name="Mail" required>
					</td>
				</tr>

					<tr>
				<td>
					<p>I have read and aproved the terms and agrements for creating a account</p>
						<input type="checkbox" name="Vertified" value="1" required>
						<br>
						</td>
					</tr> */

	
?>