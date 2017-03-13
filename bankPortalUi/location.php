

<html>
<h1><center><u>ATM LOCATION</u></h1>
<body>

<table border ="1px" width="100%">
<tr>
<th>PINCODE</th>
<th>Address </th>
<th>Place</th>
</tr>
<?php
$pin = mysql_real_escape_string($_POST['pin_no']);
mysql_connect("localhost", "root","") or die(mysql_error()); 
	mysql_select_db("first_db") or die("Cannot connect to database");
$query=mysql_query("SELECT * FROM locator WHERE pin= '$pin'");
while($row=mysql_fetch_array($query))
{ print "<tr>";
	print '<td align="center">' . $row['pin'] ."</td>";
	print '<td align="center">' . $row['address']."</td>";
	print '<td align="center">' . $row['location']."</td>";
	
print "</tr>";
 
}
?>
</table>


</body>
</html>