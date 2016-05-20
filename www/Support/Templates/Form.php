		<body>
			<div class="register">
				<h3>CREATE ACCOUNT</h3>

				<table>
					
					<form action="Skickad_data_ac/index.php" method="POST">

						<tr>
							<td>
								<br>
								<input type="text" name="Username" placeholder="Username" required>
							</td>
						</tr>
						<tr>
							<td>
								<br>
								<input type="text" name="Email" placeholder="Email" required>
							</td>
						</tr>
						<tr>
							<td>
								<br>
								<input type="text" name="First_Name" placeholder="First name" required>
							</td>
						</tr>
						<tr>
							<td>
								<br>
								<input type="text" name="Last_Name" placeholder="Last name" required>
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
								<input type="submit" class="send" name="Submit" value="Send">
							</td>
						</tr>

					</form>

				</table>
				<br>
				<a href=index.php?page=login>
	   				<button class="button_login">Login</button>
				</a>
			</div>
	</body>