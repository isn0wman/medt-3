<html>
<meta charset="UTF-8">
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	<script src="http://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	


<h1>Table with database</h1><br/>
</head>

<style>
label{
	padding: 10px;
}
button{
	margin-left: 10px;
}
</style>


<?php



$host = 'localhost';
$dbname = 'classicmodels';
$user = 'root';
$pwd = '';

try{
$db = new PDO ("mysql:host=$host;dbname=$dbname", $user, $pwd);



echo "<div class='table-responsive'>";
echo "<table class='table table-hover'>";
echo "<tr><td>Name</td><td>Vorname</td><td>Nachname</td><td>Telefon</td><td>Stadt</td><td>ID</td></tr>";

if(isset($_POST['deleteProId'])) {
		echo $_POST['deleteProId'];
		exit;
	}

$total = $db->query('SELECT COUNT(*) FROM customers')->fetchColumn();
$limit = 20;
$page = ceil($total / $limit);

if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page = 1; }; 
$start_from = ($page-1) * $limit; 
$stmt =$db->query("SELECT * FROM customers LIMIT $start_from, $limit"); 
echo "<p id ='info-box'></p>";

if ($stmt->rowCount() > 0) {

        foreach ($stmt as $row) {
        		echo "<tr id=".$row['customerNumber']."><td>".$row['customerName']."</td>";
				echo "<td>".$row['contactLastName']."</td>";
				echo "<td>".$row['contactFirstName']."</td>";
				echo "<td>".$row['phone']."</td>";
				echo "<td>".$row['city']."</td>";
				echo "<td>";
				echo "<span id= ".$row['customerNumber']." class='glyphicon glyphicon-asterisk'></span>";
				echo "<span class='glyphicon glyphicon-pencil'></span>";
				echo "</td></tr>";
        }

    } 
    else {
        echo '<p>No results.</p>';
    }

$pages = ceil($total / $limit);
echo "<div class='pagination'><a href='".$_SERVER['PHP_SELF']."?page=1'>".'|<'."</a> ";
for ($i=1; $i<=$pages; $i++) { 
            echo "<a href='".$_SERVER['PHP_SELF']."?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='".$_SERVER['PHP_SELF']."?page=".$pages."'>>|</a></div>";


/*
$res = $db->query('SELECT * FROM project');
foreach ($res as $row) {
	
	echo "<tr><td>".$row['name']."</td>";
	echo "<td>".$row['description']."</td>";
	echo "<td>".$row['createDate']."</td>";
	echo "<td>";
	echo "<a href='".$_SERVER['PHP_SELF']."?del=".$row['id']."'>
	<span class='glyphicon glyphicon-asterisk'></span>";
	echo "<a href='".$_SERVER['PHP_SELF']."?editProject=".$row['id']."'>
	<span class='glyphicon glyphicon-pencil'></span>";
	echo "</a></td></tr>";
} */




echo "</table></div>";

}
catch(PDOException $e){
	print $e->getMessage()."<br>";
	die();
}
?>
<script src="ad.js"></script>

</html>