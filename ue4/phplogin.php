<!DOCTYPE html>
<html>
<head>
	<title>PHP-Login</title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
	<form style= "margin: 50px"; action="http://127.0.0.1/medt/ue4/phplogin.php" method="post">
		<h3>Anmeldeinfos bitte eingeben</h3>
		<p>Vorname: 
		<input type = "text" name= "$_username"></p>
		<p>Nachname: 
		<input type = "text" name="$_passwort"></p>
		<p><input type= "submit" name= "submitBtn" value = "Anmelden"></p>
	</form>


	<?php
	if (isset($_GET['submitBtn'])) {	
		echo "<p>Username: ".$_POST['$_username']."</p>";
	}
	?>

</body>
</html>