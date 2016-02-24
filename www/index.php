<?php
	require_once('../mysql_connect/mysql_connect_webgoaty.php');

	$query = 'SELECT * FROM Cities WHERE Population>5000000 ORDER BY Population DESC';

	$result = mysqli_query($dbc, $query);

	echo 'Uppgift 1 a<br>';

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			echo '<tr><td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';

	echo '<br>';

	echo 'Uppgift 1 b<br>';

	$query = 'SELECT * FROM Cities WHERE Longitude>0 ORDER BY City ASC';

	$result = mysqli_query($dbc, $query);

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			echo '<tr><td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';

	echo '<br>';

	echo 'Uppgift 1 c<br>';

	$query = 'SELECT * FROM Cities WHERE Country="br" ORDER BY City ASC';

	$result = mysqli_query($dbc, $query);

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			echo '<tr><td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';

	echo 'Uppgift 2<br>';

	$query = 'SELECT * FROM Cities ORDER BY Country ASC';

	$result = mysqli_query($dbc, $query);

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			$query2 = 'SELECT * FROM countries WHERE Countrycode= "'. $rad["Country"] .'" ';

			$result2 = mysqli_query($dbc, $query2);

			$rad2 = mysqli_fetch_array($result2);

			echo '<tr><td>' . ucfirst($rad2['Countryname']) . '</td> <td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';

	echo "<br>";

	echo 'Uppgift 3<br>';

	$query = 'SELECT * FROM Cities AS c WHERE Population = (SELECT MAX(Population) FROM Cities WHERE Country=c.Country) ORDER BY Population DESC';

	$result = mysqli_query($dbc, $query);

	echo '<table border = "solid">';

		while($rad = mysqli_fetch_array($result)){
			$query2 = 'SELECT * FROM countries WHERE Countrycode= "'. $rad["Country"] .'" ';

			$result2 = mysqli_query($dbc, $query2);

			$rad2 = mysqli_fetch_array($result2);

			echo '<tr><td>' . ucfirst($rad2['Countryname']) . '</td> <td>' . ucfirst($rad['City']) . '</td> <td>' . $rad['Population'] . '</td> </tr>';
		}

	echo '</table>';

?>