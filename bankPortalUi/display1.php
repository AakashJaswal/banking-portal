<!DOCTYPE html>
<html>
<style>
body{
	background-size: 1600px 900px;
}
</style>
<h1><center><u>Bank Statement</u></h1>
<body background="disp.jpg">
<p>The bank statements for your transactions in the past year have been: </p>
<table border ="1px" width="100%">
<tr>
<th>Username</th>
<th>Date </th>
<th>withdrawl/Deposit </th>
<th>amount</th>
</tr>
<?php
session_start();
   if($_SESSION['user']){  
   }
   else{
      header("location: asdf.php"); 
   }
$name = $_SESSION['user'];
	
 

mysql_connect("localhost", "root","") or die(mysql_error()); 
	mysql_select_db("first_db") or die("Cannot connect to database");
$query=mysql_query("SELECT * FROM display WHERE username = '$name'");
$count=0;
while($row=mysql_fetch_array($query))
{ if(withdraw/deposit=='Withdraw')
	$count-=$row['amount'];
   else
	   $count+=$row['amount'];
    print "<tr>";
	print '<td align="center">' . $row['username'] ."</td>";
	print '<td align="center">' . $row['date']."</td>";
	print '<td align="center">' . $row['withdraw/deposit']."</td>";
	print '<td align="center">' . $row['amount']."</td>";
print "</tr>";
 
  echo "The total amount in the account is: ";
  echo $count;
}
 /* $depo=mysql_query('SELECT SUM(amount) from display WHERE withdraw/deposit = 'Deposit' ' );
echo $depo ;*/
  ?>
</table>

</body>
</html>