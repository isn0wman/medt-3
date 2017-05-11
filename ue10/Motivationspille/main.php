<?php
if($_GET['user'] == 'root'){
	if($_GET['password'] == 'root'){
		
		header('Location: project-list.php');
		//echo "<script type='text/javascript'>
		//window.location = 'project-list.php';
		//</script>";
	}
	else
		echo"<p>Passwort falsch</p>";
}
else
	echo"<p>Benutzer falsch</p>";
?>