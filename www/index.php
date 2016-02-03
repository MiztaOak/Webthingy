<?php
	require_once('../mysql_connect_.php');

	$query = 'SELECT * FROM Cities WHERE Population>5000000 ORDER BY Population DESC';

	$result = mysqli_query($dbc, $query);

	echo 'Uppgift 1<br>';

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			echo '<tr><td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';

	echo '<br>';

	echo 'Uppgift 2<br>';

	$query = 'SELECT * FROM Cities WHERE Longitude>=0 ORDER BY City ASC';

	$result = mysqli_query($dbc, $query);

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			echo '<tr><td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';

	echo '<br>';

	echo 'Uppgift 3<br>';

	$query = 'SELECT * FROM Cities WHERE Country="br" ORDER BY City ASC';

	$result = mysqli_query($dbc, $query);

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			echo '<tr><td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';
?>