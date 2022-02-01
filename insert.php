<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
		$servername = "localhost";
		$user = "root";
		$passwd = "";
		$db_name = "homework1";

		$conn = mysqli_connect($servername, $user, $passwd, $db_name);

		// Check connection
		if ($conn === false) {
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		// Taking all 5 values from the form data(input)
		$username = $_REQUEST['username'];

		// Performing insert query execution
		// here our table name is college
		$query = "INSERT INTO Persons VALUES ('$username')";

		if (mysqli_query($conn, $query)) {
			echo "<h3>data stored in a database successfully.</h3>";

			echo nl2br("\n$username\n");
		} else {
			echo "ERROR: Hush! Sorry $query. "
				. mysqli_error($conn);
		}

		// Close connection
		mysqli_close($conn);
		?>

		<form>
			<input type="button" value="Go back!" onclick="history.back()">
		</form>
		
	</center>
</body>

</html>