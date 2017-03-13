<?php
session_start();
   if($_SESSION['user']){  
   }
   else{
      header("location: asdf.php"); 
   }
$name = $_SESSION['user'];
$count =0; 	

mysql_connect("localhost", "root","") or die(mysql_error()); 
	mysql_select_db("first_db") or die("Cannot connect to database");
$query=mysql_query("SELECT * FROM locker WHERE availability = 'yes'");
while($row=mysql_fetch_array($query))
{  $count++;
}
echo 'No of Free locker are ' . $count ;
if($count===0)
{
	Print '<script>No lockers are Free");</script>'; 
}
else 
{ Print '<script>alert("Please contact nearest Branch to take Possesion");</script>'; 
}		 Print '<script>window.location.assign("home.php");</script>'; 

		  ?>