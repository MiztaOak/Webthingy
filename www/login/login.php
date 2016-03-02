<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>

	<body>
			<hi>Login</hi>

			<table>
				
				<form action="verification_login.php" method="POST">

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
			<a href=../Form.php>
   				<button>Create a account</button>
			</a>
	</body>

</html>