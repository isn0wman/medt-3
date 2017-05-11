<?php
	$host='localhost';
	$dbname='medt3';
	$user='htluser';
	$pwd='htluser';


	try{
		$db=new PDO ( "mysql:host=$host;dbname=$dbname", $user, $pwd);
	}catch(PDOException $e){
		exit("<h2 class=\"bg-danger\">System nicht verfügbar!<br><br>$e</h2>");
	}

	if (isset($_POST['deleteProId'])) {
		echo "Hallo";
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style type="text/css">
	span.glyphicon {
		margin-right: 10px;
		color: #000;
	}
	a {
		text-decoration: none;

	}
	.btn {
		background-color: #fff;
		border: 1px solid #ddd;
	}
	.btn:hover {
		background-color: #f2f2f2;
	}
</style>


</head>
<body>
<div class="container" style="float:left;">
<h1>Projektübersicht</h1>
<p id="info-box"></p>
<table class="table table-hover table-bordered" style="margin-bottom: 10px;">
	<thead>
	  <tr style="background-color: #000; color: #fff;">
        <th>Name</th>
        <th>Beschreibung</th>
        <th>Datum</th>
        <th>Operationen</th>
	  </tr>
	</thead>
	<tbody>
	<?php
	//PDOStatement
	$res = $db->query("SELECT * FROM project");
	//Array
	$temp = $res->fetchAll(PDO::FETCH_ASSOC);
		foreach ($temp as $row) { ?>
			<tr>
				<td><?php echo htmlspecialchars($row['name']);?></td>
				<td><?php echo htmlspecialchars($row['description']);?></td>
				<td><?php echo htmlspecialchars($row['createDate']);?></td>
		        <td>
		        	<span data-pid="<?php echo $row['id']?>" class="glyphicon glyphicon-pencil edit"></span>
		          	<span id="<?php echo $row['id']?>" class="glyphicon glyphicon-trash delete"></span>
		        </td>
			</tr>
	<?php } ?>
	</tbody>
</table>
<button type="button" class="btn" aria-label="Left Align">
  <span class="glyphicon glyphicon-plus" aria-hidden="true" style="margin:0px;"></span>
</button>

</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="js/trackstar.js"></script>

</body>
</html>
