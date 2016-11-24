<!DOCTYPE html>
<html>
<head>
	<title>Auswahllisten</title>
</head>
<body>

<h2>Auswahl</h2>



<form action="http://localhost/medt/ue6/auswahllisten.php">

<h3>mit Scrollbars</h3>
<select size="3" name="auto1">
<option>Ja</option>
<option>Nein</option>
<option>Vielleicht</option>
<option>Keine Ahnung</option>
</select>

<br>
<br>
<input type = "submit" name="btn1" value="Press me!">

<h3>ohne Scrollbars</h3>
<select size="5" name="auto2">
<option>Ja</option>
<option>Nein</option>
<option>Vielleicht</option>
<option>Keine Ahnung</option>
</select>

<br>
<br>
<input type = "submit" name="btn2" value="Press me!">

<h3>mit Dropdown</h3>
<select size="1" name="auto3">
<option>Ja</option>
<option>Nein</option>
<option>Vielleicht</option>
<option>Keine Ahnung</option>
</select>

<br>
<br>
<input type = "submit" name="btn3" value="Press me!">

<h3>Multiple</h3>
<select name="auto[]" size="6"  multiple>
<option>Ja</option>
<option>Nein</option>
<option>Vielleicht</option>
<option>Keine Ahnung</option>
</select>

<br>
<br>
<input type = "submit" name="btn4" value="Press me!">
</form>
<?php
if (isset($_GET['btn1'])) {
	echo "Folgende Auswahl wurde getroffen: ".$_GET['auto1'];
}

if (isset($_GET['btn2'])) {
	echo "Folgende Auswahl wurde getroffen: ".$_GET['auto2'];
}

if (isset($_GET['btn3'])) {
	echo "Folgende Auswahl wurde getroffen: ".$_GET['auto3'];
}

if (isset($_GET['btn4'])) {
	var_dump($_GET['auto']);
}

?>


</body>
</html>