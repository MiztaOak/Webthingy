<?php

$id =@$_GET['id'];

require_once('../../mysql_connect/mysql_connect_support.php');

$query = 'SELECT * FROM Ticket WHERE Ticket_Key=("' . $id . '");';

$result = mysqli_query($dbc,$query);

$tickets = mysqli_fetch_array($result);

$_SESSION['Ticket'] = $tickets['Ticket_Key']; 

$query = 'SELECT Product_Name FROM Products WHERE Product_ID=("' . $tickets['Product_ID'] . '");';
$result2 = mysqli_query($dbc,$query);
$Product = mysqli_fetch_array($result2);
switch ($tickets['Ticket_Type']) {
	case '1':
		$type = 'Login error';
		break;
	case '2':
		$type = 'Bug';
		break;
	case '3':
		$type = 'Payment error';
		break;
	case '4':
		$type = 'Character error';
		break;
	case '5':
		$type = 'Gameplay error';
		break;
	case '6':
		$type = 'Preformence issues';
		break;
	default:
		$type = 'No ticket type resived';
		break;
}
echo '<div class="ticket_box">';
$query = 'SELECT Username FROM Users WHERE User_ID=("' . $tickets['User_ID'] . '");';
$result3 = mysqli_query($dbc,$query);
$name = mysqli_fetch_array($result3);
echo '<div class="text_area"><p>Username: ' . $name['Username'] . ' </p></div>
		<div class="text_area"><p>Title: ' . $tickets['Ticket_Title'] . '</p></div>
		<div class="text_area"><p>Product: ' . $Product['Product_Name'] . '</p></div>
		<div class="text_area"><p>Ticket type: ' . $type . '</p></div>
		<div class="text_area"><p>Short description: ' . $tickets['Ticket_Short_Desc'] . '</p></div>
		<div class="text_area"><p>Description: ' . $tickets['Ticket_Description'] . '</p></div>
		<div class="text_area"><p>Creation date: ' . $tickets['Creation_Date'] . '</p></div>
		</div>';

$query = 'SELECT * FROM Products WHERE Product_ID=("' . $tickets['Product_ID'] . '");';

$result = mysqli_query($dbc,$query);

$Product = mysqli_fetch_array($result);

echo '<div class="product">
	<div class="text_area"><p>Product: ' . $Product['Product_Name'] . ' </p></div>
	<div class="text_area"><p>Price: ' . $Product['Product_Price'] . ' $</p></div>
	<div class="text_area"><p>Product warranty: ' . $Product['Product_warranty'] . '</p></div>
	<div class="text_area"><p>Product description: ' . $Product['Product_Desc'] . '</p></div>
	</div>';
?>

<div class="ticket">
	<table class="table_ticket">

		<form action="Admin/Resp.php" method="POST" id="ticket">

			<tr>
				<td>
					<p>Respons Title</p><br>
					<input type="text" name="Resp_Title" required>
				</td>
			</tr>
			<tr>
				<td>
					<p>Status</p>
					<select name="status" required>
						<option selected>Type</option>
						<option value="1">In progress</option>
						<option value="2">Completed</option>
					</select>
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
