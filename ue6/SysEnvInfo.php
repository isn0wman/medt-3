<!DOCTYPE html>
<html>
<head>
	<title>SysEnvInfo</title>
</head>
<body>

<style>
td{padding-right: 40px;
	padding-left: 20px;}

table,td{border:solid 1px;}

</style>

<table>
<tr>
<th>Variable</th>
<th>Werte</th>
</tr>
<?php
echo "<tr>";
echo "<td>Skript-Pfad</td>";
echo "<td>".$_SERVER['PHP_SELF']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Server-Name IP</td>";
echo "<td>".$_SERVER['SERVER_ADDR']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Protokoll</td>";
echo "<td>".$_SERVER['SERVER_PROTOCOL']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Client-IP</td>";
echo "<td>".$_SERVER['REMOTE_ADDR']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>URL</td>";
echo "<td>".$_SERVER['REQUEST_URI']."</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Server-Info</td>";
echo "<td>".$_SERVER['SERVER_SIGNATURE']."</td>";
echo "</tr>";
?>
</table>

</body>
</html>