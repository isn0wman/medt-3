<DOCTYPE html>
<html>
<head>
	<meta charset"UTF-8">
	<title>MEDT-UE4</title>
</head>
<body>
	<h1>yooo</h1>
	<h1>Einfache text-Ausgabe mit echo</h1>
	<?php echo "<h2>Hello, World 1!</h2>"; ?>
	<h2>
	<?php echo "Hello, World 2!"; ?>
	</h2>
	<h2>
	<?php echo 'Hello, "World" 3!'; //As it is?>
	</h2>


	<h1>textausgabe mit variablen</h1>

	<?php
	$myString1="Hello,";
	$myString2="World!";
	$myInt=12;
	$myBool=true;

	echo "<p style = \"color:blue;\">String1: " .$myString1."</p>";  //		style = \"color:red;\"
	echo "<p>String1 und 2: " .$myString1.$myString2."</p>";

	echo '<p style ="color:tomato;">String1:  .$myString1.</p>';
	echo '<p style ="color:tomato;">String1: '.$myString1.'</p>';

	for ($i=1; $i <= 5; $i++) { 
		echo '<p style ="color:green;">Dies ist aus einer Schleife.</p>';
		if ($i == 3) {
			echo "<p>i gleich 3.</p>";
		}
	}


	?>

	<h1>Kontrollstruktur</h1>
	<?php
	if ($myBool==true)
		echo "<p>Yes it is</p>";
	else
		echo "<p>No it is not</p>";
	?>

	<h2>Schleifen mit Arrays</h2>
	<?php
	
	$myArray1 = array("Home", "Products", "About");
	$myArray2 = array("Home", "Products", "About");

	echo "<ul>";

	foreach ($myArray1 as $item) {
		echo "<li>".$item."</li>";
	}

	echo "<ul></ul>";

	for ($i=0; $i < sizeof($myArray2); $i++) { 
		echo "<li>".$myArray2[$i]."</li>";
	}

	echo "</ul>";

	?>

	<h2>Assoziative Arrays</h2>

	<?php
	$myGETArray = ["vn" => "Markus", "nn" => "Brunner", "submitBtn" => "Anmelden"];

	if (isset($myGETArray['submitBtn']))
		echo "<p>".$myGETArray['submitBtn']."</p>"

	?>


	<h1>Superglobals - $_SERVER</h1>
	<?php
	//var_dump($_SERVER)
	echo "Client-Sprache: ".$_SERVER['HTTP_ACCEPT_LANGUAGE'];

	?>


</body>
</html>