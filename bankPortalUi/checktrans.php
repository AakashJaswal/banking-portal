<?php
	session_start();
	
   if($_SESSION['user']){  
   }
   else{
      header("location: asdf.php"); 
   }
$name = $_SESSION['user'];
 $day = strftime("%d");
 $month=strftime("%B");
 $year=strftime("%Y");
 
	$accountname = mysql_real_escape_string($_POST['rece']);
	$amount = mysql_real_escape_string($_POST['money']);
	mysql_connect("localhost", "root","") or die(mysql_error());  
	mysql_select_db("first_db") or die("Cannot connect to database"); 
	$query = mysql_query("SELECT * from user"); 
	$exists = mysql_num_rows($query); 
	$table_users = "";
	
	if($exists > 0) 
	{
		while($row = mysql_fetch_assoc($query)) 
		{
			$table_users = $row['username'];  
		
			 
		
		if(($accountname == $table_users))
		{
	    mysql_query ("INSERT INTO display (username,date,withdraw/deposit,amount) VALUES ('$accountname','2016-8-13','deposit','$amount') ") ;
		mysql_query ("INSERT INTO display (username,date,withdraw/deposit,amount) VALUES ('$name','2014-7-12','withdraw','$amount')  ");
		
         Print '<script>alert("Amount has been transferred successfully.");</script>'; 
		 Print '<script>window.location.assign("home.php");</script>'; 

		
		}
		}
	
		
			Print '<script>alert("No recipient found");</script>'; 
			Print '<script>window.location.assign("	logout.php");</script>';  
		
	}
	
?>			