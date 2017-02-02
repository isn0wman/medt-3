<html>
<head>
	<title>Grid Generator</title>

	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<style type="text/css">

body {
	margin: 10px;
}

body, head {
	font-size: 20px;
}

th, td, tr {
	padding-left: -15px;
	padding: 15px;
	font-size: 23px;
}

hr {
	width: 100%;
	border-width: 5px;
	border-color: grey;
}

</style>
<body>
<h2>Grid Generator</h2>

<form action=<?php $_SERVER['PHP_SELF']?>>
<input type="checkbox" name = "days[]" value="Sunday"> Sunday<br> 
<input type="checkbox" name = "days[]" value="Monday"> Monday<br> 
<input type="checkbox" name = "days[]" value="Tuesday"> Tuesday<br> 
<input type="checkbox" name = "days[]" value="Wednesday"> Wednesday<br> 
<input type="checkbox" name = "days[]" value="Thursday"> Thursday<br> 
<input type="checkbox" name = "days[]" value="Friday"> Friday<br> 
<input type="checkbox" name = "days[]" value="Saturday"> Saturday<br> 

Enter number of fields: 
<input type="number" name="spalten-ID" placeholder="Number"><br>

<input type="submit" name="generate_btn" value="Generate">
</form>

<br>
<hr>
<br>

<?php
if (isset($_GET['generate_btn']) && isset($_GET['days']) && $_GET['spalten-ID'] != 0)  {

		$day=$_GET['days'];
		$spalten=$_GET['spalten-ID'];

		echo "<table>";
		echo "<tr><th>Day</th>";

		for ($i=1; $i < $spalten + 1; $i++) { 
			echo "<th>Event ".$i."</th>";
		}

		for ($i=1; $i < sizeof($_GET['days']); $i++) { 

			echo "<tr><td>".$day[$i]."</td>";

			for ($j=1; $j < $spalten + 1; $j++) { 
				echo '<td>event '.$i.'.'.$j;
			}
		}

		echo "</table>";
	}
?>

</body>
</html>