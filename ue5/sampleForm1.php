<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<meta charset="UTF-8">

	<title>MEDT-UE5</title>
</head>
<body>

	<style>

	.Login{
		margin:50px;
		padding: 10px;
		border-style: solid;
		border-color: red;
		font-size: 16px;
	}

	.Eingabe{
		margin:50px;
		padding: 10px;
		border-style: solid;
		border-color: green;
		color: blue;
		font-size: 16px;
	}

	</style>

	<div class = "Login">
	<h1>yooo!</h1>
	<form action="http://127.0.0.1/medt/ue5/sampleForm1.php">
		<h2>Login</h2>
		<p>Vorname: 
		<input type = "text" name="vn"></p>
		<p>Nachname: 
		<input type = "text" name="nn"></p>
		<p>E-Mail-Adresse:
		<input type = "text" name="em"></p>
		<p><input type= "submit" name="submitBtn" value = "Login"></p>
	</form>

	</div>

	

	<?php

	if (isset($_GET['submitBtn'])) {
		echo "<div class ='Eingabe'>";
		echo "<h2>Ihre Eingabe</h2>";
		echo "<p><strong>Vorname: ".$_GET['vn']."</strong></p>";
		echo "<p><strong>Nachname: ".$_GET['nn']."</strong></p>";
		echo "<p><strong>E-Mail-Adresse: ".$_GET['em']."</strong></p>";
		echo "</div>";
	}



	?>

	

</body>
</html>