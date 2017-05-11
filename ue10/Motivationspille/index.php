<html>
<meta charset="UTF-8">
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	
<h1>Herzlich Willkommen</h1><br>
<h3>Anmelden:</h3>

<?php

echo "<br><form action=".$_SERVER['PHP_SELF'].">";
	echo "<div class='form-inline'><label>Benutzername:</label><input type='text' class='form-control' name='user' required></div>";
	echo "<div class='form-inline'><label>Passwort:</label><input type='text' class='form-control' name='password' required></div>";
echo "<button type='submit' class='btn btn-default' name='confirm_btn'>Login</button>";
//echo "<input type='checkbox' name='sli'>Stay logged in</form>";
if (isset($_GET['confirm_btn'])) {
	include('main.php');
}




?>

</head>
</html>