<?php
//require('main.php');
if($_SESSION['user'] == 'root')
{
	if ($_SESSION['password'] == 'root') {
		echo "root";
	}
}
?>