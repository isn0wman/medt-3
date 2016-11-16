<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP-Form-DEMO-1</title>
</head>
<body>
	<form action="http://127.0.0.1/medt/ue4/form1.php">
		<h3>Anmeldeinfos bitte eingeben</h3>
		<p>Vorname: 
		<input type = "text" name="vn"></p>
		<p>Nachname: 
		<input type = "text" name="nn"></p>
		<p>Textfarbe:
		<input type = "text" name="tf"></p>
		<p><input type= "submit" name="submitBtn" value = "Anmelden"></p>
	</form>

	<?php

	if (isset($_GET['submitBtn'])) {

		echo "<p style =\"color:".$_GET['tf']."\">Vorname: ".$_GET['vn']."<p>";
		echo "<p>Nachname: ".$_GET['nn']."</p>";
	}
	?>

</body>
</html>