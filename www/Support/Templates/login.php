<?php
	/*session_start(); 

 	if(@$_SESSION['loggedIn']){ 
 	header('Location: templates/index.php');
 }
*/
?>



<table>
	
	<form action="login/verification_login.php" method="POST">

		<tr>
			<td>
				<p>Email</p><br>
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