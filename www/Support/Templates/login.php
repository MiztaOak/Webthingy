<?php
	/*session_start(); 

 	if(@$_SESSION['loggedIn']){ 
 	header('Location: templates/index.php');
 }
*/
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>

	<body>

			<table>
				
				<form action="login/verification_login.php" method="POST">

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
							<input type="submit" name="Submit" value="Login">
						</td>
					</tr>

				</form>

			</table>
			<br>
			<a href=index.php?page=Form>
   				<button>Create a account</button>
			</a>
	</body>

</html>