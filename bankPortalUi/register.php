<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
    $bool = true;
	mysql_connect("localhost", "root","") or die(mysql_error()); 
	mysql_select_db("first_db") or die("Cannot connect to database"); 
	$query = mysql_query("Select * from user"); 
	while($row = mysql_fetch_array($query)) 
	{
		$table_users = $row['username']; 
		if($username == $table_users) 
		{
			$bool = false; 
			Print '<script>alert("Username has been taken!");</script>';
			Print '<script>window.location.assign("asdf.php");</script>';
		}
	}
	if($bool) 
	{
		mysql_query("INSERT INTO user (username, password) VALUES ('$username','$password')"); 
		Print '<script>alert("Successfully Registered!");</script>';
		Print '<script>window.location.assign("asdf.php");</script>'; 
	}
}
?>