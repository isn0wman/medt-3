<!DOCTYPE html>
<html>
<head>
	<title>Beispiel_1</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</head>
<body>

<style type="text/css">
	.container{
		margin-top: 50px;
		text-align: center;
		background-color: #e8e8e8;
		width: 700px;
		height: 300px;
		border-radius: 20px;
		box-shadow: -10px 10px 10px lightgrey;
	}
	.container1{
		padding-left: 20px;
		margin: auto;
		clear:both;
		text-align: left;
		background-color: #e8e8e8;
		width: 700px;
		height: 500px;
		border-radius: 20px;
		box-shadow: -10px 10px 10px lightgrey;
	}

li{margin-left: 50px;}

</style>

<div class="container">

<h1><strong>Beispiel 1</strong></h1><br>

<form action=<?php $_SERVER['PHP_SELF']?>>
<p>Ihre Eingabe
<input type = "text" name="input_str">
</p>
<input type = "submit" name="explode_btn" value="explode">
<input type = "submit" name="delete_btn" value="delete">

</form>
<br><br>
</div>

<div class="container1">

<h3>
<br>
Ihre Eingabe dargestellt als Liste:
<br>
</h3>

<?php



if (isset($_GET['delete_btn'])) {
	$exploder = explode(" ", $_GET['input_str']);
	unset($exploder);
}

if (isset($_GET['explode_btn'])) {
	$exploder = explode(" ", $_GET['input_str']);

for ($i=0; $i < sizeof($exploder); $i++) { 
	echo "<li>".$exploder[$i]."</li>";
}
}
?>

</div>

</body>
</html>