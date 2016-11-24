<!DOCTYPE html>
<html>
<head>
	<title>i</title>
</head>
<body>
<form action=<?php $_SERVER['PHP_SELF']?>>
<p><label><input type="radio" name ="alter" value="cat1" checked>11-20</label></p>
<p><label><input type="radio" name ="alter" value="cat2">21-30</label></p>
<p><label><input type="radio" name ="alter" value="cat3">30-200</label></p><br>
<input type="checkbox" name="agb" value="agb">AGBs gelesen<br>
<input type="submit" name="submitBtn" value="submit"><br> 

</form>
<?php

if (isset($_GET['submitBtn'])) {
	echo "Alter: ".$_GET['alter']."<br>";
	if (isset($_GET['agb'])) {                  //ohne value bei checkbox: ($_GET['submitBtn'] == 'on') { ... }
		echo "AGBs gelesen";					//bei mehreren muss ein Array verwendet werden und ein Array ausgegeben werden mit var_dump oder einer for bzw. foreach Schleife
	}											//<input type="checkbox" name="agb[]" value="1">1
	}											//<input type="checkbox" name="agb[]" value="2">2
	else
	{
		echo "AGBs nicht gelesen";
	}
}


?>


</body>
</html>