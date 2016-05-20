<?php
	/*session_start(); 

 	if(@$_SESSION['loggedIn']){ 
 	header('Location: templates/index.php');
 }
*/
?>


<div class="login">
	<h3>Admin Login</h3>
	<table>
		<form action="admin/verification_login.php" method="POST">

			<tr>
				<td>
					<br>
					<input type="text" name="Username" placeholder="E-mail" required>
				</td>
			</tr>

			<tr>
				<td>
					<br>
					<input type="password" name="Password" placeholder="Password" required>
				</td>
			</tr>

			<tr>
				<td>
					<br>
					<input type="submit" class="login_button" name="Submit" value="Login">
				</td>
			</tr>

		</form>

	</table>
	<br>
	<a href=index.php?page=Form>
			<button class="create_button">Create a account</button>
	</a>
</div>