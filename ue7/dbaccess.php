<html>
<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<head>
<h1>Table with database</h1><br/>
</head>

<?php
$host = 'localhost';
$dbname = 'medt3';
$user = 'root';
$pwd = '';

try{
$db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd);

echo "<div class='table-responsive'>";
echo "<table class='table table-striped'>";
echo "<tr><td>Name</td><td>Beschreibung</td><td>Datum</td></tr>";

foreach ($db->query('SELECT * FROM project') as $row) {
	
	echo "<tr><td>".$row['name']."</td>";
	echo "<td>".$row['description']."</td>";
	echo "<td>".$row['createDate']."</td><tr>";
}
echo "</table></div>";
}
catch(PDOException $e){
	print $e->getMessage()."<br>";
	die();
}
?>
</html>