<html>
<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<head>
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


if (isset($_GET['del'])) {
	$stmt = $db->query("DELETE FROM customers WHERE customerNumber=".$_GET['del']);
}
if (isset($_GET['change_btn'])) {
	$stmt = $db->query("UPDATE customers SET name = '".$_GET['name_changed']."' , description = '".$_GET['description_changed']."' , createDate= '".$_GET['date_changed']."' WHERE id = ".$_GET['change_btn']);
}
if (isset($_GET['adder'])) {
	$stmt = $db->query("INSERT INTO customers(customerName, contactFirstName, contactLastName, phone, city) VALUES('".$_GET['new_name']."' , '".$_GET['new_cfn']."' , '".$_GET['new_cln']."' , '".$_GET['new_phone']."' , '".$_GET['new_city']."'); ");
}


$total = $db->query('SELECT COUNT(*) FROM customers')->fetchColumn();
$limit = 20;
$page = ceil($total / $limit);

if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page = 1; }; 
$start_from = ($page-1) * $limit; 
$stmt =$db->query("SELECT * FROM customers LIMIT $start_from, $limit"); 


if ($stmt->rowCount() > 0) {

        foreach ($stmt as $row) {
        		echo "<tr><td>".$row['customerName']."</td>";
				echo "<td>".$row['contactLastName']."</td>";
				echo "<td>".$row['contactFirstName']."</td>";
				echo "<td>".$row['phone']."</td>";
				echo "<td>".$row['city']."</td>";
				echo "<td>";
				echo "<a href='".$_SERVER['PHP_SELF']."?del=".$row['customerNumber']."'>
				<span class='glyphicon glyphicon-asterisk'></span>";
				echo "<a href='".$_SERVER['PHP_SELF']."?editProject=".$row['customerNumber']."'>
				<span class='glyphicon glyphicon-pencil'></span>";
				echo "</a></td></tr>";
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


if (isset($_GET['editProject'])) {
	$name = $db->query("SELECT customerName FROM customers WHERE id=".$_GET['editProject']);
	$cln = $db->query("SELECT contactLastName FROM project WHERE id=".$_GET['editProject']);
	$cfn = $db->query("SELECT contactFirstName FROM project WHERE id=".$_GET['editProject']);
	$phone = $db->query("SELECT phone FROM project WHERE id=".$_GET['editProject']);
	$city = $db->query("SELECT city FROM project WHERE id=".$_GET['editProject']);

	/*
	$name->execute();
	$result = $name->fetchALL(PDO::FETCH_COLUMN);
	$curr_name = $result['0'];

	$cln->execute();
	$des = $cln->fetchALL(PDO::FETCH_COLUMN);
	$curr_cln = $des['0'];

	$cfn->execute();
	$dat = $cfn->fetchALL(PDO::FETCH_COLUMN);
	$curr_cfn = $dat['0'];

	$phone->execute();
	$dor = $phone->fetchALL(PDO::FETCH_COLUMN);
	$curr_phone = $dor['0'];

	$city->execute();
	$dee = $city->fetchALL(PDO::FETCH_COLUMN);
	$curr_city = $dee['0'];*/

	$curr_name = $name;
	$curr_cln = $cln;
	$curr_cfn = $cfn;
	$curr_phone = $phone;
	$curr_city = $city;

	echo "<br><form action=".$_SERVER['PHP_SELF'].">";
	echo "<label style='font-size:22px;'>Editing '".$curr_name."'</label>";
	echo "<div class='form-inline'><label>Name:</label><input type='text' value='".$curr_name."' class='form-control' name='cln_changed'</div>";
	echo "<div class='form-inline'><label>contactFirstName:</label><input type='text' value='".$curr_cln."' class='form-control' name='cln_changed'</div>";
	echo "<div class='form-inline'><label>contactLastName:</label><input type='text' value='".$curr_cfn."' class='form-control' name='cfn_changed'></div>";
	echo "<div class='form-inline'><label>Phone:</label><input type='text' value='".$curr_phone."' class='form-control' name='phone_changed'></div>";
	echo "<div class='form-inline'><label>City:</label><input type='text' value='".$curr_city."' class='form-control' name='city_changed'></div>";
	echo "<button type='submit' class='btn btn-default' name='change_btn' value='".$_GET['editProject']."'>Change</button>";
	echo "</form>";

	
}


echo "<form><button type='submit' class='btn btn-default' name='add_btn'>Add</button></form>";
if (isset($_GET['add_btn'])) {


	echo "<br><form action=".$_SERVER['PHP_SELF'].">";
	echo "<label style='font-size:22px;'>Adding New Element</label>";
	echo "<div class='form-inline'><label>Name:</label><input type='text' class='form-control' name='new_name'</div>";
	echo "<div class='form-inline'><label>contactFirstName:</label><input type='text' class='form-control' name='new_cln'</div>";
	echo "<div class='form-inline'><label>contactLastName:</label><input type='text' class='form-control' name='new_cfn'></div>";
	echo "<div class='form-inline'><label>Phone:</label><input type='text' class='form-control' name='new_phone'></div>";
	echo "<div class='form-inline'><label>City:</label><input type='text' class='form-control' name='new_city'></div>";
	echo "<button type='submit' class='btn btn-default' name='adder'>Finish and Add</button>";
	echo "</form>";
}




echo "</table></div>";

}
catch(PDOException $e){
	print $e->getMessage()."<br>";
	die();
}
?>
</html>